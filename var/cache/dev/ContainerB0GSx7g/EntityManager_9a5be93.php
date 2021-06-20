<?php

namespace ContainerB0GSx7g;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3d78b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer08d82 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesee102 = [
        
    ];

    public function getConnection()
    {
        $this->initializer08d82 && ($this->initializer08d82->__invoke($valueHolder3d78b, $this, 'getConnection', array(), $this->initializer08d82) || 1) && $this->valueHolder3d78b = $valueHolder3d78b;

        return $this->valueHolder3d78b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer08d82 && ($this->initializer08d82->__invoke($valueHolder3d78b, $this, 'getMetadataFactory', array(), $this->initializer08d82) || 1) && $this->valueHolder3d78b = $valueHolder3d78b;

        return $this->valueHolder3d78b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer08d82 && ($this->initializer08d82->__invoke($valueHolder3d78b, $this, 'getExpressionBuilder', array(), $this->initializer08d82) || 1) && $this->valueHolder3d78b = $valueHolder3d78b;

        return $this->valueHolder3d78b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer08d82 && ($this->initializer08d82->__invoke($valueHolder3d78b, $this, 'beginTransaction', array(), $this->initializer08d82) || 1) && $this->valueHolder3d78b = $valueHolder3d78b;

        return $this->valueHolder3d78b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer08d82 && ($this->initializer08d82->__invoke($valueHolder3d78b, $this, 'getCache', array(), $this->initializer08d82) || 1) && $this->valueHolder3d78b = $valueHolder3d78b;

        return $this->valueHolder3d78b->getCache();
    }

    public function transactional($func)
    {
        $this->initializer08d82 && ($this->initializer08d82->__invoke($valueHolder3d78b, $this, 'transactional', array('func' => $func), $this->initializer08d82) || 1) && $this->valueHolder3d78b = $valueHolder3d78b;

        return $this->valueHolder3d78b->transactional($func);
    }

    public function commit()
    {
        $this->initializer08d82 && ($this->initializer08d82->__invoke($valueHolder3d78b, $this, 'commit', array(), $this->initializer08d82) || 1) && $this->valueHolder3d78b = $valueHolder3d78b;

        return $this->valueHolder3d78b->commit();
    }

    public function rollback()
    {
        $this->initializer08d82 && ($this->initializer08d82->__invoke($valueHolder3d78b, $this, 'rollback', array(), $this->initializer08d82) || 1) && $this->valueHolder3d78b = $valueHolder3d78b;

        return $this->valueHolder3d78b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer08d82 && ($this->initializer08d82->__invoke($valueHolder3d78b, $this, 'getClassMetadata', array('className' => $className), $this->initializer08d82) || 1) && $this->valueHolder3d78b = $valueHolder3d78b;

        return $this->valueHolder3d78b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer08d82 && ($this->initializer08d82->__invoke($valueHolder3d78b, $this, 'createQuery', array('dql' => $dql), $this->initializer08d82) || 1) && $this->valueHolder3d78b = $valueHolder3d78b;

        return $this->valueHolder3d78b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer08d82 && ($this->initializer08d82->__invoke($valueHolder3d78b, $this, 'createNamedQuery', array('name' => $name), $this->initializer08d82) || 1) && $this->valueHolder3d78b = $valueHolder3d78b;

        return $this->valueHolder3d78b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer08d82 && ($this->initializer08d82->__invoke($valueHolder3d78b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer08d82) || 1) && $this->valueHolder3d78b = $valueHolder3d78b;

        return $this->valueHolder3d78b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer08d82 && ($this->initializer08d82->__invoke($valueHolder3d78b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer08d82) || 1) && $this->valueHolder3d78b = $valueHolder3d78b;

        return $this->valueHolder3d78b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer08d82 && ($this->initializer08d82->__invoke($valueHolder3d78b, $this, 'createQueryBuilder', array(), $this->initializer08d82) || 1) && $this->valueHolder3d78b = $valueHolder3d78b;

        return $this->valueHolder3d78b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer08d82 && ($this->initializer08d82->__invoke($valueHolder3d78b, $this, 'flush', array('entity' => $entity), $this->initializer08d82) || 1) && $this->valueHolder3d78b = $valueHolder3d78b;

        return $this->valueHolder3d78b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer08d82 && ($this->initializer08d82->__invoke($valueHolder3d78b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer08d82) || 1) && $this->valueHolder3d78b = $valueHolder3d78b;

        return $this->valueHolder3d78b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer08d82 && ($this->initializer08d82->__invoke($valueHolder3d78b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer08d82) || 1) && $this->valueHolder3d78b = $valueHolder3d78b;

        return $this->valueHolder3d78b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer08d82 && ($this->initializer08d82->__invoke($valueHolder3d78b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer08d82) || 1) && $this->valueHolder3d78b = $valueHolder3d78b;

        return $this->valueHolder3d78b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer08d82 && ($this->initializer08d82->__invoke($valueHolder3d78b, $this, 'clear', array('entityName' => $entityName), $this->initializer08d82) || 1) && $this->valueHolder3d78b = $valueHolder3d78b;

        return $this->valueHolder3d78b->clear($entityName);
    }

    public function close()
    {
        $this->initializer08d82 && ($this->initializer08d82->__invoke($valueHolder3d78b, $this, 'close', array(), $this->initializer08d82) || 1) && $this->valueHolder3d78b = $valueHolder3d78b;

        return $this->valueHolder3d78b->close();
    }

    public function persist($entity)
    {
        $this->initializer08d82 && ($this->initializer08d82->__invoke($valueHolder3d78b, $this, 'persist', array('entity' => $entity), $this->initializer08d82) || 1) && $this->valueHolder3d78b = $valueHolder3d78b;

        return $this->valueHolder3d78b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer08d82 && ($this->initializer08d82->__invoke($valueHolder3d78b, $this, 'remove', array('entity' => $entity), $this->initializer08d82) || 1) && $this->valueHolder3d78b = $valueHolder3d78b;

        return $this->valueHolder3d78b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer08d82 && ($this->initializer08d82->__invoke($valueHolder3d78b, $this, 'refresh', array('entity' => $entity), $this->initializer08d82) || 1) && $this->valueHolder3d78b = $valueHolder3d78b;

        return $this->valueHolder3d78b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer08d82 && ($this->initializer08d82->__invoke($valueHolder3d78b, $this, 'detach', array('entity' => $entity), $this->initializer08d82) || 1) && $this->valueHolder3d78b = $valueHolder3d78b;

        return $this->valueHolder3d78b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer08d82 && ($this->initializer08d82->__invoke($valueHolder3d78b, $this, 'merge', array('entity' => $entity), $this->initializer08d82) || 1) && $this->valueHolder3d78b = $valueHolder3d78b;

        return $this->valueHolder3d78b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer08d82 && ($this->initializer08d82->__invoke($valueHolder3d78b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer08d82) || 1) && $this->valueHolder3d78b = $valueHolder3d78b;

        return $this->valueHolder3d78b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer08d82 && ($this->initializer08d82->__invoke($valueHolder3d78b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer08d82) || 1) && $this->valueHolder3d78b = $valueHolder3d78b;

        return $this->valueHolder3d78b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer08d82 && ($this->initializer08d82->__invoke($valueHolder3d78b, $this, 'getRepository', array('entityName' => $entityName), $this->initializer08d82) || 1) && $this->valueHolder3d78b = $valueHolder3d78b;

        return $this->valueHolder3d78b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer08d82 && ($this->initializer08d82->__invoke($valueHolder3d78b, $this, 'contains', array('entity' => $entity), $this->initializer08d82) || 1) && $this->valueHolder3d78b = $valueHolder3d78b;

        return $this->valueHolder3d78b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer08d82 && ($this->initializer08d82->__invoke($valueHolder3d78b, $this, 'getEventManager', array(), $this->initializer08d82) || 1) && $this->valueHolder3d78b = $valueHolder3d78b;

        return $this->valueHolder3d78b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer08d82 && ($this->initializer08d82->__invoke($valueHolder3d78b, $this, 'getConfiguration', array(), $this->initializer08d82) || 1) && $this->valueHolder3d78b = $valueHolder3d78b;

        return $this->valueHolder3d78b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer08d82 && ($this->initializer08d82->__invoke($valueHolder3d78b, $this, 'isOpen', array(), $this->initializer08d82) || 1) && $this->valueHolder3d78b = $valueHolder3d78b;

        return $this->valueHolder3d78b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer08d82 && ($this->initializer08d82->__invoke($valueHolder3d78b, $this, 'getUnitOfWork', array(), $this->initializer08d82) || 1) && $this->valueHolder3d78b = $valueHolder3d78b;

        return $this->valueHolder3d78b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer08d82 && ($this->initializer08d82->__invoke($valueHolder3d78b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer08d82) || 1) && $this->valueHolder3d78b = $valueHolder3d78b;

        return $this->valueHolder3d78b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer08d82 && ($this->initializer08d82->__invoke($valueHolder3d78b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer08d82) || 1) && $this->valueHolder3d78b = $valueHolder3d78b;

        return $this->valueHolder3d78b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer08d82 && ($this->initializer08d82->__invoke($valueHolder3d78b, $this, 'getProxyFactory', array(), $this->initializer08d82) || 1) && $this->valueHolder3d78b = $valueHolder3d78b;

        return $this->valueHolder3d78b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer08d82 && ($this->initializer08d82->__invoke($valueHolder3d78b, $this, 'initializeObject', array('obj' => $obj), $this->initializer08d82) || 1) && $this->valueHolder3d78b = $valueHolder3d78b;

        return $this->valueHolder3d78b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer08d82 && ($this->initializer08d82->__invoke($valueHolder3d78b, $this, 'getFilters', array(), $this->initializer08d82) || 1) && $this->valueHolder3d78b = $valueHolder3d78b;

        return $this->valueHolder3d78b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer08d82 && ($this->initializer08d82->__invoke($valueHolder3d78b, $this, 'isFiltersStateClean', array(), $this->initializer08d82) || 1) && $this->valueHolder3d78b = $valueHolder3d78b;

        return $this->valueHolder3d78b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer08d82 && ($this->initializer08d82->__invoke($valueHolder3d78b, $this, 'hasFilters', array(), $this->initializer08d82) || 1) && $this->valueHolder3d78b = $valueHolder3d78b;

        return $this->valueHolder3d78b->hasFilters();
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

        $instance->initializer08d82 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder3d78b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3d78b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3d78b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer08d82 && ($this->initializer08d82->__invoke($valueHolder3d78b, $this, '__get', ['name' => $name], $this->initializer08d82) || 1) && $this->valueHolder3d78b = $valueHolder3d78b;

        if (isset(self::$publicPropertiesee102[$name])) {
            return $this->valueHolder3d78b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3d78b;

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

        $targetObject = $this->valueHolder3d78b;
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
        $this->initializer08d82 && ($this->initializer08d82->__invoke($valueHolder3d78b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer08d82) || 1) && $this->valueHolder3d78b = $valueHolder3d78b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3d78b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3d78b;
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
        $this->initializer08d82 && ($this->initializer08d82->__invoke($valueHolder3d78b, $this, '__isset', array('name' => $name), $this->initializer08d82) || 1) && $this->valueHolder3d78b = $valueHolder3d78b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3d78b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3d78b;
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
        $this->initializer08d82 && ($this->initializer08d82->__invoke($valueHolder3d78b, $this, '__unset', array('name' => $name), $this->initializer08d82) || 1) && $this->valueHolder3d78b = $valueHolder3d78b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3d78b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3d78b;
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
        $this->initializer08d82 && ($this->initializer08d82->__invoke($valueHolder3d78b, $this, '__clone', array(), $this->initializer08d82) || 1) && $this->valueHolder3d78b = $valueHolder3d78b;

        $this->valueHolder3d78b = clone $this->valueHolder3d78b;
    }

    public function __sleep()
    {
        $this->initializer08d82 && ($this->initializer08d82->__invoke($valueHolder3d78b, $this, '__sleep', array(), $this->initializer08d82) || 1) && $this->valueHolder3d78b = $valueHolder3d78b;

        return array('valueHolder3d78b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer08d82 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer08d82;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer08d82 && ($this->initializer08d82->__invoke($valueHolder3d78b, $this, 'initializeProxy', array(), $this->initializer08d82) || 1) && $this->valueHolder3d78b = $valueHolder3d78b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3d78b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3d78b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
