<?php

namespace App\Security;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use KnpU\OAuth2ClientBundle\Client\OAuth2ClientInterface;
use KnpU\OAuth2ClientBundle\Security\Authenticator\SocialAuthenticator;
use KnpU\OAuth2ClientBundle\Client\ClientRegistry;
use League\OAuth2\Client\Provider\GoogleUser;
use League\OAuth2\Client\Token\AccessToken;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\User\UserProviderInterface;

class GoogleAuthenticator extends SocialAuthenticator
{
    /**
     * @var ClientRegistry
     */
    private $clientRegistry;

    /**
     * @var EntityManagerInterface
     */
    private $em;

    private $passwordEncoder;

    private $urlGenerator;

    /**
     * GoogleAuthenticator constructor.
     * @param ClientRegistry $clientRegistry
     * @param EntityManagerInterface $em
     */
    public function __construct(
        UrlGeneratorInterface        $urlGenerator,
        ClientRegistry               $clientRegistry,
        EntityManagerInterface       $em,
        UserPasswordEncoderInterface $passwordEncoder
    )
    {
        $this->urlGenerator = $urlGenerator;
        $this->passwordEncoder = $passwordEncoder;
        $this->clientRegistry = $clientRegistry;
        $this->em = $em;
    }

    /**
     * @param Request $request
     * @return bool
     */
    public function supports(Request $request)
    {
        // continue ONLY if the current ROUTE matches the check ROUTE
        return $request->attributes->get('_route') === 'connect_google_check';
    }


    /**
     * @param Request $request
     * @return AccessToken
     */
    public function getCredentials(Request $request): AccessToken
    {
        // this method is only called if supports() returns true

        return $this->fetchAccessToken($this->getGoogleClient());
    }

    /**
     * @param mixed $credentials
     * @return UserInterface
     */
    public function getUser(
        $credentials,
        UserProviderInterface $userProvider
    ): UserInterface
    {
        /** @var GoogleUser $googleUser */
        $googleUser = $this->getGoogleClient()
            ->fetchUserFromToken($credentials);

        $email = $googleUser->getEmail();

        // 1) have they logged in with Google before? Easy!
        $existingUser = $this->em->getRepository(User::class)
            ->findOneBy(['googleId' => $googleUser->getId()]);

        if ($existingUser) {
            $user = $existingUser;
        } else {
            // 2) do we have a matching user by email?
            $user = $this->em->getRepository(User::class)
                ->findOneBy(['email' => $email]);

            if (!$user) {

                $user = new User();

                $user->setEmail($email);
                $user->setFirstName($googleUser->getFirstName());
                $user->setLastName($googleUser->getLastName());
                $user->setIsVerified(true);
                $user->setPreferLanguage('en');
                $user->setGoogleId($googleUser->getId());
                $password = $this->generatePassword();
                $user->setPassword($this->passwordEncoder->encodePassword(
                    $user, $password
                ));
                $this->em->persist($user);
                $this->em->flush();
            }
        }


        return $user;
    }

    /**
     * @return OAuth2ClientInterface
     */
    private function getGoogleClient()
    {
        return $this->clientRegistry->getClient('google');
    }

    public function onAuthenticationSuccess(
        Request $request, TokenInterface $token,
                $providerKey
    )
    {
        // on success, let the request continue
//        return null;
        return new RedirectResponse($this->urlGenerator->generate('main'));
    }

    /**
     * @param Request $request
     * @param AuthenticationException $exception
     * @return null|Response
     */
    public function onAuthenticationFailure(
        Request                 $request,
        AuthenticationException $exception
    )
    {
        $message = strtr($exception->getMessageKey(), $exception->getMessageData());

        return new Response($message, Response::HTTP_FORBIDDEN);
    }

    /**
     * Called when authentication is needed, but it's not sent.
     * This redirects to the 'login'.
     *
     * @param Request $request
     * @param AuthenticationException|null $authException
     *
     * @return RedirectResponse
     */
    public function start(
        Request                 $request,
        AuthenticationException $authException = null
    )
    {
        return new RedirectResponse(
            '/connect/', // might be the site, where users choose their oauth provider
            Response::HTTP_TEMPORARY_REDIRECT
        );
    }

    public function generatePassword()
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randPassword = '';
        for($i=0; $i<=6; $i++){
            $randPassword.=$characters[rand(0,$charactersLength-1)];
        }
        return $randPassword;
    }
}