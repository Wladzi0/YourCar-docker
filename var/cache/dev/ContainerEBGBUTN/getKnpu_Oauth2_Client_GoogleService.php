<?php

namespace ContainerEBGBUTN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getKnpu_Oauth2_Client_GoogleService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'knpu.oauth2.client.google' shared service.
     *
     * @return \KnpU\OAuth2ClientBundle\Client\Provider\GoogleClient
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/knpuniversity/oauth2-client-bundle/src/Client/OAuth2ClientInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/knpuniversity/oauth2-client-bundle/src/Client/OAuth2Client.php';
        include_once \dirname(__DIR__, 4).'/vendor/knpuniversity/oauth2-client-bundle/src/Client/Provider/GoogleClient.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/oauth2-client/src/Tool/ArrayAccessorTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/oauth2-client/src/Tool/GuardedPropertyTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/oauth2-client/src/Tool/QueryBuilderTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/oauth2-client/src/Provider/AbstractProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/oauth2-client/src/Tool/BearerAuthorizationTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/oauth2-google/src/Provider/Google.php';
        include_once \dirname(__DIR__, 4).'/vendor/knpuniversity/oauth2-client-bundle/src/DependencyInjection/ProviderFactory.php';

        return $container->services['knpu.oauth2.client.google'] = new \KnpU\OAuth2ClientBundle\Client\Provider\GoogleClient((new \KnpU\OAuth2ClientBundle\DependencyInjection\ProviderFactory(($container->services['router'] ?? $container->getRouterService())))->createProvider('League\\OAuth2\\Client\\Provider\\Google', ['clientId' => $container->getEnv('OAUTH_GOOGLE_ID'), 'clientSecret' => $container->getEnv('OAUTH_GOOGLE_SECRET')], 'connect_google_check', [], []), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }
}
