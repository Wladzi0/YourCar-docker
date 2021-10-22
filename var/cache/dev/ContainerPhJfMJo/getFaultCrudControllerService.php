<?php

namespace ContainerPhJfMJo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFaultCrudControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\FaultCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\FaultCrudController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Contracts/Controller/CrudControllerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Controller/AbstractCrudController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Admin/FaultCrudController.php';

        $container->services['App\\Controller\\Admin\\FaultCrudController'] = $instance = new \App\Controller\Admin\FaultCrudController();

        $instance->setContainer(($container->privates['.service_locator.Z2dd43Q'] ?? $container->load('get_ServiceLocator_Z2dd43QService'))->withContext('App\\Controller\\Admin\\FaultCrudController', $container));

        return $instance;
    }
}
