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

use CachetHQ\Plugins\Metrics\Bus\Commands\Metric\RemoveMetricPointCommand;
use CachetHQ\Plugins\Metrics\Bus\Events\Metric\MetricPointWasRemovedEvent;
use CachetHQ\Plugins\Metrics\Models\Metric;

class RemoveMetricPointCommandHandler
{
    /**
     * Handle the remove metric point command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\Metric\RemoveMetricPointCommand $command
     *
     * @return void
     */
    public function handle(RemoveMetricPointCommand $command)
    {
        $metricPoint = $command->metricPoint;

        event(new MetricPointWasRemovedEvent($metricPoint));

        $metricPoint->delete();
    }
}
