<?php

namespace ContainerZhtUYqA;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder5283f = null;
    private $initializer0934d = null;
    private static $publicProperties80d60 = [
        
    ];
    public function getConnection()
    {
        $this->initializer0934d && ($this->initializer0934d->__invoke($valueHolder5283f, $this, 'getConnection', array(), $this->initializer0934d) || 1) && $this->valueHolder5283f = $valueHolder5283f;
        return $this->valueHolder5283f->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer0934d && ($this->initializer0934d->__invoke($valueHolder5283f, $this, 'getMetadataFactory', array(), $this->initializer0934d) || 1) && $this->valueHolder5283f = $valueHolder5283f;
        return $this->valueHolder5283f->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer0934d && ($this->initializer0934d->__invoke($valueHolder5283f, $this, 'getExpressionBuilder', array(), $this->initializer0934d) || 1) && $this->valueHolder5283f = $valueHolder5283f;
        return $this->valueHolder5283f->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer0934d && ($this->initializer0934d->__invoke($valueHolder5283f, $this, 'beginTransaction', array(), $this->initializer0934d) || 1) && $this->valueHolder5283f = $valueHolder5283f;
        return $this->valueHolder5283f->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer0934d && ($this->initializer0934d->__invoke($valueHolder5283f, $this, 'getCache', array(), $this->initializer0934d) || 1) && $this->valueHolder5283f = $valueHolder5283f;
        return $this->valueHolder5283f->getCache();
    }
    public function transactional($func)
    {
        $this->initializer0934d && ($this->initializer0934d->__invoke($valueHolder5283f, $this, 'transactional', array('func' => $func), $this->initializer0934d) || 1) && $this->valueHolder5283f = $valueHolder5283f;
        return $this->valueHolder5283f->transactional($func);
    }
    public function commit()
    {
        $this->initializer0934d && ($this->initializer0934d->__invoke($valueHolder5283f, $this, 'commit', array(), $this->initializer0934d) || 1) && $this->valueHolder5283f = $valueHolder5283f;
        return $this->valueHolder5283f->commit();
    }
    public function rollback()
    {
        $this->initializer0934d && ($this->initializer0934d->__invoke($valueHolder5283f, $this, 'rollback', array(), $this->initializer0934d) || 1) && $this->valueHolder5283f = $valueHolder5283f;
        return $this->valueHolder5283f->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer0934d && ($this->initializer0934d->__invoke($valueHolder5283f, $this, 'getClassMetadata', array('className' => $className), $this->initializer0934d) || 1) && $this->valueHolder5283f = $valueHolder5283f;
        return $this->valueHolder5283f->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer0934d && ($this->initializer0934d->__invoke($valueHolder5283f, $this, 'createQuery', array('dql' => $dql), $this->initializer0934d) || 1) && $this->valueHolder5283f = $valueHolder5283f;
        return $this->valueHolder5283f->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer0934d && ($this->initializer0934d->__invoke($valueHolder5283f, $this, 'createNamedQuery', array('name' => $name), $this->initializer0934d) || 1) && $this->valueHolder5283f = $valueHolder5283f;
        return $this->valueHolder5283f->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer0934d && ($this->initializer0934d->__invoke($valueHolder5283f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer0934d) || 1) && $this->valueHolder5283f = $valueHolder5283f;
        return $this->valueHolder5283f->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer0934d && ($this->initializer0934d->__invoke($valueHolder5283f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer0934d) || 1) && $this->valueHolder5283f = $valueHolder5283f;
        return $this->valueHolder5283f->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer0934d && ($this->initializer0934d->__invoke($valueHolder5283f, $this, 'createQueryBuilder', array(), $this->initializer0934d) || 1) && $this->valueHolder5283f = $valueHolder5283f;
        return $this->valueHolder5283f->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer0934d && ($this->initializer0934d->__invoke($valueHolder5283f, $this, 'flush', array('entity' => $entity), $this->initializer0934d) || 1) && $this->valueHolder5283f = $valueHolder5283f;
        return $this->valueHolder5283f->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer0934d && ($this->initializer0934d->__invoke($valueHolder5283f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0934d) || 1) && $this->valueHolder5283f = $valueHolder5283f;
        return $this->valueHolder5283f->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer0934d && ($this->initializer0934d->__invoke($valueHolder5283f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer0934d) || 1) && $this->valueHolder5283f = $valueHolder5283f;
        return $this->valueHolder5283f->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer0934d && ($this->initializer0934d->__invoke($valueHolder5283f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer0934d) || 1) && $this->valueHolder5283f = $valueHolder5283f;
        return $this->valueHolder5283f->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer0934d && ($this->initializer0934d->__invoke($valueHolder5283f, $this, 'clear', array('entityName' => $entityName), $this->initializer0934d) || 1) && $this->valueHolder5283f = $valueHolder5283f;
        return $this->valueHolder5283f->clear($entityName);
    }
    public function close()
    {
        $this->initializer0934d && ($this->initializer0934d->__invoke($valueHolder5283f, $this, 'close', array(), $this->initializer0934d) || 1) && $this->valueHolder5283f = $valueHolder5283f;
        return $this->valueHolder5283f->close();
    }
    public function persist($entity)
    {
        $this->initializer0934d && ($this->initializer0934d->__invoke($valueHolder5283f, $this, 'persist', array('entity' => $entity), $this->initializer0934d) || 1) && $this->valueHolder5283f = $valueHolder5283f;
        return $this->valueHolder5283f->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer0934d && ($this->initializer0934d->__invoke($valueHolder5283f, $this, 'remove', array('entity' => $entity), $this->initializer0934d) || 1) && $this->valueHolder5283f = $valueHolder5283f;
        return $this->valueHolder5283f->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer0934d && ($this->initializer0934d->__invoke($valueHolder5283f, $this, 'refresh', array('entity' => $entity), $this->initializer0934d) || 1) && $this->valueHolder5283f = $valueHolder5283f;
        return $this->valueHolder5283f->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer0934d && ($this->initializer0934d->__invoke($valueHolder5283f, $this, 'detach', array('entity' => $entity), $this->initializer0934d) || 1) && $this->valueHolder5283f = $valueHolder5283f;
        return $this->valueHolder5283f->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer0934d && ($this->initializer0934d->__invoke($valueHolder5283f, $this, 'merge', array('entity' => $entity), $this->initializer0934d) || 1) && $this->valueHolder5283f = $valueHolder5283f;
        return $this->valueHolder5283f->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer0934d && ($this->initializer0934d->__invoke($valueHolder5283f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer0934d) || 1) && $this->valueHolder5283f = $valueHolder5283f;
        return $this->valueHolder5283f->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer0934d && ($this->initializer0934d->__invoke($valueHolder5283f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0934d) || 1) && $this->valueHolder5283f = $valueHolder5283f;
        return $this->valueHolder5283f->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer0934d && ($this->initializer0934d->__invoke($valueHolder5283f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer0934d) || 1) && $this->valueHolder5283f = $valueHolder5283f;
        return $this->valueHolder5283f->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer0934d && ($this->initializer0934d->__invoke($valueHolder5283f, $this, 'contains', array('entity' => $entity), $this->initializer0934d) || 1) && $this->valueHolder5283f = $valueHolder5283f;
        return $this->valueHolder5283f->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer0934d && ($this->initializer0934d->__invoke($valueHolder5283f, $this, 'getEventManager', array(), $this->initializer0934d) || 1) && $this->valueHolder5283f = $valueHolder5283f;
        return $this->valueHolder5283f->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer0934d && ($this->initializer0934d->__invoke($valueHolder5283f, $this, 'getConfiguration', array(), $this->initializer0934d) || 1) && $this->valueHolder5283f = $valueHolder5283f;
        return $this->valueHolder5283f->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer0934d && ($this->initializer0934d->__invoke($valueHolder5283f, $this, 'isOpen', array(), $this->initializer0934d) || 1) && $this->valueHolder5283f = $valueHolder5283f;
        return $this->valueHolder5283f->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer0934d && ($this->initializer0934d->__invoke($valueHolder5283f, $this, 'getUnitOfWork', array(), $this->initializer0934d) || 1) && $this->valueHolder5283f = $valueHolder5283f;
        return $this->valueHolder5283f->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer0934d && ($this->initializer0934d->__invoke($valueHolder5283f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0934d) || 1) && $this->valueHolder5283f = $valueHolder5283f;
        return $this->valueHolder5283f->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer0934d && ($this->initializer0934d->__invoke($valueHolder5283f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0934d) || 1) && $this->valueHolder5283f = $valueHolder5283f;
        return $this->valueHolder5283f->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer0934d && ($this->initializer0934d->__invoke($valueHolder5283f, $this, 'getProxyFactory', array(), $this->initializer0934d) || 1) && $this->valueHolder5283f = $valueHolder5283f;
        return $this->valueHolder5283f->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer0934d && ($this->initializer0934d->__invoke($valueHolder5283f, $this, 'initializeObject', array('obj' => $obj), $this->initializer0934d) || 1) && $this->valueHolder5283f = $valueHolder5283f;
        return $this->valueHolder5283f->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer0934d && ($this->initializer0934d->__invoke($valueHolder5283f, $this, 'getFilters', array(), $this->initializer0934d) || 1) && $this->valueHolder5283f = $valueHolder5283f;
        return $this->valueHolder5283f->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer0934d && ($this->initializer0934d->__invoke($valueHolder5283f, $this, 'isFiltersStateClean', array(), $this->initializer0934d) || 1) && $this->valueHolder5283f = $valueHolder5283f;
        return $this->valueHolder5283f->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer0934d && ($this->initializer0934d->__invoke($valueHolder5283f, $this, 'hasFilters', array(), $this->initializer0934d) || 1) && $this->valueHolder5283f = $valueHolder5283f;
        return $this->valueHolder5283f->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer0934d = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder5283f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5283f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder5283f->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer0934d && ($this->initializer0934d->__invoke($valueHolder5283f, $this, '__get', ['name' => $name], $this->initializer0934d) || 1) && $this->valueHolder5283f = $valueHolder5283f;
        if (isset(self::$publicProperties80d60[$name])) {
            return $this->valueHolder5283f->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5283f;
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
        $targetObject = $this->valueHolder5283f;
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
        $this->initializer0934d && ($this->initializer0934d->__invoke($valueHolder5283f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer0934d) || 1) && $this->valueHolder5283f = $valueHolder5283f;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5283f;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder5283f;
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
        $this->initializer0934d && ($this->initializer0934d->__invoke($valueHolder5283f, $this, '__isset', array('name' => $name), $this->initializer0934d) || 1) && $this->valueHolder5283f = $valueHolder5283f;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5283f;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder5283f;
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
        $this->initializer0934d && ($this->initializer0934d->__invoke($valueHolder5283f, $this, '__unset', array('name' => $name), $this->initializer0934d) || 1) && $this->valueHolder5283f = $valueHolder5283f;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5283f;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder5283f;
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
        $this->initializer0934d && ($this->initializer0934d->__invoke($valueHolder5283f, $this, '__clone', array(), $this->initializer0934d) || 1) && $this->valueHolder5283f = $valueHolder5283f;
        $this->valueHolder5283f = clone $this->valueHolder5283f;
    }
    public function __sleep()
    {
        $this->initializer0934d && ($this->initializer0934d->__invoke($valueHolder5283f, $this, '__sleep', array(), $this->initializer0934d) || 1) && $this->valueHolder5283f = $valueHolder5283f;
        return array('valueHolder5283f');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer0934d = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer0934d;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer0934d && ($this->initializer0934d->__invoke($valueHolder5283f, $this, 'initializeProxy', array(), $this->initializer0934d) || 1) && $this->valueHolder5283f = $valueHolder5283f;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5283f;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5283f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
