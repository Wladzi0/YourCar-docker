<?php

namespace ContainerEBGBUTN;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderbeb1c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer31028 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesed21f = [
        
    ];

    public function getConnection()
    {
        $this->initializer31028 && ($this->initializer31028->__invoke($valueHolderbeb1c, $this, 'getConnection', array(), $this->initializer31028) || 1) && $this->valueHolderbeb1c = $valueHolderbeb1c;

        return $this->valueHolderbeb1c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer31028 && ($this->initializer31028->__invoke($valueHolderbeb1c, $this, 'getMetadataFactory', array(), $this->initializer31028) || 1) && $this->valueHolderbeb1c = $valueHolderbeb1c;

        return $this->valueHolderbeb1c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer31028 && ($this->initializer31028->__invoke($valueHolderbeb1c, $this, 'getExpressionBuilder', array(), $this->initializer31028) || 1) && $this->valueHolderbeb1c = $valueHolderbeb1c;

        return $this->valueHolderbeb1c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer31028 && ($this->initializer31028->__invoke($valueHolderbeb1c, $this, 'beginTransaction', array(), $this->initializer31028) || 1) && $this->valueHolderbeb1c = $valueHolderbeb1c;

        return $this->valueHolderbeb1c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer31028 && ($this->initializer31028->__invoke($valueHolderbeb1c, $this, 'getCache', array(), $this->initializer31028) || 1) && $this->valueHolderbeb1c = $valueHolderbeb1c;

        return $this->valueHolderbeb1c->getCache();
    }

    public function transactional($func)
    {
        $this->initializer31028 && ($this->initializer31028->__invoke($valueHolderbeb1c, $this, 'transactional', array('func' => $func), $this->initializer31028) || 1) && $this->valueHolderbeb1c = $valueHolderbeb1c;

        return $this->valueHolderbeb1c->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer31028 && ($this->initializer31028->__invoke($valueHolderbeb1c, $this, 'wrapInTransaction', array('func' => $func), $this->initializer31028) || 1) && $this->valueHolderbeb1c = $valueHolderbeb1c;

        return $this->valueHolderbeb1c->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer31028 && ($this->initializer31028->__invoke($valueHolderbeb1c, $this, 'commit', array(), $this->initializer31028) || 1) && $this->valueHolderbeb1c = $valueHolderbeb1c;

        return $this->valueHolderbeb1c->commit();
    }

    public function rollback()
    {
        $this->initializer31028 && ($this->initializer31028->__invoke($valueHolderbeb1c, $this, 'rollback', array(), $this->initializer31028) || 1) && $this->valueHolderbeb1c = $valueHolderbeb1c;

        return $this->valueHolderbeb1c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer31028 && ($this->initializer31028->__invoke($valueHolderbeb1c, $this, 'getClassMetadata', array('className' => $className), $this->initializer31028) || 1) && $this->valueHolderbeb1c = $valueHolderbeb1c;

        return $this->valueHolderbeb1c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer31028 && ($this->initializer31028->__invoke($valueHolderbeb1c, $this, 'createQuery', array('dql' => $dql), $this->initializer31028) || 1) && $this->valueHolderbeb1c = $valueHolderbeb1c;

        return $this->valueHolderbeb1c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer31028 && ($this->initializer31028->__invoke($valueHolderbeb1c, $this, 'createNamedQuery', array('name' => $name), $this->initializer31028) || 1) && $this->valueHolderbeb1c = $valueHolderbeb1c;

        return $this->valueHolderbeb1c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer31028 && ($this->initializer31028->__invoke($valueHolderbeb1c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer31028) || 1) && $this->valueHolderbeb1c = $valueHolderbeb1c;

        return $this->valueHolderbeb1c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer31028 && ($this->initializer31028->__invoke($valueHolderbeb1c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer31028) || 1) && $this->valueHolderbeb1c = $valueHolderbeb1c;

        return $this->valueHolderbeb1c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer31028 && ($this->initializer31028->__invoke($valueHolderbeb1c, $this, 'createQueryBuilder', array(), $this->initializer31028) || 1) && $this->valueHolderbeb1c = $valueHolderbeb1c;

        return $this->valueHolderbeb1c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer31028 && ($this->initializer31028->__invoke($valueHolderbeb1c, $this, 'flush', array('entity' => $entity), $this->initializer31028) || 1) && $this->valueHolderbeb1c = $valueHolderbeb1c;

        return $this->valueHolderbeb1c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer31028 && ($this->initializer31028->__invoke($valueHolderbeb1c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer31028) || 1) && $this->valueHolderbeb1c = $valueHolderbeb1c;

        return $this->valueHolderbeb1c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer31028 && ($this->initializer31028->__invoke($valueHolderbeb1c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer31028) || 1) && $this->valueHolderbeb1c = $valueHolderbeb1c;

        return $this->valueHolderbeb1c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer31028 && ($this->initializer31028->__invoke($valueHolderbeb1c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer31028) || 1) && $this->valueHolderbeb1c = $valueHolderbeb1c;

        return $this->valueHolderbeb1c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer31028 && ($this->initializer31028->__invoke($valueHolderbeb1c, $this, 'clear', array('entityName' => $entityName), $this->initializer31028) || 1) && $this->valueHolderbeb1c = $valueHolderbeb1c;

        return $this->valueHolderbeb1c->clear($entityName);
    }

    public function close()
    {
        $this->initializer31028 && ($this->initializer31028->__invoke($valueHolderbeb1c, $this, 'close', array(), $this->initializer31028) || 1) && $this->valueHolderbeb1c = $valueHolderbeb1c;

        return $this->valueHolderbeb1c->close();
    }

    public function persist($entity)
    {
        $this->initializer31028 && ($this->initializer31028->__invoke($valueHolderbeb1c, $this, 'persist', array('entity' => $entity), $this->initializer31028) || 1) && $this->valueHolderbeb1c = $valueHolderbeb1c;

        return $this->valueHolderbeb1c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer31028 && ($this->initializer31028->__invoke($valueHolderbeb1c, $this, 'remove', array('entity' => $entity), $this->initializer31028) || 1) && $this->valueHolderbeb1c = $valueHolderbeb1c;

        return $this->valueHolderbeb1c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer31028 && ($this->initializer31028->__invoke($valueHolderbeb1c, $this, 'refresh', array('entity' => $entity), $this->initializer31028) || 1) && $this->valueHolderbeb1c = $valueHolderbeb1c;

        return $this->valueHolderbeb1c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer31028 && ($this->initializer31028->__invoke($valueHolderbeb1c, $this, 'detach', array('entity' => $entity), $this->initializer31028) || 1) && $this->valueHolderbeb1c = $valueHolderbeb1c;

        return $this->valueHolderbeb1c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer31028 && ($this->initializer31028->__invoke($valueHolderbeb1c, $this, 'merge', array('entity' => $entity), $this->initializer31028) || 1) && $this->valueHolderbeb1c = $valueHolderbeb1c;

        return $this->valueHolderbeb1c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer31028 && ($this->initializer31028->__invoke($valueHolderbeb1c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer31028) || 1) && $this->valueHolderbeb1c = $valueHolderbeb1c;

        return $this->valueHolderbeb1c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer31028 && ($this->initializer31028->__invoke($valueHolderbeb1c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer31028) || 1) && $this->valueHolderbeb1c = $valueHolderbeb1c;

        return $this->valueHolderbeb1c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer31028 && ($this->initializer31028->__invoke($valueHolderbeb1c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer31028) || 1) && $this->valueHolderbeb1c = $valueHolderbeb1c;

        return $this->valueHolderbeb1c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer31028 && ($this->initializer31028->__invoke($valueHolderbeb1c, $this, 'contains', array('entity' => $entity), $this->initializer31028) || 1) && $this->valueHolderbeb1c = $valueHolderbeb1c;

        return $this->valueHolderbeb1c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer31028 && ($this->initializer31028->__invoke($valueHolderbeb1c, $this, 'getEventManager', array(), $this->initializer31028) || 1) && $this->valueHolderbeb1c = $valueHolderbeb1c;

        return $this->valueHolderbeb1c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer31028 && ($this->initializer31028->__invoke($valueHolderbeb1c, $this, 'getConfiguration', array(), $this->initializer31028) || 1) && $this->valueHolderbeb1c = $valueHolderbeb1c;

        return $this->valueHolderbeb1c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer31028 && ($this->initializer31028->__invoke($valueHolderbeb1c, $this, 'isOpen', array(), $this->initializer31028) || 1) && $this->valueHolderbeb1c = $valueHolderbeb1c;

        return $this->valueHolderbeb1c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer31028 && ($this->initializer31028->__invoke($valueHolderbeb1c, $this, 'getUnitOfWork', array(), $this->initializer31028) || 1) && $this->valueHolderbeb1c = $valueHolderbeb1c;

        return $this->valueHolderbeb1c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer31028 && ($this->initializer31028->__invoke($valueHolderbeb1c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer31028) || 1) && $this->valueHolderbeb1c = $valueHolderbeb1c;

        return $this->valueHolderbeb1c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer31028 && ($this->initializer31028->__invoke($valueHolderbeb1c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer31028) || 1) && $this->valueHolderbeb1c = $valueHolderbeb1c;

        return $this->valueHolderbeb1c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer31028 && ($this->initializer31028->__invoke($valueHolderbeb1c, $this, 'getProxyFactory', array(), $this->initializer31028) || 1) && $this->valueHolderbeb1c = $valueHolderbeb1c;

        return $this->valueHolderbeb1c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer31028 && ($this->initializer31028->__invoke($valueHolderbeb1c, $this, 'initializeObject', array('obj' => $obj), $this->initializer31028) || 1) && $this->valueHolderbeb1c = $valueHolderbeb1c;

        return $this->valueHolderbeb1c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer31028 && ($this->initializer31028->__invoke($valueHolderbeb1c, $this, 'getFilters', array(), $this->initializer31028) || 1) && $this->valueHolderbeb1c = $valueHolderbeb1c;

        return $this->valueHolderbeb1c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer31028 && ($this->initializer31028->__invoke($valueHolderbeb1c, $this, 'isFiltersStateClean', array(), $this->initializer31028) || 1) && $this->valueHolderbeb1c = $valueHolderbeb1c;

        return $this->valueHolderbeb1c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer31028 && ($this->initializer31028->__invoke($valueHolderbeb1c, $this, 'hasFilters', array(), $this->initializer31028) || 1) && $this->valueHolderbeb1c = $valueHolderbeb1c;

        return $this->valueHolderbeb1c->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer31028 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderbeb1c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderbeb1c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderbeb1c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer31028 && ($this->initializer31028->__invoke($valueHolderbeb1c, $this, '__get', ['name' => $name], $this->initializer31028) || 1) && $this->valueHolderbeb1c = $valueHolderbeb1c;

        if (isset(self::$publicPropertiesed21f[$name])) {
            return $this->valueHolderbeb1c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbeb1c;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderbeb1c;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer31028 && ($this->initializer31028->__invoke($valueHolderbeb1c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer31028) || 1) && $this->valueHolderbeb1c = $valueHolderbeb1c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbeb1c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderbeb1c;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer31028 && ($this->initializer31028->__invoke($valueHolderbeb1c, $this, '__isset', array('name' => $name), $this->initializer31028) || 1) && $this->valueHolderbeb1c = $valueHolderbeb1c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbeb1c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderbeb1c;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer31028 && ($this->initializer31028->__invoke($valueHolderbeb1c, $this, '__unset', array('name' => $name), $this->initializer31028) || 1) && $this->valueHolderbeb1c = $valueHolderbeb1c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbeb1c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderbeb1c;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer31028 && ($this->initializer31028->__invoke($valueHolderbeb1c, $this, '__clone', array(), $this->initializer31028) || 1) && $this->valueHolderbeb1c = $valueHolderbeb1c;

        $this->valueHolderbeb1c = clone $this->valueHolderbeb1c;
    }

    public function __sleep()
    {
        $this->initializer31028 && ($this->initializer31028->__invoke($valueHolderbeb1c, $this, '__sleep', array(), $this->initializer31028) || 1) && $this->valueHolderbeb1c = $valueHolderbeb1c;

        return array('valueHolderbeb1c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer31028 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer31028;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer31028 && ($this->initializer31028->__invoke($valueHolderbeb1c, $this, 'initializeProxy', array(), $this->initializer31028) || 1) && $this->valueHolderbeb1c = $valueHolderbeb1c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderbeb1c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderbeb1c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
