<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Plugins\Metrics\Foundation\Providers;

use GrahamCampbell\TestBenchCore\LaravelTrait;
use GrahamCampbell\TestBenchCore\ServiceProviderTrait as ProviderTrait;
use ReflectionClass;

/**
 * This is the abstract service provider test case.
 *
 * @author Connor S. Parks <connor@connorvg.tv>
 */
trait ServiceProviderTrait
{
    use LaravelTrait, ProviderTrait;

    protected function getServiceProviderClass($app)
    {
        $split = explode('\\', (new ReflectionClass($this))->getName());
        $class = substr(end($split), 0, -4);

        return "{$split[0]}\\{$split[2]}\\{$split[3]}\\Foundation\\Providers\\{$class}";
    }
}
