<?php

namespace ContainerUOXE2hd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Bs2EeyiService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.bs2Eeyi' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.bs2Eeyi'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'makeRepository' => ['privates', 'App\\Repository\\MakeRepository', 'getMakeRepositoryService', true],
        ], [
            'makeRepository' => 'App\\Repository\\MakeRepository',
        ]);
    }
}
