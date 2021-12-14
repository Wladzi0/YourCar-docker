<?php

namespace ContainerYPZpCQr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_B13LZRJService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.B13LZRJ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.B13LZRJ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'clientRegistry' => ['services', 'knpu.oauth2.registry', 'getKnpu_Oauth2_RegistryService', true],
        ], [
            'clientRegistry' => '?',
        ]);
    }
}
