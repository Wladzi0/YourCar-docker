<?php

namespace ContainerUOXE2hd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMakeRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\MakeRepository' shared autowired service.
     *
     * @return \App\Repository\MakeRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Repository/MakeRepository.php';

        return $container->privates['App\\Repository\\MakeRepository'] = new \App\Repository\MakeRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
