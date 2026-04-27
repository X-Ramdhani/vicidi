<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        \Log::info('AppServiceProvider register jalan');
        // 1. Daftarkan Service Provider secara manual
        $this->app->register(\Shetabit\Visitor\Provider\VisitorServiceProvider::class);

        \Log::info('Binding visitor dibuat');
        // 2. Masukkan Request DAN Config (Array)
        $this->app->singleton('visitor', function ($app) {
            return new \Shetabit\Visitor\Visitor(
                $app['request'], 
                $app['config']->get('visitor') // Ambil isi config/visitor.php
            );
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
    }
}
