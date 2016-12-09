<?php

namespace Ken\Calender;

use Illuminate\Support\ServiceProvider;

class CalenderServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('calender', function ($app) {
            return $this->app->make('Ken\Calender\Functions\Calender');
        });
    }
}
