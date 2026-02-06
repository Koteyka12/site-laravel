<?php

declare(strict_types=1);

namespace App\MoonShine\Metrics;

use MoonShine\Apexcharts\Components\SparklineChartMetric;

class ViewsSparklineMetric extends SparklineChartMetric
{
    /**
     * @var array<int, string>
     */
    protected array $categories = [];

    /**
     * @param  array<int, string>  $categories
     */
    public function categories(array $categories): static
    {
        $this->categories = $categories;

        return $this;
    }

    /**
     * @return array<string, mixed>
     */
    protected function viewData(): array
    {
        $data = parent::viewData();

        $config = $data['config'];
        $config['series'][0]['name'] = '';
        $config['tooltip']['x']['show'] = true;
        $config['xaxis'] = [
            'categories' => $this->categories,
            'labels' => [
                'show' => false,
            ],
            'axisBorder' => [
                'show' => false,
            ],
            'axisTicks' => [
                'show' => false,
            ],
        ];

        $data['config'] = $config;

        return $data;
    }
}
