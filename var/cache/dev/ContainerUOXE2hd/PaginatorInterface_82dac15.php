<?php

namespace ContainerUOXE2hd;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
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

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializerd2159 && ($this->initializerd2159->__invoke($valueHolder39320, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializerd2159) || 1) && $this->valueHolder39320 = $valueHolder39320;

        if ($this->valueHolder39320 === $returnValue = $this->valueHolder39320->paginate($target, $page, $limit, $options)) {
            return $this;
        }

        return $returnValue;
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

        $instance->initializerd2159 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder39320) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder39320 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializerd2159 && ($this->initializerd2159->__invoke($valueHolder39320, $this, '__get', ['name' => $name], $this->initializerd2159) || 1) && $this->valueHolder39320 = $valueHolder39320;

        if (isset(self::$publicProperties2f889[$name])) {
            return $this->valueHolder39320->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
