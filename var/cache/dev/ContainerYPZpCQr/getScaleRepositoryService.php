<?php

namespace ContainerYPZpCQr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getScaleRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\ScaleRepository' shared autowired service.
     *
     * @return \App\Repository\ScaleRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Repository/ScaleRepository.php';

        return $container->privates['App\\Repository\\ScaleRepository'] = new \App\Repository\ScaleRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}