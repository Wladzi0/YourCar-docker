<?php

namespace App\Subscribers;

use App\Repository\UserRepository;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class LocalSubscriber implements EventSubscriberInterface
{
    private $defaultLocale;

    private $userRepository;

    private $session;

    public function __construct(
        TokenStorageInterface $tokenStorage,
        SessionInterface $session,
        UserRepository $userRepository,
        string $defaultLocale = "en"
    )
    {

        $this->session = $session;
        $this->tokenStorage = $tokenStorage;
        $this->defaultLocale = $defaultLocale;
        $this->userRepository = $userRepository;
    }

    public function onKernelRequest(RequestEvent $event)
    {
        $request = $event->getRequest();
        if (!$request->hasPreviousSession()) {
            return;
        }
//        if ($userId = $this->tokenStorage->getToken()->getUser()) {
//            $user = $this->userRepository->find($userId);
//            try {
//                $request->setLocale($user->getPreferLanguage());
//            }
//            catch (\Throwable $t){
//                $this->session->clear();
//            }
//
//        } else {
            if ($locale = $request->attributes->get('_locale')) {
                $request->getSession()->set('_locale', $locale);
            } else {
                $request->setLocale($request->getSession()->get('_locale', $this->defaultLocale));
//            }
        }
    }

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::REQUEST => [['onKernelRequest', 17]]
        ];
    }
}