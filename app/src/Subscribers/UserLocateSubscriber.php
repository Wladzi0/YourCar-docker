<?php
//
//namespace App\Subscribers;
//
//use Symfony\Component\EventDispatcher\EventSubscriberInterface;
//use Symfony\Component\HttpFoundation\Session\SessionInterface;
//use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
//use Symfony\Component\Security\Http\SecurityEvents;
//
//class UserLocateSubscriber implements EventSubscriberInterface
//{
//    private $session;
//
//    public function __construct(SessionInterface $session)
//    {
//        $this->session = $session;
//    }
//
//    public function onInteractiveLogin(InteractiveLoginEvent $loginEvent)
//    {
//        $user = $loginEvent->getAuthenticationToken()->getUser();
//        if (!is_null($user->getPreferLanguage())) {
//            $this->session->set('_locale', $user->getPreferLanguage());
//
//        }
//
//    }
//
//    public static function getSubscribedEvents()
//    {
//        return [
//            SecurityEvents::INTERACTIVE_LOGIN => [
//                ['onInteractiveLogin', 15]
//            ]
//        ];
//    }
//}

namespace App\Subscribers;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\Security\Http\SecurityEvents;

class UserLocateSubscriber implements EventSubscriberInterface
{
    private $session;

    public function __construct(SessionInterface $session)
    {
        $this->session = $session;
    }

    public function onInteractiveLogin(InteractiveLoginEvent $loginEvent)
    {
        $user = $loginEvent->getAuthenticationToken()->getUser();
        $language=$user->getPreferLanguage();
        if (!is_null($language)) {
            $this->session->set('_locale', $language);

        }

    }

    public static function getSubscribedEvents()
    {
        return [
            SecurityEvents::INTERACTIVE_LOGIN => [
                ['onInteractiveLogin', 15]
            ]
        ];
    }
}