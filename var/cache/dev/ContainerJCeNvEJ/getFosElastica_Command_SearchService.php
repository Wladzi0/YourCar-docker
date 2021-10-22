<?php

namespace ContainerJCeNvEJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosElastica_Command_SearchService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'fos_elastica.command.search' shared service.
     *
     * @return \FOS\ElasticaBundle\Command\SearchCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Command/SearchCommand.php';

        $container->privates['fos_elastica.command.search'] = $instance = new \FOS\ElasticaBundle\Command\SearchCommand(($container->privates['fos_elastica.index_manager'] ?? $container->load('getFosElastica_IndexManagerService')));

        $instance->setName('fos:elastica:search');

        return $instance;
    }
}
