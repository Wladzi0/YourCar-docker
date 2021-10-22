<?php

namespace ContainerPhJfMJo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getModelCrudControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\ModelCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\ModelCrudController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Contracts/Controller/CrudControllerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Controller/AbstractCrudController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Admin/ModelCrudController.php';

        $container->services['App\\Controller\\Admin\\ModelCrudController'] = $instance = new \App\Controller\Admin\ModelCrudController(($container->services['translator'] ?? $container->getTranslatorService()));

        $instance->setContainer(($container->privates['.service_locator.Z2dd43Q'] ?? $container->load('get_ServiceLocator_Z2dd43QService'))->withContext('App\\Controller\\Admin\\ModelCrudController', $container));

        return $instance;
    }
}
