<?php

namespace ContainerNGpFJEm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProjectCommentsControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ProjectCommentsController' shared autowired service.
     *
     * @return \App\Controller\ProjectCommentsController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ProjectCommentsController.php';

        $container->services['App\\Controller\\ProjectCommentsController'] = $instance = new \App\Controller\ProjectCommentsController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\ProjectCommentsController', $container));

        return $instance;
    }
}
