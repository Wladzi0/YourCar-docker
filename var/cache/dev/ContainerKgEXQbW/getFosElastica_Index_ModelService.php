<?php

namespace ContainerKgEXQbW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosElastica_Index_ModelService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'fos_elastica.index.model' shared service.
     *
     * @return \FOS\ElasticaBundle\Elastica\Index
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/ruflin/elastica/src/SearchableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/ruflin/elastica/src/Index.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Elastica/Index.php';

        return $container->privates['fos_elastica.index.model'] = ($container->privates['fos_elastica.client.default'] ?? $container->load('getFosElastica_Client_DefaultService'))->getIndex('model');
    }
}
