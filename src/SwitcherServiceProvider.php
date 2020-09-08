<?php

namespace DWK\Switcher;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class SwitcherServiceProvider extends ServiceProvider{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'switcher');

        // Blade::directive('switcher', function ($expression) {

        //     // eval("\$expression = [$expression];");
        //     // list($table, $data, $column, $current) = $params;

        //     // dd($table);

        //     // $array = json_decode($expression, true);

        //     dd($expression);

        //     return '<label class="switch"><input onclick="changeSwitch(`articles`, `status`, 1)" data-id="19" type="checkbox" checked><span class="slider round"></span></label>';
        // });
        // $this->loadViewsFrom(__DIR__.'/views', 'meta');

        // $this->publishes([
        //     __DIR__.'/config/meta.php' => config_path('meta.php'),
        // ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
