<?php

namespace Hooshid\Lumos;

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
        /*
        $this->loadViewComponentsAs('blogpackage', [
            Alert::class,
        ]);
        */

        Blade::componentNamespace('Lumos\\Views\\Components', 'lumos');
    }
}