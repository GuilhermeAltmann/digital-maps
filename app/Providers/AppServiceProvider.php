<?php

namespace App\Providers;

use App\Pinterest\Domain\Repository\CreatePinterestRepository;
use App\Pinterest\Domain\Repository\FindAllPinterestRepository;
use App\Pinterest\Infrastructure\External\Persistence\PinterestRepositoryFactory;
use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(CreatePinterestRepository::class,
            fn (Application $app) => call_user_func(new PinterestRepositoryFactory()));
        $this->app->singleton(FindAllPinterestRepository::class,
            fn (Application $app) => call_user_func(new PinterestRepositoryFactory()));
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
