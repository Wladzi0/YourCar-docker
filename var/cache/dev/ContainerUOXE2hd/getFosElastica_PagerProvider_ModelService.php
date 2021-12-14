<?php

namespace ContainerUOXE2hd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosElastica_PagerProvider_ModelService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'fos_elastica.pager_provider.model' shared service.
     *
     * @return \FOS\ElasticaBundle\Doctrine\ORMPagerProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Provider/PagerProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Doctrine/ORMPagerProvider.php';

        return $container->privates['fos_elastica.pager_provider.model'] = new \FOS\ElasticaBundle\Doctrine\ORMPagerProvider(($container->services['doctrine'] ?? $container->getDoctrineService()), ($container->privates['fos_elastica.doctrine.register_listeners'] ?? $container->load('getFosElastica_Doctrine_RegisterListenersService')), 'App\\Entity\\Model', ['batch_size' => 100, 'clear_object_manager' => true, 'debug_logging' => true, 'query_builder_method' => 'createQueryBuilder']);
    }
}
