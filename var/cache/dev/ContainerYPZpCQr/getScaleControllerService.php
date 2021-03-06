<?php

namespace ContainerYPZpCQr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getScaleControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ScaleController' shared autowired service.
     *
     * @return \App\Controller\ScaleController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ScaleController.php';
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

        $container->services['App\\Controller\\ScaleController'] = $instance = new \App\Controller\ScaleController(($container->services['session'] ?? $container->getSessionService()), new \FOS\ElasticaBundle\Finder\TransformedFinder(($container->privates['fos_elastica.index.cardetails'] ?? $container->load('getFosElastica_Index_CardetailsService')), $a));

        $instance->setContainer(($container->privates['.service_locator.n2gAzJB'] ?? $container->load('get_ServiceLocator_N2gAzJBService'))->withContext('App\\Controller\\ScaleController', $container));

        return $instance;
    }
}
