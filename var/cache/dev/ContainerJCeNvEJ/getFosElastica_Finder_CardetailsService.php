<?php

namespace ContainerJCeNvEJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosElastica_Finder_CardetailsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'fos_elastica.finder.cardetails' shared service.
     *
     * @return \FOS\ElasticaBundle\Finder\TransformedFinder
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Finder/FinderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Finder/PaginatedFinderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Finder/TransformedFinder.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Transformer/ElasticaToModelTransformerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Transformer/AbstractElasticaToModelTransformer.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Doctrine/AbstractElasticaToModelTransformer.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Doctrine/ORM/ElasticaToModelTransformer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-access/PropertyAccessorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-access/PropertyAccessor.php';

        $a = new \FOS\ElasticaBundle\Doctrine\ORM\ElasticaToModelTransformer(($container->services['doctrine'] ?? $container->getDoctrineService()), 'App\\Entity\\CarDetails', ['hints' => [], 'hydrate' => true, 'ignore_missing' => false, 'query_builder_method' => 'createQueryBuilder', 'identifier' => 'id']);
        $a->setPropertyAccessor(($container->privates['fos_elastica.property_accessor'] ?? ($container->privates['fos_elastica.property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(0, false))));

        return $container->privates['fos_elastica.finder.cardetails'] = new \FOS\ElasticaBundle\Finder\TransformedFinder(($container->privates['fos_elastica.index.cardetails'] ?? $container->load('getFosElastica_Index_CardetailsService')), $a);
    }
}