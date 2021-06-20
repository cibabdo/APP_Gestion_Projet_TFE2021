<?php

namespace ContainerNkMGbdr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KzzcAEaService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.KzzcAEa' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.KzzcAEa'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'managerRegistry' => ['services', 'doctrine', 'getDoctrineService', false],
            'projectRepository' => ['privates', 'App\\Repository\\ProjectRepository', 'getProjectRepositoryService', true],
            'projectWorkRepository' => ['privates', 'App\\Repository\\ProjectWorkRepository', 'getProjectWorkRepositoryService', true],
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
        ], [
            'managerRegistry' => '?',
            'projectRepository' => 'App\\Repository\\ProjectRepository',
            'projectWorkRepository' => 'App\\Repository\\ProjectWorkRepository',
            'slugger' => '?',
        ]);
    }
}
