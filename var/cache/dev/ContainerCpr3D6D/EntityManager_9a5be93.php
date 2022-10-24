<?php

namespace ContainerCpr3D6D;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere743d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer2874c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties27741 = [
        
    ];

    public function getConnection()
    {
        $this->initializer2874c && ($this->initializer2874c->__invoke($valueHoldere743d, $this, 'getConnection', array(), $this->initializer2874c) || 1) && $this->valueHoldere743d = $valueHoldere743d;

        return $this->valueHoldere743d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer2874c && ($this->initializer2874c->__invoke($valueHoldere743d, $this, 'getMetadataFactory', array(), $this->initializer2874c) || 1) && $this->valueHoldere743d = $valueHoldere743d;

        return $this->valueHoldere743d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer2874c && ($this->initializer2874c->__invoke($valueHoldere743d, $this, 'getExpressionBuilder', array(), $this->initializer2874c) || 1) && $this->valueHoldere743d = $valueHoldere743d;

        return $this->valueHoldere743d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer2874c && ($this->initializer2874c->__invoke($valueHoldere743d, $this, 'beginTransaction', array(), $this->initializer2874c) || 1) && $this->valueHoldere743d = $valueHoldere743d;

        return $this->valueHoldere743d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer2874c && ($this->initializer2874c->__invoke($valueHoldere743d, $this, 'getCache', array(), $this->initializer2874c) || 1) && $this->valueHoldere743d = $valueHoldere743d;

        return $this->valueHoldere743d->getCache();
    }

    public function transactional($func)
    {
        $this->initializer2874c && ($this->initializer2874c->__invoke($valueHoldere743d, $this, 'transactional', array('func' => $func), $this->initializer2874c) || 1) && $this->valueHoldere743d = $valueHoldere743d;

        return $this->valueHoldere743d->transactional($func);
    }

    public function commit()
    {
        $this->initializer2874c && ($this->initializer2874c->__invoke($valueHoldere743d, $this, 'commit', array(), $this->initializer2874c) || 1) && $this->valueHoldere743d = $valueHoldere743d;

        return $this->valueHoldere743d->commit();
    }

    public function rollback()
    {
        $this->initializer2874c && ($this->initializer2874c->__invoke($valueHoldere743d, $this, 'rollback', array(), $this->initializer2874c) || 1) && $this->valueHoldere743d = $valueHoldere743d;

        return $this->valueHoldere743d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer2874c && ($this->initializer2874c->__invoke($valueHoldere743d, $this, 'getClassMetadata', array('className' => $className), $this->initializer2874c) || 1) && $this->valueHoldere743d = $valueHoldere743d;

        return $this->valueHoldere743d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer2874c && ($this->initializer2874c->__invoke($valueHoldere743d, $this, 'createQuery', array('dql' => $dql), $this->initializer2874c) || 1) && $this->valueHoldere743d = $valueHoldere743d;

        return $this->valueHoldere743d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer2874c && ($this->initializer2874c->__invoke($valueHoldere743d, $this, 'createNamedQuery', array('name' => $name), $this->initializer2874c) || 1) && $this->valueHoldere743d = $valueHoldere743d;

        return $this->valueHoldere743d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer2874c && ($this->initializer2874c->__invoke($valueHoldere743d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer2874c) || 1) && $this->valueHoldere743d = $valueHoldere743d;

        return $this->valueHoldere743d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer2874c && ($this->initializer2874c->__invoke($valueHoldere743d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer2874c) || 1) && $this->valueHoldere743d = $valueHoldere743d;

        return $this->valueHoldere743d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer2874c && ($this->initializer2874c->__invoke($valueHoldere743d, $this, 'createQueryBuilder', array(), $this->initializer2874c) || 1) && $this->valueHoldere743d = $valueHoldere743d;

        return $this->valueHoldere743d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer2874c && ($this->initializer2874c->__invoke($valueHoldere743d, $this, 'flush', array('entity' => $entity), $this->initializer2874c) || 1) && $this->valueHoldere743d = $valueHoldere743d;

        return $this->valueHoldere743d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer2874c && ($this->initializer2874c->__invoke($valueHoldere743d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2874c) || 1) && $this->valueHoldere743d = $valueHoldere743d;

        return $this->valueHoldere743d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer2874c && ($this->initializer2874c->__invoke($valueHoldere743d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer2874c) || 1) && $this->valueHoldere743d = $valueHoldere743d;

        return $this->valueHoldere743d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer2874c && ($this->initializer2874c->__invoke($valueHoldere743d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer2874c) || 1) && $this->valueHoldere743d = $valueHoldere743d;

        return $this->valueHoldere743d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer2874c && ($this->initializer2874c->__invoke($valueHoldere743d, $this, 'clear', array('entityName' => $entityName), $this->initializer2874c) || 1) && $this->valueHoldere743d = $valueHoldere743d;

        return $this->valueHoldere743d->clear($entityName);
    }

    public function close()
    {
        $this->initializer2874c && ($this->initializer2874c->__invoke($valueHoldere743d, $this, 'close', array(), $this->initializer2874c) || 1) && $this->valueHoldere743d = $valueHoldere743d;

        return $this->valueHoldere743d->close();
    }

    public function persist($entity)
    {
        $this->initializer2874c && ($this->initializer2874c->__invoke($valueHoldere743d, $this, 'persist', array('entity' => $entity), $this->initializer2874c) || 1) && $this->valueHoldere743d = $valueHoldere743d;

        return $this->valueHoldere743d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer2874c && ($this->initializer2874c->__invoke($valueHoldere743d, $this, 'remove', array('entity' => $entity), $this->initializer2874c) || 1) && $this->valueHoldere743d = $valueHoldere743d;

        return $this->valueHoldere743d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer2874c && ($this->initializer2874c->__invoke($valueHoldere743d, $this, 'refresh', array('entity' => $entity), $this->initializer2874c) || 1) && $this->valueHoldere743d = $valueHoldere743d;

        return $this->valueHoldere743d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer2874c && ($this->initializer2874c->__invoke($valueHoldere743d, $this, 'detach', array('entity' => $entity), $this->initializer2874c) || 1) && $this->valueHoldere743d = $valueHoldere743d;

        return $this->valueHoldere743d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer2874c && ($this->initializer2874c->__invoke($valueHoldere743d, $this, 'merge', array('entity' => $entity), $this->initializer2874c) || 1) && $this->valueHoldere743d = $valueHoldere743d;

        return $this->valueHoldere743d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer2874c && ($this->initializer2874c->__invoke($valueHoldere743d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer2874c) || 1) && $this->valueHoldere743d = $valueHoldere743d;

        return $this->valueHoldere743d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer2874c && ($this->initializer2874c->__invoke($valueHoldere743d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2874c) || 1) && $this->valueHoldere743d = $valueHoldere743d;

        return $this->valueHoldere743d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer2874c && ($this->initializer2874c->__invoke($valueHoldere743d, $this, 'getRepository', array('entityName' => $entityName), $this->initializer2874c) || 1) && $this->valueHoldere743d = $valueHoldere743d;

        return $this->valueHoldere743d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer2874c && ($this->initializer2874c->__invoke($valueHoldere743d, $this, 'contains', array('entity' => $entity), $this->initializer2874c) || 1) && $this->valueHoldere743d = $valueHoldere743d;

        return $this->valueHoldere743d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer2874c && ($this->initializer2874c->__invoke($valueHoldere743d, $this, 'getEventManager', array(), $this->initializer2874c) || 1) && $this->valueHoldere743d = $valueHoldere743d;

        return $this->valueHoldere743d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer2874c && ($this->initializer2874c->__invoke($valueHoldere743d, $this, 'getConfiguration', array(), $this->initializer2874c) || 1) && $this->valueHoldere743d = $valueHoldere743d;

        return $this->valueHoldere743d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer2874c && ($this->initializer2874c->__invoke($valueHoldere743d, $this, 'isOpen', array(), $this->initializer2874c) || 1) && $this->valueHoldere743d = $valueHoldere743d;

        return $this->valueHoldere743d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer2874c && ($this->initializer2874c->__invoke($valueHoldere743d, $this, 'getUnitOfWork', array(), $this->initializer2874c) || 1) && $this->valueHoldere743d = $valueHoldere743d;

        return $this->valueHoldere743d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer2874c && ($this->initializer2874c->__invoke($valueHoldere743d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2874c) || 1) && $this->valueHoldere743d = $valueHoldere743d;

        return $this->valueHoldere743d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer2874c && ($this->initializer2874c->__invoke($valueHoldere743d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2874c) || 1) && $this->valueHoldere743d = $valueHoldere743d;

        return $this->valueHoldere743d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer2874c && ($this->initializer2874c->__invoke($valueHoldere743d, $this, 'getProxyFactory', array(), $this->initializer2874c) || 1) && $this->valueHoldere743d = $valueHoldere743d;

        return $this->valueHoldere743d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer2874c && ($this->initializer2874c->__invoke($valueHoldere743d, $this, 'initializeObject', array('obj' => $obj), $this->initializer2874c) || 1) && $this->valueHoldere743d = $valueHoldere743d;

        return $this->valueHoldere743d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer2874c && ($this->initializer2874c->__invoke($valueHoldere743d, $this, 'getFilters', array(), $this->initializer2874c) || 1) && $this->valueHoldere743d = $valueHoldere743d;

        return $this->valueHoldere743d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer2874c && ($this->initializer2874c->__invoke($valueHoldere743d, $this, 'isFiltersStateClean', array(), $this->initializer2874c) || 1) && $this->valueHoldere743d = $valueHoldere743d;

        return $this->valueHoldere743d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer2874c && ($this->initializer2874c->__invoke($valueHoldere743d, $this, 'hasFilters', array(), $this->initializer2874c) || 1) && $this->valueHoldere743d = $valueHoldere743d;

        return $this->valueHoldere743d->hasFilters();
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

        $instance->initializer2874c = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldere743d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere743d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere743d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer2874c && ($this->initializer2874c->__invoke($valueHoldere743d, $this, '__get', ['name' => $name], $this->initializer2874c) || 1) && $this->valueHoldere743d = $valueHoldere743d;

        if (isset(self::$publicProperties27741[$name])) {
            return $this->valueHoldere743d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere743d;

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

        $targetObject = $this->valueHoldere743d;
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
        $this->initializer2874c && ($this->initializer2874c->__invoke($valueHoldere743d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2874c) || 1) && $this->valueHoldere743d = $valueHoldere743d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere743d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere743d;
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
        $this->initializer2874c && ($this->initializer2874c->__invoke($valueHoldere743d, $this, '__isset', array('name' => $name), $this->initializer2874c) || 1) && $this->valueHoldere743d = $valueHoldere743d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere743d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere743d;
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
        $this->initializer2874c && ($this->initializer2874c->__invoke($valueHoldere743d, $this, '__unset', array('name' => $name), $this->initializer2874c) || 1) && $this->valueHoldere743d = $valueHoldere743d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere743d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere743d;
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
        $this->initializer2874c && ($this->initializer2874c->__invoke($valueHoldere743d, $this, '__clone', array(), $this->initializer2874c) || 1) && $this->valueHoldere743d = $valueHoldere743d;

        $this->valueHoldere743d = clone $this->valueHoldere743d;
    }

    public function __sleep()
    {
        $this->initializer2874c && ($this->initializer2874c->__invoke($valueHoldere743d, $this, '__sleep', array(), $this->initializer2874c) || 1) && $this->valueHoldere743d = $valueHoldere743d;

        return array('valueHoldere743d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer2874c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer2874c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer2874c && ($this->initializer2874c->__invoke($valueHoldere743d, $this, 'initializeProxy', array(), $this->initializer2874c) || 1) && $this->valueHoldere743d = $valueHoldere743d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere743d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere743d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
