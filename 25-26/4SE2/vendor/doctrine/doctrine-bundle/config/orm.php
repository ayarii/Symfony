<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use Doctrine\Bundle\DoctrineBundle\Command\ImportMappingDoctrineCommand;
use Doctrine\Bundle\DoctrineBundle\ManagerConfigurator;
use Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver;
use Doctrine\Bundle\DoctrineBundle\Orm\ManagerRegistryAwareEntityManagerProvider;
use Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory;
use Doctrine\ORM\Cache\CacheConfiguration;
use Doctrine\ORM\Cache\DefaultCacheFactory;
use Doctrine\ORM\Cache\Logging\CacheLoggerChain;
use Doctrine\ORM\Cache\Logging\StatisticsCacheLogger;
use Doctrine\ORM\Cache\Region\DefaultRegion;
use Doctrine\ORM\Cache\Region\FileLockRegion;
use Doctrine\ORM\Cache\RegionsConfiguration;
use Doctrine\ORM\Configuration;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Mapping\AnsiQuoteStrategy;
use Doctrine\ORM\Mapping\DefaultNamingStrategy;
use Doctrine\ORM\Mapping\DefaultQuoteStrategy;
use Doctrine\ORM\Mapping\DefaultTypedFieldMapper;
use Doctrine\ORM\Mapping\Driver\AnnotationDriver;
use Doctrine\ORM\Mapping\Driver\AttributeDriver;
use Doctrine\ORM\Mapping\Driver\SimplifiedXmlDriver;
use Doctrine\ORM\Mapping\Driver\SimplifiedYamlDriver;
use Doctrine\ORM\Mapping\UnderscoreNamingStrategy;
use Doctrine\ORM\Tools\AttachEntityListenersListener;
use Doctrine\ORM\Tools\Console\Command\ClearCache\CollectionRegionCommand;
use Doctrine\ORM\Tools\Console\Command\ClearCache\EntityRegionCommand;
use Doctrine\ORM\Tools\Console\Command\ClearCache\MetadataCommand;
use Doctrine\ORM\Tools\Console\Command\ClearCache\QueryCommand;
use Doctrine\ORM\Tools\Console\Command\ClearCache\QueryRegionCommand;
use Doctrine\ORM\Tools\Console\Command\ClearCache\ResultCommand;
use Doctrine\ORM\Tools\Console\Command\ConvertMappingCommand;
use Doctrine\ORM\Tools\Console\Command\EnsureProductionSettingsCommand;
use Doctrine\ORM\Tools\Console\Command\InfoCommand;
use Doctrine\ORM\Tools\Console\Command\MappingDescribeCommand;
use Doctrine\ORM\Tools\Console\Command\RunDqlCommand;
use Doctrine\ORM\Tools\Console\Command\SchemaTool\CreateCommand;
use Doctrine\ORM\Tools\Console\Command\SchemaTool\DropCommand;
use Doctrine\ORM\Tools\Console\Command\SchemaTool\UpdateCommand;
use Doctrine\ORM\Tools\Console\Command\ValidateSchemaCommand;
use Doctrine\ORM\Tools\ResolveTargetEntityListener;
use Doctrine\Persistence\Mapping\Driver\MappingDriverChain;
use Doctrine\Persistence\Mapping\Driver\PHPDriver;
use Doctrine\Persistence\Mapping\Driver\StaticPHPDriver;
use Symfony\Bridge\Doctrine\ArgumentResolver\EntityValueResolver;
use Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer;
use Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bridge\Doctrine\SchemaListener\DoctrineDbalCacheAdapterSchemaListener;
use Symfony\Bridge\Doctrine\SchemaListener\LockStoreSchemaListener;
use Symfony\Bridge\Doctrine\SchemaListener\PdoSessionHandlerSchemaListener;
use Symfony\Bridge\Doctrine\SchemaListener\RememberMeTokenProviderDoctrineSchemaListener;
use Symfony\Bridge\Doctrine\Security\User\EntityUserProvider;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator;
use Symfony\Bridge\Doctrine\Validator\DoctrineInitializer;
use Symfony\Component\DependencyInjection\ServiceLocator;
use Symfony\Component\ExpressionLanguage\ExpressionLanguage;

use const CASE_LOWER;

