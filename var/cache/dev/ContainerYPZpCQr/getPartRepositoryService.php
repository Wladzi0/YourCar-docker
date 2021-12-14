<?php

namespace ContainerYPZpCQr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPartRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\PartRepository' shared autowired service.
     *
     * @return \App\Repository\PartRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Repository/PartRepository.php';

        return $container->privates['App\\Repository\\PartRepository'] = new \App\Repository\PartRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
