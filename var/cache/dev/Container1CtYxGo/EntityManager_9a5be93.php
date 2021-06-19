<?php

namespace Container1CtYxGo;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3006e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer794c2 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties29f13 = [
        
    ];

    public function getConnection()
    {
        $this->initializer794c2 && ($this->initializer794c2->__invoke($valueHolder3006e, $this, 'getConnection', array(), $this->initializer794c2) || 1) && $this->valueHolder3006e = $valueHolder3006e;

        return $this->valueHolder3006e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer794c2 && ($this->initializer794c2->__invoke($valueHolder3006e, $this, 'getMetadataFactory', array(), $this->initializer794c2) || 1) && $this->valueHolder3006e = $valueHolder3006e;

        return $this->valueHolder3006e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer794c2 && ($this->initializer794c2->__invoke($valueHolder3006e, $this, 'getExpressionBuilder', array(), $this->initializer794c2) || 1) && $this->valueHolder3006e = $valueHolder3006e;

        return $this->valueHolder3006e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer794c2 && ($this->initializer794c2->__invoke($valueHolder3006e, $this, 'beginTransaction', array(), $this->initializer794c2) || 1) && $this->valueHolder3006e = $valueHolder3006e;

        return $this->valueHolder3006e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer794c2 && ($this->initializer794c2->__invoke($valueHolder3006e, $this, 'getCache', array(), $this->initializer794c2) || 1) && $this->valueHolder3006e = $valueHolder3006e;

        return $this->valueHolder3006e->getCache();
    }

    public function transactional($func)
    {
        $this->initializer794c2 && ($this->initializer794c2->__invoke($valueHolder3006e, $this, 'transactional', array('func' => $func), $this->initializer794c2) || 1) && $this->valueHolder3006e = $valueHolder3006e;

        return $this->valueHolder3006e->transactional($func);
    }

    public function commit()
    {
        $this->initializer794c2 && ($this->initializer794c2->__invoke($valueHolder3006e, $this, 'commit', array(), $this->initializer794c2) || 1) && $this->valueHolder3006e = $valueHolder3006e;

        return $this->valueHolder3006e->commit();
    }

    public function rollback()
    {
        $this->initializer794c2 && ($this->initializer794c2->__invoke($valueHolder3006e, $this, 'rollback', array(), $this->initializer794c2) || 1) && $this->valueHolder3006e = $valueHolder3006e;

        return $this->valueHolder3006e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer794c2 && ($this->initializer794c2->__invoke($valueHolder3006e, $this, 'getClassMetadata', array('className' => $className), $this->initializer794c2) || 1) && $this->valueHolder3006e = $valueHolder3006e;

        return $this->valueHolder3006e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer794c2 && ($this->initializer794c2->__invoke($valueHolder3006e, $this, 'createQuery', array('dql' => $dql), $this->initializer794c2) || 1) && $this->valueHolder3006e = $valueHolder3006e;

        return $this->valueHolder3006e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer794c2 && ($this->initializer794c2->__invoke($valueHolder3006e, $this, 'createNamedQuery', array('name' => $name), $this->initializer794c2) || 1) && $this->valueHolder3006e = $valueHolder3006e;

        return $this->valueHolder3006e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer794c2 && ($this->initializer794c2->__invoke($valueHolder3006e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer794c2) || 1) && $this->valueHolder3006e = $valueHolder3006e;

        return $this->valueHolder3006e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer794c2 && ($this->initializer794c2->__invoke($valueHolder3006e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer794c2) || 1) && $this->valueHolder3006e = $valueHolder3006e;

        return $this->valueHolder3006e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer794c2 && ($this->initializer794c2->__invoke($valueHolder3006e, $this, 'createQueryBuilder', array(), $this->initializer794c2) || 1) && $this->valueHolder3006e = $valueHolder3006e;

        return $this->valueHolder3006e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer794c2 && ($this->initializer794c2->__invoke($valueHolder3006e, $this, 'flush', array('entity' => $entity), $this->initializer794c2) || 1) && $this->valueHolder3006e = $valueHolder3006e;

        return $this->valueHolder3006e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer794c2 && ($this->initializer794c2->__invoke($valueHolder3006e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer794c2) || 1) && $this->valueHolder3006e = $valueHolder3006e;

        return $this->valueHolder3006e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer794c2 && ($this->initializer794c2->__invoke($valueHolder3006e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer794c2) || 1) && $this->valueHolder3006e = $valueHolder3006e;

        return $this->valueHolder3006e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer794c2 && ($this->initializer794c2->__invoke($valueHolder3006e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer794c2) || 1) && $this->valueHolder3006e = $valueHolder3006e;

        return $this->valueHolder3006e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer794c2 && ($this->initializer794c2->__invoke($valueHolder3006e, $this, 'clear', array('entityName' => $entityName), $this->initializer794c2) || 1) && $this->valueHolder3006e = $valueHolder3006e;

        return $this->valueHolder3006e->clear($entityName);
    }

    public function close()
    {
        $this->initializer794c2 && ($this->initializer794c2->__invoke($valueHolder3006e, $this, 'close', array(), $this->initializer794c2) || 1) && $this->valueHolder3006e = $valueHolder3006e;

        return $this->valueHolder3006e->close();
    }

    public function persist($entity)
    {
        $this->initializer794c2 && ($this->initializer794c2->__invoke($valueHolder3006e, $this, 'persist', array('entity' => $entity), $this->initializer794c2) || 1) && $this->valueHolder3006e = $valueHolder3006e;

        return $this->valueHolder3006e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer794c2 && ($this->initializer794c2->__invoke($valueHolder3006e, $this, 'remove', array('entity' => $entity), $this->initializer794c2) || 1) && $this->valueHolder3006e = $valueHolder3006e;

        return $this->valueHolder3006e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer794c2 && ($this->initializer794c2->__invoke($valueHolder3006e, $this, 'refresh', array('entity' => $entity), $this->initializer794c2) || 1) && $this->valueHolder3006e = $valueHolder3006e;

        return $this->valueHolder3006e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer794c2 && ($this->initializer794c2->__invoke($valueHolder3006e, $this, 'detach', array('entity' => $entity), $this->initializer794c2) || 1) && $this->valueHolder3006e = $valueHolder3006e;

        return $this->valueHolder3006e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer794c2 && ($this->initializer794c2->__invoke($valueHolder3006e, $this, 'merge', array('entity' => $entity), $this->initializer794c2) || 1) && $this->valueHolder3006e = $valueHolder3006e;

        return $this->valueHolder3006e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer794c2 && ($this->initializer794c2->__invoke($valueHolder3006e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer794c2) || 1) && $this->valueHolder3006e = $valueHolder3006e;

        return $this->valueHolder3006e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer794c2 && ($this->initializer794c2->__invoke($valueHolder3006e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer794c2) || 1) && $this->valueHolder3006e = $valueHolder3006e;

        return $this->valueHolder3006e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer794c2 && ($this->initializer794c2->__invoke($valueHolder3006e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer794c2) || 1) && $this->valueHolder3006e = $valueHolder3006e;

        return $this->valueHolder3006e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer794c2 && ($this->initializer794c2->__invoke($valueHolder3006e, $this, 'contains', array('entity' => $entity), $this->initializer794c2) || 1) && $this->valueHolder3006e = $valueHolder3006e;

        return $this->valueHolder3006e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer794c2 && ($this->initializer794c2->__invoke($valueHolder3006e, $this, 'getEventManager', array(), $this->initializer794c2) || 1) && $this->valueHolder3006e = $valueHolder3006e;

        return $this->valueHolder3006e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer794c2 && ($this->initializer794c2->__invoke($valueHolder3006e, $this, 'getConfiguration', array(), $this->initializer794c2) || 1) && $this->valueHolder3006e = $valueHolder3006e;

        return $this->valueHolder3006e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer794c2 && ($this->initializer794c2->__invoke($valueHolder3006e, $this, 'isOpen', array(), $this->initializer794c2) || 1) && $this->valueHolder3006e = $valueHolder3006e;

        return $this->valueHolder3006e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer794c2 && ($this->initializer794c2->__invoke($valueHolder3006e, $this, 'getUnitOfWork', array(), $this->initializer794c2) || 1) && $this->valueHolder3006e = $valueHolder3006e;

        return $this->valueHolder3006e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer794c2 && ($this->initializer794c2->__invoke($valueHolder3006e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer794c2) || 1) && $this->valueHolder3006e = $valueHolder3006e;

        return $this->valueHolder3006e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer794c2 && ($this->initializer794c2->__invoke($valueHolder3006e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer794c2) || 1) && $this->valueHolder3006e = $valueHolder3006e;

        return $this->valueHolder3006e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer794c2 && ($this->initializer794c2->__invoke($valueHolder3006e, $this, 'getProxyFactory', array(), $this->initializer794c2) || 1) && $this->valueHolder3006e = $valueHolder3006e;

        return $this->valueHolder3006e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer794c2 && ($this->initializer794c2->__invoke($valueHolder3006e, $this, 'initializeObject', array('obj' => $obj), $this->initializer794c2) || 1) && $this->valueHolder3006e = $valueHolder3006e;

        return $this->valueHolder3006e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer794c2 && ($this->initializer794c2->__invoke($valueHolder3006e, $this, 'getFilters', array(), $this->initializer794c2) || 1) && $this->valueHolder3006e = $valueHolder3006e;

        return $this->valueHolder3006e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer794c2 && ($this->initializer794c2->__invoke($valueHolder3006e, $this, 'isFiltersStateClean', array(), $this->initializer794c2) || 1) && $this->valueHolder3006e = $valueHolder3006e;

        return $this->valueHolder3006e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer794c2 && ($this->initializer794c2->__invoke($valueHolder3006e, $this, 'hasFilters', array(), $this->initializer794c2) || 1) && $this->valueHolder3006e = $valueHolder3006e;

        return $this->valueHolder3006e->hasFilters();
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

        $instance->initializer794c2 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder3006e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3006e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3006e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer794c2 && ($this->initializer794c2->__invoke($valueHolder3006e, $this, '__get', ['name' => $name], $this->initializer794c2) || 1) && $this->valueHolder3006e = $valueHolder3006e;

        if (isset(self::$publicProperties29f13[$name])) {
            return $this->valueHolder3006e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3006e;

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

        $targetObject = $this->valueHolder3006e;
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
        $this->initializer794c2 && ($this->initializer794c2->__invoke($valueHolder3006e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer794c2) || 1) && $this->valueHolder3006e = $valueHolder3006e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3006e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3006e;
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
        $this->initializer794c2 && ($this->initializer794c2->__invoke($valueHolder3006e, $this, '__isset', array('name' => $name), $this->initializer794c2) || 1) && $this->valueHolder3006e = $valueHolder3006e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3006e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3006e;
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
        $this->initializer794c2 && ($this->initializer794c2->__invoke($valueHolder3006e, $this, '__unset', array('name' => $name), $this->initializer794c2) || 1) && $this->valueHolder3006e = $valueHolder3006e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3006e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3006e;
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
        $this->initializer794c2 && ($this->initializer794c2->__invoke($valueHolder3006e, $this, '__clone', array(), $this->initializer794c2) || 1) && $this->valueHolder3006e = $valueHolder3006e;

        $this->valueHolder3006e = clone $this->valueHolder3006e;
    }

    public function __sleep()
    {
        $this->initializer794c2 && ($this->initializer794c2->__invoke($valueHolder3006e, $this, '__sleep', array(), $this->initializer794c2) || 1) && $this->valueHolder3006e = $valueHolder3006e;

        return array('valueHolder3006e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer794c2 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer794c2;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer794c2 && ($this->initializer794c2->__invoke($valueHolder3006e, $this, 'initializeProxy', array(), $this->initializer794c2) || 1) && $this->valueHolder3006e = $valueHolder3006e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3006e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3006e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
