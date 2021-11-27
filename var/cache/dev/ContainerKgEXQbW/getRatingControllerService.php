<?php

namespace ContainerKgEXQbW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRatingControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\RatingController' shared autowired service.
     *
     * @return \App\Controller\RatingController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/RatingController.php';

        $container->services['App\\Controller\\RatingController'] = $instance = new \App\Controller\RatingController();

        $instance->setContainer(($container->privates['.service_locator.n2gAzJB'] ?? $container->load('get_ServiceLocator_N2gAzJBService'))->withContext('App\\Controller\\RatingController', $container));

        return $instance;
    }
}
