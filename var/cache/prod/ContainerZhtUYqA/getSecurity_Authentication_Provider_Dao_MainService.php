<?php

namespace ContainerZhtUYqA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authentication_Provider_Dao_MainService extends App_KernelProdContainer
{
    /*
     * Gets the private 'security.authentication.provider.dao.main' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['security.authentication.provider.dao.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider(($container->privates['security.user.provider.concrete.in_database'] ?? $container->load('getSecurity_User_Provider_Concrete_InDatabaseService')), new \Symfony\Component\Security\Core\User\UserChecker(), 'main', ($container->privates['security.encoder_factory.generic'] ?? $container->load('getSecurity_EncoderFactory_GenericService')), true);
    }
}
