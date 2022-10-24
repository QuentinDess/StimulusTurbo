<?php

namespace ContainerCpr3D6D;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CqVu78OService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.CqVu78O' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.CqVu78O'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cartStorage' => ['privates', 'App\\Service\\CartStorage', 'getCartStorageService', false],
            'productRepository' => ['privates', 'App\\Repository\\ProductRepository', 'getProductRepositoryService', false],
        ], [
            'cartStorage' => 'App\\Service\\CartStorage',
            'productRepository' => 'App\\Repository\\ProductRepository',
        ]);
    }
}
