<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/student' => [[['_route' => 'app_student_index', '_controller' => 'App\\Controller\\StudentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/student/new' => [[['_route' => 'app_student_new', '_controller' => 'App\\Controller\\StudentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/lucky' => [[['_route' => 'app_lucky_number', '_controller' => 'App\\Controller\\LuckyController::number'], null, null, null, false, false, null]],
        '/lucky/getdate' => [[['_route' => 'app_lucky_getdate', '_controller' => 'App\\Controller\\LuckyController::getdate'], null, null, null, false, false, null]],
        '/lucky/welcome' => [[['_route' => 'app_lucky_hello', '_controller' => 'App\\Controller\\LuckyController::welcome'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/student/([^/]++)(?'
                    .'|(*:27)'
                    .'|/edit(*:39)'
                    .'|(*:46)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:85)'
                    .'|wdt/([^/]++)(*:104)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:150)'
                            .'|router(*:164)'
                            .'|exception(?'
                                .'|(*:184)'
                                .'|\\.css(*:197)'
                            .')'
                        .')'
                        .'|(*:207)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        27 => [[['_route' => 'app_student_show', '_controller' => 'App\\Controller\\StudentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        39 => [[['_route' => 'app_student_edit', '_controller' => 'App\\Controller\\StudentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        46 => [[['_route' => 'app_student_delete', '_controller' => 'App\\Controller\\StudentController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        85 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        104 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        150 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        164 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        184 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        197 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        207 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
