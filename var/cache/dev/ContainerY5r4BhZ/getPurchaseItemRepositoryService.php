<?php

namespace ContainerY5r4BhZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPurchaseItemRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\PurchaseItemRepository' shared autowired service.
     *
     * @return \App\Repository\PurchaseItemRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Repository/PurchaseItemRepository.php';

        return $container->privates['App\\Repository\\PurchaseItemRepository'] = new \App\Repository\PurchaseItemRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
