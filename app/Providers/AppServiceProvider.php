<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\User\IUserRepository;
use App\Repositories\User\UserRepository;
use App\Services\User\IUserService;
use App\Services\User\UserService;
use App\Repositories\RefRole\IRefRoleRepository;
use App\Repositories\RefRole\RefRoleRepository;
use App\Repositories\RefProdi\IRefProdiRepository;
use App\Repositories\RefProdi\RefProdiRepository;
use App\Repositories\MstDosen\IMstDosenRepository;
use App\Repositories\MstDosen\MstDosenRepository;
use App\Repositories\MstMahasiswa\IMstMahasiswaRepository;
use App\Repositories\MstMahasiswa\MstMahasiswaRepository;
use App\Repositories\TrsPendaftaranKp\ITrsPendaftaranKpRepository;
use App\Repositories\TrsPendaftaranKp\TrsPendaftaranKpRepository;
use App\Services\RefRole\IRefRoleService;
use App\Services\RefRole\RefRoleService;
use App\Services\RefProdi\IRefProdiService;
use App\Services\RefProdi\RefProdiService;
use App\Services\MstDosen\IMstDosenService;
use App\Services\MstDosen\MstDosenService;
use App\Services\MstMahasiswa\IMstMahasiswaService;
use App\Services\MstMahasiswa\MstMahasiswaService;
use App\Services\TrsPendaftaranKp\ITrsPendaftaranKpService;
use App\Services\TrsPendaftaranKp\TrsPendaftaranKpService;
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
        $this->app->bind(IRefProdiRepository::class,RefProdiRepository::class);
        $this->app->bind(IMstDosenRepository::class,MstDosenRepository::class);
        $this->app->bind(IMstMahasiswaRepository::class,MstMahasiswaRepository::class);
        $this->app->bind(ITrsPendaftaranKpRepository::class,TrsPendaftaranKpRepository::class);
        // Repository

        // Service
        $this->app->bind(IUserService::class,UserService::class);
        $this->app->bind(IRefRoleService::class,RefRoleService::class);
        $this->app->bind(IRefProdiService::class,RefProdiService::class);
        $this->app->bind(IMstDosenService::class,MstDosenService::class);
        $this->app->bind(IMstMahasiswaService::class,MstMahasiswaService::class);
        $this->app->bind(ITrsPendaftaranKpService::class,TrsPendaftaranKpService::class);
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
