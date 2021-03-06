<?php

namespace ContainerUOXE2hd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_7pCCtwTService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.7pCCtwT' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.7pCCtwT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'car' => ['privates', '.errored..service_locator.7pCCtwT.App\\Entity\\CarDetails', NULL, 'Cannot autowire service ".service_locator.7pCCtwT": it references class "App\\Entity\\CarDetails" but no such service exists.'],
            'favouriteRepository' => ['privates', 'App\\Repository\\FavouriteRepository', 'getFavouriteRepositoryService', true],
        ], [
            'car' => 'App\\Entity\\CarDetails',
            'favouriteRepository' => 'App\\Repository\\FavouriteRepository',
        ]);
    }
}
