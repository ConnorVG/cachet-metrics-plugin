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

use CachetHQ\Plugins\Metrics\Models\Metric;

final class MetricWasUpdatedEvent implements MetricEventInterface
{
    /**
     * The metric that was updated.
     *
     * @var \CachetHQ\Cachet\Models\MetricPoint
     */
    public $metric;

    /**
     * Create a new metric was updated event instance.
     *
     * @param \CachetHQ\Cachet\Models\Metric $metric
     *
     * @return void
     */
    public function __construct(Metric $metric)
    {
        $this->metric = $metric;
    }
}
