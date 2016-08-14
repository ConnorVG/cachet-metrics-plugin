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

use CachetHQ\Plugins\Metrics\Bus\Commands\Metric\AddMetricCommand;
use CachetHQ\Plugins\Metrics\Bus\Events\Metric\MetricWasAddedEvent;
use CachetHQ\Plugins\Metrics\Models\Metric;

class AddMetricCommandHandler
{
    /**
     * Handle the add metric command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\Metric\AddMetricCommand $command
     *
     * @return \CachetHQ\Cachet\Models\Metric
     */
    public function handle(AddMetricCommand $command)
    {
        $metric = Metric::create([
            'name'          => $command->name,
            'suffix'        => $command->suffix,
            'description'   => $command->description,
            'default_value' => $command->default_value,
            'calc_type'     => $command->calc_type,
            'display_chart' => $command->display_chart,
            'places'        => $command->places,
            'default_view'  => $command->default_view,
            'threshold'     => $command->threshold,
            'order'         => $command->order,
        ]);

        event(new MetricWasAddedEvent($metric));

        return $metric;
    }
}
