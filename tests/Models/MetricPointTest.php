<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Plugins\Metrics\Models;

use AltThree\TestBench\ValidationTrait;
use CachetHQ\Plugins\Metrics\Models\MetricPoint;
use CachetHQ\Tests\Plugins\Metrics\AbstractTestCase;

/**
 * This is the metric point model test class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
class MetricPointTest extends AbstractTestCase
{
    use ValidationTrait;

    public function testValidation()
    {
        $this->checkRules(new MetricPoint());
    }
}
