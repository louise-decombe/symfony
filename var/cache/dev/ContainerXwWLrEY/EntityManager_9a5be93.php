<?php

namespace ContainerXwWLrEY;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializer29ef1 && ($this->initializer29ef1->__invoke($valueHolder24268, $this, 'getConnection', array(), $this->initializer29ef1) || 1) && $this->valueHolder24268 = $valueHolder24268;

        return $this->valueHolder24268->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer29ef1 && ($this->initializer29ef1->__invoke($valueHolder24268, $this, 'getMetadataFactory', array(), $this->initializer29ef1) || 1) && $this->valueHolder24268 = $valueHolder24268;

        return $this->valueHolder24268->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer29ef1 && ($this->initializer29ef1->__invoke($valueHolder24268, $this, 'getExpressionBuilder', array(), $this->initializer29ef1) || 1) && $this->valueHolder24268 = $valueHolder24268;

        return $this->valueHolder24268->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer29ef1 && ($this->initializer29ef1->__invoke($valueHolder24268, $this, 'beginTransaction', array(), $this->initializer29ef1) || 1) && $this->valueHolder24268 = $valueHolder24268;

        return $this->valueHolder24268->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer29ef1 && ($this->initializer29ef1->__invoke($valueHolder24268, $this, 'getCache', array(), $this->initializer29ef1) || 1) && $this->valueHolder24268 = $valueHolder24268;

        return $this->valueHolder24268->getCache();
    }

    public function transactional($func)
    {
        $this->initializer29ef1 && ($this->initializer29ef1->__invoke($valueHolder24268, $this, 'transactional', array('func' => $func), $this->initializer29ef1) || 1) && $this->valueHolder24268 = $valueHolder24268;

        return $this->valueHolder24268->transactional($func);
    }

    public function commit()
    {
        $this->initializer29ef1 && ($this->initializer29ef1->__invoke($valueHolder24268, $this, 'commit', array(), $this->initializer29ef1) || 1) && $this->valueHolder24268 = $valueHolder24268;

        return $this->valueHolder24268->commit();
    }

    public function rollback()
    {
        $this->initializer29ef1 && ($this->initializer29ef1->__invoke($valueHolder24268, $this, 'rollback', array(), $this->initializer29ef1) || 1) && $this->valueHolder24268 = $valueHolder24268;

        return $this->valueHolder24268->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer29ef1 && ($this->initializer29ef1->__invoke($valueHolder24268, $this, 'getClassMetadata', array('className' => $className), $this->initializer29ef1) || 1) && $this->valueHolder24268 = $valueHolder24268;

        return $this->valueHolder24268->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer29ef1 && ($this->initializer29ef1->__invoke($valueHolder24268, $this, 'createQuery', array('dql' => $dql), $this->initializer29ef1) || 1) && $this->valueHolder24268 = $valueHolder24268;

        return $this->valueHolder24268->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer29ef1 && ($this->initializer29ef1->__invoke($valueHolder24268, $this, 'createNamedQuery', array('name' => $name), $this->initializer29ef1) || 1) && $this->valueHolder24268 = $valueHolder24268;

        return $this->valueHolder24268->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer29ef1 && ($this->initializer29ef1->__invoke($valueHolder24268, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer29ef1) || 1) && $this->valueHolder24268 = $valueHolder24268;

        return $this->valueHolder24268->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer29ef1 && ($this->initializer29ef1->__invoke($valueHolder24268, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer29ef1) || 1) && $this->valueHolder24268 = $valueHolder24268;

        return $this->valueHolder24268->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer29ef1 && ($this->initializer29ef1->__invoke($valueHolder24268, $this, 'createQueryBuilder', array(), $this->initializer29ef1) || 1) && $this->valueHolder24268 = $valueHolder24268;

        return $this->valueHolder24268->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer29ef1 && ($this->initializer29ef1->__invoke($valueHolder24268, $this, 'flush', array('entity' => $entity), $this->initializer29ef1) || 1) && $this->valueHolder24268 = $valueHolder24268;

        return $this->valueHolder24268->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer29ef1 && ($this->initializer29ef1->__invoke($valueHolder24268, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer29ef1) || 1) && $this->valueHolder24268 = $valueHolder24268;

        return $this->valueHolder24268->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer29ef1 && ($this->initializer29ef1->__invoke($valueHolder24268, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer29ef1) || 1) && $this->valueHolder24268 = $valueHolder24268;

        return $this->valueHolder24268->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer29ef1 && ($this->initializer29ef1->__invoke($valueHolder24268, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer29ef1) || 1) && $this->valueHolder24268 = $valueHolder24268;

        return $this->valueHolder24268->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer29ef1 && ($this->initializer29ef1->__invoke($valueHolder24268, $this, 'clear', array('entityName' => $entityName), $this->initializer29ef1) || 1) && $this->valueHolder24268 = $valueHolder24268;

        return $this->valueHolder24268->clear($entityName);
    }

    public function close()
    {
        $this->initializer29ef1 && ($this->initializer29ef1->__invoke($valueHolder24268, $this, 'close', array(), $this->initializer29ef1) || 1) && $this->valueHolder24268 = $valueHolder24268;

        return $this->valueHolder24268->close();
    }

    public function persist($entity)
    {
        $this->initializer29ef1 && ($this->initializer29ef1->__invoke($valueHolder24268, $this, 'persist', array('entity' => $entity), $this->initializer29ef1) || 1) && $this->valueHolder24268 = $valueHolder24268;

        return $this->valueHolder24268->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer29ef1 && ($this->initializer29ef1->__invoke($valueHolder24268, $this, 'remove', array('entity' => $entity), $this->initializer29ef1) || 1) && $this->valueHolder24268 = $valueHolder24268;

        return $this->valueHolder24268->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer29ef1 && ($this->initializer29ef1->__invoke($valueHolder24268, $this, 'refresh', array('entity' => $entity), $this->initializer29ef1) || 1) && $this->valueHolder24268 = $valueHolder24268;

        return $this->valueHolder24268->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer29ef1 && ($this->initializer29ef1->__invoke($valueHolder24268, $this, 'detach', array('entity' => $entity), $this->initializer29ef1) || 1) && $this->valueHolder24268 = $valueHolder24268;

        return $this->valueHolder24268->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer29ef1 && ($this->initializer29ef1->__invoke($valueHolder24268, $this, 'merge', array('entity' => $entity), $this->initializer29ef1) || 1) && $this->valueHolder24268 = $valueHolder24268;

        return $this->valueHolder24268->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer29ef1 && ($this->initializer29ef1->__invoke($valueHolder24268, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer29ef1) || 1) && $this->valueHolder24268 = $valueHolder24268;

        return $this->valueHolder24268->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer29ef1 && ($this->initializer29ef1->__invoke($valueHolder24268, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer29ef1) || 1) && $this->valueHolder24268 = $valueHolder24268;

        return $this->valueHolder24268->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer29ef1 && ($this->initializer29ef1->__invoke($valueHolder24268, $this, 'getRepository', array('entityName' => $entityName), $this->initializer29ef1) || 1) && $this->valueHolder24268 = $valueHolder24268;

        return $this->valueHolder24268->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer29ef1 && ($this->initializer29ef1->__invoke($valueHolder24268, $this, 'contains', array('entity' => $entity), $this->initializer29ef1) || 1) && $this->valueHolder24268 = $valueHolder24268;

        return $this->valueHolder24268->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer29ef1 && ($this->initializer29ef1->__invoke($valueHolder24268, $this, 'getEventManager', array(), $this->initializer29ef1) || 1) && $this->valueHolder24268 = $valueHolder24268;

        return $this->valueHolder24268->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer29ef1 && ($this->initializer29ef1->__invoke($valueHolder24268, $this, 'getConfiguration', array(), $this->initializer29ef1) || 1) && $this->valueHolder24268 = $valueHolder24268;

        return $this->valueHolder24268->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer29ef1 && ($this->initializer29ef1->__invoke($valueHolder24268, $this, 'isOpen', array(), $this->initializer29ef1) || 1) && $this->valueHolder24268 = $valueHolder24268;

        return $this->valueHolder24268->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer29ef1 && ($this->initializer29ef1->__invoke($valueHolder24268, $this, 'getUnitOfWork', array(), $this->initializer29ef1) || 1) && $this->valueHolder24268 = $valueHolder24268;

        return $this->valueHolder24268->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer29ef1 && ($this->initializer29ef1->__invoke($valueHolder24268, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer29ef1) || 1) && $this->valueHolder24268 = $valueHolder24268;

        return $this->valueHolder24268->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer29ef1 && ($this->initializer29ef1->__invoke($valueHolder24268, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer29ef1) || 1) && $this->valueHolder24268 = $valueHolder24268;

        return $this->valueHolder24268->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer29ef1 && ($this->initializer29ef1->__invoke($valueHolder24268, $this, 'getProxyFactory', array(), $this->initializer29ef1) || 1) && $this->valueHolder24268 = $valueHolder24268;

        return $this->valueHolder24268->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer29ef1 && ($this->initializer29ef1->__invoke($valueHolder24268, $this, 'initializeObject', array('obj' => $obj), $this->initializer29ef1) || 1) && $this->valueHolder24268 = $valueHolder24268;

        return $this->valueHolder24268->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer29ef1 && ($this->initializer29ef1->__invoke($valueHolder24268, $this, 'getFilters', array(), $this->initializer29ef1) || 1) && $this->valueHolder24268 = $valueHolder24268;

        return $this->valueHolder24268->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer29ef1 && ($this->initializer29ef1->__invoke($valueHolder24268, $this, 'isFiltersStateClean', array(), $this->initializer29ef1) || 1) && $this->valueHolder24268 = $valueHolder24268;

        return $this->valueHolder24268->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer29ef1 && ($this->initializer29ef1->__invoke($valueHolder24268, $this, 'hasFilters', array(), $this->initializer29ef1) || 1) && $this->valueHolder24268 = $valueHolder24268;

        return $this->valueHolder24268->hasFilters();
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

        $instance->initializer29ef1 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder24268) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder24268 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder24268->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer29ef1 && ($this->initializer29ef1->__invoke($valueHolder24268, $this, '__get', ['name' => $name], $this->initializer29ef1) || 1) && $this->valueHolder24268 = $valueHolder24268;

        if (isset(self::$publicPropertiesb3cff[$name])) {
            return $this->valueHolder24268->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
