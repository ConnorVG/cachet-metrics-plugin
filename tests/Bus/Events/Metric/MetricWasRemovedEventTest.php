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

use CachetHQ\Plugins\Metrics\Bus\Events\Metric\MetricWasRemovedEvent;
use CachetHQ\Plugins\Metrics\Models\Metric;

class MetricWasRemovedEventTest extends AbstractMetricEventTestCase
{
    protected function objectHasHandlers()
    {
        return false;
    }

    protected function getObjectAndParams()
    {
        $params = ['metric' => new Metric()];
        $object = new MetricWasRemovedEvent($params['metric']);

        return compact('params', 'object');
    }
}
