<?php

namespace MuraliGK\ChuckNorrisJokes;

class JokeFactory
{
    protected $jokes = [
        'Chuck Norris counted to infinity... Twice.',
        'If you can see Chuck Norris, he can see you. If you can\'t see Chuck Norris you may be only seconds away from death.'
    ];

    public function __construct(array $jokes = null)
    {
        if ($jokes != null) {
            $this->jokes = $jokes;
        }
    }

    public function getRandomJoke()
    {
        return $this->jokes[array_rand($this->jokes)];
    }
}
