<?php

namespace ContainerXqiOiVC;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolder24268 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer29ef1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb3cff = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer29ef1 && ($this->initializer29ef1->__invoke($valueHolder24268, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer29ef1) || 1) && $this->valueHolder24268 = $valueHolder24268;

        if ($this->valueHolder24268 === $returnValue = $this->valueHolder24268->paginate($target, $page, $limit, $options)) {
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

        $instance->initializer29ef1 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder24268) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder24268 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer29ef1 && ($this->initializer29ef1->__invoke($valueHolder24268, $this, '__get', ['name' => $name], $this->initializer29ef1) || 1) && $this->valueHolder24268 = $valueHolder24268;

        if (isset(self::$publicPropertiesb3cff[$name])) {
            return $this->valueHolder24268->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder24268;

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

        $targetObject = $this->valueHolder24268;
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
        $this->initializer29ef1 && ($this->initializer29ef1->__invoke($valueHolder24268, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer29ef1) || 1) && $this->valueHolder24268 = $valueHolder24268;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder24268;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder24268;
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
        $this->initializer29ef1 && ($this->initializer29ef1->__invoke($valueHolder24268, $this, '__isset', array('name' => $name), $this->initializer29ef1) || 1) && $this->valueHolder24268 = $valueHolder24268;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder24268;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder24268;
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
        $this->initializer29ef1 && ($this->initializer29ef1->__invoke($valueHolder24268, $this, '__unset', array('name' => $name), $this->initializer29ef1) || 1) && $this->valueHolder24268 = $valueHolder24268;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder24268;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder24268;
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
        $this->initializer29ef1 && ($this->initializer29ef1->__invoke($valueHolder24268, $this, '__clone', array(), $this->initializer29ef1) || 1) && $this->valueHolder24268 = $valueHolder24268;

        $this->valueHolder24268 = clone $this->valueHolder24268;
    }

    public function __sleep()
    {
        $this->initializer29ef1 && ($this->initializer29ef1->__invoke($valueHolder24268, $this, '__sleep', array(), $this->initializer29ef1) || 1) && $this->valueHolder24268 = $valueHolder24268;

        return array('valueHolder24268');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer29ef1 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer29ef1;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer29ef1 && ($this->initializer29ef1->__invoke($valueHolder24268, $this, 'initializeProxy', array(), $this->initializer29ef1) || 1) && $this->valueHolder24268 = $valueHolder24268;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder24268;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder24268;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
