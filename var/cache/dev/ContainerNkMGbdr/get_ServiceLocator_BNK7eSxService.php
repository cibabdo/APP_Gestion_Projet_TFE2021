<?php

namespace ContainerNkMGbdr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BNK7eSxService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.BNK7eSx' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.BNK7eSx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'managerRegistry' => ['services', 'doctrine', 'getDoctrineService', false],
            'planningRepository' => ['privates', 'App\\Repository\\PlanningRepository', 'getPlanningRepositoryService', true],
        ], [
            'managerRegistry' => '?',
            'planningRepository' => 'App\\Repository\\PlanningRepository',
        ]);
    }
}
