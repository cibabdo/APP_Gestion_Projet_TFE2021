<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index', '_locale' => 'fr'], null, ['GET' => 0], null, false, false, null]],
        '/en' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index', '_locale' => 'en'], null, ['GET' => 0], null, true, false, null]],
        '/inscription' => [[['_route' => 'security_signin', '_controller' => 'App\\Controller\\SecurityController::signin', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/signin' => [[['_route' => 'security_signin', '_controller' => 'App\\Controller\\SecurityController::signin', '_locale' => 'en'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\SecurityController::login', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/login' => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\SecurityController::login', '_locale' => 'en'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/logout' => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout', '_locale' => 'en'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/projet/([^/]++)(*:23)'
                .'|/en/project/([^/]++)(*:50)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        23 => [[['_route' => 'project', '_controller' => 'App\\Controller\\ProjectController::show', '_locale' => 'fr'], ['id'], null, null, false, true, null]],
        50 => [
            [['_route' => 'project', '_controller' => 'App\\Controller\\ProjectController::show', '_locale' => 'en'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
