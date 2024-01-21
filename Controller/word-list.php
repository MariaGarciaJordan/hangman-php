<?php 

$wordList = [
    [
        "word" => "gryffindor", 
        "hint" => "Casa de Colagusano"
    ],
    [
        "word" => "hufflepuff", 
        "hint" => "Todos son bienvenidos"
    ],
    [
        "word" => "ravenclaw", 
        "hint" => "Sin acertijo no puedes entrar"
    ],
    [
        "word" => "slytherin", 
        "hint" => "Casa de Slughorn"
    ]
];

$randomWord = $wordList[array_rand($wordList)];
echo json_encode($randomWord);

?>