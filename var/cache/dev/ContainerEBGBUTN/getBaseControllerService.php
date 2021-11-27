<?php

namespace ContainerEBGBUTN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBaseControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\BaseController' shared autowired service.
     *
     * @return \App\Controller\BaseController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/BaseController.php';

        $container->services['App\\Controller\\BaseController'] = $instance = new \App\Controller\BaseController(($container->services['translator'] ?? $container->getTranslatorService()));

        $instance->setContainer(($container->privates['.service_locator.n2gAzJB'] ?? $container->load('get_ServiceLocator_N2gAzJBService'))->withContext('App\\Controller\\BaseController', $container));

        return $instance;
    }
}
