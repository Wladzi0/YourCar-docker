<?php

namespace ContainerYPZpCQr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosElastica_ObjectPersister_CardetailsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'fos_elastica.object_persister.cardetails' shared service.
     *
     * @return \FOS\ElasticaBundle\Persister\ObjectPersister
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Persister/ObjectPersisterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Persister/ObjectPersister.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Transformer/ModelToElasticaTransformerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Transformer/ModelToElasticaAutoTransformer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-access/PropertyAccessorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-access/PropertyAccessor.php';

        $a = new \FOS\ElasticaBundle\Transformer\ModelToElasticaAutoTransformer(['identifier' => 'id', 'index' => 'cardetails'], ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
        $a->setPropertyAccessor(($container->privates['fos_elastica.property_accessor'] ?? ($container->privates['fos_elastica.property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(0, false))));

        return $container->privates['fos_elastica.object_persister.cardetails'] = new \FOS\ElasticaBundle\Persister\ObjectPersister(($container->privates['fos_elastica.index.cardetails'] ?? $container->load('getFosElastica_Index_CardetailsService')), $a, 'App\\Entity\\CarDetails', ['fuelConsumption' => ['type' => 'float'], 'power' => ['type' => 'float'], 'age' => ['type' => 'integer'], 'tuning' => ['type' => 'text']], []);
    }
}