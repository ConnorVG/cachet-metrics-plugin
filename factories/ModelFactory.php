<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use CachetHQ\Plugins\Metrics\Models\Metric;
use CachetHQ\Plugins\Metrics\Models\MetricPoint;

$factory->define(Metric::class, function ($faker) {
    return [
        'name'          => $faker->sentence(),
        'suffix'        => $faker->word(),
        'description'   => $faker->paragraph(),
        'default_value' => 1,
        'places'        => 2,
        'calc_type'     => $faker->boolean(),
        'display_chart' => $faker->boolean(),
        'threshold'     => 5,
    ];
});

$factory->define(MetricPoint::class, function ($faker) {
    return [
        'metric_id' => factory(Metric::class)->create()->id,
        'value'     => random_int(1, 100),
        'counter'   => 1,
    ];
});
