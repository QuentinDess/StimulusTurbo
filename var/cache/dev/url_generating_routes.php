<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'admin_dashboard' => [[], ['_controller' => 'App\\Controller\\AdminController::dashboard'], [], [['text', '/admin']], [], []],
    'app_cart' => [[], ['_controller' => 'App\\Controller\\CartController::shoppingCart'], [], [['text', '/cart']], [], []],
    'app_cart_add_item' => [['id'], ['_controller' => 'App\\Controller\\CartController::addItemToCart'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/product']], [], []],
    'app_cart_remove_item' => [['productId', 'colorId'], ['colorId' => null, '_controller' => 'App\\Controller\\CartController::removeItemToCart'], [], [['variable', '/', '[^/]++', 'colorId', true], ['variable', '/', '[^/]++', 'productId', true], ['text', '/cart/remove']], [], []],
    '_app_cart_list' => [[], ['_controller' => 'App\\Controller\\CartController::_shoppingCartList'], [], [['text', '/cart/_list']], [], []],
    'app_checkout' => [[], ['_controller' => 'App\\Controller\\CheckoutController::checkout'], [], [['text', '/checkout']], [], []],
    'app_confirmation' => [[], ['_controller' => 'App\\Controller\\CheckoutController::confirmation'], [], [['text', '/confirmation']], [], []],
    'app_homepage' => [[], ['_controller' => 'App\\Controller\\ProductController::index'], [], [['text', '/']], [], []],
    'app_category' => [['id'], ['_controller' => 'App\\Controller\\ProductController::index'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/category']], [], []],
    'app_product' => [['id'], ['_controller' => 'App\\Controller\\ProductController::showProduct'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/product']], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
];
