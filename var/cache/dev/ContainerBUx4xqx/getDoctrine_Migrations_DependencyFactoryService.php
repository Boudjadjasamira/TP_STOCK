<?php

namespace ContainerBUx4xqx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Migrations_DependencyFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine.migrations.dependency_factory' shared service.
     *
     * @return \Doctrine\Migrations\DependencyFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\DependencyFactory.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Configuration\\Migration\\ConfigurationLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Configuration\\Migration\\ExistingConfiguration.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Configuration\\Configuration.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Metadata\\Storage\\MetadataStorageConfiguration.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Metadata\\Storage\\TableMetadataStorageConfiguration.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Configuration\\EntityManager\\EntityManagerLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Configuration\\EntityManager\\ExistingEntityManager.php';

        $a = new \Doctrine\Migrations\Configuration\Configuration();
        $a->addMigrationsDirectory('DoctrineMigrations', (\dirname(__DIR__, 4).'/migrations'));
        $a->setAllOrNothing(false);
        $a->setCheckDatabasePlatform(true);
        $a->setMetadataStorageConfiguration(new \Doctrine\Migrations\Metadata\Storage\TableMetadataStorageConfiguration());

        return $container->privates['doctrine.migrations.dependency_factory'] = \Doctrine\Migrations\DependencyFactory::fromEntityManager(new \Doctrine\Migrations\Configuration\Migration\ExistingConfiguration($a), new \Doctrine\Migrations\Configuration\EntityManager\ExistingEntityManager(($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService'))), ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()));
    }
}
