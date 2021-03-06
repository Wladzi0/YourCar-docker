<?php

namespace ContainerUOXE2hd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosElastica_InPlacePagerPersisterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'fos_elastica.in_place_pager_persister' shared service.
     *
     * @return \FOS\ElasticaBundle\Persister\InPlacePagerPersister
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Persister/PagerPersisterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Persister/InPlacePagerPersister.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Persister/PersisterRegistry.php';

        return $container->privates['fos_elastica.in_place_pager_persister'] = new \FOS\ElasticaBundle\Persister\InPlacePagerPersister(new \FOS\ElasticaBundle\Persister\PersisterRegistry(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cardetails' => ['privates', 'fos_elastica.object_persister.cardetails', 'getFosElastica_ObjectPersister_CardetailsService', true],
            'cars' => ['privates', 'fos_elastica.object_persister.cars', 'getFosElastica_ObjectPersister_CarsService', true],
            'model' => ['privates', 'fos_elastica.object_persister.model', 'getFosElastica_ObjectPersister_ModelService', true],
        ], [
            'cardetails' => 'FOS\\ElasticaBundle\\Persister\\ObjectPersister',
            'cars' => 'FOS\\ElasticaBundle\\Persister\\ObjectPersister',
            'model' => 'FOS\\ElasticaBundle\\Persister\\ObjectPersister',
        ])), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
    }
}
