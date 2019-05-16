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
