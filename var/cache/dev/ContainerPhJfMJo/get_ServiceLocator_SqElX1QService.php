<?php

namespace ContainerPhJfMJo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SqElX1QService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.SqElX1Q' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.SqElX1Q'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'filterRepo' => ['privates', 'App\\Repository\\FilterRepository', 'getFilterRepositoryService', true],
            'scaleRepository' => ['privates', 'App\\Repository\\ScaleRepository', 'getScaleRepositoryService', true],
        ], [
            'filterRepo' => 'App\\Repository\\FilterRepository',
            'scaleRepository' => 'App\\Repository\\ScaleRepository',
        ]);
    }
}
