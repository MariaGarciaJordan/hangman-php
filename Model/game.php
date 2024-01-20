<?php

class Game 
{
    public const ATTEMPTS = 7;

    private $words = [
        'HOGWARTS',
        'GRYFFINDOR',
        'HUFFLEPUFF',
        'RAVENCLAW',
        'SLYTHERIN',
        'HORROCRUXES',
    ];

    public function getWords() 
    {
        return $this->words;
    }

}