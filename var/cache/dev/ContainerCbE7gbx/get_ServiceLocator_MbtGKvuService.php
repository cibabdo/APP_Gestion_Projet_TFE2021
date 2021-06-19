<?php

namespace ContainerCbE7gbx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MbtGKvuService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.mbtGKvu' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.mbtGKvu'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'projectRepository' => ['privates', 'App\\Repository\\ProjectRepository', 'getProjectRepositoryService', true],
        ], [
            'projectRepository' => 'App\\Repository\\ProjectRepository',
        ]);
    }
}
