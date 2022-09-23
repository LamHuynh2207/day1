<?php

namespace Container3IfXynL;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder98b43 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer8d1d6 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3342f = [
        
    ];

    public function getConnection()
    {
        $this->initializer8d1d6 && ($this->initializer8d1d6->__invoke($valueHolder98b43, $this, 'getConnection', array(), $this->initializer8d1d6) || 1) && $this->valueHolder98b43 = $valueHolder98b43;

        return $this->valueHolder98b43->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer8d1d6 && ($this->initializer8d1d6->__invoke($valueHolder98b43, $this, 'getMetadataFactory', array(), $this->initializer8d1d6) || 1) && $this->valueHolder98b43 = $valueHolder98b43;

        return $this->valueHolder98b43->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer8d1d6 && ($this->initializer8d1d6->__invoke($valueHolder98b43, $this, 'getExpressionBuilder', array(), $this->initializer8d1d6) || 1) && $this->valueHolder98b43 = $valueHolder98b43;

        return $this->valueHolder98b43->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer8d1d6 && ($this->initializer8d1d6->__invoke($valueHolder98b43, $this, 'beginTransaction', array(), $this->initializer8d1d6) || 1) && $this->valueHolder98b43 = $valueHolder98b43;

        return $this->valueHolder98b43->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer8d1d6 && ($this->initializer8d1d6->__invoke($valueHolder98b43, $this, 'getCache', array(), $this->initializer8d1d6) || 1) && $this->valueHolder98b43 = $valueHolder98b43;

        return $this->valueHolder98b43->getCache();
    }

    public function transactional($func)
    {
        $this->initializer8d1d6 && ($this->initializer8d1d6->__invoke($valueHolder98b43, $this, 'transactional', array('func' => $func), $this->initializer8d1d6) || 1) && $this->valueHolder98b43 = $valueHolder98b43;

        return $this->valueHolder98b43->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer8d1d6 && ($this->initializer8d1d6->__invoke($valueHolder98b43, $this, 'wrapInTransaction', array('func' => $func), $this->initializer8d1d6) || 1) && $this->valueHolder98b43 = $valueHolder98b43;

        return $this->valueHolder98b43->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer8d1d6 && ($this->initializer8d1d6->__invoke($valueHolder98b43, $this, 'commit', array(), $this->initializer8d1d6) || 1) && $this->valueHolder98b43 = $valueHolder98b43;

        return $this->valueHolder98b43->commit();
    }

    public function rollback()
    {
        $this->initializer8d1d6 && ($this->initializer8d1d6->__invoke($valueHolder98b43, $this, 'rollback', array(), $this->initializer8d1d6) || 1) && $this->valueHolder98b43 = $valueHolder98b43;

        return $this->valueHolder98b43->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer8d1d6 && ($this->initializer8d1d6->__invoke($valueHolder98b43, $this, 'getClassMetadata', array('className' => $className), $this->initializer8d1d6) || 1) && $this->valueHolder98b43 = $valueHolder98b43;

        return $this->valueHolder98b43->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer8d1d6 && ($this->initializer8d1d6->__invoke($valueHolder98b43, $this, 'createQuery', array('dql' => $dql), $this->initializer8d1d6) || 1) && $this->valueHolder98b43 = $valueHolder98b43;

        return $this->valueHolder98b43->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer8d1d6 && ($this->initializer8d1d6->__invoke($valueHolder98b43, $this, 'createNamedQuery', array('name' => $name), $this->initializer8d1d6) || 1) && $this->valueHolder98b43 = $valueHolder98b43;

        return $this->valueHolder98b43->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer8d1d6 && ($this->initializer8d1d6->__invoke($valueHolder98b43, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer8d1d6) || 1) && $this->valueHolder98b43 = $valueHolder98b43;

        return $this->valueHolder98b43->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer8d1d6 && ($this->initializer8d1d6->__invoke($valueHolder98b43, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer8d1d6) || 1) && $this->valueHolder98b43 = $valueHolder98b43;

        return $this->valueHolder98b43->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer8d1d6 && ($this->initializer8d1d6->__invoke($valueHolder98b43, $this, 'createQueryBuilder', array(), $this->initializer8d1d6) || 1) && $this->valueHolder98b43 = $valueHolder98b43;

        return $this->valueHolder98b43->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer8d1d6 && ($this->initializer8d1d6->__invoke($valueHolder98b43, $this, 'flush', array('entity' => $entity), $this->initializer8d1d6) || 1) && $this->valueHolder98b43 = $valueHolder98b43;

        return $this->valueHolder98b43->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer8d1d6 && ($this->initializer8d1d6->__invoke($valueHolder98b43, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8d1d6) || 1) && $this->valueHolder98b43 = $valueHolder98b43;

        return $this->valueHolder98b43->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer8d1d6 && ($this->initializer8d1d6->__invoke($valueHolder98b43, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer8d1d6) || 1) && $this->valueHolder98b43 = $valueHolder98b43;

        return $this->valueHolder98b43->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer8d1d6 && ($this->initializer8d1d6->__invoke($valueHolder98b43, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer8d1d6) || 1) && $this->valueHolder98b43 = $valueHolder98b43;

        return $this->valueHolder98b43->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer8d1d6 && ($this->initializer8d1d6->__invoke($valueHolder98b43, $this, 'clear', array('entityName' => $entityName), $this->initializer8d1d6) || 1) && $this->valueHolder98b43 = $valueHolder98b43;

        return $this->valueHolder98b43->clear($entityName);
    }

    public function close()
    {
        $this->initializer8d1d6 && ($this->initializer8d1d6->__invoke($valueHolder98b43, $this, 'close', array(), $this->initializer8d1d6) || 1) && $this->valueHolder98b43 = $valueHolder98b43;

        return $this->valueHolder98b43->close();
    }

    public function persist($entity)
    {
        $this->initializer8d1d6 && ($this->initializer8d1d6->__invoke($valueHolder98b43, $this, 'persist', array('entity' => $entity), $this->initializer8d1d6) || 1) && $this->valueHolder98b43 = $valueHolder98b43;

        return $this->valueHolder98b43->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer8d1d6 && ($this->initializer8d1d6->__invoke($valueHolder98b43, $this, 'remove', array('entity' => $entity), $this->initializer8d1d6) || 1) && $this->valueHolder98b43 = $valueHolder98b43;

        return $this->valueHolder98b43->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer8d1d6 && ($this->initializer8d1d6->__invoke($valueHolder98b43, $this, 'refresh', array('entity' => $entity), $this->initializer8d1d6) || 1) && $this->valueHolder98b43 = $valueHolder98b43;

        return $this->valueHolder98b43->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer8d1d6 && ($this->initializer8d1d6->__invoke($valueHolder98b43, $this, 'detach', array('entity' => $entity), $this->initializer8d1d6) || 1) && $this->valueHolder98b43 = $valueHolder98b43;

        return $this->valueHolder98b43->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer8d1d6 && ($this->initializer8d1d6->__invoke($valueHolder98b43, $this, 'merge', array('entity' => $entity), $this->initializer8d1d6) || 1) && $this->valueHolder98b43 = $valueHolder98b43;

        return $this->valueHolder98b43->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer8d1d6 && ($this->initializer8d1d6->__invoke($valueHolder98b43, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer8d1d6) || 1) && $this->valueHolder98b43 = $valueHolder98b43;

        return $this->valueHolder98b43->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer8d1d6 && ($this->initializer8d1d6->__invoke($valueHolder98b43, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8d1d6) || 1) && $this->valueHolder98b43 = $valueHolder98b43;

        return $this->valueHolder98b43->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer8d1d6 && ($this->initializer8d1d6->__invoke($valueHolder98b43, $this, 'getRepository', array('entityName' => $entityName), $this->initializer8d1d6) || 1) && $this->valueHolder98b43 = $valueHolder98b43;

        return $this->valueHolder98b43->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer8d1d6 && ($this->initializer8d1d6->__invoke($valueHolder98b43, $this, 'contains', array('entity' => $entity), $this->initializer8d1d6) || 1) && $this->valueHolder98b43 = $valueHolder98b43;

        return $this->valueHolder98b43->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer8d1d6 && ($this->initializer8d1d6->__invoke($valueHolder98b43, $this, 'getEventManager', array(), $this->initializer8d1d6) || 1) && $this->valueHolder98b43 = $valueHolder98b43;

        return $this->valueHolder98b43->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer8d1d6 && ($this->initializer8d1d6->__invoke($valueHolder98b43, $this, 'getConfiguration', array(), $this->initializer8d1d6) || 1) && $this->valueHolder98b43 = $valueHolder98b43;

        return $this->valueHolder98b43->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer8d1d6 && ($this->initializer8d1d6->__invoke($valueHolder98b43, $this, 'isOpen', array(), $this->initializer8d1d6) || 1) && $this->valueHolder98b43 = $valueHolder98b43;

        return $this->valueHolder98b43->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer8d1d6 && ($this->initializer8d1d6->__invoke($valueHolder98b43, $this, 'getUnitOfWork', array(), $this->initializer8d1d6) || 1) && $this->valueHolder98b43 = $valueHolder98b43;

        return $this->valueHolder98b43->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer8d1d6 && ($this->initializer8d1d6->__invoke($valueHolder98b43, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8d1d6) || 1) && $this->valueHolder98b43 = $valueHolder98b43;

        return $this->valueHolder98b43->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer8d1d6 && ($this->initializer8d1d6->__invoke($valueHolder98b43, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8d1d6) || 1) && $this->valueHolder98b43 = $valueHolder98b43;

        return $this->valueHolder98b43->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer8d1d6 && ($this->initializer8d1d6->__invoke($valueHolder98b43, $this, 'getProxyFactory', array(), $this->initializer8d1d6) || 1) && $this->valueHolder98b43 = $valueHolder98b43;

        return $this->valueHolder98b43->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer8d1d6 && ($this->initializer8d1d6->__invoke($valueHolder98b43, $this, 'initializeObject', array('obj' => $obj), $this->initializer8d1d6) || 1) && $this->valueHolder98b43 = $valueHolder98b43;

        return $this->valueHolder98b43->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer8d1d6 && ($this->initializer8d1d6->__invoke($valueHolder98b43, $this, 'getFilters', array(), $this->initializer8d1d6) || 1) && $this->valueHolder98b43 = $valueHolder98b43;

        return $this->valueHolder98b43->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer8d1d6 && ($this->initializer8d1d6->__invoke($valueHolder98b43, $this, 'isFiltersStateClean', array(), $this->initializer8d1d6) || 1) && $this->valueHolder98b43 = $valueHolder98b43;

        return $this->valueHolder98b43->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer8d1d6 && ($this->initializer8d1d6->__invoke($valueHolder98b43, $this, 'hasFilters', array(), $this->initializer8d1d6) || 1) && $this->valueHolder98b43 = $valueHolder98b43;

        return $this->valueHolder98b43->hasFilters();
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

        $instance->initializer8d1d6 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder98b43) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder98b43 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder98b43->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer8d1d6 && ($this->initializer8d1d6->__invoke($valueHolder98b43, $this, '__get', ['name' => $name], $this->initializer8d1d6) || 1) && $this->valueHolder98b43 = $valueHolder98b43;

        if (isset(self::$publicProperties3342f[$name])) {
            return $this->valueHolder98b43->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder98b43;

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

        $targetObject = $this->valueHolder98b43;
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
        $this->initializer8d1d6 && ($this->initializer8d1d6->__invoke($valueHolder98b43, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8d1d6) || 1) && $this->valueHolder98b43 = $valueHolder98b43;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder98b43;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder98b43;
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
        $this->initializer8d1d6 && ($this->initializer8d1d6->__invoke($valueHolder98b43, $this, '__isset', array('name' => $name), $this->initializer8d1d6) || 1) && $this->valueHolder98b43 = $valueHolder98b43;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder98b43;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder98b43;
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
        $this->initializer8d1d6 && ($this->initializer8d1d6->__invoke($valueHolder98b43, $this, '__unset', array('name' => $name), $this->initializer8d1d6) || 1) && $this->valueHolder98b43 = $valueHolder98b43;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder98b43;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder98b43;
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
        $this->initializer8d1d6 && ($this->initializer8d1d6->__invoke($valueHolder98b43, $this, '__clone', array(), $this->initializer8d1d6) || 1) && $this->valueHolder98b43 = $valueHolder98b43;

        $this->valueHolder98b43 = clone $this->valueHolder98b43;
    }

    public function __sleep()
    {
        $this->initializer8d1d6 && ($this->initializer8d1d6->__invoke($valueHolder98b43, $this, '__sleep', array(), $this->initializer8d1d6) || 1) && $this->valueHolder98b43 = $valueHolder98b43;

        return array('valueHolder98b43');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8d1d6 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8d1d6;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer8d1d6 && ($this->initializer8d1d6->__invoke($valueHolder98b43, $this, 'initializeProxy', array(), $this->initializer8d1d6) || 1) && $this->valueHolder98b43 = $valueHolder98b43;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder98b43;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder98b43;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
