<?php namespace WorkBench;

use Route;
use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

class ServiceProvider extends IlluminateServiceProvider {

    /**
     * Register.
     *
     * @return
     */
    public function register()
    {
        //
    }

    /**
     * Boot.
     *
     * @return void
     */
    public function boot()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config.php', 'workbench'
        );

        if (config('workbench.debug_only', true) && empty(config('app.debug'))) {
            return;
        }

        $this->loadViewsFrom(realpath(__DIR__ . '/../views'), 'workbench');

        $this->publishes([
            __DIR__ . '/../config.php' => config_path('workbench.php')
        ]);

        Route::get(config('workbench.url'), 'WorkBench\WorkBenchController@show')
            ->name('workbench.show')
            ->middleware(config('workbench.middlewares'));
    }

}
