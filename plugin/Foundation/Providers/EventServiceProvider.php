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

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event handler mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'CachetHQ\Plugins\Metrics\Bus\Events\Metric\MetricPointWasAddedEvent' => [
            //
        ],
        'CachetHQ\Plugins\Metrics\Bus\Events\Metric\MetricPointWasRemovedEvent' => [
            //
        ],
        'CachetHQ\Plugins\Metrics\Bus\Events\Metric\MetricPointWasUpdatedEvent' => [
            //
        ],
        'CachetHQ\Plugins\Metrics\Bus\Events\Metric\MetricWasAddedEvent' => [
            //
        ],
        'CachetHQ\Plugins\Metrics\Bus\Events\Metric\MetricWasRemovedEvent' => [
            //
        ],
        'CachetHQ\Plugins\Metrics\Bus\Events\Metric\MetricWasUpdatedEvent' => [
            //
        ],
    ];
}
