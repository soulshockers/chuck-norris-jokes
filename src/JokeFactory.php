<?php

namespace SoulShockers\ChuckNorrisJokes;

class JokeFactory
{
    /**
     * @var array
     */
    protected $jokes = [
        'Chuck Norris\' tears cure cancer. Too bad he has never cried.',
        'Chuck Norris counted to infinity... Twice.',
        'If you can see Chuck Norris, he can see you. If you can\'t see Chuck Norris you may be only seconds away from death.',
    ];

    /**
     * @param array|null $jokes
     */
    public function __construct(array $jokes = null)
    {
        if ($jokes) {
            $this->jokes = $jokes;
        }
    }

    /**
     * @return string
     */
    public function getRandomJoke() : string
    {
        return $this->jokes[array_rand($this->jokes)];
    }
}