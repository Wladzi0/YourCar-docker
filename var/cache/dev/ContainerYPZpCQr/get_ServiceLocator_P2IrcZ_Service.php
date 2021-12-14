<?php

namespace ContainerYPZpCQr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_P2IrcZ_Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.P2IrcZ.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.P2IrcZ.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'faultRepository' => ['privates', 'App\\Repository\\FaultRepository', 'getFaultRepositoryService', true],
            'makeRepository' => ['privates', 'App\\Repository\\MakeRepository', 'getMakeRepositoryService', true],
        ], [
            'faultRepository' => 'App\\Repository\\FaultRepository',
            'makeRepository' => 'App\\Repository\\MakeRepository',
        ]);
    }
}
