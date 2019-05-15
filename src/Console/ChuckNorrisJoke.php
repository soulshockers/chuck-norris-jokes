<?php


namespace SoulShockers\ChuckNorrisJokes\Console;

use Illuminate\Console\Command;
use SoulShockers\ChuckNorrisJokes\Facades\ChuckNorris;

class ChuckNorrisJoke extends Command
{
    /**
     * @var string
     */
    protected $signature = 'chuck-norris';

    /**
     * @var string
     */
    protected $description = 'Output a funny Chuck Norris Joke.';

    /**
     * @return void
     */
    public function handle(): void
    {
        $this->info(ChuckNorris::getRandomJoke());
    }
}