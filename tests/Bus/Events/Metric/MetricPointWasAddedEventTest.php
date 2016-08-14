<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Plugins\Metrics\Bus\Events\Metric;

use CachetHQ\Plugins\Metrics\Bus\Events\Metric\MetricPointWasAddedEvent;
use CachetHQ\Plugins\Metrics\Models\MetricPoint;

/**
 * This is the metric point was added event test class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class MetricPointWasAddedEventTest extends AbstractMetricEventTestCase
{
    protected function objectHasHandlers()
    {
        return false;
    }

    protected function getObjectAndParams()
    {
        $params = ['metricPoint' => new MetricPoint()];
        $object = new MetricPointWasAddedEvent($params['metricPoint']);

        return compact('params', 'object');
    }
}
