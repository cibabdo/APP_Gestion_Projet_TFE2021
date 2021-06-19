<?php

namespace Container1CtYxGo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Yen46XhService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Yen46Xh' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Yen46Xh'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'encoder' => ['services', 'security.password_encoder', 'getSecurity_PasswordEncoderService', true],
            'managerRegistry' => ['services', 'doctrine', 'getDoctrineService', false],
        ], [
            'encoder' => '?',
            'managerRegistry' => '?',
        ]);
    }
}
