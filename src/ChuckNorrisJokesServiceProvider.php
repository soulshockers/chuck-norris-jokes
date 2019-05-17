<?php

namespace SoulShockers\ChuckNorrisJokes;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use SoulShockers\ChuckNorrisJokes\Console\ChuckNorrisJoke;
use SoulShockers\ChuckNorrisJokes\Http\Controllers\ChuckNorrisController;

class ChuckNorrisJokesServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                ChuckNorrisJoke::class,
            ]);
        }

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'chuck-norris');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/chuck-norris'),
        ]);

        Route::get('chuck-norris', ChuckNorrisController::class);
    }

    /**
     * @return void
     */
    public function register(): void
    {
        $this->app->bind('chuck-norris', function () {
            return new JokeFactory();
        });
    }
}
