<?php

declare(strict_types=1);

namespace App\Providers;

use App\MoonShine\Resources\PostSeo\PostSeoResource;
use Illuminate\Support\ServiceProvider;
use MoonShine\Contracts\Core\DependencyInjection\ConfiguratorContract;
use MoonShine\Contracts\Core\DependencyInjection\CoreContract;
use MoonShine\Laravel\DependencyInjection\MoonShineConfigurator;

class MoonShineServiceProvider extends ServiceProvider
{
    /**
     * @param  CoreContract<MoonShineConfigurator>  $core
     */
    public function boot(CoreContract $core, ConfiguratorContract $config): void
    {
        //         $config->authEnable();

        $core->autoload();
        $core->resources([
            PostSeoResource::class,
        ]);
    }
}
