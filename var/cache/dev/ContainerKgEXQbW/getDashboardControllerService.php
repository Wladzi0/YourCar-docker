<?php

namespace ContainerKgEXQbW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDashboardControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\DashboardController' shared autowired service.
     *
     * @return \App\Controller\Admin\DashboardController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Contracts/Controller/DashboardControllerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Controller/AbstractDashboardController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Admin/DashboardController.php';

        $container->services['App\\Controller\\Admin\\DashboardController'] = $instance = new \App\Controller\Admin\DashboardController();

        $instance->setContainer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator' => [false, 'EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator', 'getAdminUrlGeneratorService', false],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Router\\CrudUrlGenerator' => ['privates', 'EasyCorp\\Bundle\\EasyAdminBundle\\Router\\CrudUrlGenerator', 'getCrudUrlGeneratorService', true],
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'form.factory' => ['services', '.container.private.form.factory', 'get_Container_Private_Form_FactoryService', true],
            'http_kernel' => ['services', 'http_kernel', 'getHttpKernelService', false],
            'parameter_bag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'router' => ['services', 'router', 'getRouterService', false],
            'security.authorization_checker' => ['services', 'security.authorization_checker', 'getSecurity_AuthorizationCheckerService', false],
            'security.csrf.token_manager' => ['services', '.container.private.security.csrf.token_manager', 'get_Container_Private_Security_Csrf_TokenManagerService', false],
            'security.token_storage' => ['services', 'security.token_storage', 'getSecurity_TokenStorageService', false],
            'serializer' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', true],
            'session' => ['services', 'session', 'getSessionService', false],
            'twig' => ['services', '.container.private.twig', 'get_Container_Private_TwigService', false],
        ], [
            'EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Router\\CrudUrlGenerator' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Router\\CrudUrlGenerator',
            'doctrine' => '?',
            'form.factory' => '?',
            'http_kernel' => '?',
            'parameter_bag' => '?',
            'request_stack' => '?',
            'router' => '?',
            'security.authorization_checker' => '?',
            'security.csrf.token_manager' => '?',
            'security.token_storage' => '?',
            'serializer' => '?',
            'session' => '?',
            'twig' => '?',
        ]))->withContext('App\\Controller\\Admin\\DashboardController', $container));

        return $instance;
    }
}
