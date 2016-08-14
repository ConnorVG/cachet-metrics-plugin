<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Plugins\Metrics\Bus\Events\Metric;

use CachetHQ\Plugins\Metrics\Models\MetricPoint;

final class MetricPointWasRemovedEvent implements MetricEventInterface
{
    /**
     * The metric point that was removed.
     *
     * @var \CachetHQ\Cachet\Models\MetricPoint
     */
    public $metricPoint;

    /**
     * Create a new metric point was removed event instance.
     *
     * @param \CachetHQ\Cachet\Models\MetricPoint $memtricPoint
     *
     * @return void
     */
    public function __construct(MetricPoint $metricPoint)
    {
        $this->metricPoint = $metricPoint;
    }
}
