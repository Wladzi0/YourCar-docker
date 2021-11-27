<?php

namespace ContainerEBGBUTN;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
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

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer31028 && ($this->initializer31028->__invoke($valueHolderbeb1c, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer31028) || 1) && $this->valueHolderbeb1c = $valueHolderbeb1c;

        if ($this->valueHolderbeb1c === $returnValue = $this->valueHolderbeb1c->paginate($target, $page, $limit, $options)) {
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

        $instance->initializer31028 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolderbeb1c) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolderbeb1c = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer31028 && ($this->initializer31028->__invoke($valueHolderbeb1c, $this, '__get', ['name' => $name], $this->initializer31028) || 1) && $this->valueHolderbeb1c = $valueHolderbeb1c;

        if (isset(self::$publicPropertiesed21f[$name])) {
            return $this->valueHolderbeb1c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
