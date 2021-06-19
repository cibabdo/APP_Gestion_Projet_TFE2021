<?php

namespace Container1CtYxGo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BqCUdYhService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.BqCUdYh' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.BqCUdYh'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'siteRepository' => ['privates', 'App\\Repository\\SiteRepository', 'getSiteRepositoryService', true],
        ], [
            'siteRepository' => 'App\\Repository\\SiteRepository',
        ]);
    }
}
