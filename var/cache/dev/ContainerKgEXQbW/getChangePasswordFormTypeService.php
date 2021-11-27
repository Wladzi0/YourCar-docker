<?php

namespace ContainerKgEXQbW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getChangePasswordFormTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\ChangePasswordFormType' shared autowired service.
     *
     * @return \App\Form\ChangePasswordFormType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/ChangePasswordFormType.php';

        return $container->privates['App\\Form\\ChangePasswordFormType'] = new \App\Form\ChangePasswordFormType(($container->services['translator'] ?? $container->getTranslatorService()));
    }
}
