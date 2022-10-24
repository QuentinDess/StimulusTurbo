<?php

namespace ContainerCpr3D6D;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPurchaseRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\PurchaseRepository' shared autowired service.
     *
     * @return \App\Repository\PurchaseRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Repository/PurchaseRepository.php';

        return $container->privates['App\\Repository\\PurchaseRepository'] = new \App\Repository\PurchaseRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
