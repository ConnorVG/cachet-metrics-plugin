<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Plugins\Metrics\Foundation\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Translation\Translator;

class TranslatorServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @param \Illuminate\Translation\Translator $translator
     */
    public function boot(Translator $translator)
    {
        $translator->addNamespace('connorvg/cachet-metrics-plugin', plugin_path(true, 'connorvg', 'cachet-metrics-plugin').'/resources/lang');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // ...
    }
}
