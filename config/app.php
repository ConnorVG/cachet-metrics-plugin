<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Autoloaded Service Providers
    |--------------------------------------------------------------------------
    |
    | The service providers listed here will be automatically loaded on the
    | request to your application. Feel free to add your own services to
    | this array to grant expanded functionality to your applications.
    |
    */

    'providers' => [
        'CachetHQ\Plugins\Metrics\Foundation\Providers\ComposerServiceProvider',
        'CachetHQ\Plugins\Metrics\Foundation\Providers\EventServiceProvider',
        'CachetHQ\Plugins\Metrics\Foundation\Providers\RepositoryServiceProvider',
        'CachetHQ\Plugins\Metrics\Foundation\Providers\RouteServiceProvider',
        'CachetHQ\Plugins\Metrics\Foundation\Providers\TranslatorServiceProvider',
        'CachetHQ\Plugins\Metrics\Foundation\Providers\ViewServiceProvider',
    ],

];
