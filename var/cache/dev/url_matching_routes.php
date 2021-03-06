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
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/fault/add' => [[['_route' => 'fault_add', '_controller' => 'App\\Controller\\BaseController::userDefinedFault'], null, null, null, false, false, null]],
        '/session/add' => [[['_route' => 'add_session', '_controller' => 'App\\Controller\\BaseController::addToSession'], null, null, null, false, false, null]],
        '/language/add' => [[['_route' => 'add_language', '_controller' => 'App\\Controller\\BaseController::addLanguage'], null, null, null, false, false, null]],
        '/language/change' => [[['_route' => 'change_language', '_controller' => 'App\\Controller\\BaseController::changeLanguage'], null, null, null, false, false, null]],
        '/comment/add' => [[['_route' => 'add_comment', '_controller' => 'App\\Controller\\CommentController::add'], null, null, null, false, false, null]],
        '/cars/favourite/list' => [[['_route' => 'favourite_cars_list', '_controller' => 'App\\Controller\\FavouriteController::list'], null, null, null, false, false, null]],
        '/connect/google' => [[['_route' => 'connect_google_start', '_controller' => 'App\\Controller\\GoogleController::connectAction'], null, null, null, false, false, null]],
        '/connect/google/check' => [[['_route' => 'connect_google_check', '_controller' => 'App\\Controller\\GoogleController::connectCheckAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'main', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/makes/list' => [[['_route' => 'makes_list', '_controller' => 'App\\Controller\\MainController::makesList'], null, null, null, false, false, null]],
        '/user/preferences' => [[['_route' => 'userPreferences', '_controller' => 'App\\Controller\\PreferenceController::settings'], null, null, null, false, false, null]],
        '/user/preferences/reset' => [[['_route' => 'resetPreferences', '_controller' => 'App\\Controller\\PreferenceController::deleteSettings'], null, null, null, false, false, null]],
        '/rating' => [[['_route' => 'add_rating', '_controller' => 'App\\Controller\\RatingController::add'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/cars/comparing' => [[['_route' => 'comparing_list', '_controller' => 'App\\Controller\\ScaleController::list'], null, null, null, false, false, null]],
        '/search' => [[['_route' => 'search', '_controller' => 'App\\Controller\\SearchFilterController::searchAction'], null, null, null, false, false, null]],
        '/search/form' => [[['_route' => 'search_by_form', '_controller' => 'App\\Controller\\SearchFilterController::searchByForm'], null, null, null, false, false, null]],
        '/country-brands/list' => [[['_route' => 'app_searchfilter_getcountriesorbrands', '_controller' => 'App\\Controller\\SearchFilterController::getCountriesOrBrands'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
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
                .'|/fault/image/([^/]++)(*:190)'
                .'|/car/([^/]++)/(?'
                    .'|favourite(*:224)'
                    .'|comparing(*:241)'
                .')'
                .'|/make/([^/]++)/model(?'
                    .'|s/list(*:279)'
                    .'|/([^/]++)(?'
                        .'|(*:299)'
                        .'|/submodel/([^/]++)(?'
                            .'|(*:328)'
                            .'|/(?'
                                .'|engine/([^/]++)/details(*:363)'
                                .'|fault/([^/]++)(*:385)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/engine/(?'
                    .'|fault/([^/]++)(*:422)'
                    .'|([^/]++)(*:438)'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:483)'
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
        190 => [[['_route' => 'delete_fault_image', '_controller' => 'App\\Controller\\BaseController::deleteImage'], ['id'], ['DELETE' => 0], null, false, true, null]],
        224 => [[['_route' => 'add_favourite', '_controller' => 'App\\Controller\\FavouriteController::add'], ['id'], null, null, false, false, null]],
        241 => [[['_route' => 'comparing', '_controller' => 'App\\Controller\\ScaleController::comparing'], ['id'], null, null, false, false, null]],
        279 => [[['_route' => 'models_list', '_controller' => 'App\\Controller\\MainController::modelsList'], ['make'], null, null, false, false, null]],
        299 => [[['_route' => 'model_details', '_controller' => 'App\\Controller\\MainController::modelDetails'], ['make', 'model'], null, null, false, true, null]],
        328 => [[['_route' => 'sub_model_details', '_controller' => 'App\\Controller\\MainController::subModelDetails'], ['make', 'model', 'subModel'], null, null, false, true, null]],
        363 => [[['_route' => 'details_by_engine', '_controller' => 'App\\Controller\\MainController::detailsByEngine'], ['make', 'model', 'subModel', 'engine'], null, null, false, false, null]],
        385 => [[['_route' => 'subModel_fault', '_controller' => 'App\\Controller\\MainController::subModelFault'], ['make', 'model', 'subModel', 'fault'], null, null, false, true, null]],
        422 => [[['_route' => 'engine_fault', '_controller' => 'App\\Controller\\MainController::engineFault'], ['fault'], null, null, false, true, null]],
        438 => [[['_route' => 'engine_details', '_controller' => 'App\\Controller\\MainController::engineDetails'], ['id'], null, null, false, true, null]],
        483 => [
            [['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
