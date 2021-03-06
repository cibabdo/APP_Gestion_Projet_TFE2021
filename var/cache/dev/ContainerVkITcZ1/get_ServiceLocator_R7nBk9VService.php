<?php

namespace ContainerVkITcZ1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_R7nBk9VService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.r7nBk9V' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.r7nBk9V'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'managerRegistry' => ['services', 'doctrine', 'getDoctrineService', false],
            'projectCommentRepository' => ['privates', 'App\\Repository\\ProjectCommentRepository', 'getProjectCommentRepositoryService', true],
            'projectRepository' => ['privates', 'App\\Repository\\ProjectRepository', 'getProjectRepositoryService', true],
        ], [
            'managerRegistry' => '?',
            'projectCommentRepository' => 'App\\Repository\\ProjectCommentRepository',
            'projectRepository' => 'App\\Repository\\ProjectRepository',
        ]);
    }
}
