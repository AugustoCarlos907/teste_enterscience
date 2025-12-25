<?php

namespace App\Providers;

use App\Repositories\ArtistRepository;
use App\Repositories\ContratacaoRepository;
use App\Repositories\Interfaces\ArtistInterface;
use App\Repositories\Interfaces\ContratacaoInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app->bind(ArtistInterface::class,ArtistRepository::class);
        $this->app->bind(ContratacaoInterface::class,ContratacaoRepository::class);
    }
}
