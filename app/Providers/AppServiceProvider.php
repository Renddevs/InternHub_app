<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\User\IUserRepository;
use App\Repositories\User\UserRepository;
use App\Services\User\IUserService;
use App\Services\User\UserService;
use App\Helpers\Response\IResponseHelper;
use App\Helpers\Response\ResponseHelper;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // helper
        
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
