<?php

namespace ContainerUOXE2hd;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder39320 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd2159 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2f889 = [
        
    ];

    public function getConnection()
    {
        $this->initializerd2159 && ($this->initializerd2159->__invoke($valueHolder39320, $this, 'getConnection', array(), $this->initializerd2159) || 1) && $this->valueHolder39320 = $valueHolder39320;

        return $this->valueHolder39320->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd2159 && ($this->initializerd2159->__invoke($valueHolder39320, $this, 'getMetadataFactory', array(), $this->initializerd2159) || 1) && $this->valueHolder39320 = $valueHolder39320;

        return $this->valueHolder39320->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd2159 && ($this->initializerd2159->__invoke($valueHolder39320, $this, 'getExpressionBuilder', array(), $this->initializerd2159) || 1) && $this->valueHolder39320 = $valueHolder39320;

        return $this->valueHolder39320->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd2159 && ($this->initializerd2159->__invoke($valueHolder39320, $this, 'beginTransaction', array(), $this->initializerd2159) || 1) && $this->valueHolder39320 = $valueHolder39320;

        return $this->valueHolder39320->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd2159 && ($this->initializerd2159->__invoke($valueHolder39320, $this, 'getCache', array(), $this->initializerd2159) || 1) && $this->valueHolder39320 = $valueHolder39320;

        return $this->valueHolder39320->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd2159 && ($this->initializerd2159->__invoke($valueHolder39320, $this, 'transactional', array('func' => $func), $this->initializerd2159) || 1) && $this->valueHolder39320 = $valueHolder39320;

        return $this->valueHolder39320->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerd2159 && ($this->initializerd2159->__invoke($valueHolder39320, $this, 'wrapInTransaction', array('func' => $func), $this->initializerd2159) || 1) && $this->valueHolder39320 = $valueHolder39320;

        return $this->valueHolder39320->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerd2159 && ($this->initializerd2159->__invoke($valueHolder39320, $this, 'commit', array(), $this->initializerd2159) || 1) && $this->valueHolder39320 = $valueHolder39320;

        return $this->valueHolder39320->commit();
    }

    public function rollback()
    {
        $this->initializerd2159 && ($this->initializerd2159->__invoke($valueHolder39320, $this, 'rollback', array(), $this->initializerd2159) || 1) && $this->valueHolder39320 = $valueHolder39320;

        return $this->valueHolder39320->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd2159 && ($this->initializerd2159->__invoke($valueHolder39320, $this, 'getClassMetadata', array('className' => $className), $this->initializerd2159) || 1) && $this->valueHolder39320 = $valueHolder39320;

        return $this->valueHolder39320->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd2159 && ($this->initializerd2159->__invoke($valueHolder39320, $this, 'createQuery', array('dql' => $dql), $this->initializerd2159) || 1) && $this->valueHolder39320 = $valueHolder39320;

        return $this->valueHolder39320->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd2159 && ($this->initializerd2159->__invoke($valueHolder39320, $this, 'createNamedQuery', array('name' => $name), $this->initializerd2159) || 1) && $this->valueHolder39320 = $valueHolder39320;

        return $this->valueHolder39320->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd2159 && ($this->initializerd2159->__invoke($valueHolder39320, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd2159) || 1) && $this->valueHolder39320 = $valueHolder39320;

        return $this->valueHolder39320->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd2159 && ($this->initializerd2159->__invoke($valueHolder39320, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd2159) || 1) && $this->valueHolder39320 = $valueHolder39320;

        return $this->valueHolder39320->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd2159 && ($this->initializerd2159->__invoke($valueHolder39320, $this, 'createQueryBuilder', array(), $this->initializerd2159) || 1) && $this->valueHolder39320 = $valueHolder39320;

        return $this->valueHolder39320->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd2159 && ($this->initializerd2159->__invoke($valueHolder39320, $this, 'flush', array('entity' => $entity), $this->initializerd2159) || 1) && $this->valueHolder39320 = $valueHolder39320;

        return $this->valueHolder39320->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd2159 && ($this->initializerd2159->__invoke($valueHolder39320, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd2159) || 1) && $this->valueHolder39320 = $valueHolder39320;

        return $this->valueHolder39320->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd2159 && ($this->initializerd2159->__invoke($valueHolder39320, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd2159) || 1) && $this->valueHolder39320 = $valueHolder39320;

        return $this->valueHolder39320->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd2159 && ($this->initializerd2159->__invoke($valueHolder39320, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd2159) || 1) && $this->valueHolder39320 = $valueHolder39320;

        return $this->valueHolder39320->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd2159 && ($this->initializerd2159->__invoke($valueHolder39320, $this, 'clear', array('entityName' => $entityName), $this->initializerd2159) || 1) && $this->valueHolder39320 = $valueHolder39320;

        return $this->valueHolder39320->clear($entityName);
    }

    public function close()
    {
        $this->initializerd2159 && ($this->initializerd2159->__invoke($valueHolder39320, $this, 'close', array(), $this->initializerd2159) || 1) && $this->valueHolder39320 = $valueHolder39320;

        return $this->valueHolder39320->close();
    }

    public function persist($entity)
    {
        $this->initializerd2159 && ($this->initializerd2159->__invoke($valueHolder39320, $this, 'persist', array('entity' => $entity), $this->initializerd2159) || 1) && $this->valueHolder39320 = $valueHolder39320;

        return $this->valueHolder39320->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd2159 && ($this->initializerd2159->__invoke($valueHolder39320, $this, 'remove', array('entity' => $entity), $this->initializerd2159) || 1) && $this->valueHolder39320 = $valueHolder39320;

        return $this->valueHolder39320->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd2159 && ($this->initializerd2159->__invoke($valueHolder39320, $this, 'refresh', array('entity' => $entity), $this->initializerd2159) || 1) && $this->valueHolder39320 = $valueHolder39320;

        return $this->valueHolder39320->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd2159 && ($this->initializerd2159->__invoke($valueHolder39320, $this, 'detach', array('entity' => $entity), $this->initializerd2159) || 1) && $this->valueHolder39320 = $valueHolder39320;

        return $this->valueHolder39320->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd2159 && ($this->initializerd2159->__invoke($valueHolder39320, $this, 'merge', array('entity' => $entity), $this->initializerd2159) || 1) && $this->valueHolder39320 = $valueHolder39320;

        return $this->valueHolder39320->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd2159 && ($this->initializerd2159->__invoke($valueHolder39320, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd2159) || 1) && $this->valueHolder39320 = $valueHolder39320;

        return $this->valueHolder39320->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd2159 && ($this->initializerd2159->__invoke($valueHolder39320, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd2159) || 1) && $this->valueHolder39320 = $valueHolder39320;

        return $this->valueHolder39320->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd2159 && ($this->initializerd2159->__invoke($valueHolder39320, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd2159) || 1) && $this->valueHolder39320 = $valueHolder39320;

        return $this->valueHolder39320->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd2159 && ($this->initializerd2159->__invoke($valueHolder39320, $this, 'contains', array('entity' => $entity), $this->initializerd2159) || 1) && $this->valueHolder39320 = $valueHolder39320;

        return $this->valueHolder39320->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd2159 && ($this->initializerd2159->__invoke($valueHolder39320, $this, 'getEventManager', array(), $this->initializerd2159) || 1) && $this->valueHolder39320 = $valueHolder39320;

        return $this->valueHolder39320->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd2159 && ($this->initializerd2159->__invoke($valueHolder39320, $this, 'getConfiguration', array(), $this->initializerd2159) || 1) && $this->valueHolder39320 = $valueHolder39320;

        return $this->valueHolder39320->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd2159 && ($this->initializerd2159->__invoke($valueHolder39320, $this, 'isOpen', array(), $this->initializerd2159) || 1) && $this->valueHolder39320 = $valueHolder39320;

        return $this->valueHolder39320->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd2159 && ($this->initializerd2159->__invoke($valueHolder39320, $this, 'getUnitOfWork', array(), $this->initializerd2159) || 1) && $this->valueHolder39320 = $valueHolder39320;

        return $this->valueHolder39320->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd2159 && ($this->initializerd2159->__invoke($valueHolder39320, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd2159) || 1) && $this->valueHolder39320 = $valueHolder39320;

        return $this->valueHolder39320->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd2159 && ($this->initializerd2159->__invoke($valueHolder39320, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd2159) || 1) && $this->valueHolder39320 = $valueHolder39320;

        return $this->valueHolder39320->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd2159 && ($this->initializerd2159->__invoke($valueHolder39320, $this, 'getProxyFactory', array(), $this->initializerd2159) || 1) && $this->valueHolder39320 = $valueHolder39320;

        return $this->valueHolder39320->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd2159 && ($this->initializerd2159->__invoke($valueHolder39320, $this, 'initializeObject', array('obj' => $obj), $this->initializerd2159) || 1) && $this->valueHolder39320 = $valueHolder39320;

        return $this->valueHolder39320->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd2159 && ($this->initializerd2159->__invoke($valueHolder39320, $this, 'getFilters', array(), $this->initializerd2159) || 1) && $this->valueHolder39320 = $valueHolder39320;

        return $this->valueHolder39320->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd2159 && ($this->initializerd2159->__invoke($valueHolder39320, $this, 'isFiltersStateClean', array(), $this->initializerd2159) || 1) && $this->valueHolder39320 = $valueHolder39320;

        return $this->valueHolder39320->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd2159 && ($this->initializerd2159->__invoke($valueHolder39320, $this, 'hasFilters', array(), $this->initializerd2159) || 1) && $this->valueHolder39320 = $valueHolder39320;

        return $this->valueHolder39320->hasFilters();
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

        $instance->initializerd2159 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder39320) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder39320 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder39320->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerd2159 && ($this->initializerd2159->__invoke($valueHolder39320, $this, '__get', ['name' => $name], $this->initializerd2159) || 1) && $this->valueHolder39320 = $valueHolder39320;

        if (isset(self::$publicProperties2f889[$name])) {
            return $this->valueHolder39320->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder39320;

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

        $targetObject = $this->valueHolder39320;
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
        $this->initializerd2159 && ($this->initializerd2159->__invoke($valueHolder39320, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd2159) || 1) && $this->valueHolder39320 = $valueHolder39320;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder39320;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder39320;
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
        $this->initializerd2159 && ($this->initializerd2159->__invoke($valueHolder39320, $this, '__isset', array('name' => $name), $this->initializerd2159) || 1) && $this->valueHolder39320 = $valueHolder39320;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder39320;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder39320;
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
        $this->initializerd2159 && ($this->initializerd2159->__invoke($valueHolder39320, $this, '__unset', array('name' => $name), $this->initializerd2159) || 1) && $this->valueHolder39320 = $valueHolder39320;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder39320;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder39320;
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
        $this->initializerd2159 && ($this->initializerd2159->__invoke($valueHolder39320, $this, '__clone', array(), $this->initializerd2159) || 1) && $this->valueHolder39320 = $valueHolder39320;

        $this->valueHolder39320 = clone $this->valueHolder39320;
    }

    public function __sleep()
    {
        $this->initializerd2159 && ($this->initializerd2159->__invoke($valueHolder39320, $this, '__sleep', array(), $this->initializerd2159) || 1) && $this->valueHolder39320 = $valueHolder39320;

        return array('valueHolder39320');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd2159 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd2159;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd2159 && ($this->initializerd2159->__invoke($valueHolder39320, $this, 'initializeProxy', array(), $this->initializerd2159) || 1) && $this->valueHolder39320 = $valueHolder39320;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder39320;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder39320;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
