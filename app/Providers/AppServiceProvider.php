<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Schema;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            \App\Services\CourseService\CourseServiceInterface::class,
            \App\Services\CourseService\CourseService::class
        );
        
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(255);
    }
}
