<?php

namespace ContainerUOXE2hd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LqG1bx6Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.LqG1bx6' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.LqG1bx6'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'brandRepo' => ['privates', 'App\\Repository\\MakeRepository', 'getMakeRepositoryService', true],
        ], [
            'brandRepo' => 'App\\Repository\\MakeRepository',
        ]);
    }
}
