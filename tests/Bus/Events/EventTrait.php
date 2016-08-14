<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Plugins\Metrics\Bus\Events;

use AltThree\TestBench\EventTrait as BaseEventTrait;
use ReflectionClass;

/**
 * This is the abstract service provider test case.
 *
 * @author Connor S. Parks <connor@connorvg.tv>
 */
trait EventTrait
{
    use BaseEventTrait {
        BaseEventTrait::getEventServiceProvider as _getEventServiceProvider;
    }

    protected function getEventServiceProvider()
    {
        $split = explode('\\', (new ReflectionClass($this))->getName());

        return "{$split[0]}\\{$split[2]}\\{$split[3]}\\Foundation\\Providers\\EventServiceProvider";
    }
}
