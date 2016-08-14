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

use CachetHQ\Plugins\Metrics\Bus\Events\Metric\MetricEventInterface;
use CachetHQ\Tests\Plugins\Metrics\AbstractTestCase;
use CachetHQ\Tests\Plugins\Metrics\Bus\Events\EventTrait;

abstract class AbstractMetricEventTestCase extends AbstractTestCase
{
    use EventTrait;

    protected function getEventInterfaces()
    {
        return [MetricEventInterface::class];
    }
}
