<?php

namespace ContainerJCeNvEJ;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0d361 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer7ee6f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesea618 = [
        
    ];

    public function getConnection()
    {
        $this->initializer7ee6f && ($this->initializer7ee6f->__invoke($valueHolder0d361, $this, 'getConnection', array(), $this->initializer7ee6f) || 1) && $this->valueHolder0d361 = $valueHolder0d361;

        return $this->valueHolder0d361->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer7ee6f && ($this->initializer7ee6f->__invoke($valueHolder0d361, $this, 'getMetadataFactory', array(), $this->initializer7ee6f) || 1) && $this->valueHolder0d361 = $valueHolder0d361;

        return $this->valueHolder0d361->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer7ee6f && ($this->initializer7ee6f->__invoke($valueHolder0d361, $this, 'getExpressionBuilder', array(), $this->initializer7ee6f) || 1) && $this->valueHolder0d361 = $valueHolder0d361;

        return $this->valueHolder0d361->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer7ee6f && ($this->initializer7ee6f->__invoke($valueHolder0d361, $this, 'beginTransaction', array(), $this->initializer7ee6f) || 1) && $this->valueHolder0d361 = $valueHolder0d361;

        return $this->valueHolder0d361->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer7ee6f && ($this->initializer7ee6f->__invoke($valueHolder0d361, $this, 'getCache', array(), $this->initializer7ee6f) || 1) && $this->valueHolder0d361 = $valueHolder0d361;

        return $this->valueHolder0d361->getCache();
    }

    public function transactional($func)
    {
        $this->initializer7ee6f && ($this->initializer7ee6f->__invoke($valueHolder0d361, $this, 'transactional', array('func' => $func), $this->initializer7ee6f) || 1) && $this->valueHolder0d361 = $valueHolder0d361;

        return $this->valueHolder0d361->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer7ee6f && ($this->initializer7ee6f->__invoke($valueHolder0d361, $this, 'wrapInTransaction', array('func' => $func), $this->initializer7ee6f) || 1) && $this->valueHolder0d361 = $valueHolder0d361;

        return $this->valueHolder0d361->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer7ee6f && ($this->initializer7ee6f->__invoke($valueHolder0d361, $this, 'commit', array(), $this->initializer7ee6f) || 1) && $this->valueHolder0d361 = $valueHolder0d361;

        return $this->valueHolder0d361->commit();
    }

    public function rollback()
    {
        $this->initializer7ee6f && ($this->initializer7ee6f->__invoke($valueHolder0d361, $this, 'rollback', array(), $this->initializer7ee6f) || 1) && $this->valueHolder0d361 = $valueHolder0d361;

        return $this->valueHolder0d361->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer7ee6f && ($this->initializer7ee6f->__invoke($valueHolder0d361, $this, 'getClassMetadata', array('className' => $className), $this->initializer7ee6f) || 1) && $this->valueHolder0d361 = $valueHolder0d361;

        return $this->valueHolder0d361->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer7ee6f && ($this->initializer7ee6f->__invoke($valueHolder0d361, $this, 'createQuery', array('dql' => $dql), $this->initializer7ee6f) || 1) && $this->valueHolder0d361 = $valueHolder0d361;

        return $this->valueHolder0d361->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer7ee6f && ($this->initializer7ee6f->__invoke($valueHolder0d361, $this, 'createNamedQuery', array('name' => $name), $this->initializer7ee6f) || 1) && $this->valueHolder0d361 = $valueHolder0d361;

        return $this->valueHolder0d361->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer7ee6f && ($this->initializer7ee6f->__invoke($valueHolder0d361, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer7ee6f) || 1) && $this->valueHolder0d361 = $valueHolder0d361;

        return $this->valueHolder0d361->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer7ee6f && ($this->initializer7ee6f->__invoke($valueHolder0d361, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer7ee6f) || 1) && $this->valueHolder0d361 = $valueHolder0d361;

        return $this->valueHolder0d361->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer7ee6f && ($this->initializer7ee6f->__invoke($valueHolder0d361, $this, 'createQueryBuilder', array(), $this->initializer7ee6f) || 1) && $this->valueHolder0d361 = $valueHolder0d361;

        return $this->valueHolder0d361->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer7ee6f && ($this->initializer7ee6f->__invoke($valueHolder0d361, $this, 'flush', array('entity' => $entity), $this->initializer7ee6f) || 1) && $this->valueHolder0d361 = $valueHolder0d361;

        return $this->valueHolder0d361->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer7ee6f && ($this->initializer7ee6f->__invoke($valueHolder0d361, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7ee6f) || 1) && $this->valueHolder0d361 = $valueHolder0d361;

        return $this->valueHolder0d361->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer7ee6f && ($this->initializer7ee6f->__invoke($valueHolder0d361, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer7ee6f) || 1) && $this->valueHolder0d361 = $valueHolder0d361;

        return $this->valueHolder0d361->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer7ee6f && ($this->initializer7ee6f->__invoke($valueHolder0d361, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer7ee6f) || 1) && $this->valueHolder0d361 = $valueHolder0d361;

        return $this->valueHolder0d361->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer7ee6f && ($this->initializer7ee6f->__invoke($valueHolder0d361, $this, 'clear', array('entityName' => $entityName), $this->initializer7ee6f) || 1) && $this->valueHolder0d361 = $valueHolder0d361;

        return $this->valueHolder0d361->clear($entityName);
    }

    public function close()
    {
        $this->initializer7ee6f && ($this->initializer7ee6f->__invoke($valueHolder0d361, $this, 'close', array(), $this->initializer7ee6f) || 1) && $this->valueHolder0d361 = $valueHolder0d361;

        return $this->valueHolder0d361->close();
    }

    public function persist($entity)
    {
        $this->initializer7ee6f && ($this->initializer7ee6f->__invoke($valueHolder0d361, $this, 'persist', array('entity' => $entity), $this->initializer7ee6f) || 1) && $this->valueHolder0d361 = $valueHolder0d361;

        return $this->valueHolder0d361->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer7ee6f && ($this->initializer7ee6f->__invoke($valueHolder0d361, $this, 'remove', array('entity' => $entity), $this->initializer7ee6f) || 1) && $this->valueHolder0d361 = $valueHolder0d361;

        return $this->valueHolder0d361->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer7ee6f && ($this->initializer7ee6f->__invoke($valueHolder0d361, $this, 'refresh', array('entity' => $entity), $this->initializer7ee6f) || 1) && $this->valueHolder0d361 = $valueHolder0d361;

        return $this->valueHolder0d361->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer7ee6f && ($this->initializer7ee6f->__invoke($valueHolder0d361, $this, 'detach', array('entity' => $entity), $this->initializer7ee6f) || 1) && $this->valueHolder0d361 = $valueHolder0d361;

        return $this->valueHolder0d361->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer7ee6f && ($this->initializer7ee6f->__invoke($valueHolder0d361, $this, 'merge', array('entity' => $entity), $this->initializer7ee6f) || 1) && $this->valueHolder0d361 = $valueHolder0d361;

        return $this->valueHolder0d361->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer7ee6f && ($this->initializer7ee6f->__invoke($valueHolder0d361, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer7ee6f) || 1) && $this->valueHolder0d361 = $valueHolder0d361;

        return $this->valueHolder0d361->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer7ee6f && ($this->initializer7ee6f->__invoke($valueHolder0d361, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7ee6f) || 1) && $this->valueHolder0d361 = $valueHolder0d361;

        return $this->valueHolder0d361->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer7ee6f && ($this->initializer7ee6f->__invoke($valueHolder0d361, $this, 'getRepository', array('entityName' => $entityName), $this->initializer7ee6f) || 1) && $this->valueHolder0d361 = $valueHolder0d361;

        return $this->valueHolder0d361->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer7ee6f && ($this->initializer7ee6f->__invoke($valueHolder0d361, $this, 'contains', array('entity' => $entity), $this->initializer7ee6f) || 1) && $this->valueHolder0d361 = $valueHolder0d361;

        return $this->valueHolder0d361->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer7ee6f && ($this->initializer7ee6f->__invoke($valueHolder0d361, $this, 'getEventManager', array(), $this->initializer7ee6f) || 1) && $this->valueHolder0d361 = $valueHolder0d361;

        return $this->valueHolder0d361->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer7ee6f && ($this->initializer7ee6f->__invoke($valueHolder0d361, $this, 'getConfiguration', array(), $this->initializer7ee6f) || 1) && $this->valueHolder0d361 = $valueHolder0d361;

        return $this->valueHolder0d361->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer7ee6f && ($this->initializer7ee6f->__invoke($valueHolder0d361, $this, 'isOpen', array(), $this->initializer7ee6f) || 1) && $this->valueHolder0d361 = $valueHolder0d361;

        return $this->valueHolder0d361->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer7ee6f && ($this->initializer7ee6f->__invoke($valueHolder0d361, $this, 'getUnitOfWork', array(), $this->initializer7ee6f) || 1) && $this->valueHolder0d361 = $valueHolder0d361;

        return $this->valueHolder0d361->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer7ee6f && ($this->initializer7ee6f->__invoke($valueHolder0d361, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7ee6f) || 1) && $this->valueHolder0d361 = $valueHolder0d361;

        return $this->valueHolder0d361->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer7ee6f && ($this->initializer7ee6f->__invoke($valueHolder0d361, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7ee6f) || 1) && $this->valueHolder0d361 = $valueHolder0d361;

        return $this->valueHolder0d361->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer7ee6f && ($this->initializer7ee6f->__invoke($valueHolder0d361, $this, 'getProxyFactory', array(), $this->initializer7ee6f) || 1) && $this->valueHolder0d361 = $valueHolder0d361;

        return $this->valueHolder0d361->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer7ee6f && ($this->initializer7ee6f->__invoke($valueHolder0d361, $this, 'initializeObject', array('obj' => $obj), $this->initializer7ee6f) || 1) && $this->valueHolder0d361 = $valueHolder0d361;

        return $this->valueHolder0d361->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer7ee6f && ($this->initializer7ee6f->__invoke($valueHolder0d361, $this, 'getFilters', array(), $this->initializer7ee6f) || 1) && $this->valueHolder0d361 = $valueHolder0d361;

        return $this->valueHolder0d361->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer7ee6f && ($this->initializer7ee6f->__invoke($valueHolder0d361, $this, 'isFiltersStateClean', array(), $this->initializer7ee6f) || 1) && $this->valueHolder0d361 = $valueHolder0d361;

        return $this->valueHolder0d361->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer7ee6f && ($this->initializer7ee6f->__invoke($valueHolder0d361, $this, 'hasFilters', array(), $this->initializer7ee6f) || 1) && $this->valueHolder0d361 = $valueHolder0d361;

        return $this->valueHolder0d361->hasFilters();
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

        $instance->initializer7ee6f = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder0d361) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0d361 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder0d361->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer7ee6f && ($this->initializer7ee6f->__invoke($valueHolder0d361, $this, '__get', ['name' => $name], $this->initializer7ee6f) || 1) && $this->valueHolder0d361 = $valueHolder0d361;

        if (isset(self::$publicPropertiesea618[$name])) {
            return $this->valueHolder0d361->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0d361;

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

        $targetObject = $this->valueHolder0d361;
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
        $this->initializer7ee6f && ($this->initializer7ee6f->__invoke($valueHolder0d361, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7ee6f) || 1) && $this->valueHolder0d361 = $valueHolder0d361;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0d361;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0d361;
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
        $this->initializer7ee6f && ($this->initializer7ee6f->__invoke($valueHolder0d361, $this, '__isset', array('name' => $name), $this->initializer7ee6f) || 1) && $this->valueHolder0d361 = $valueHolder0d361;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0d361;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder0d361;
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
        $this->initializer7ee6f && ($this->initializer7ee6f->__invoke($valueHolder0d361, $this, '__unset', array('name' => $name), $this->initializer7ee6f) || 1) && $this->valueHolder0d361 = $valueHolder0d361;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0d361;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder0d361;
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
        $this->initializer7ee6f && ($this->initializer7ee6f->__invoke($valueHolder0d361, $this, '__clone', array(), $this->initializer7ee6f) || 1) && $this->valueHolder0d361 = $valueHolder0d361;

        $this->valueHolder0d361 = clone $this->valueHolder0d361;
    }

    public function __sleep()
    {
        $this->initializer7ee6f && ($this->initializer7ee6f->__invoke($valueHolder0d361, $this, '__sleep', array(), $this->initializer7ee6f) || 1) && $this->valueHolder0d361 = $valueHolder0d361;

        return array('valueHolder0d361');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer7ee6f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer7ee6f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer7ee6f && ($this->initializer7ee6f->__invoke($valueHolder0d361, $this, 'initializeProxy', array(), $this->initializer7ee6f) || 1) && $this->valueHolder0d361 = $valueHolder0d361;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0d361;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0d361;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
