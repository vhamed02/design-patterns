<?php

namespace App\Providers;

use App\src\DesignPatterns\FactoryMethod\MessagePublisher;
use App\src\DesignPatterns\FactoryMethod\PublisherFactories\LinkedInPublisherFactory;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Factory-Method example
        $this->app->bind(MessagePublisher::class, LinkedInPublisherFactory::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
