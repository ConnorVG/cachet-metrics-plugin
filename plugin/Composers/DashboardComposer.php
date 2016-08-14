<?php

/*
 * This file is part of the Cachet Demo Plugin.
 *
 * (c) Connor S. Parks
 */

namespace CachetHQ\Plugins\Metrics\Composers;

use Illuminate\Contracts\View\View;

class DashboardComposer
{
    /**
     * Bind data to the view.
     *
     * @param \Illuminate\Contracts\View\View $view
     *
     * @return void
     */
    public function compose(View $view)
    {
        $view->withTabs($this->getTabs($view->getData()));
    }

    /**
     * Get the tabs.
     *
     * @param array $data
     *
     * @return array
     */
    protected function getTabs(array $data)
    {
        $tabs = [[
            'active' => 'dashboard/metrics*',
            'url'    => route('dashboard.metrics.index'),
            'icon'   => 'ion ion-ios-pie-outline',
            'title'  => trans('connorvg/cachet-metrics-plugin::dashboard.metrics.metrics'),
            'order'  => 50000,
        ]];

        if (isset($data['tabs'])) {
            $tabs = array_merge_recursive($tabs, $data['tabs']);
        }

        return $tabs;
    }
}
