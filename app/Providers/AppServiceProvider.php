<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\User\IUserRepository;
use App\Repositories\User\UserRepository;
use App\Services\User\IUserService;
use App\Services\User\UserService;
use App\Helpers\FileHelper\IFileHelper;
use App\Helpers\FileHelper\FileHelper;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // helper
        $this->app->bind(IFileHelper::class,FileHelper::class);
        // helper

        // Repository
        $this->app->bind(IUserRepository::class,UserRepository::class);
        // Repository

        // Service
        $this->app->bind(IUserService::class,UserService::class);
        // Service
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
