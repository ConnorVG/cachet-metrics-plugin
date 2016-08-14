<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Plugins\Metrics\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

/**
 * This is the dashboard routes class.
 *
 * @author Connor S. Parks <connor@connorvg.tv>
 */
class DashboardRoutes
{
    /**
     * Define the dashboard routes.
     *
     * @param \Illuminate\Contracts\Routing\Registrar $router
     *
     * @return void
     */
    public function map(Registrar $router)
    {
        $router->group([
            'middleware' => ['web', 'auth'],
            'namespace'  => 'Dashboard',
            'prefix'     => 'dashboard/metrics',
            'as'         => 'dashboard.metrics.',
        ], function (Registrar $router) {
            $router->get('/', [
                'as'   => 'index',
                'uses' => 'MetricController@showMetrics',
            ]);
            $router->get('add', [
                'as'   => 'add',
                'uses' => 'MetricController@showAddMetric',
            ]);
            $router->post('add', 'MetricController@createMetricAction');
            $router->delete('{metric}/delete', 'MetricController@deleteMetricAction');
            $router->get('{metric}/edit', [
                'as'   => 'edit',
                'uses' => 'MetricController@showEditMetricAction',
            ]);
            $router->post('{metric}/edit', 'MetricController@editMetricAction');
        });
    }
}
