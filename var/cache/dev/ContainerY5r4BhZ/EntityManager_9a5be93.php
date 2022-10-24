<?php

namespace ContainerY5r4BhZ;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder34234 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer2aa47 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8d22f = [
        
    ];

    public function getConnection()
    {
        $this->initializer2aa47 && ($this->initializer2aa47->__invoke($valueHolder34234, $this, 'getConnection', array(), $this->initializer2aa47) || 1) && $this->valueHolder34234 = $valueHolder34234;

        return $this->valueHolder34234->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer2aa47 && ($this->initializer2aa47->__invoke($valueHolder34234, $this, 'getMetadataFactory', array(), $this->initializer2aa47) || 1) && $this->valueHolder34234 = $valueHolder34234;

        return $this->valueHolder34234->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer2aa47 && ($this->initializer2aa47->__invoke($valueHolder34234, $this, 'getExpressionBuilder', array(), $this->initializer2aa47) || 1) && $this->valueHolder34234 = $valueHolder34234;

        return $this->valueHolder34234->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer2aa47 && ($this->initializer2aa47->__invoke($valueHolder34234, $this, 'beginTransaction', array(), $this->initializer2aa47) || 1) && $this->valueHolder34234 = $valueHolder34234;

        return $this->valueHolder34234->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer2aa47 && ($this->initializer2aa47->__invoke($valueHolder34234, $this, 'getCache', array(), $this->initializer2aa47) || 1) && $this->valueHolder34234 = $valueHolder34234;

        return $this->valueHolder34234->getCache();
    }

    public function transactional($func)
    {
        $this->initializer2aa47 && ($this->initializer2aa47->__invoke($valueHolder34234, $this, 'transactional', array('func' => $func), $this->initializer2aa47) || 1) && $this->valueHolder34234 = $valueHolder34234;

        return $this->valueHolder34234->transactional($func);
    }

    public function commit()
    {
        $this->initializer2aa47 && ($this->initializer2aa47->__invoke($valueHolder34234, $this, 'commit', array(), $this->initializer2aa47) || 1) && $this->valueHolder34234 = $valueHolder34234;

        return $this->valueHolder34234->commit();
    }

    public function rollback()
    {
        $this->initializer2aa47 && ($this->initializer2aa47->__invoke($valueHolder34234, $this, 'rollback', array(), $this->initializer2aa47) || 1) && $this->valueHolder34234 = $valueHolder34234;

        return $this->valueHolder34234->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer2aa47 && ($this->initializer2aa47->__invoke($valueHolder34234, $this, 'getClassMetadata', array('className' => $className), $this->initializer2aa47) || 1) && $this->valueHolder34234 = $valueHolder34234;

        return $this->valueHolder34234->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer2aa47 && ($this->initializer2aa47->__invoke($valueHolder34234, $this, 'createQuery', array('dql' => $dql), $this->initializer2aa47) || 1) && $this->valueHolder34234 = $valueHolder34234;

        return $this->valueHolder34234->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer2aa47 && ($this->initializer2aa47->__invoke($valueHolder34234, $this, 'createNamedQuery', array('name' => $name), $this->initializer2aa47) || 1) && $this->valueHolder34234 = $valueHolder34234;

        return $this->valueHolder34234->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer2aa47 && ($this->initializer2aa47->__invoke($valueHolder34234, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer2aa47) || 1) && $this->valueHolder34234 = $valueHolder34234;

        return $this->valueHolder34234->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer2aa47 && ($this->initializer2aa47->__invoke($valueHolder34234, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer2aa47) || 1) && $this->valueHolder34234 = $valueHolder34234;

        return $this->valueHolder34234->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer2aa47 && ($this->initializer2aa47->__invoke($valueHolder34234, $this, 'createQueryBuilder', array(), $this->initializer2aa47) || 1) && $this->valueHolder34234 = $valueHolder34234;

        return $this->valueHolder34234->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer2aa47 && ($this->initializer2aa47->__invoke($valueHolder34234, $this, 'flush', array('entity' => $entity), $this->initializer2aa47) || 1) && $this->valueHolder34234 = $valueHolder34234;

        return $this->valueHolder34234->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer2aa47 && ($this->initializer2aa47->__invoke($valueHolder34234, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2aa47) || 1) && $this->valueHolder34234 = $valueHolder34234;

        return $this->valueHolder34234->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer2aa47 && ($this->initializer2aa47->__invoke($valueHolder34234, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer2aa47) || 1) && $this->valueHolder34234 = $valueHolder34234;

        return $this->valueHolder34234->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer2aa47 && ($this->initializer2aa47->__invoke($valueHolder34234, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer2aa47) || 1) && $this->valueHolder34234 = $valueHolder34234;

        return $this->valueHolder34234->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer2aa47 && ($this->initializer2aa47->__invoke($valueHolder34234, $this, 'clear', array('entityName' => $entityName), $this->initializer2aa47) || 1) && $this->valueHolder34234 = $valueHolder34234;

        return $this->valueHolder34234->clear($entityName);
    }

    public function close()
    {
        $this->initializer2aa47 && ($this->initializer2aa47->__invoke($valueHolder34234, $this, 'close', array(), $this->initializer2aa47) || 1) && $this->valueHolder34234 = $valueHolder34234;

        return $this->valueHolder34234->close();
    }

    public function persist($entity)
    {
        $this->initializer2aa47 && ($this->initializer2aa47->__invoke($valueHolder34234, $this, 'persist', array('entity' => $entity), $this->initializer2aa47) || 1) && $this->valueHolder34234 = $valueHolder34234;

        return $this->valueHolder34234->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer2aa47 && ($this->initializer2aa47->__invoke($valueHolder34234, $this, 'remove', array('entity' => $entity), $this->initializer2aa47) || 1) && $this->valueHolder34234 = $valueHolder34234;

        return $this->valueHolder34234->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer2aa47 && ($this->initializer2aa47->__invoke($valueHolder34234, $this, 'refresh', array('entity' => $entity), $this->initializer2aa47) || 1) && $this->valueHolder34234 = $valueHolder34234;

        return $this->valueHolder34234->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer2aa47 && ($this->initializer2aa47->__invoke($valueHolder34234, $this, 'detach', array('entity' => $entity), $this->initializer2aa47) || 1) && $this->valueHolder34234 = $valueHolder34234;

        return $this->valueHolder34234->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer2aa47 && ($this->initializer2aa47->__invoke($valueHolder34234, $this, 'merge', array('entity' => $entity), $this->initializer2aa47) || 1) && $this->valueHolder34234 = $valueHolder34234;

        return $this->valueHolder34234->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer2aa47 && ($this->initializer2aa47->__invoke($valueHolder34234, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer2aa47) || 1) && $this->valueHolder34234 = $valueHolder34234;

        return $this->valueHolder34234->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer2aa47 && ($this->initializer2aa47->__invoke($valueHolder34234, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2aa47) || 1) && $this->valueHolder34234 = $valueHolder34234;

        return $this->valueHolder34234->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer2aa47 && ($this->initializer2aa47->__invoke($valueHolder34234, $this, 'getRepository', array('entityName' => $entityName), $this->initializer2aa47) || 1) && $this->valueHolder34234 = $valueHolder34234;

        return $this->valueHolder34234->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer2aa47 && ($this->initializer2aa47->__invoke($valueHolder34234, $this, 'contains', array('entity' => $entity), $this->initializer2aa47) || 1) && $this->valueHolder34234 = $valueHolder34234;

        return $this->valueHolder34234->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer2aa47 && ($this->initializer2aa47->__invoke($valueHolder34234, $this, 'getEventManager', array(), $this->initializer2aa47) || 1) && $this->valueHolder34234 = $valueHolder34234;

        return $this->valueHolder34234->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer2aa47 && ($this->initializer2aa47->__invoke($valueHolder34234, $this, 'getConfiguration', array(), $this->initializer2aa47) || 1) && $this->valueHolder34234 = $valueHolder34234;

        return $this->valueHolder34234->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer2aa47 && ($this->initializer2aa47->__invoke($valueHolder34234, $this, 'isOpen', array(), $this->initializer2aa47) || 1) && $this->valueHolder34234 = $valueHolder34234;

        return $this->valueHolder34234->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer2aa47 && ($this->initializer2aa47->__invoke($valueHolder34234, $this, 'getUnitOfWork', array(), $this->initializer2aa47) || 1) && $this->valueHolder34234 = $valueHolder34234;

        return $this->valueHolder34234->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer2aa47 && ($this->initializer2aa47->__invoke($valueHolder34234, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2aa47) || 1) && $this->valueHolder34234 = $valueHolder34234;

        return $this->valueHolder34234->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer2aa47 && ($this->initializer2aa47->__invoke($valueHolder34234, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2aa47) || 1) && $this->valueHolder34234 = $valueHolder34234;

        return $this->valueHolder34234->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer2aa47 && ($this->initializer2aa47->__invoke($valueHolder34234, $this, 'getProxyFactory', array(), $this->initializer2aa47) || 1) && $this->valueHolder34234 = $valueHolder34234;

        return $this->valueHolder34234->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer2aa47 && ($this->initializer2aa47->__invoke($valueHolder34234, $this, 'initializeObject', array('obj' => $obj), $this->initializer2aa47) || 1) && $this->valueHolder34234 = $valueHolder34234;

        return $this->valueHolder34234->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer2aa47 && ($this->initializer2aa47->__invoke($valueHolder34234, $this, 'getFilters', array(), $this->initializer2aa47) || 1) && $this->valueHolder34234 = $valueHolder34234;

        return $this->valueHolder34234->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer2aa47 && ($this->initializer2aa47->__invoke($valueHolder34234, $this, 'isFiltersStateClean', array(), $this->initializer2aa47) || 1) && $this->valueHolder34234 = $valueHolder34234;

        return $this->valueHolder34234->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer2aa47 && ($this->initializer2aa47->__invoke($valueHolder34234, $this, 'hasFilters', array(), $this->initializer2aa47) || 1) && $this->valueHolder34234 = $valueHolder34234;

        return $this->valueHolder34234->hasFilters();
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

        $instance->initializer2aa47 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder34234) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder34234 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder34234->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer2aa47 && ($this->initializer2aa47->__invoke($valueHolder34234, $this, '__get', ['name' => $name], $this->initializer2aa47) || 1) && $this->valueHolder34234 = $valueHolder34234;

        if (isset(self::$publicProperties8d22f[$name])) {
            return $this->valueHolder34234->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder34234;

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

        $targetObject = $this->valueHolder34234;
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
        $this->initializer2aa47 && ($this->initializer2aa47->__invoke($valueHolder34234, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2aa47) || 1) && $this->valueHolder34234 = $valueHolder34234;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder34234;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder34234;
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
        $this->initializer2aa47 && ($this->initializer2aa47->__invoke($valueHolder34234, $this, '__isset', array('name' => $name), $this->initializer2aa47) || 1) && $this->valueHolder34234 = $valueHolder34234;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder34234;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder34234;
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
        $this->initializer2aa47 && ($this->initializer2aa47->__invoke($valueHolder34234, $this, '__unset', array('name' => $name), $this->initializer2aa47) || 1) && $this->valueHolder34234 = $valueHolder34234;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder34234;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder34234;
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
        $this->initializer2aa47 && ($this->initializer2aa47->__invoke($valueHolder34234, $this, '__clone', array(), $this->initializer2aa47) || 1) && $this->valueHolder34234 = $valueHolder34234;

        $this->valueHolder34234 = clone $this->valueHolder34234;
    }

    public function __sleep()
    {
        $this->initializer2aa47 && ($this->initializer2aa47->__invoke($valueHolder34234, $this, '__sleep', array(), $this->initializer2aa47) || 1) && $this->valueHolder34234 = $valueHolder34234;

        return array('valueHolder34234');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer2aa47 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer2aa47;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer2aa47 && ($this->initializer2aa47->__invoke($valueHolder34234, $this, 'initializeProxy', array(), $this->initializer2aa47) || 1) && $this->valueHolder34234 = $valueHolder34234;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder34234;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder34234;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
