<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use App\Http\Livewire\IsbnScanner;
use App\Livewire\CameraCapture;

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
        //
        Livewire::component('isbn-scanner', IsbnScanner::class);
        // Livewire::component('camera-capture', CameraCapture::class);
    }
}
