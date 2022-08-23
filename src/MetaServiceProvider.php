<?php

namespace Teslya\Meta;

use Illuminate\Support\ServiceProvider;

class MetaServiceProvider extends ServiceProvider
{
    public function boot()
    {

    }

    public function register()
    {
        $this->app->singleton('meta', function ($app){
            $meta = New MetaService('test');

            return $meta;
        });
    }
}
