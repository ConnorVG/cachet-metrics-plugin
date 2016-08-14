<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Plugins\Metrics\Foundation\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Routing\Router;

/**
 * This is the route service provider.
 *
 * @author Connor S. Parks <connor@connorvg.tv>
 */
class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'CachetHQ\Plugins\Metrics\Http\Controllers';

    /**
     * Define the route model bindings, pattern filters, etc.
     *
     * @param \Illuminate\Routing\Router $router
     *
     * @return void
     */
    public function boot(Router $router)
    {
        parent::boot($router);

        $this->registerBindings();
    }

    /**
     * Register model bindings.
     *
     * @return void
     */
    protected function registerBindings()
    {
        $this->app->router->model('metric', 'CachetHQ\Plugins\Metrics\Models\Metric');
        $this->app->router->model('metric_point', 'CachetHQ\Plugins\Metrics\Models\MetricPoint');
    }

    /**
     * Define the routes for the application.
     *
     * @param \Illuminate\Routing\Router $router
     *
     * @return void
     */
    public function map(Router $router)
    {
        $router->group(['namespace' => $this->namespace], function (Router $router) {
            $path = plugin_path(true, 'connorvg', 'cachet-metrics-plugin');

            foreach (glob($path.'/plugin/Http/Routes/*.php') as $file) {
                $this->app->make('CachetHQ\\Plugins\\Metrics\\Http\\Routes\\'.basename($file, '.php'))->map($router);
            }
        });
    }
}
