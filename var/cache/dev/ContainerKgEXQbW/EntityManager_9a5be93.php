<?php

namespace ContainerKgEXQbW;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere1930 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb513b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3e274 = [
        
    ];

    public function getConnection()
    {
        $this->initializerb513b && ($this->initializerb513b->__invoke($valueHoldere1930, $this, 'getConnection', array(), $this->initializerb513b) || 1) && $this->valueHoldere1930 = $valueHoldere1930;

        return $this->valueHoldere1930->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb513b && ($this->initializerb513b->__invoke($valueHoldere1930, $this, 'getMetadataFactory', array(), $this->initializerb513b) || 1) && $this->valueHoldere1930 = $valueHoldere1930;

        return $this->valueHoldere1930->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb513b && ($this->initializerb513b->__invoke($valueHoldere1930, $this, 'getExpressionBuilder', array(), $this->initializerb513b) || 1) && $this->valueHoldere1930 = $valueHoldere1930;

        return $this->valueHoldere1930->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb513b && ($this->initializerb513b->__invoke($valueHoldere1930, $this, 'beginTransaction', array(), $this->initializerb513b) || 1) && $this->valueHoldere1930 = $valueHoldere1930;

        return $this->valueHoldere1930->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb513b && ($this->initializerb513b->__invoke($valueHoldere1930, $this, 'getCache', array(), $this->initializerb513b) || 1) && $this->valueHoldere1930 = $valueHoldere1930;

        return $this->valueHoldere1930->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb513b && ($this->initializerb513b->__invoke($valueHoldere1930, $this, 'transactional', array('func' => $func), $this->initializerb513b) || 1) && $this->valueHoldere1930 = $valueHoldere1930;

        return $this->valueHoldere1930->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerb513b && ($this->initializerb513b->__invoke($valueHoldere1930, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb513b) || 1) && $this->valueHoldere1930 = $valueHoldere1930;

        return $this->valueHoldere1930->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerb513b && ($this->initializerb513b->__invoke($valueHoldere1930, $this, 'commit', array(), $this->initializerb513b) || 1) && $this->valueHoldere1930 = $valueHoldere1930;

        return $this->valueHoldere1930->commit();
    }

    public function rollback()
    {
        $this->initializerb513b && ($this->initializerb513b->__invoke($valueHoldere1930, $this, 'rollback', array(), $this->initializerb513b) || 1) && $this->valueHoldere1930 = $valueHoldere1930;

        return $this->valueHoldere1930->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb513b && ($this->initializerb513b->__invoke($valueHoldere1930, $this, 'getClassMetadata', array('className' => $className), $this->initializerb513b) || 1) && $this->valueHoldere1930 = $valueHoldere1930;

        return $this->valueHoldere1930->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb513b && ($this->initializerb513b->__invoke($valueHoldere1930, $this, 'createQuery', array('dql' => $dql), $this->initializerb513b) || 1) && $this->valueHoldere1930 = $valueHoldere1930;

        return $this->valueHoldere1930->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb513b && ($this->initializerb513b->__invoke($valueHoldere1930, $this, 'createNamedQuery', array('name' => $name), $this->initializerb513b) || 1) && $this->valueHoldere1930 = $valueHoldere1930;

        return $this->valueHoldere1930->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb513b && ($this->initializerb513b->__invoke($valueHoldere1930, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb513b) || 1) && $this->valueHoldere1930 = $valueHoldere1930;

        return $this->valueHoldere1930->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb513b && ($this->initializerb513b->__invoke($valueHoldere1930, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb513b) || 1) && $this->valueHoldere1930 = $valueHoldere1930;

        return $this->valueHoldere1930->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb513b && ($this->initializerb513b->__invoke($valueHoldere1930, $this, 'createQueryBuilder', array(), $this->initializerb513b) || 1) && $this->valueHoldere1930 = $valueHoldere1930;

        return $this->valueHoldere1930->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb513b && ($this->initializerb513b->__invoke($valueHoldere1930, $this, 'flush', array('entity' => $entity), $this->initializerb513b) || 1) && $this->valueHoldere1930 = $valueHoldere1930;

        return $this->valueHoldere1930->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb513b && ($this->initializerb513b->__invoke($valueHoldere1930, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb513b) || 1) && $this->valueHoldere1930 = $valueHoldere1930;

        return $this->valueHoldere1930->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb513b && ($this->initializerb513b->__invoke($valueHoldere1930, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb513b) || 1) && $this->valueHoldere1930 = $valueHoldere1930;

        return $this->valueHoldere1930->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb513b && ($this->initializerb513b->__invoke($valueHoldere1930, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb513b) || 1) && $this->valueHoldere1930 = $valueHoldere1930;

        return $this->valueHoldere1930->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb513b && ($this->initializerb513b->__invoke($valueHoldere1930, $this, 'clear', array('entityName' => $entityName), $this->initializerb513b) || 1) && $this->valueHoldere1930 = $valueHoldere1930;

        return $this->valueHoldere1930->clear($entityName);
    }

    public function close()
    {
        $this->initializerb513b && ($this->initializerb513b->__invoke($valueHoldere1930, $this, 'close', array(), $this->initializerb513b) || 1) && $this->valueHoldere1930 = $valueHoldere1930;

        return $this->valueHoldere1930->close();
    }

    public function persist($entity)
    {
        $this->initializerb513b && ($this->initializerb513b->__invoke($valueHoldere1930, $this, 'persist', array('entity' => $entity), $this->initializerb513b) || 1) && $this->valueHoldere1930 = $valueHoldere1930;

        return $this->valueHoldere1930->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb513b && ($this->initializerb513b->__invoke($valueHoldere1930, $this, 'remove', array('entity' => $entity), $this->initializerb513b) || 1) && $this->valueHoldere1930 = $valueHoldere1930;

        return $this->valueHoldere1930->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb513b && ($this->initializerb513b->__invoke($valueHoldere1930, $this, 'refresh', array('entity' => $entity), $this->initializerb513b) || 1) && $this->valueHoldere1930 = $valueHoldere1930;

        return $this->valueHoldere1930->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb513b && ($this->initializerb513b->__invoke($valueHoldere1930, $this, 'detach', array('entity' => $entity), $this->initializerb513b) || 1) && $this->valueHoldere1930 = $valueHoldere1930;

        return $this->valueHoldere1930->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb513b && ($this->initializerb513b->__invoke($valueHoldere1930, $this, 'merge', array('entity' => $entity), $this->initializerb513b) || 1) && $this->valueHoldere1930 = $valueHoldere1930;

        return $this->valueHoldere1930->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb513b && ($this->initializerb513b->__invoke($valueHoldere1930, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb513b) || 1) && $this->valueHoldere1930 = $valueHoldere1930;

        return $this->valueHoldere1930->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb513b && ($this->initializerb513b->__invoke($valueHoldere1930, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb513b) || 1) && $this->valueHoldere1930 = $valueHoldere1930;

        return $this->valueHoldere1930->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb513b && ($this->initializerb513b->__invoke($valueHoldere1930, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb513b) || 1) && $this->valueHoldere1930 = $valueHoldere1930;

        return $this->valueHoldere1930->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb513b && ($this->initializerb513b->__invoke($valueHoldere1930, $this, 'contains', array('entity' => $entity), $this->initializerb513b) || 1) && $this->valueHoldere1930 = $valueHoldere1930;

        return $this->valueHoldere1930->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb513b && ($this->initializerb513b->__invoke($valueHoldere1930, $this, 'getEventManager', array(), $this->initializerb513b) || 1) && $this->valueHoldere1930 = $valueHoldere1930;

        return $this->valueHoldere1930->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb513b && ($this->initializerb513b->__invoke($valueHoldere1930, $this, 'getConfiguration', array(), $this->initializerb513b) || 1) && $this->valueHoldere1930 = $valueHoldere1930;

        return $this->valueHoldere1930->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb513b && ($this->initializerb513b->__invoke($valueHoldere1930, $this, 'isOpen', array(), $this->initializerb513b) || 1) && $this->valueHoldere1930 = $valueHoldere1930;

        return $this->valueHoldere1930->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb513b && ($this->initializerb513b->__invoke($valueHoldere1930, $this, 'getUnitOfWork', array(), $this->initializerb513b) || 1) && $this->valueHoldere1930 = $valueHoldere1930;

        return $this->valueHoldere1930->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb513b && ($this->initializerb513b->__invoke($valueHoldere1930, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb513b) || 1) && $this->valueHoldere1930 = $valueHoldere1930;

        return $this->valueHoldere1930->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb513b && ($this->initializerb513b->__invoke($valueHoldere1930, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb513b) || 1) && $this->valueHoldere1930 = $valueHoldere1930;

        return $this->valueHoldere1930->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb513b && ($this->initializerb513b->__invoke($valueHoldere1930, $this, 'getProxyFactory', array(), $this->initializerb513b) || 1) && $this->valueHoldere1930 = $valueHoldere1930;

        return $this->valueHoldere1930->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb513b && ($this->initializerb513b->__invoke($valueHoldere1930, $this, 'initializeObject', array('obj' => $obj), $this->initializerb513b) || 1) && $this->valueHoldere1930 = $valueHoldere1930;

        return $this->valueHoldere1930->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb513b && ($this->initializerb513b->__invoke($valueHoldere1930, $this, 'getFilters', array(), $this->initializerb513b) || 1) && $this->valueHoldere1930 = $valueHoldere1930;

        return $this->valueHoldere1930->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb513b && ($this->initializerb513b->__invoke($valueHoldere1930, $this, 'isFiltersStateClean', array(), $this->initializerb513b) || 1) && $this->valueHoldere1930 = $valueHoldere1930;

        return $this->valueHoldere1930->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb513b && ($this->initializerb513b->__invoke($valueHoldere1930, $this, 'hasFilters', array(), $this->initializerb513b) || 1) && $this->valueHoldere1930 = $valueHoldere1930;

        return $this->valueHoldere1930->hasFilters();
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

        $instance->initializerb513b = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldere1930) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere1930 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere1930->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb513b && ($this->initializerb513b->__invoke($valueHoldere1930, $this, '__get', ['name' => $name], $this->initializerb513b) || 1) && $this->valueHoldere1930 = $valueHoldere1930;

        if (isset(self::$publicProperties3e274[$name])) {
            return $this->valueHoldere1930->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere1930;

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

        $targetObject = $this->valueHoldere1930;
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
        $this->initializerb513b && ($this->initializerb513b->__invoke($valueHoldere1930, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb513b) || 1) && $this->valueHoldere1930 = $valueHoldere1930;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere1930;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere1930;
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
        $this->initializerb513b && ($this->initializerb513b->__invoke($valueHoldere1930, $this, '__isset', array('name' => $name), $this->initializerb513b) || 1) && $this->valueHoldere1930 = $valueHoldere1930;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere1930;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere1930;
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
        $this->initializerb513b && ($this->initializerb513b->__invoke($valueHoldere1930, $this, '__unset', array('name' => $name), $this->initializerb513b) || 1) && $this->valueHoldere1930 = $valueHoldere1930;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere1930;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere1930;
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
        $this->initializerb513b && ($this->initializerb513b->__invoke($valueHoldere1930, $this, '__clone', array(), $this->initializerb513b) || 1) && $this->valueHoldere1930 = $valueHoldere1930;

        $this->valueHoldere1930 = clone $this->valueHoldere1930;
    }

    public function __sleep()
    {
        $this->initializerb513b && ($this->initializerb513b->__invoke($valueHoldere1930, $this, '__sleep', array(), $this->initializerb513b) || 1) && $this->valueHoldere1930 = $valueHoldere1930;

        return array('valueHoldere1930');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb513b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb513b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb513b && ($this->initializerb513b->__invoke($valueHoldere1930, $this, 'initializeProxy', array(), $this->initializerb513b) || 1) && $this->valueHoldere1930 = $valueHoldere1930;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere1930;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere1930;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
