<?php

namespace Hooshid\Lumos;

use Hooshid\Lumos\View\Components\Alert;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class LumosServiceProvider extends ServiceProvider
{
    /**
     * register the service provider
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * boot the service provider
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views/components', 'lumos');
        Blade::componentNamespace('Hooshid\\Lumos\\View\\Components', 'lumos');
    }
}