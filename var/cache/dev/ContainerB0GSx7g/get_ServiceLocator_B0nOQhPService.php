<?php

namespace ContainerB0GSx7g;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_B0nOQhPService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.b0nOQhP' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.b0nOQhP'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'CompanyActivityRepository' => ['privates', 'App\\Repository\\CompanyActivityRepository', 'getCompanyActivityRepositoryService', true],
            'managerRegistry' => ['services', 'doctrine', 'getDoctrineService', false],
        ], [
            'CompanyActivityRepository' => 'App\\Repository\\CompanyActivityRepository',
            'managerRegistry' => '?',
        ]);
    }
}
