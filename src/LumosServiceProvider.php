<?php

namespace Hooshid\Lumos;

use Hooshid\Lumos\View\Components\Alert;
use Hooshid\Lumos\View\Components\Breadcrumb;
use Hooshid\Lumos\View\Components\Btn;
use Hooshid\Lumos\View\Components\Forms\Checkbox;
use Hooshid\Lumos\View\Components\Forms\Input;
use Hooshid\Lumos\View\Components\Forms\Radio;
use Hooshid\Lumos\View\Components\Forms\Select;
use Hooshid\Lumos\View\Components\Forms\Textarea;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\Compilers\BladeCompiler;

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
        $this->bootResources();
        $this->bootBladeComponents();
    }

    private function bootResources(): void
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'lumos-ui');
    }

    private function bootBladeComponents(): void
    {
        $this->callAfterResolving(BladeCompiler::class, function (BladeCompiler $blade) {
            $namespace = 'lumos';

            $components = [
                'alert' => Alert::class,
                'breadcrumb' => Breadcrumb::class,
                'btn' => Btn::class,
                'forms.input' => Input::class,
                'forms.textarea' => Textarea::class,
                'forms.select' => Select::class,
                'forms.radio' => Radio::class,
                'forms.checkbox' => Checkbox::class,
            ];
            
            foreach ($components as $alias => $component) {
                $blade->component($component, $namespace."-".$alias);
            }
        });
    }
}
