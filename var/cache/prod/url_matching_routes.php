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
        '/product' => [[['_route' => 'app_product_index', '_controller' => 'App\\Controller\\ProductController::index'], null, ['GET' => 0], null, true, false, null]],
        '/product/new' => [[['_route' => 'app_product_new', '_controller' => 'App\\Controller\\ProductController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/student' => [[['_route' => 'app_student_index', '_controller' => 'App\\Controller\\StudentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/student/new' => [[['_route' => 'app_student_new', '_controller' => 'App\\Controller\\StudentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                    .'|/edit(*:144)'
                    .'|(*:152)'
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
        144 => [[['_route' => 'app_student_edit', '_controller' => 'App\\Controller\\StudentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        152 => [
            [['_route' => 'app_student_delete', '_controller' => 'App\\Controller\\StudentController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
