<?php

namespace ContainerVkITcZ1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NdHNYyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.NdH_nYy' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.NdH_nYy'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'companyRepository' => ['privates', 'App\\Repository\\CompanyRepository', 'getCompanyRepositoryService', true],
        ], [
            'companyRepository' => 'App\\Repository\\CompanyRepository',
        ]);
    }
}
