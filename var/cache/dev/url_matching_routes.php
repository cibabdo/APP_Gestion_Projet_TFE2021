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
        '/test' => [[['_route' => 'test', '_controller' => 'App\\Controller\\InvitationController::test', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/test' => [[['_route' => 'test', '_controller' => 'App\\Controller\\InvitationController::test', '_locale' => 'en'], null, null, null, false, false, null]],
        '/admin/location' => [[['_route' => 'location_list', '_controller' => 'App\\Controller\\LocationController::index', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/admin/location' => [[['_route' => 'location_list', '_controller' => 'App\\Controller\\LocationController::index', '_locale' => 'en'], null, null, null, false, false, null]],
        '/admin/location/search' => [[['_route' => 'location_search', '_controller' => 'App\\Controller\\LocationController::search', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/admin/location/search' => [[['_route' => 'location_search', '_controller' => 'App\\Controller\\LocationController::search', '_locale' => 'en'], null, null, null, false, false, null]],
        '/admin/location/new' => [[['_route' => 'location_new', '_controller' => 'App\\Controller\\LocationController::add', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/admin/location/new' => [[['_route' => 'location_new', '_controller' => 'App\\Controller\\LocationController::add', '_locale' => 'en'], null, null, null, false, false, null]],
        '/init_motdepasse' => [[['_route' => 'init_password', '_controller' => 'App\\Controller\\PasswordController::init', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/init_password' => [[['_route' => 'init_password', '_controller' => 'App\\Controller\\PasswordController::init', '_locale' => 'en'], null, null, null, false, false, null]],
        '/changer_motdepasse' => [[['_route' => 'change_password', '_controller' => 'App\\Controller\\PasswordController::changePassword', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/change_password' => [[['_route' => 'change_password', '_controller' => 'App\\Controller\\PasswordController::changePassword', '_locale' => 'en'], null, null, null, false, false, null]],
        '/annuler_motdepasse' => [[['_route' => 'cancel_password', '_controller' => 'App\\Controller\\PasswordController::cancelPassword', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/cancel_password' => [[['_route' => 'cancel_password', '_controller' => 'App\\Controller\\PasswordController::cancelPassword', '_locale' => 'en'], null, null, null, false, false, null]],
        '/admin/personcontact' => [[['_route' => 'personcontact_list', '_controller' => 'App\\Controller\\PersonContactController::index', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/admin/personcontact' => [[['_route' => 'personcontact_list', '_controller' => 'App\\Controller\\PersonContactController::index', '_locale' => 'en'], null, null, null, false, false, null]],
        '/admin/personcontact/search' => [[['_route' => 'personcontact_search', '_controller' => 'App\\Controller\\PersonContactController::search', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/admin/personcontact/search' => [[['_route' => 'personcontact_search', '_controller' => 'App\\Controller\\PersonContactController::search', '_locale' => 'en'], null, null, null, false, false, null]],
        '/admin/personcontact/new' => [[['_route' => 'personcontact_new', '_controller' => 'App\\Controller\\PersonContactController::add', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/admin/personcontact/new' => [[['_route' => 'personcontact_new', '_controller' => 'App\\Controller\\PersonContactController::add', '_locale' => 'en'], null, null, null, false, false, null]],
        '/admin/personengineering' => [[['_route' => 'personengineering_list', '_controller' => 'App\\Controller\\PersonEngineeringController::index', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/admin/personengineering' => [[['_route' => 'personengineering_list', '_controller' => 'App\\Controller\\PersonEngineeringController::index', '_locale' => 'en'], null, null, null, false, false, null]],
        '/admin/personengineering/search' => [[['_route' => 'personengineering_search', '_controller' => 'App\\Controller\\PersonEngineeringController::search', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/admin/personengineering/search' => [[['_route' => 'personengineering_search', '_controller' => 'App\\Controller\\PersonEngineeringController::search', '_locale' => 'en'], null, null, null, false, false, null]],
        '/admin/personengineering/new' => [[['_route' => 'personengineering_new', '_controller' => 'App\\Controller\\PersonEngineeringController::add', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/admin/personengineering/new' => [[['_route' => 'personengineering_new', '_controller' => 'App\\Controller\\PersonEngineeringController::add', '_locale' => 'en'], null, null, null, false, false, null]],
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
        '/request/pdf' => [[['_route' => 'request_pdf', '_controller' => 'App\\Controller\\RequestController::pdf', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/request/pdf' => [[['_route' => 'request_pdf', '_controller' => 'App\\Controller\\RequestController::pdf', '_locale' => 'en'], null, null, null, false, false, null]],
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
        '/stat/search' => [[['_route' => 'stat_search', '_controller' => 'App\\Controller\\StatController::search', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/en/stat/search' => [[['_route' => 'stat_search', '_controller' => 'App\\Controller\\StatController::search', '_locale' => 'en'], null, null, null, false, false, null]],
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
                    .'|person(?'
                        .'|contact/([^/]++)(?'
                            .'|(*:427)'
                        .')'
                        .'|engineering/([^/]++)(?'
                            .'|(*:459)'
                        .')'
                    .')'
                    .'|role/([^/]++)(?'
                        .'|(*:485)'
                    .')'
                    .'|site/([^/]++)(?'
                        .'|(*:510)'
                    .')'
                    .'|user/([^/]++)(?'
                        .'|(*:535)'
                    .')'
                    .'|work/([^/]++)(?'
                        .'|(*:560)'
                    .')'
                .')'
                .'|/en/(?'
                    .'|admin/(?'
                        .'|company/(?'
                            .'|activity/([^/]++)(?'
                                .'|(*:617)'
                            .')'
                            .'|([^/]++)(?'
                                .'|(*:637)'
                            .')'
                        .')'
                        .'|department/([^/]++)(?'
                            .'|(*:669)'
                        .')'
                        .'|e(?'
                            .'|mployee/([^/]++)(?'
                                .'|(*:701)'
                            .')'
                            .'|ngineeringoffice(?'
                                .'|/([^/]++)(?'
                                    .'|(*:741)'
                                .')'
                                .'|sort/([^/]++)(?'
                                    .'|(*:766)'
                                .')'
                            .')'
                        .')'
                        .'|location/([^/]++)(?'
                            .'|(*:797)'
                        .')'
                        .'|person(?'
                            .'|contact/([^/]++)(?'
                                .'|(*:834)'
                            .')'
                            .'|engineering/([^/]++)(?'
                                .'|(*:866)'
                            .')'
                        .')'
                        .'|role/([^/]++)(?'
                            .'|(*:892)'
                        .')'
                        .'|site/([^/]++)(?'
                            .'|(*:917)'
                        .')'
                        .'|user/([^/]++)(?'
                            .'|(*:942)'
                        .')'
                        .'|work/([^/]++)(?'
                            .'|(*:967)'
                        .')'
                    .')'
                    .'|project/([^/]++)(?'
                        .'|/(?'
                            .'|invitation/([^/]++)(*:1019)'
                            .'|comments(?'
                                .'|(*:1039)'
                                .'|/(?'
                                    .'|new(*:1055)'
                                    .'|([^/]++)(?'
                                        .'|(*:1075)'
                                    .')'
                                .')'
                            .')'
                            .'|document(?'
                                .'|(*:1098)'
                                .'|/(?'
                                    .'|search(*:1117)'
                                    .'|view/([^/]++)(*:1139)'
                                    .'|new(*:1151)'
                                    .'|([^/]++)(*:1168)'
                                .')'
                            .')'
                            .'|planning(?'
                                .'|(*:1190)'
                                .'|/(?'
                                    .'|json(*:1207)'
                                    .'|search(*:1222)'
                                    .'|new(*:1234)'
                                    .'|([^/]++)(?'
                                        .'|(*:1254)'
                                        .'|/(?'
                                            .'|dates(*:1272)'
                                            .'|progress(*:1289)'
                                            .'|comment(*:1305)'
                                            .'|history(*:1321)'
                                        .')'
                                        .'|(*:1331)'
                                    .')'
                                .')'
                            .')'
                            .'|work(?'
                                .'|(*:1350)'
                                .'|/(?'
                                    .'|search(*:1369)'
                                    .'|new(*:1381)'
                                    .'|([^/]++)(?'
                                        .'|(*:1401)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|(*:1414)'
                    .')'
                .')'
                .'|/project/([^/]++)(?'
                    .'|/(?'
                        .'|invitation/([^/]++)(*:1468)'
                        .'|comments(?'
                            .'|(*:1488)'
                            .'|/(?'
                                .'|new(*:1504)'
                                .'|([^/]++)(?'
                                    .'|(*:1524)'
                                .')'
                            .')'
                        .')'
                        .'|document(?'
                            .'|(*:1547)'
                            .'|/(?'
                                .'|search(*:1566)'
                                .'|view/([^/]++)(*:1588)'
                                .'|new(*:1600)'
                                .'|([^/]++)(*:1617)'
                            .')'
                        .')'
                        .'|planning(?'
                            .'|(*:1639)'
                            .'|/(?'
                                .'|json(*:1656)'
                                .'|search(*:1671)'
                                .'|new(*:1683)'
                                .'|([^/]++)(?'
                                    .'|(*:1703)'
                                    .'|/(?'
                                        .'|dates(*:1721)'
                                        .'|progress(*:1738)'
                                        .'|comment(*:1754)'
                                        .'|history(*:1770)'
                                    .')'
                                    .'|(*:1780)'
                                .')'
                            .')'
                        .')'
                        .'|work(?'
                            .'|(*:1799)'
                            .'|/(?'
                                .'|search(*:1818)'
                                .'|new(*:1830)'
                                .'|([^/]++)(?'
                                    .'|(*:1850)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|(*:1863)'
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
        427 => [
            [['_route' => 'personcontact_edit', '_controller' => 'App\\Controller\\PersonContactController::update', '_locale' => 'fr'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'personcontact_delete', '_controller' => 'App\\Controller\\PersonContactController::delete', '_locale' => 'fr'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        459 => [
            [['_route' => 'personengineering_edit', '_controller' => 'App\\Controller\\PersonEngineeringController::update', '_locale' => 'fr'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'personengineering_delete', '_controller' => 'App\\Controller\\PersonEngineeringController::delete', '_locale' => 'fr'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        485 => [
            [['_route' => 'role_edit', '_controller' => 'App\\Controller\\RoleController::update', '_locale' => 'fr'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'role_delete', '_controller' => 'App\\Controller\\RoleController::delete', '_locale' => 'fr'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        510 => [
            [['_route' => 'site_edit', '_controller' => 'App\\Controller\\SiteController::update', '_locale' => 'fr'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'site_delete', '_controller' => 'App\\Controller\\SiteController::delete', '_locale' => 'fr'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        535 => [
            [['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::update', '_locale' => 'fr'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete', '_locale' => 'fr'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        560 => [
            [['_route' => 'work_edit', '_controller' => 'App\\Controller\\WorkController::update', '_locale' => 'fr'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'work_delete', '_controller' => 'App\\Controller\\WorkController::delete', '_locale' => 'fr'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        617 => [
            [['_route' => 'activity_edit', '_controller' => 'App\\Controller\\CompanyActivityController::update', '_locale' => 'en'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'activity_delete', '_controller' => 'App\\Controller\\CompanyActivityController::delete', '_locale' => 'en'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        637 => [
            [['_route' => 'company_edit', '_controller' => 'App\\Controller\\CompanyController::update', '_locale' => 'en'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'company_delete', '_controller' => 'App\\Controller\\CompanyController::delete', '_locale' => 'en'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        669 => [
            [['_route' => 'department_edit', '_controller' => 'App\\Controller\\DepartmentController::update', '_locale' => 'en'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'department_delete', '_controller' => 'App\\Controller\\DepartmentController::delete', '_locale' => 'en'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        701 => [
            [['_route' => 'employee_edit', '_controller' => 'App\\Controller\\EmployeeController::update', '_locale' => 'en'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'employee_delete', '_controller' => 'App\\Controller\\EmployeeController::delete', '_locale' => 'en'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        741 => [
            [['_route' => 'engineeringoffice_edit', '_controller' => 'App\\Controller\\EngineeringOfficeController::update', '_locale' => 'en'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'engineeringoffice_delete', '_controller' => 'App\\Controller\\EngineeringOfficeController::delete', '_locale' => 'en'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        766 => [
            [['_route' => 'engineeringofficesort_edit', '_controller' => 'App\\Controller\\EngineeringOfficeSortController::update', '_locale' => 'en'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'engineeringofficesort_delete', '_controller' => 'App\\Controller\\EngineeringOfficeSortController::delete', '_locale' => 'en'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        797 => [
            [['_route' => 'location_edit', '_controller' => 'App\\Controller\\LocationController::update', '_locale' => 'en'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'location_delete', '_controller' => 'App\\Controller\\LocationController::delete', '_locale' => 'en'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        834 => [
            [['_route' => 'personcontact_edit', '_controller' => 'App\\Controller\\PersonContactController::update', '_locale' => 'en'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'personcontact_delete', '_controller' => 'App\\Controller\\PersonContactController::delete', '_locale' => 'en'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        866 => [
            [['_route' => 'personengineering_edit', '_controller' => 'App\\Controller\\PersonEngineeringController::update', '_locale' => 'en'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'personengineering_delete', '_controller' => 'App\\Controller\\PersonEngineeringController::delete', '_locale' => 'en'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        892 => [
            [['_route' => 'role_edit', '_controller' => 'App\\Controller\\RoleController::update', '_locale' => 'en'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'role_delete', '_controller' => 'App\\Controller\\RoleController::delete', '_locale' => 'en'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        917 => [
            [['_route' => 'site_edit', '_controller' => 'App\\Controller\\SiteController::update', '_locale' => 'en'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'site_delete', '_controller' => 'App\\Controller\\SiteController::delete', '_locale' => 'en'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        942 => [
            [['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::update', '_locale' => 'en'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete', '_locale' => 'en'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        967 => [
            [['_route' => 'work_edit', '_controller' => 'App\\Controller\\WorkController::update', '_locale' => 'en'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'work_delete', '_controller' => 'App\\Controller\\WorkController::delete', '_locale' => 'en'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        1019 => [[['_route' => 'invitation', '_controller' => 'App\\Controller\\InvitationController::index', '_locale' => 'en'], ['id', 'personId'], null, null, false, true, null]],
        1039 => [[['_route' => 'project_comments', '_controller' => 'App\\Controller\\ProjectCommentsController::index', '_locale' => 'en'], ['id'], null, null, false, false, null]],
        1055 => [[['_route' => 'project_comments_new', '_controller' => 'App\\Controller\\ProjectCommentsController::add', '_locale' => 'en'], ['id'], null, null, false, false, null]],
        1075 => [
            [['_route' => 'project_comment_edit', '_controller' => 'App\\Controller\\ProjectCommentsController::update', '_locale' => 'en'], ['id', 'commentId'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'project_comments_delete', '_controller' => 'App\\Controller\\ProjectCommentsController::delete', '_locale' => 'en'], ['id', 'commentId'], ['DELETE' => 0], null, false, true, null],
        ],
        1098 => [[['_route' => 'document_list', '_controller' => 'App\\Controller\\ProjectDocumentsController::index', '_locale' => 'en'], ['id'], null, null, false, false, null]],
        1117 => [[['_route' => 'document_search', '_controller' => 'App\\Controller\\ProjectDocumentsController::search', '_locale' => 'en'], ['id'], null, null, false, false, null]],
        1139 => [[['_route' => 'document_view', '_controller' => 'App\\Controller\\ProjectDocumentsController::view', '_locale' => 'en'], ['id', 'documentId'], null, null, false, true, null]],
        1151 => [[['_route' => 'document_new', '_controller' => 'App\\Controller\\ProjectDocumentsController::add', '_locale' => 'en'], ['id'], null, null, false, false, null]],
        1168 => [[['_route' => 'document_delete', '_controller' => 'App\\Controller\\ProjectDocumentsController::delete', '_locale' => 'en'], ['id', 'documentId'], ['DELETE' => 0], null, false, true, null]],
        1190 => [[['_route' => 'planning_list', '_controller' => 'App\\Controller\\ProjectPlanningController::index', '_locale' => 'en'], ['id'], null, null, false, false, null]],
        1207 => [[['_route' => 'planning_list_json', '_controller' => 'App\\Controller\\ProjectPlanningController::list_json', '_locale' => 'en'], ['id'], null, null, false, false, null]],
        1222 => [[['_route' => 'planning_search', '_controller' => 'App\\Controller\\ProjectPlanningController::search', '_locale' => 'en'], ['id'], null, null, false, false, null]],
        1234 => [[['_route' => 'planning_new', '_controller' => 'App\\Controller\\ProjectPlanningController::add', '_locale' => 'en'], ['id'], null, null, false, false, null]],
        1254 => [[['_route' => 'planning_edit', '_controller' => 'App\\Controller\\ProjectPlanningController::update', '_locale' => 'en'], ['id', 'taskId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1272 => [[['_route' => 'planning_update_dates', '_controller' => 'App\\Controller\\ProjectPlanningController::updateDates', '_locale' => 'en'], ['id', 'taskId'], ['POST' => 0], null, false, false, null]],
        1289 => [[['_route' => 'planning_update_progress', '_controller' => 'App\\Controller\\ProjectPlanningController::updateProgress', '_locale' => 'en'], ['id', 'taskId'], ['POST' => 0], null, false, false, null]],
        1305 => [[['_route' => 'planning_add_comment', '_controller' => 'App\\Controller\\ProjectPlanningController::addComment', '_locale' => 'en'], ['id', 'taskId'], ['POST' => 0], null, false, false, null]],
        1321 => [[['_route' => 'planning_history', '_controller' => 'App\\Controller\\ProjectPlanningController::history', '_locale' => 'en'], ['id', 'taskId'], null, null, false, false, null]],
        1331 => [[['_route' => 'planning_delete', '_controller' => 'App\\Controller\\ProjectPlanningController::delete', '_locale' => 'en'], ['id', 'taskId'], ['DELETE' => 0], null, false, true, null]],
        1350 => [[['_route' => 'project_works_list', '_controller' => 'App\\Controller\\ProjectWorksController::index', '_locale' => 'en'], ['projectId'], null, null, false, false, null]],
        1369 => [[['_route' => 'project_works_search', '_controller' => 'App\\Controller\\ProjectWorksController::search', '_locale' => 'en'], ['projectId'], null, null, false, false, null]],
        1381 => [[['_route' => 'project_works_new', '_controller' => 'App\\Controller\\ProjectWorksController::add', '_locale' => 'en'], ['projectId'], null, null, false, false, null]],
        1401 => [
            [['_route' => 'project_works_edit', '_controller' => 'App\\Controller\\ProjectWorksController::update', '_locale' => 'en'], ['projectId', 'workId'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'project_works_delete', '_controller' => 'App\\Controller\\ProjectWorksController::delete', '_locale' => 'en'], ['projectId', 'workId'], ['DELETE' => 0], null, false, true, null],
        ],
        1414 => [
            [['_route' => 'project_edit', '_controller' => 'App\\Controller\\ProjectController::update', '_locale' => 'en'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'project_delete', '_controller' => 'App\\Controller\\ProjectController::delete', '_locale' => 'en'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        1468 => [[['_route' => 'invitation', '_controller' => 'App\\Controller\\InvitationController::index', '_locale' => 'fr'], ['id', 'personId'], null, null, false, true, null]],
        1488 => [[['_route' => 'project_comments', '_controller' => 'App\\Controller\\ProjectCommentsController::index', '_locale' => 'fr'], ['id'], null, null, false, false, null]],
        1504 => [[['_route' => 'project_comments_new', '_controller' => 'App\\Controller\\ProjectCommentsController::add', '_locale' => 'fr'], ['id'], null, null, false, false, null]],
        1524 => [
            [['_route' => 'project_comment_edit', '_controller' => 'App\\Controller\\ProjectCommentsController::update', '_locale' => 'fr'], ['id', 'commentId'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'project_comments_delete', '_controller' => 'App\\Controller\\ProjectCommentsController::delete', '_locale' => 'fr'], ['id', 'commentId'], ['DELETE' => 0], null, false, true, null],
        ],
        1547 => [[['_route' => 'document_list', '_controller' => 'App\\Controller\\ProjectDocumentsController::index', '_locale' => 'fr'], ['id'], null, null, false, false, null]],
        1566 => [[['_route' => 'document_search', '_controller' => 'App\\Controller\\ProjectDocumentsController::search', '_locale' => 'fr'], ['id'], null, null, false, false, null]],
        1588 => [[['_route' => 'document_view', '_controller' => 'App\\Controller\\ProjectDocumentsController::view', '_locale' => 'fr'], ['id', 'documentId'], null, null, false, true, null]],
        1600 => [[['_route' => 'document_new', '_controller' => 'App\\Controller\\ProjectDocumentsController::add', '_locale' => 'fr'], ['id'], null, null, false, false, null]],
        1617 => [[['_route' => 'document_delete', '_controller' => 'App\\Controller\\ProjectDocumentsController::delete', '_locale' => 'fr'], ['id', 'documentId'], ['DELETE' => 0], null, false, true, null]],
        1639 => [[['_route' => 'planning_list', '_controller' => 'App\\Controller\\ProjectPlanningController::index', '_locale' => 'fr'], ['id'], null, null, false, false, null]],
        1656 => [[['_route' => 'planning_list_json', '_controller' => 'App\\Controller\\ProjectPlanningController::list_json', '_locale' => 'fr'], ['id'], null, null, false, false, null]],
        1671 => [[['_route' => 'planning_search', '_controller' => 'App\\Controller\\ProjectPlanningController::search', '_locale' => 'fr'], ['id'], null, null, false, false, null]],
        1683 => [[['_route' => 'planning_new', '_controller' => 'App\\Controller\\ProjectPlanningController::add', '_locale' => 'fr'], ['id'], null, null, false, false, null]],
        1703 => [[['_route' => 'planning_edit', '_controller' => 'App\\Controller\\ProjectPlanningController::update', '_locale' => 'fr'], ['id', 'taskId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1721 => [[['_route' => 'planning_update_dates', '_controller' => 'App\\Controller\\ProjectPlanningController::updateDates', '_locale' => 'fr'], ['id', 'taskId'], ['POST' => 0], null, false, false, null]],
        1738 => [[['_route' => 'planning_update_progress', '_controller' => 'App\\Controller\\ProjectPlanningController::updateProgress', '_locale' => 'fr'], ['id', 'taskId'], ['POST' => 0], null, false, false, null]],
        1754 => [[['_route' => 'planning_add_comment', '_controller' => 'App\\Controller\\ProjectPlanningController::addComment', '_locale' => 'fr'], ['id', 'taskId'], ['POST' => 0], null, false, false, null]],
        1770 => [[['_route' => 'planning_history', '_controller' => 'App\\Controller\\ProjectPlanningController::history', '_locale' => 'fr'], ['id', 'taskId'], null, null, false, false, null]],
        1780 => [[['_route' => 'planning_delete', '_controller' => 'App\\Controller\\ProjectPlanningController::delete', '_locale' => 'fr'], ['id', 'taskId'], ['DELETE' => 0], null, false, true, null]],
        1799 => [[['_route' => 'project_works_list', '_controller' => 'App\\Controller\\ProjectWorksController::index', '_locale' => 'fr'], ['projectId'], null, null, false, false, null]],
        1818 => [[['_route' => 'project_works_search', '_controller' => 'App\\Controller\\ProjectWorksController::search', '_locale' => 'fr'], ['projectId'], null, null, false, false, null]],
        1830 => [[['_route' => 'project_works_new', '_controller' => 'App\\Controller\\ProjectWorksController::add', '_locale' => 'fr'], ['projectId'], null, null, false, false, null]],
        1850 => [
            [['_route' => 'project_works_edit', '_controller' => 'App\\Controller\\ProjectWorksController::update', '_locale' => 'fr'], ['projectId', 'workId'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'project_works_delete', '_controller' => 'App\\Controller\\ProjectWorksController::delete', '_locale' => 'fr'], ['projectId', 'workId'], ['DELETE' => 0], null, false, true, null],
        ],
        1863 => [
            [['_route' => 'project_edit', '_controller' => 'App\\Controller\\ProjectController::update', '_locale' => 'fr'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'project_delete', '_controller' => 'App\\Controller\\ProjectController::delete', '_locale' => 'fr'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
