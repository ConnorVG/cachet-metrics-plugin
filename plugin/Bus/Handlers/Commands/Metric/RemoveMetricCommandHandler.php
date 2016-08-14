<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Plugins\Metrics\Bus\Handlers\Commands\Metric;

use CachetHQ\Plugins\Metrics\Bus\Commands\Metric\RemoveMetricCommand;
use CachetHQ\Plugins\Metrics\Bus\Events\Metric\MetricWasRemovedEvent;
use CachetHQ\Plugins\Metrics\Models\Metric;

class RemoveMetricCommandHandler
{
    /**
     * Handle the remove metric command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\Metric\RemoveMetricCommand $command
     *
     * @return void
     */
    public function handle(RemoveMetricCommand $command)
    {
        $metric = $command->metric;

        event(new MetricWasRemovedEvent($metric));

        $metric->delete();
    }
}
