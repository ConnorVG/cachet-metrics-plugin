<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Plugins\Metrics\Http\Controllers\Api;

use CachetHQ\Cachet\Http\Controllers\Api\AbstractApiController;
use CachetHQ\Plugins\Metrics\Bus\Commands\Metric\AddMetricPointCommand;
use CachetHQ\Plugins\Metrics\Bus\Commands\Metric\RemoveMetricPointCommand;
use CachetHQ\Plugins\Metrics\Bus\Commands\Metric\UpdateMetricPointCommand;
use CachetHQ\Plugins\Metrics\Models\Metric;
use CachetHQ\Plugins\Metrics\Models\MetricPoint;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Database\QueryException;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class MetricPointController extends AbstractApiController
{
    /**
     * Get a single metric point.
     *
     * @param \CachetHQ\Plugins\Metrics\Models\Metric      $metric
     * @param \CachetHQ\Plugins\Metrics\Models\MetricPoint $metricPoint
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getMetricPoints(Metric $metric, MetricPoint $metricPoint)
    {
        return $this->item($metricPoint);
    }

    /**
     * Create a new metric point.
     *
     * @param \CachetHQ\Plugins\Metrics\Models\Metric $metric
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function postMetricPoints(Metric $metric)
    {
        try {
            $metricPoint = dispatch(new AddMetricPointCommand(
                $metric,
                Binput::get('value'),
                Binput::get('timestamp')
            ));
        } catch (QueryException $e) {
            throw new BadRequestHttpException();
        }

        return $this->item($metricPoint);
    }

    /**
     * Updates a metric point.
     *
     * @param \CachetHQ\Plugins\Metrics\Models\Metric      $metric
     * @param \CachetHQ\Cachet\Models\MetircPoint $metricPoint
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function putMetricPoint(Metric $metric, MetricPoint $metricPoint)
    {
        $metricPoint = dispatch(new UpdateMetricPointCommand(
            $metricPoint,
            $metric,
            Binput::get('value'),
            Binput::get('timestamp')
        ));

        return $this->item($metricPoint);
    }

    /**
     * Destroys a metric point.
     *
     * @param \CachetHQ\Plugins\Metrics\Models\Metric      $metric
     * @param \CachetHQ\Plugins\Metrics\Models\MetricPoint $metricPoint
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteMetricPoint(Metric $metric, MetricPoint $metricPoint)
    {
        dispatch(new RemoveMetricPointCommand($metricPoint));

        return $this->noContent();
    }
}
