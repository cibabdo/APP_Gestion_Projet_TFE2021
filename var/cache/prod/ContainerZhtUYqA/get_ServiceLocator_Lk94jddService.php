<?php

namespace ContainerZhtUYqA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Lk94jddService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.Lk94jdd' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Lk94jdd'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'project' => ['privates', '.errored.GA7_xny', NULL, 'Cannot determine controller argument for "App\\Controller\\ProjectController::show()": the $project argument is type-hinted with the non-existent class or interface: "App\\Entity\\Project".'],
        ], [
            'project' => '?',
        ]);
    }
}
