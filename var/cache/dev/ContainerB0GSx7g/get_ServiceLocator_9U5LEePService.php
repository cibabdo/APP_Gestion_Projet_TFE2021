<?php

namespace ContainerB0GSx7g;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_9U5LEePService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.9U5LEeP' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.9U5LEeP'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'companyRepository' => ['privates', 'App\\Repository\\CompanyRepository', 'getCompanyRepositoryService', true],
            'managerRegistry' => ['services', 'doctrine', 'getDoctrineService', false],
        ], [
            'companyRepository' => 'App\\Repository\\CompanyRepository',
            'managerRegistry' => '?',
        ]);
    }
}
