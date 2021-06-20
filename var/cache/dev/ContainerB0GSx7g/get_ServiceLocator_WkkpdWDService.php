<?php

namespace ContainerB0GSx7g;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WkkpdWDService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.wkkpdWD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.wkkpdWD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'managerRegistry' => ['services', 'doctrine', 'getDoctrineService', false],
            'personcontactRepository' => ['privates', 'App\\Repository\\PersonContactRepository', 'getPersonContactRepositoryService', true],
        ], [
            'managerRegistry' => '?',
            'personcontactRepository' => 'App\\Repository\\PersonContactRepository',
        ]);
    }
}
