<?php

class Game 
{
    public const ATTEMPTS = 6;

    private $words = [
        'Hogwarts',
        'Gryffindor',
        'Hufflepuff',
        'Ravenclaw',
        'Slytherin',
        'Horrocruxes',
    ];

    public function getWords() 
    {
        return $this->words;
    }

}