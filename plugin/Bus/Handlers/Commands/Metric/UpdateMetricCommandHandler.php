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

use CachetHQ\Plugins\Metrics\Bus\Commands\Metric\UpdateMetricCommand;
use CachetHQ\Plugins\Metrics\Bus\Events\Metric\MetricWasUpdatedEvent;
use CachetHQ\Plugins\Metrics\Models\Metric;

class UpdateMetricCommandHandler
{
    /**
     * Handle the update metric command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\Metric\UpdateMetricCommand $command
     *
     * @return \CachetHQ\Cachet\Models\Metric
     */
    public function handle(UpdateMetricCommand $command)
    {
        $metric = $command->metric;

        $metric->update($this->filter($command));

        event(new MetricWasUpdatedEvent($metric));

        return $metric;
    }

    /**
     * Filter the command data.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\Metric\UpdateMetricCommand $command
     *
     * @return array
     */
    protected function filter(UpdateMetricCommand $command)
    {
        $params = [
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
        ];

        return array_filter($params, function ($val) {
            return $val !== null;
        });
    }
}
