<?php

namespace ContainerJCeNvEJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosElastica_Command_CreateService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'fos_elastica.command.create' shared service.
     *
     * @return \FOS\ElasticaBundle\Command\CreateCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Command/CreateCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Index/AliasProcessor.php';

        $container->privates['fos_elastica.command.create'] = $instance = new \FOS\ElasticaBundle\Command\CreateCommand(($container->privates['fos_elastica.index_manager'] ?? $container->load('getFosElastica_IndexManagerService')), ($container->privates['fos_elastica.mapping_builder'] ?? $container->load('getFosElastica_MappingBuilderService')), ($container->privates['fos_elastica.config_manager'] ?? $container->load('getFosElastica_ConfigManagerService')), ($container->privates['fos_elastica.alias_processor'] ?? ($container->privates['fos_elastica.alias_processor'] = new \FOS\ElasticaBundle\Index\AliasProcessor())));

        $instance->setName('fos:elastica:create');

        return $instance;
    }
}