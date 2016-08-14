<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Plugins\Metrics\Bus\Commands\Metric;

use AltThree\TestBench\CommandTrait;
use CachetHQ\Plugins\Metrics\Bus\Commands\Metric\RemoveMetricCommand;
use CachetHQ\Plugins\Metrics\Bus\Handlers\Commands\Metric\RemoveMetricCommandHandler;
use CachetHQ\Plugins\Metrics\Models\Metric;
use CachetHQ\Tests\Plugins\Metrics\AbstractTestCase;

/**
 * This is the remove metric command test class.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 */
class RemoveMetricCommandTest extends AbstractTestCase
{
    use CommandTrait;

    protected function getObjectAndParams()
    {
        $params = ['metric' => new Metric()];
        $object = new RemoveMetricCommand($params['metric']);

        return compact('params', 'object');
    }

    protected function getHandlerClass()
    {
        return RemoveMetricCommandHandler::class;
    }
}
