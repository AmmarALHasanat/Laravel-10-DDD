<?php

namespace App\Providers;

use App\Rules\RulesBus;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class RuleServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        App::bind('Rules', function () {
            return new RulesBus();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
