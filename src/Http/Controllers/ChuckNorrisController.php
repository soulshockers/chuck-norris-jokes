<?php

namespace SoulShockers\ChuckNorrisJokes\Http\Controllers;

use Illuminate\View\View;
use SoulShockers\ChuckNorrisJokes\Facades\ChuckNorris;

class ChuckNorrisController
{
    /**
     * @return \Illuminate\View\View
     */
    public function __invoke(): View
    {
        return view('chuck-norris::joke', [
            'joke' => ChuckNorris::getRandomJoke(),
        ]);
    }
}
