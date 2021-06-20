<?php

namespace ContainerVkITcZ1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UiD67XgService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.UiD67Xg' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.UiD67Xg'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'managerRegistry' => ['services', 'doctrine', 'getDoctrineService', false],
            'personContact' => ['privates', 'App\\Repository\\PersonContactRepository', 'getPersonContactRepositoryService', true],
        ], [
            'managerRegistry' => '?',
            'personContact' => 'App\\Repository\\PersonContactRepository',
        ]);
    }
}
