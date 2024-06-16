<?php

namespace App\Controller;

use KnpU\OAuth2ClientBundle\Client\ClientRegistry;
use League\OAuth2\Client\Provider\Exception\IdentityProviderException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GoogleController extends AbstractController
{
    /**
     * Link to this controller to start the "connect" process
     * @param ClientRegistry $clientRegistry
     *
     * @Route("/connect/google", name="connect_google_start")
     */
    public function connectAction(ClientRegistry $clientRegistry): Response
    {
        return $clientRegistry
            ->getClient('google')
            ->redirect([
                'profile', 'email' // the scopes you want to access
            ]);
    }

    /**
     * After going to Google, you're redirected back here
     * because this is the "redirect_route" you configured
     * in config/packages/knpu_oauth2_client.yaml
     *
     * @param Request $request
     * @param ClientRegistry $clientRegistry
     * @Route("/connect/google/check", name="connect_google_check")
     */
    public function connectCheckAction(Request $request, ClientRegistry $clientRegistry): Response
    {
        return $this->redirectToRoute('main');
//        $client = $clientRegistry->getClient('google');
//
//        try {
//            // the exact class depends on which provider you're using
//            /** @var \League\OAuth2\Client\Provider\GoogleUser $user */
//            $user = $client->fetchUser();
//
//            // do something with all this new power!
//            // e.g. $name = $user->getFirstName();
//            var_dump($user);
//            die;
//            // ...
//        } catch (IdentityProviderException $e) {
//            // something went wrong!
//            // probably you should return the reason to the user
//            var_dump($e->getMessage());
//            die;
//        }

    }
}
