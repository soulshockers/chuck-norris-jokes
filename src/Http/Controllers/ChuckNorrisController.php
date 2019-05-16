<?php

namespace SoulShockers\ChuckNorrisJokes\Http\Controllers;

use SoulShockers\ChuckNorrisJokes\Facades\ChuckNorris;

class ChuckNorrisController
{
    /**
     * @return string
     */
    public function __invoke(): string
    {
        return ChuckNorris::getRandomJoke();
    }
}