return static function (ContainerConfigurator $container): void {
    $container->parameters()
        ->set('doctrine.orm.configuration.class', Configuration::class)
        ->set('doctrine.orm.entity_manager.class', EntityManager::class)
        ->set('doctrine.orm.manager_configurator.class', ManagerConfigurator::class)

        // cache (keep classes as strings to avoid legacy class resolution issues)
        ->set('doctrine.orm.cache.array.class', 'Doctrine\\Common\\Cache\\ArrayCache')
        ->set('doctrine.orm.cache.apc.class', 'Doctrine\\Common\\Cache\\ApcCache')
        ->set('doctrine.orm.cache.memcache.class', 'Doctrine\\Common\\Cache\\MemcacheCache')
        ->set('doctrine.orm.cache.memcache_host', 'localhost')
        ->set('doctrine.orm.cache.memcache_port', 11211)
        ->set('doctrine.orm.cache.memcache_instance.class', 'Memcache')
        ->set('doctrine.orm.cache.memcached.class', 'Doctrine\\Common\\Cache\\MemcachedCache')
        ->set('doctrine.orm.cache.memcached_host', 'localhost')
        ->set('doctrine.orm.cache.memcached_port', 11211)
        ->set('doctrine.orm.cache.memcached_instance.class', 'Memcached')
        ->set('doctrine.orm.cache.redis.class', 'Doctrine\\Common\\Cache\\RedisCache')
        ->set('doctrine.orm.cache.redis_host', 'localhost')
        ->set('doctrine.orm.cache.redis_port', 6379)
        ->set('doctrine.orm.cache.redis_instance.class', 'Redis')
        ->set('doctrine.orm.cache.xcache.class', 'Doctrine\\Common\\Cache\\XcacheCache')
        ->set('doctrine.orm.cache.wincache.class', 'Doctrine\\Common\\Cache\\WinCacheCache')
        ->set('doctrine.orm.cache.zenddata.class', 'Doctrine\\Common\\Cache\\ZendDataCache')

        // metadata drivers
        ->set('doctrine.orm.metadata.driver_chain.class', MappingDriverChain::class)
        ->set('doctrine.orm.metadata.annotation.class', AnnotationDriver::class)
        ->set('doctrine.orm.metadata.xml.class', SimplifiedXmlDriver::class)
        ->set('doctrine.orm.metadata.yml.class', SimplifiedYamlDriver::class)
        ->set('doctrine.orm.metadata.php.class', PHPDriver::class)
        ->set('doctrine.orm.metadata.staticphp.class', StaticPHPDriver::class)
        ->set('doctrine.orm.metadata.attribute.class', AttributeDriver::class)

        // cache warmer
        ->set('doctrine.orm.proxy_cache_warmer.class', ProxyCacheWarmer::class)

        // form field factory guesser
        ->set('form.type_guesser.doctrine.class', DoctrineOrmTypeGuesser::class)

        // validator
        ->set('doctrine.orm.validator.unique.class', UniqueEntityValidator::class)
        ->set('doctrine.orm.validator_initializer.class', DoctrineInitializer::class)

        // security
        ->set('doctrine.orm.security.user.provider.class', EntityUserProvider::class)

        // listeners
        ->set('doctrine.orm.listeners.resolve_target_entity.class', ResolveTargetEntityListener::class)
        ->set('doctrine.orm.listeners.attach_entity_listeners.class', AttachEntityListenersListener::class)

        // naming strategy
        ->set('doctrine.orm.naming_strategy.default.class', DefaultNamingStrategy::class)
        ->set('doctrine.orm.naming_strategy.underscore.class', UnderscoreNamingStrategy::class)

        // quote strategy
        ->set('doctrine.orm.quote_strategy.default.class', DefaultQuoteStrategy::class)
        ->set('doctrine.orm.quote_strategy.ansi.class', AnsiQuoteStrategy::class)

        // typed field mapper
        ->set('doctrine.orm.typed_field_mapper.default.class', DefaultTypedFieldMapper::class)

        // entity listener resolver
        ->set('doctrine.orm.entity_listener_resolver.class', ContainerEntityListenerResolver::class)

        // second level cache
        ->set('doctrine.orm.second_level_cache.default_cache_factory.class', DefaultCacheFactory::class)
        ->set('doctrine.orm.second_level_cache.default_region.class', DefaultRegion::class)
        ->set('doctrine.orm.second_level_cache.filelock_region.class', FileLockRegion::class)
        ->set('doctrine.orm.second_level_cache.logger_chain.class', CacheLoggerChain::class)
        ->set('doctrine.orm.second_level_cache.logger_statistics.class', StatisticsCacheLogger::class)
        ->set('doctrine.orm.second_level_cache.cache_configuration.class', CacheConfiguration::class)
        ->set('doctrine.orm.second_level_cache.regions_configuration.class', RegionsConfiguration::class);

    $container->services()

        ->alias(EntityManagerInterface::class, 'doctrine.orm.entity_manager')

        ->alias('doctrine.orm.metadata.annotation_reader', 'annotation_reader')

        ->set('doctrine.orm.proxy_cache_warmer', param('doctrine.orm.proxy_cache_warmer.class'))
            ->tag('kernel.cache_warmer')
            ->args([
                service('doctrine'),
            ])

        ->set('form.type_guesser.doctrine', param('form.type_guesser.doctrine.class'))
            ->tag('form.type_guesser')
            ->args([
                service('doctrine'),
            ])

        ->set('form.type.entity', EntityType::class)
            ->tag('form.type', ['alias' => 'entity'])
            ->args([
                service('doctrine'),
            ])

        ->set('doctrine.orm.configuration', param('doctrine.orm.configuration.class'))
            ->abstract()

        ->set('doctrine.orm.entity_manager.abstract', param('doctrine.orm.entity_manager.class'))
            ->abstract()
            ->lazy()

        ->set('doctrine.orm.container_repository_factory', ContainerRepositoryFactory::class)
            ->args([
                inline_service(ServiceLocator::class)->args([
                    [],
                ]),
            ])

        ->set('doctrine.orm.manager_configurator.abstract', param('doctrine.orm.manager_configurator.class'))
            ->abstract()
            ->args([
                [],
                [],
            ])

        ->set('doctrine.orm.validator.unique', param('doctrine.orm.validator.unique.class'))
            ->tag('validator.constraint_validator', ['alias' => 'doctrine.orm.validator.unique'])
            ->args([
                service('doctrine'),
            ])

        ->set('doctrine.orm.validator_initializer', param('doctrine.orm.validator_initializer.class'))
            ->tag('validator.initializer')
            ->args([
                service('doctrine'),
            ])

        ->set('doctrine.orm.security.user.provider', param('doctrine.orm.security.user.provider.class'))
            ->abstract()
            ->args([
                service('doctrine'),
            ])

        ->set('doctrine.orm.listeners.resolve_target_entity', param('doctrine.orm.listeners.resolve_target_entity.class'))

        ->set('doctrine.orm.listeners.doctrine_dbal_cache_adapter_schema_listener', DoctrineDbalCacheAdapterSchemaListener::class)
            ->args([
                [],
            ])
            ->tag('doctrine.event_listener', ['event' => 'postGenerateSchema'])

        ->set('doctrine.orm.listeners.doctrine_token_provider_schema_listener', RememberMeTokenProviderDoctrineSchemaListener::class)
            ->args([
                tagged_iterator('security.remember_me_handler'),
            ])
            ->tag('doctrine.event_listener', ['event' => 'postGenerateSchema'])

        ->set('doctrine.orm.listeners.pdo_session_handler_schema_listener', PdoSessionHandlerSchemaListener::class)
            ->args([
                service('session.handler'),
            ])
            ->tag('doctrine.event_listener', ['event' => 'postGenerateSchema'])

        ->set('doctrine.orm.listeners.lock_store_schema_listener', LockStoreSchemaListener::class)
            ->args([
                tagged_iterator('lock.store'),
            ])
            ->tag('doctrine.event_listener', ['event' => 'postGenerateSchema'])

        ->set('doctrine.orm.naming_strategy.default', param('doctrine.orm.naming_strategy.default.class'))

        ->set('doctrine.orm.naming_strategy.underscore', param('doctrine.orm.naming_strategy.underscore.class'))

        ->set('doctrine.orm.naming_strategy.underscore_number_aware', param('doctrine.orm.naming_strategy.underscore.class'))
            ->args([
                CASE_LOWER,
                true,
            ])

        ->set('doctrine.orm.quote_strategy.default', param('doctrine.orm.quote_strategy.default.class'))

        ->set('doctrine.orm.quote_strategy.ansi', param('doctrine.orm.quote_strategy.ansi.class'))

        ->set('doctrine.orm.typed_field_mapper.default', param('doctrine.orm.typed_field_mapper.default.class'))

        ->set('doctrine.ulid_generator', 'Symfony\\Bridge\\Doctrine\\IdGenerator\\UlidGenerator')
            ->args([
                service('ulid.factory')->ignoreOnInvalid(),
            ])
            ->tag('doctrine.id_generator')

        ->set('doctrine.uuid_generator', 'Symfony\\Bridge\\Doctrine\\IdGenerator\\UuidGenerator')
            ->args([
                service('uuid.factory')->ignoreOnInvalid(),
            ])
            ->tag('doctrine.id_generator')

        ->set('doctrine.orm.command.entity_manager_provider', ManagerRegistryAwareEntityManagerProvider::class)
            ->args([
                service('doctrine'),
            ])

        ->set('doctrine.orm.entity_value_resolver', EntityValueResolver::class)
            ->args([
                service('doctrine'),
                service('doctrine.orm.entity_value_resolver.expression_language')->ignoreOnInvalid(),
            ])
            ->tag('controller.argument_value_resolver', ['priority' => 110, 'name' => EntityValueResolver::class])

        ->set('doctrine.orm.entity_value_resolver.expression_language', ExpressionLanguage::class)

        ->set('doctrine.cache_clear_metadata_command', MetadataCommand::class)
            ->args([
                service('doctrine.orm.command.entity_manager_provider'),
            ])
            ->tag('console.command', ['command' => 'doctrine:cache:clear-metadata'])

        ->set('doctrine.cache_clear_query_cache_command', QueryCommand::class)
            ->args([
                service('doctrine.orm.command.entity_manager_provider'),
            ])
            ->tag('console.command', ['command' => 'doctrine:cache:clear-query'])

        ->set('doctrine.cache_clear_result_command', ResultCommand::class)
            ->args([
                service('doctrine.orm.command.entity_manager_provider'),
            ])
            ->tag('console.command', ['command' => 'doctrine:cache:clear-result'])

        ->set('doctrine.cache_collection_region_command', CollectionRegionCommand::class)
            ->args([
                service('doctrine.orm.command.entity_manager_provider'),
            ])
            ->tag('console.command', ['command' => 'doctrine:cache:clear-collection-region'])

        ->set('doctrine.mapping_convert_command', ConvertMappingCommand::class)
            ->args([
                service('doctrine.orm.command.entity_manager_provider'),
            ])
            ->tag('console.command', ['command' => 'doctrine:mapping:convert'])

        ->set('doctrine.schema_create_command', CreateCommand::class)
            ->args([
                service('doctrine.orm.command.entity_manager_provider'),
            ])
            ->tag('console.command', ['command' => 'doctrine:schema:create'])

        ->set('doctrine.schema_drop_command', DropCommand::class)
            ->args([
                service('doctrine.orm.command.entity_manager_provider'),
            ])
            ->tag('console.command', ['command' => 'doctrine:schema:drop'])

        ->set('doctrine.ensure_production_settings_command', EnsureProductionSettingsCommand::class)
            ->args([
                service('doctrine.orm.command.entity_manager_provider'),
            ])
            ->tag('console.command', ['command' => 'doctrine:ensure-production-settings'])

        ->set('doctrine.clear_entity_region_command', EntityRegionCommand::class)
            ->args([
                service('doctrine.orm.command.entity_manager_provider'),
            ])
            ->tag('console.command', ['command' => 'doctrine:cache:clear-entity-region'])

        ->set('doctrine.mapping_info_command', InfoCommand::class)
            ->args([
                service('doctrine.orm.command.entity_manager_provider'),
            ])
            ->tag('console.command', ['command' => 'doctrine:mapping:info'])

        ->set('doctrine.mapping_describe_command', MappingDescribeCommand::class)
            ->args([
                service('doctrine.orm.command.entity_manager_provider'),
            ])
            ->tag('console.command', ['command' => 'doctrine:mapping:describe'])

        ->set('doctrine.clear_query_region_command', QueryRegionCommand::class)
            ->args([
                service('doctrine.orm.command.entity_manager_provider'),
            ])
            ->tag('console.command', ['command' => 'doctrine:cache:clear-query-region'])

        ->set('doctrine.query_dql_command', RunDqlCommand::class)
            ->args([
                service('doctrine.orm.command.entity_manager_provider'),
            ])
            ->tag('console.command', ['command' => 'doctrine:query:dql'])

        ->set('doctrine.schema_update_command', UpdateCommand::class)
            ->args([
                service('doctrine.orm.command.entity_manager_provider'),
            ])
            ->tag('console.command', ['command' => 'doctrine:schema:update'])

        ->set('doctrine.schema_validate_command', ValidateSchemaCommand::class)
            ->args([
                service('doctrine.orm.command.entity_manager_provider'),
            ])
            ->tag('console.command', ['command' => 'doctrine:schema:validate'])

        ->set('doctrine.mapping_import_command', ImportMappingDoctrineCommand::class)
            ->args([
                service('doctrine'),
                param('kernel.bundles'),
            ])
            ->tag('console.command', ['command' => 'doctrine:mapping:import']);
};
