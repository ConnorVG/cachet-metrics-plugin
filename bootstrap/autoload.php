<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

define('LARAVEL_START', microtime(true));

define('CACHET_VERSION', trim(file_get_contents(__DIR__.'/../vendor/cachethq/cachet/VERSION')));

define('PLUGIN_VERSION', trim(file_get_contents(__DIR__.'/../VERSION')));

define('TESTING_PLUGIN_DIR', realpath(dirname(__DIR__)));

/*
|--------------------------------------------------------------------------
| Register The Composer Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader
| for our application. We just need to utilize it! We'll require it
| into the script here so that we do not have to worry about the
| loading of any our classes "manually". Feels great to relax.
|
*/

require __DIR__.'/../vendor/autoload.php';
