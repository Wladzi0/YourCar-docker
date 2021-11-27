<?php

namespace ContainerEBGBUTN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosElastica_ResetterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'fos_elastica.resetter' shared service.
     *
     * @return \FOS\ElasticaBundle\Index\Resetter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Index/ResetterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Index/Resetter.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Index/AliasProcessor.php';

        return $container->privates['fos_elastica.resetter'] = new \FOS\ElasticaBundle\Index\Resetter(($container->privates['fos_elastica.config_manager'] ?? $container->load('getFosElastica_ConfigManagerService')), ($container->privates['fos_elastica.index_manager'] ?? $container->load('getFosElastica_IndexManagerService')), ($container->privates['fos_elastica.alias_processor'] ?? ($container->privates['fos_elastica.alias_processor'] = new \FOS\ElasticaBundle\Index\AliasProcessor())), ($container->privates['fos_elastica.mapping_builder'] ?? $container->load('getFosElastica_MappingBuilderService')), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
    }
}
