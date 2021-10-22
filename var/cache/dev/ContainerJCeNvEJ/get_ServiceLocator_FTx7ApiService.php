<?php

namespace ContainerJCeNvEJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FTx7ApiService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.FTx7Api' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.FTx7Api'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'engineRepository' => ['privates', 'App\\Repository\\EngineRepository', 'getEngineRepositoryService', true],
            'faultRepository' => ['privates', 'App\\Repository\\FaultRepository', 'getFaultRepositoryService', true],
        ], [
            'engineRepository' => 'App\\Repository\\EngineRepository',
            'faultRepository' => 'App\\Repository\\FaultRepository',
        ]);
    }
}
