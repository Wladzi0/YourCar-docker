<?php

namespace ContainerYPZpCQr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSearchRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\SearchRepository' shared autowired service.
     *
     * @return \App\Repository\SearchRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Repository/SearchRepository.php';

        return $container->privates['App\\Repository\\SearchRepository'] = new \App\Repository\SearchRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
