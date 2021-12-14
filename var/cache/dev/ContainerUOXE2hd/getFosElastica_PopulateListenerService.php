<?php

namespace ContainerUOXE2hd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosElastica_PopulateListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'fos_elastica.populate_listener' shared service.
     *
     * @return \FOS\ElasticaBundle\EventListener\PopulateListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/EventListener/PopulateListener.php';

        return $container->privates['fos_elastica.populate_listener'] = new \FOS\ElasticaBundle\EventListener\PopulateListener(($container->privates['fos_elastica.resetter'] ?? $container->load('getFosElastica_ResetterService')));
    }
}
