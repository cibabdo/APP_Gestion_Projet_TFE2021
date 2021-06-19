<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/company/activity' => [[['_route' => 'activity_list', '_controller' => 'App\\Controller\\CompanyActivityController::index', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/admin/company/activity' => [[['_route' => 'activity_list', '_controller' => 'App\\Controller\\CompanyActivityController::index', '_locale' => 'en'], null, null, null, false, false, null]],
        '/admin/company/activity/search' => [[['_route' => 'activity_search', '_controller' => 'App\\Controller\\CompanyActivityController::search', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/admin/company/activity/search' => [[['_route' => 'activity_search', '_controller' => 'App\\Controller\\CompanyActivityController::search', '_locale' => 'en'], null, null, null, false, false, null]],
        '/admin/company/activity/new' => [[['_route' => 'activity_new', '_controller' => 'App\\Controller\\CompanyActivityController::add', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/admin/company/activity/new' => [[['_route' => 'activity_new', '_controller' => 'App\\Controller\\CompanyActivityController::add', '_locale' => 'en'], null, null, null, false, false, null]],
        '/admin/company' => [[['_route' => 'company_list', '_controller' => 'App\\Controller\\CompanyController::index', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/admin/company' => [[['_route' => 'company_list', '_controller' => 'App\\Controller\\CompanyController::index', '_locale' => 'en'], null, null, null, false, false, null]],
        '/admin/company/search' => [[['_route' => 'company_search', '_controller' => 'App\\Controller\\CompanyController::search', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/admin/company/search' => [[['_route' => 'company_search', '_controller' => 'App\\Controller\\CompanyController::search', '_locale' => 'en'], null, null, null, false, false, null]],
        '/admin/company/new' => [[['_route' => 'company_new', '_controller' => 'App\\Controller\\CompanyController::add', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/admin/company/new' => [[['_route' => 'company_new', '_controller' => 'App\\Controller\\CompanyController::add', '_locale' => 'en'], null, null, null, false, false, null]],
        '/admin/department' => [[['_route' => 'department_list', '_controller' => 'App\\Controller\\DepartmentController::index', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/admin/department' => [[['_route' => 'department_list', '_controller' => 'App\\Controller\\DepartmentController::index', '_locale' => 'en'], null, null, null, false, false, null]],
        '/admin/department/search' => [[['_route' => 'department_search', '_controller' => 'App\\Controller\\DepartmentController::search', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/admin/department/search' => [[['_route' => 'department_search', '_controller' => 'App\\Controller\\DepartmentController::search', '_locale' => 'en'], null, null, null, false, false, null]],
        '/admin/department/new' => [[['_route' => 'department_new', '_controller' => 'App\\Controller\\DepartmentController::add', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/admin/department/new' => [[['_route' => 'department_new', '_controller' => 'App\\Controller\\DepartmentController::add', '_locale' => 'en'], null, null, null, false, false, null]],
        '/admin/employee' => [[['_route' => 'employee_list', '_controller' => 'App\\Controller\\EmployeeController::index', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/admin/employee' => [[['_route' => 'employee_list', '_controller' => 'App\\Controller\\EmployeeController::index', '_locale' => 'en'], null, null, null, false, false, null]],
        '/admin/employee/search' => [[['_route' => 'employee_search', '_controller' => 'App\\Controller\\EmployeeController::search', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/admin/employee/search' => [[['_route' => 'employee_search', '_controller' => 'App\\Controller\\EmployeeController::search', '_locale' => 'en'], null, null, null, false, false, null]],
        '/admin/employee/new' => [[['_route' => 'employee_new', '_controller' => 'App\\Controller\\EmployeeController::add', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/admin/employee/new' => [[['_route' => 'employee_new', '_controller' => 'App\\Controller\\EmployeeController::add', '_locale' => 'en'], null, null, null, false, false, null]],
        '/admin/engineeringoffice' => [[['_route' => 'engineeringoffice_list', '_controller' => 'App\\Controller\\EngineeringOfficeController::index', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/admin/engineeringoffice' => [[['_route' => 'engineeringoffice_list', '_controller' => 'App\\Controller\\EngineeringOfficeController::index', '_locale' => 'en'], null, null, null, false, false, null]],
        '/admin/engineeringoffice/search' => [[['_route' => 'engineeringoffice_search', '_controller' => 'App\\Controller\\EngineeringOfficeController::search', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/admin/engineeringoffice/search' => [[['_route' => 'engineeringoffice_search', '_controller' => 'App\\Controller\\EngineeringOfficeController::search', '_locale' => 'en'], null, null, null, false, false, null]],
        '/admin/engineeringoffice/new' => [[['_route' => 'engineeringoffice_new', '_controller' => 'App\\Controller\\EngineeringOfficeController::add', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/admin/engineeringoffice/new' => [[['_route' => 'engineeringoffice_new', '_controller' => 'App\\Controller\\EngineeringOfficeController::add', '_locale' => 'en'], null, null, null, false, false, null]],
        '/admin/engineeringofficesort' => [[['_route' => 'engineeringofficesort_list', '_controller' => 'App\\Controller\\EngineeringOfficeSortController::index', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/admin/engineeringofficesort' => [[['_route' => 'engineeringofficesort_list', '_controller' => 'App\\Controller\\EngineeringOfficeSortController::index', '_locale' => 'en'], null, null, null, false, false, null]],
        '/admin/engineeringofficesort/search' => [[['_route' => 'engineeringofficesort_search', '_controller' => 'App\\Controller\\EngineeringOfficeSortController::search', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/admin/engineeringofficesort/search' => [[['_route' => 'engineeringofficesort_search', '_controller' => 'App\\Controller\\EngineeringOfficeSortController::search', '_locale' => 'en'], null, null, null, false, false, null]],
        '/admin/engineeringofficesort/new' => [[['_route' => 'engineeringofficesort_new', '_controller' => 'App\\Controller\\EngineeringOfficeSortController::add', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/admin/engineeringofficesort/new' => [[['_route' => 'engineeringofficesort_new', '_controller' => 'App\\Controller\\EngineeringOfficeSortController::add', '_locale' => 'en'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index', '_locale' => 'fr'], null, ['GET' => 0], null, false, false, null]],
        '/en' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index', '_locale' => 'en'], null, ['GET' => 0], null, true, false, null]],
        '/invitation/inscription' => [[['_route' => 'invitation_inscription', '_controller' => 'App\\Controller\\InvitationController::inscription', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/invitation/inscription' => [[['_route' => 'invitation_inscription', '_controller' => 'App\\Controller\\InvitationController::inscription', '_locale' => 'en'], null, null, null, false, false, null]],
        '/admin/location' => [[['_route' => 'location_list', '_controller' => 'App\\Controller\\LocationController::index', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/admin/location' => [[['_route' => 'location_list', '_controller' => 'App\\Controller\\LocationController::index', '_locale' => 'en'], null, null, null, false, false, null]],
        '/admin/location/search' => [[['_route' => 'location_search', '_controller' => 'App\\Controller\\LocationController::search', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/admin/location/search' => [[['_route' => 'location_search', '_controller' => 'App\\Controller\\LocationController::search', '_locale' => 'en'], null, null, null, false, false, null]],
        '/admin/location/new' => [[['_route' => 'location_new', '_controller' => 'App\\Controller\\LocationController::add', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/admin/location/new' => [[['_route' => 'location_new', '_controller' => 'App\\Controller\\LocationController::add', '_locale' => 'en'], null, null, null, false, false, null]],
        '/admin/personcontact' => [[['_route' => 'personcontact_list', '_controller' => 'App\\Controller\\PersonContactController::index', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/admin/personcontact' => [[['_route' => 'personcontact_list', '_controller' => 'App\\Controller\\PersonContactController::index', '_locale' => 'en'], null, null, null, false, false, null]],
        '/admin/personcontact/search' => [[['_route' => 'personcontact_search', '_controller' => 'App\\Controller\\PersonContactController::search', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/admin/personcontact/search' => [[['_route' => 'personcontact_search', '_controller' => 'App\\Controller\\PersonContactController::search', '_locale' => 'en'], null, null, null, false, false, null]],
        '/admin/personcontact/new' => [[['_route' => 'personcontact_new', '_controller' => 'App\\Controller\\PersonContactController::add', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/admin/personcontact/new' => [[['_route' => 'personcontact_new', '_controller' => 'App\\Controller\\PersonContactController::add', '_locale' => 'en'], null, null, null, false, false, null]],
        '/project' => [[['_route' => 'project_list', '_controller' => 'App\\Controller\\ProjectController::index', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/project' => [[['_route' => 'project_list', '_controller' => 'App\\Controller\\ProjectController::index', '_locale' => 'en'], null, null, null, false, false, null]],
        '/project/search' => [[['_route' => 'project_search', '_controller' => 'App\\Controller\\ProjectController::search', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/project/search' => [[['_route' => 'project_search', '_controller' => 'App\\Controller\\ProjectController::search', '_locale' => 'en'], null, null, null, false, false, null]],
        '/project/new' => [[['_route' => 'project_new', '_controller' => 'App\\Controller\\ProjectController::add', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/project/new' => [[['_route' => 'project_new', '_controller' => 'App\\Controller\\ProjectController::add', '_locale' => 'en'], null, null, null, false, false, null]],
        '/request' => [[['_route' => 'request', '_controller' => 'App\\Controller\\RequestController::index', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/request' => [[['_route' => 'request', '_controller' => 'App\\Controller\\RequestController::index', '_locale' => 'en'], null, null, null, false, false, null]],
        '/request/search' => [[['_route' => 'request_search', '_controller' => 'App\\Controller\\RequestController::search', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/request/search' => [[['_route' => 'request_search', '_controller' => 'App\\Controller\\RequestController::search', '_locale' => 'en'], null, null, null, false, false, null]],
        '/admin/role' => [[['_route' => 'role_list', '_controller' => 'App\\Controller\\RoleController::index', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/admin/role' => [[['_route' => 'role_list', '_controller' => 'App\\Controller\\RoleController::index', '_locale' => 'en'], null, null, null, false, false, null]],
        '/admin/role/search' => [[['_route' => 'role_search', '_controller' => 'App\\Controller\\RoleController::search', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/admin/role/search' => [[['_route' => 'role_search', '_controller' => 'App\\Controller\\RoleController::search', '_locale' => 'en'], null, null, null, false, false, null]],
        '/admin/role/new' => [[['_route' => 'role_new', '_controller' => 'App\\Controller\\RoleController::add', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/admin/role/new' => [[['_route' => 'role_new', '_controller' => 'App\\Controller\\RoleController::add', '_locale' => 'en'], null, null, null, false, false, null]],
        '/admin/inscription' => [[['_route' => 'security_signin', '_controller' => 'App\\Controller\\SecurityController::signin', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/admin/signin' => [[['_route' => 'security_signin', '_controller' => 'App\\Controller\\SecurityController::signin', '_locale' => 'en'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\SecurityController::login', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/login' => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\SecurityController::login', '_locale' => 'en'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/logout' => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout', '_locale' => 'en'], null, null, null, false, false, null]],
        '/admin/site' => [[['_route' => 'site_list', '_controller' => 'App\\Controller\\SiteController::index', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/admin/site' => [[['_route' => 'site_list', '_controller' => 'App\\Controller\\SiteController::index', '_locale' => 'en'], null, null, null, false, false, null]],
        '/admin/site/search' => [[['_route' => 'site_search', '_controller' => 'App\\Controller\\SiteController::search', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/admin/site/search' => [[['_route' => 'site_search', '_controller' => 'App\\Controller\\SiteController::search', '_locale' => 'en'], null, null, null, false, false, null]],
        '/admin/site/new' => [[['_route' => 'site_new', '_controller' => 'App\\Controller\\SiteController::add', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/admin/site/new' => [[['_route' => 'site_new', '_controller' => 'App\\Controller\\SiteController::add', '_locale' => 'en'], null, null, null, false, false, null]],
        '/stat' => [[['_route' => 'stat', '_controller' => 'App\\Controller\\StatController::index', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/stat' => [[['_route' => 'stat', '_controller' => 'App\\Controller\\StatController::index', '_locale' => 'en'], null, null, null, false, false, null]],
        '/admin/user' => [[['_route' => 'user_list', '_controller' => 'App\\Controller\\UserController::index', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/admin/user' => [[['_route' => 'user_list', '_controller' => 'App\\Controller\\UserController::index', '_locale' => 'en'], null, null, null, false, false, null]],
        '/admin/user/search' => [[['_route' => 'user_search', '_controller' => 'App\\Controller\\UserController::search', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/admin/user/search' => [[['_route' => 'user_search', '_controller' => 'App\\Controller\\UserController::search', '_locale' => 'en'], null, null, null, false, false, null]],
        '/admin/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::add', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/admin/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::add', '_locale' => 'en'], null, null, null, false, false, null]],
        '/admin/work' => [[['_route' => 'work_list', '_controller' => 'App\\Controller\\WorkController::index', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/admin/work' => [[['_route' => 'work_list', '_controller' => 'App\\Controller\\WorkController::index', '_locale' => 'en'], null, null, null, false, false, null]],
        '/admin/work/search' => [[['_route' => 'work_search', '_controller' => 'App\\Controller\\WorkController::search', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/admin/work/search' => [[['_route' => 'work_search', '_controller' => 'App\\Controller\\WorkController::search', '_locale' => 'en'], null, null, null, false, false, null]],
        '/admin/work/new' => [[['_route' => 'work_new', '_controller' => 'App\\Controller\\WorkController::add', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/admin/work/new' => [[['_route' => 'work_new', '_controller' => 'App\\Controller\\WorkController::add', '_locale' => 'en'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|company/(?'
                        .'|activity/([^/]++)(?'
                            .'|(*:210)'
                        .')'
                        .'|([^/]++)(?'
                            .'|(*:230)'
                        .')'
                    .')'
                    .'|department/([^/]++)(?'
                        .'|(*:262)'
                    .')'
                    .'|e(?'
                        .'|mployee/([^/]++)(?'
                            .'|(*:294)'
                        .')'
                        .'|ngineeringoffice(?'
                            .'|/([^/]++)(?'
                                .'|(*:334)'
                            .')'
                            .'|sort/([^/]++)(?'
                                .'|(*:359)'
                            .')'
                        .')'
                    .')'
                    .'|location/([^/]++)(?'
                        .'|(*:390)'
                    .')'
                    .'|personcontact/([^/]++)(?'
                        .'|(*:424)'
                    .')'
                    .'|role/([^/]++)(?'
                        .'|(*:449)'
                    .')'
                    .'|site/([^/]++)(?'
                        .'|(*:474)'
                    .')'
                    .'|user/([^/]++)(?'
                        .'|(*:499)'
                    .')'
                    .'|work/([^/]++)(?'
                        .'|(*:524)'
                    .')'
                .')'
                .'|/en/(?'
                    .'|admin/(?'
                        .'|company/(?'
                            .'|activity/([^/]++)(?'
                                .'|(*:581)'
                            .')'
                            .'|([^/]++)(?'
                                .'|(*:601)'
                            .')'
                        .')'
                        .'|department/([^/]++)(?'
                            .'|(*:633)'
                        .')'
                        .'|e(?'
                            .'|mployee/([^/]++)(?'
                                .'|(*:665)'
                            .')'
                            .'|ngineeringoffice(?'
                                .'|/([^/]++)(?'
                                    .'|(*:705)'
                                .')'
                                .'|sort/([^/]++)(?'
                                    .'|(*:730)'
                                .')'
                            .')'
                        .')'
                        .'|location/([^/]++)(?'
                            .'|(*:761)'
                        .')'
                        .'|personcontact/([^/]++)(?'
                            .'|(*:795)'
                        .')'
                        .'|role/([^/]++)(?'
                            .'|(*:820)'
                        .')'
                        .'|site/([^/]++)(?'
                            .'|(*:845)'
                        .')'
                        .'|user/([^/]++)(?'
                            .'|(*:870)'
                        .')'
                        .'|work/([^/]++)(?'
                            .'|(*:895)'
                        .')'
                    .')'
                    .'|project/([^/]++)(?'
                        .'|/(?'
                            .'|invitation/([^/]++)(*:947)'
                            .'|comments(?'
                                .'|(*:966)'
                                .'|/(?'
                                    .'|new(*:981)'
                                    .'|([^/]++)(?'
                                        .'|(*:1000)'
                                    .')'
                                .')'
                            .')'
                            .'|document(?'
                                .'|(*:1023)'
                                .'|/(?'
                                    .'|search(*:1042)'
                                    .'|view/([^/]++)(*:1064)'
                                    .'|new(*:1076)'
                                    .'|([^/]++)(*:1093)'
                                .')'
                            .')'
                            .'|planning(?'
                                .'|(*:1115)'
                                .'|/(?'
                                    .'|json(*:1132)'
                                    .'|search(*:1147)'
                                    .'|new(*:1159)'
                                    .'|([^/]++)(?'
                                        .'|(*:1179)'
                                    .')'
                                .')'
                            .')'
                            .'|work(?'
                                .'|(*:1198)'
                                .'|/(?'
                                    .'|search(*:1217)'
                                    .'|new(*:1229)'
                                    .'|([^/]++)(?'
                                        .'|(*:1249)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|(*:1262)'
                    .')'
                .')'
                .'|/project/([^/]++)(?'
                    .'|/(?'
                        .'|invitation/([^/]++)(*:1316)'
                        .'|comments(?'
                            .'|(*:1336)'
                            .'|/(?'
                                .'|new(*:1352)'
                                .'|([^/]++)(?'
                                    .'|(*:1372)'
                                .')'
                            .')'
                        .')'
                        .'|document(?'
                            .'|(*:1395)'
                            .'|/(?'
                                .'|search(*:1414)'
                                .'|view/([^/]++)(*:1436)'
                                .'|new(*:1448)'
                                .'|([^/]++)(*:1465)'
                            .')'
                        .')'
                        .'|planning(?'
                            .'|(*:1487)'
                            .'|/(?'
                                .'|json(*:1504)'
                                .'|search(*:1519)'
                                .'|new(*:1531)'
                                .'|([^/]++)(?'
                                    .'|(*:1551)'
                                .')'
                            .')'
                        .')'
                        .'|work(?'
                            .'|(*:1570)'
                            .'|/(?'
                                .'|search(*:1589)'
                                .'|new(*:1601)'
                                .'|([^/]++)(?'
                                    .'|(*:1621)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|(*:1634)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        210 => [
            [['_route' => 'activity_edit', '_controller' => 'App\\Controller\\CompanyActivityController::update', '_locale' => 'fr'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'activity_delete', '_controller' => 'App\\Controller\\CompanyActivityController::delete', '_locale' => 'fr'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        230 => [
            [['_route' => 'company_edit', '_controller' => 'App\\Controller\\CompanyController::update', '_locale' => 'fr'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'company_delete', '_controller' => 'App\\Controller\\CompanyController::delete', '_locale' => 'fr'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        262 => [
            [['_route' => 'department_edit', '_controller' => 'App\\Controller\\DepartmentController::update', '_locale' => 'fr'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'department_delete', '_controller' => 'App\\Controller\\DepartmentController::delete', '_locale' => 'fr'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        294 => [
            [['_route' => 'employee_edit', '_controller' => 'App\\Controller\\EmployeeController::update', '_locale' => 'fr'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'employee_delete', '_controller' => 'App\\Controller\\EmployeeController::delete', '_locale' => 'fr'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        334 => [
            [['_route' => 'engineeringoffice_edit', '_controller' => 'App\\Controller\\EngineeringOfficeController::update', '_locale' => 'fr'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'engineeringoffice_delete', '_controller' => 'App\\Controller\\EngineeringOfficeController::delete', '_locale' => 'fr'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        359 => [
            [['_route' => 'engineeringofficesort_edit', '_controller' => 'App\\Controller\\EngineeringOfficeSortController::update', '_locale' => 'fr'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'engineeringofficesort_delete', '_controller' => 'App\\Controller\\EngineeringOfficeSortController::delete', '_locale' => 'fr'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        390 => [
            [['_route' => 'location_edit', '_controller' => 'App\\Controller\\LocationController::update', '_locale' => 'fr'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'location_delete', '_controller' => 'App\\Controller\\LocationController::delete', '_locale' => 'fr'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        424 => [
            [['_route' => 'personcontact_edit', '_controller' => 'App\\Controller\\PersonContactController::update', '_locale' => 'fr'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'personcontact_delete', '_controller' => 'App\\Controller\\PersonContactController::delete', '_locale' => 'fr'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        449 => [
            [['_route' => 'role_edit', '_controller' => 'App\\Controller\\RoleController::update', '_locale' => 'fr'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'role_delete', '_controller' => 'App\\Controller\\RoleController::delete', '_locale' => 'fr'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        474 => [
            [['_route' => 'site_edit', '_controller' => 'App\\Controller\\SiteController::update', '_locale' => 'fr'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'site_delete', '_controller' => 'App\\Controller\\SiteController::delete', '_locale' => 'fr'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        499 => [
            [['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::update', '_locale' => 'fr'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete', '_locale' => 'fr'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        524 => [
            [['_route' => 'work_edit', '_controller' => 'App\\Controller\\WorkController::update', '_locale' => 'fr'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'work_delete', '_controller' => 'App\\Controller\\WorkController::delete', '_locale' => 'fr'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        581 => [
            [['_route' => 'activity_edit', '_controller' => 'App\\Controller\\CompanyActivityController::update', '_locale' => 'en'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'activity_delete', '_controller' => 'App\\Controller\\CompanyActivityController::delete', '_locale' => 'en'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        601 => [
            [['_route' => 'company_edit', '_controller' => 'App\\Controller\\CompanyController::update', '_locale' => 'en'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'company_delete', '_controller' => 'App\\Controller\\CompanyController::delete', '_locale' => 'en'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        633 => [
            [['_route' => 'department_edit', '_controller' => 'App\\Controller\\DepartmentController::update', '_locale' => 'en'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'department_delete', '_controller' => 'App\\Controller\\DepartmentController::delete', '_locale' => 'en'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        665 => [
            [['_route' => 'employee_edit', '_controller' => 'App\\Controller\\EmployeeController::update', '_locale' => 'en'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'employee_delete', '_controller' => 'App\\Controller\\EmployeeController::delete', '_locale' => 'en'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        705 => [
            [['_route' => 'engineeringoffice_edit', '_controller' => 'App\\Controller\\EngineeringOfficeController::update', '_locale' => 'en'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'engineeringoffice_delete', '_controller' => 'App\\Controller\\EngineeringOfficeController::delete', '_locale' => 'en'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        730 => [
            [['_route' => 'engineeringofficesort_edit', '_controller' => 'App\\Controller\\EngineeringOfficeSortController::update', '_locale' => 'en'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'engineeringofficesort_delete', '_controller' => 'App\\Controller\\EngineeringOfficeSortController::delete', '_locale' => 'en'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        761 => [
            [['_route' => 'location_edit', '_controller' => 'App\\Controller\\LocationController::update', '_locale' => 'en'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'location_delete', '_controller' => 'App\\Controller\\LocationController::delete', '_locale' => 'en'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        795 => [
            [['_route' => 'personcontact_edit', '_controller' => 'App\\Controller\\PersonContactController::update', '_locale' => 'en'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'personcontact_delete', '_controller' => 'App\\Controller\\PersonContactController::delete', '_locale' => 'en'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        820 => [
            [['_route' => 'role_edit', '_controller' => 'App\\Controller\\RoleController::update', '_locale' => 'en'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'role_delete', '_controller' => 'App\\Controller\\RoleController::delete', '_locale' => 'en'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        845 => [
            [['_route' => 'site_edit', '_controller' => 'App\\Controller\\SiteController::update', '_locale' => 'en'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'site_delete', '_controller' => 'App\\Controller\\SiteController::delete', '_locale' => 'en'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        870 => [
            [['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::update', '_locale' => 'en'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete', '_locale' => 'en'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        895 => [
            [['_route' => 'work_edit', '_controller' => 'App\\Controller\\WorkController::update', '_locale' => 'en'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'work_delete', '_controller' => 'App\\Controller\\WorkController::delete', '_locale' => 'en'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        947 => [[['_route' => 'invitation', '_controller' => 'App\\Controller\\InvitationController::index', '_locale' => 'en'], ['id', 'personId'], null, null, false, true, null]],
        966 => [[['_route' => 'project_comments', '_controller' => 'App\\Controller\\ProjectCommentsController::index', '_locale' => 'en'], ['id'], null, null, false, false, null]],
        981 => [[['_route' => 'project_comments_new', '_controller' => 'App\\Controller\\ProjectCommentsController::add', '_locale' => 'en'], ['id'], null, null, false, false, null]],
        1000 => [
            [['_route' => 'project_comment_edit', '_controller' => 'App\\Controller\\ProjectCommentsController::update', '_locale' => 'en'], ['id', 'commentId'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'project_comments_delete', '_controller' => 'App\\Controller\\ProjectCommentsController::delete', '_locale' => 'en'], ['id', 'commentId'], ['DELETE' => 0], null, false, true, null],
        ],
        1023 => [[['_route' => 'document_list', '_controller' => 'App\\Controller\\ProjectDocumentsController::index', '_locale' => 'en'], ['id'], null, null, false, false, null]],
        1042 => [[['_route' => 'document_search', '_controller' => 'App\\Controller\\ProjectDocumentsController::search', '_locale' => 'en'], ['id'], null, null, false, false, null]],
        1064 => [[['_route' => 'document_view', '_controller' => 'App\\Controller\\ProjectDocumentsController::view', '_locale' => 'en'], ['id', 'documentId'], null, null, false, true, null]],
        1076 => [[['_route' => 'document_new', '_controller' => 'App\\Controller\\ProjectDocumentsController::add', '_locale' => 'en'], ['id'], null, null, false, false, null]],
        1093 => [[['_route' => 'document_delete', '_controller' => 'App\\Controller\\ProjectDocumentsController::delete', '_locale' => 'en'], ['id', 'documentId'], ['DELETE' => 0], null, false, true, null]],
        1115 => [[['_route' => 'planning_list', '_controller' => 'App\\Controller\\ProjectPlanningController::index', '_locale' => 'en'], ['id'], null, null, false, false, null]],
        1132 => [[['_route' => 'planning_list_json', '_controller' => 'App\\Controller\\ProjectPlanningController::list_json', '_locale' => 'en'], ['id'], null, null, false, false, null]],
        1147 => [[['_route' => 'planning_search', '_controller' => 'App\\Controller\\ProjectPlanningController::search', '_locale' => 'en'], ['id'], null, null, false, false, null]],
        1159 => [[['_route' => 'planning_new', '_controller' => 'App\\Controller\\ProjectPlanningController::add', '_locale' => 'en'], ['id'], null, null, false, false, null]],
        1179 => [
            [['_route' => 'planning_edit', '_controller' => 'App\\Controller\\ProjectPlanningController::update', '_locale' => 'en'], ['id', 'taskId'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'planning_delete', '_controller' => 'App\\Controller\\ProjectPlanningController::delete', '_locale' => 'en'], ['id', 'taskId'], ['DELETE' => 0], null, false, true, null],
        ],
        1198 => [[['_route' => 'project_works_list', '_controller' => 'App\\Controller\\ProjectWorksController::index', '_locale' => 'en'], ['projectId'], null, null, false, false, null]],
        1217 => [[['_route' => 'project_works_search', '_controller' => 'App\\Controller\\ProjectWorksController::search', '_locale' => 'en'], ['projectId'], null, null, false, false, null]],
        1229 => [[['_route' => 'project_works_new', '_controller' => 'App\\Controller\\ProjectWorksController::add', '_locale' => 'en'], ['projectId'], null, null, false, false, null]],
        1249 => [
            [['_route' => 'project_works_edit', '_controller' => 'App\\Controller\\ProjectWorksController::update', '_locale' => 'en'], ['projectId', 'workId'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'project_works_delete', '_controller' => 'App\\Controller\\ProjectWorksController::delete', '_locale' => 'en'], ['projectId', 'workId'], ['DELETE' => 0], null, false, true, null],
        ],
        1262 => [
            [['_route' => 'project_edit', '_controller' => 'App\\Controller\\ProjectController::update', '_locale' => 'en'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'project_delete', '_controller' => 'App\\Controller\\ProjectController::delete', '_locale' => 'en'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        1316 => [[['_route' => 'invitation', '_controller' => 'App\\Controller\\InvitationController::index', '_locale' => 'fr'], ['id', 'personId'], null, null, false, true, null]],
        1336 => [[['_route' => 'project_comments', '_controller' => 'App\\Controller\\ProjectCommentsController::index', '_locale' => 'fr'], ['id'], null, null, false, false, null]],
        1352 => [[['_route' => 'project_comments_new', '_controller' => 'App\\Controller\\ProjectCommentsController::add', '_locale' => 'fr'], ['id'], null, null, false, false, null]],
        1372 => [
            [['_route' => 'project_comment_edit', '_controller' => 'App\\Controller\\ProjectCommentsController::update', '_locale' => 'fr'], ['id', 'commentId'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'project_comments_delete', '_controller' => 'App\\Controller\\ProjectCommentsController::delete', '_locale' => 'fr'], ['id', 'commentId'], ['DELETE' => 0], null, false, true, null],
        ],
        1395 => [[['_route' => 'document_list', '_controller' => 'App\\Controller\\ProjectDocumentsController::index', '_locale' => 'fr'], ['id'], null, null, false, false, null]],
        1414 => [[['_route' => 'document_search', '_controller' => 'App\\Controller\\ProjectDocumentsController::search', '_locale' => 'fr'], ['id'], null, null, false, false, null]],
        1436 => [[['_route' => 'document_view', '_controller' => 'App\\Controller\\ProjectDocumentsController::view', '_locale' => 'fr'], ['id', 'documentId'], null, null, false, true, null]],
        1448 => [[['_route' => 'document_new', '_controller' => 'App\\Controller\\ProjectDocumentsController::add', '_locale' => 'fr'], ['id'], null, null, false, false, null]],
        1465 => [[['_route' => 'document_delete', '_controller' => 'App\\Controller\\ProjectDocumentsController::delete', '_locale' => 'fr'], ['id', 'documentId'], ['DELETE' => 0], null, false, true, null]],
        1487 => [[['_route' => 'planning_list', '_controller' => 'App\\Controller\\ProjectPlanningController::index', '_locale' => 'fr'], ['id'], null, null, false, false, null]],
        1504 => [[['_route' => 'planning_list_json', '_controller' => 'App\\Controller\\ProjectPlanningController::list_json', '_locale' => 'fr'], ['id'], null, null, false, false, null]],
        1519 => [[['_route' => 'planning_search', '_controller' => 'App\\Controller\\ProjectPlanningController::search', '_locale' => 'fr'], ['id'], null, null, false, false, null]],
        1531 => [[['_route' => 'planning_new', '_controller' => 'App\\Controller\\ProjectPlanningController::add', '_locale' => 'fr'], ['id'], null, null, false, false, null]],
        1551 => [
            [['_route' => 'planning_edit', '_controller' => 'App\\Controller\\ProjectPlanningController::update', '_locale' => 'fr'], ['id', 'taskId'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'planning_delete', '_controller' => 'App\\Controller\\ProjectPlanningController::delete', '_locale' => 'fr'], ['id', 'taskId'], ['DELETE' => 0], null, false, true, null],
        ],
        1570 => [[['_route' => 'project_works_list', '_controller' => 'App\\Controller\\ProjectWorksController::index', '_locale' => 'fr'], ['projectId'], null, null, false, false, null]],
        1589 => [[['_route' => 'project_works_search', '_controller' => 'App\\Controller\\ProjectWorksController::search', '_locale' => 'fr'], ['projectId'], null, null, false, false, null]],
        1601 => [[['_route' => 'project_works_new', '_controller' => 'App\\Controller\\ProjectWorksController::add', '_locale' => 'fr'], ['projectId'], null, null, false, false, null]],
        1621 => [
            [['_route' => 'project_works_edit', '_controller' => 'App\\Controller\\ProjectWorksController::update', '_locale' => 'fr'], ['projectId', 'workId'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'project_works_delete', '_controller' => 'App\\Controller\\ProjectWorksController::delete', '_locale' => 'fr'], ['projectId', 'workId'], ['DELETE' => 0], null, false, true, null],
        ],
        1634 => [
            [['_route' => 'project_edit', '_controller' => 'App\\Controller\\ProjectController::update', '_locale' => 'fr'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'project_delete', '_controller' => 'App\\Controller\\ProjectController::delete', '_locale' => 'fr'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
