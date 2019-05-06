<?php

namespace SoulShockers\ChuckNorrisJokes;

use GuzzleHttp\Client;

class JokeFactory
{
    const API_ENDPOINT = 'http://api.icndb.com/jokes/random';

    /**
     * @var \GuzzleHttp\Client
     */
    protected $client;

    /**
     * JokeFactory constructor.
     *
     * @param \GuzzleHttp\Client|null $client
     */
    public function __construct(Client $client = null)
    {
        $this->client = $client ?: new Client();
    }

    /**
     * @return string
     */
    public function getRandomJoke() : string
    {
        $response = $this->client->get(self::API_ENDPOINT);

        $joke = json_decode($response->getBody()->getContents());

        return $joke->value->joke;
    }
}
