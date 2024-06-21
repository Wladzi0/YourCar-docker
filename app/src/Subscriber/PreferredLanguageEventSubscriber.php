<?php

namespace App\Subscriber;

use App\Entity\User;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\Security\Http\SecurityEvents;

class PreferredLanguageEventSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private readonly RequestStack $requestStack
    ) {
    }

    public function onInteractiveLogin(InteractiveLoginEvent $loginEvent): void
    {
        $user = $loginEvent->getAuthenticationToken()->getUser();

        if ($user instanceof User) {
            // Assuming UserInterface or extended interface has getPreferredLanguage method
            $language = $user->getPreferLanguage();

            if ($language !== null && $language !== '' && $language !== '0') {
                $this->requestStack->getSession()->set('_locale', $language);
            }
        }
    }

    public static function getSubscribedEvents(): array
    {
        return [
            SecurityEvents::INTERACTIVE_LOGIN => [
                ['onInteractiveLogin', 15],
            ],
        ];
    }
}
