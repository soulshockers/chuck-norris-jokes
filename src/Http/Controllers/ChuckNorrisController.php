<?php

namespace SoulShockers\ChuckNorrisJokes\Http\Controllers;

use SoulShockers\ChuckNorrisJokes\Facades\ChuckNorris;

class ChuckNorrisController
{
    public function __invoke()
    {
        return ChuckNorris::getRandomJoke();
    }
}