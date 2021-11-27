<?php

namespace ContainerKgEXQbW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFavouriteRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\FavouriteRepository' shared autowired service.
     *
     * @return \App\Repository\FavouriteRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Repository/FavouriteRepository.php';

        return $container->privates['App\\Repository\\FavouriteRepository'] = new \App\Repository\FavouriteRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
