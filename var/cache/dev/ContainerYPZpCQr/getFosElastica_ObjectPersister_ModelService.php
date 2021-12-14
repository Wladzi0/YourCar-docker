<?php

namespace ContainerYPZpCQr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosElastica_ObjectPersister_ModelService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'fos_elastica.object_persister.model' shared service.
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

        $a = new \FOS\ElasticaBundle\Transformer\ModelToElasticaAutoTransformer(['identifier' => 'id', 'index' => 'model'], ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
        $a->setPropertyAccessor(($container->privates['fos_elastica.property_accessor'] ?? ($container->privates['fos_elastica.property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(0, false))));

        return $container->privates['fos_elastica.object_persister.model'] = new \FOS\ElasticaBundle\Persister\ObjectPersister(($container->privates['fos_elastica.index.model'] ?? $container->load('getFosElastica_Index_ModelService')), $a, 'App\\Entity\\Model', ['name' => ['type' => 'text'], 'make' => []], []);
    }
}