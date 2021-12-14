<?php

namespace ContainerYPZpCQr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YSLo1CPService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ySLo1CP' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ySLo1CP'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'favouriteRepository' => ['privates', 'App\\Repository\\FavouriteRepository', 'getFavouriteRepositoryService', true],
        ], [
            'favouriteRepository' => 'App\\Repository\\FavouriteRepository',
        ]);
    }
}
