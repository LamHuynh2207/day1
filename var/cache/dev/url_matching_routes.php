<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/check/attendance' => [[['_route' => 'app_check_attendance_index', '_controller' => 'App\\Controller\\CheckAttendanceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/check/attendance/new' => [[['_route' => 'app_check_attendance_new', '_controller' => 'App\\Controller\\CheckAttendanceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/lucky/hiengio' => [[['_route' => 'app_lucky_random', '_controller' => 'App\\Controller\\LuckyController::getdate'], null, ['GET' => 0], null, false, false, null]],
        '/lucky/download' => [[['_route' => 'app_download', '_controller' => 'App\\Controller\\LuckyController::download'], null, ['GET' => 0], null, false, false, null]],
        '/product' => [[['_route' => 'app_product_index', '_controller' => 'App\\Controller\\ProductController::index'], null, ['GET' => 0], null, true, false, null]],
        '/product/new' => [[['_route' => 'app_product_new', '_controller' => 'App\\Controller\\ProductController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/student' => [[['_route' => 'app_student_index', '_controller' => 'App\\Controller\\StudentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/student/json' => [[['_route' => 'app_student_index_json', '_controller' => 'App\\Controller\\StudentController::indexJson'], null, ['GET' => 0], null, false, false, null]],
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
                .'|/check/attendance/([^/]++)(?'
                    .'|(*:36)'
                    .'|/edit(*:48)'
                    .'|(*:55)'
                .')'
                .'|/product/([^/]++)(?'
                    .'|(*:83)'
                    .'|/edit(*:95)'
                    .'|(*:102)'
                .')'
                .'|/student/([^/]++)(?'
                    .'|(*:131)'
                    .'|/(?'
                        .'|json(*:147)'
                        .'|edit(*:159)'
                    .')'
                    .'|(*:168)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:208)'
                    .'|wdt/([^/]++)(*:228)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:274)'
                            .'|router(*:288)'
                            .'|exception(?'
                                .'|(*:308)'
                                .'|\\.css(*:321)'
                            .')'
                        .')'
                        .'|(*:331)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        36 => [[['_route' => 'app_check_attendance_show', '_controller' => 'App\\Controller\\CheckAttendanceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        48 => [[['_route' => 'app_check_attendance_edit', '_controller' => 'App\\Controller\\CheckAttendanceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        55 => [[['_route' => 'app_check_attendance_delete', '_controller' => 'App\\Controller\\CheckAttendanceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        83 => [[['_route' => 'app_product_show', '_controller' => 'App\\Controller\\ProductController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        95 => [[['_route' => 'app_product_edit', '_controller' => 'App\\Controller\\ProductController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        102 => [[['_route' => 'app_product_delete', '_controller' => 'App\\Controller\\ProductController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        131 => [[['_route' => 'app_student_show', '_controller' => 'App\\Controller\\StudentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        147 => [[['_route' => 'app_student_json', '_controller' => 'App\\Controller\\StudentController::getJson'], ['id'], ['GET' => 0], null, false, false, null]],
        159 => [[['_route' => 'app_student_edit', '_controller' => 'App\\Controller\\StudentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        168 => [[['_route' => 'app_student_delete', '_controller' => 'App\\Controller\\StudentController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        208 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        228 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        274 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        288 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        308 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        321 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        331 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
