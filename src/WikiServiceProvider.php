<?php

namespace Thorazine\Wiki;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Http\Kernel;

class WikiServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(Kernel $kernel)
    {
        $this->publishes([
            __DIR__.'/config/wiki.php' => config_path('wiki.php'),
        ], 'wiki');

        $this->loadTranslationsFrom(__DIR__.'/resources/lang', 'wiki');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        App::bind('wiki', function()
        {
            return new \Thorazine\Wiki\Facades\Initiators\Wiki;
        });

        $this->mergeConfigFrom(__DIR__.'/config/wiki.php', 'wiki');
    }
}
