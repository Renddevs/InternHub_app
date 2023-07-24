<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\User\IUserRepository;
use App\Repositories\User\UserRepository;
use App\Services\User\IUserService;
use App\Services\User\UserService;
use App\Repositories\RefRole\IRefRoleRepository;
use App\Repositories\RefRole\RefRoleRepository;
use App\Services\RefRole\IRefRoleService;
use App\Services\RefRole\RefRoleService;
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
        $this->app->bind(IRefRoleRepository::class,RefRoleRepository::class);
        // Repository

        // Service
        $this->app->bind(IUserService::class,UserService::class);
        $this->app->bind(IRefRoleService::class,RefRoleService::class);
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
