<?php

function launchGame()
{
    $game = new Game();

    $maxAttempts = Game::ATTEMPTS;

    $attempts = 0;

    $words = $game->getWords();

    $answer = $words[rand() % count($words)];
    
    if (strlen($answer) > 0) {
        
        $attempts = 0;

        $hidden = hideCharacters($answer);
        $remainingAttempts = $maxAttempts - $attempts;
    }

    var_dump($hidden);




    // if (isset($_SESSION['newWord'])) {
    //     echo 'ENTRA 1';
    //     unset ($_SESSION['answer']);
    // }

    // if (!isset($_SESSION['answer'])) {

    //     echo 'ENTRA 2';

    //     $_SESSION['attempts'] = 0;
    //     $_SESSION['answer'] = $answer;
    //     $_SESSION['hidden'] = hideCharacters($answer);
    //     echo 'Intentos restantes: ' . ($maxAttempts - $_SESSION['attempts']) . '<br>';
    // }
    // else {

    //     if (isset($_POST['userInput'])) {

    //         $userInput = $_POST['userInput'];
    //         $_SESSION['hidden'] = checkAndReplace(strtolower($userInput), $_SESSION['hidden'], $_SESSION['answer']);
            
    //         checkGameOver($maxAttempts, $_SESSION['attempts'], $_SESSION['answer'], $_SESSION['hidden']);
    //     }

    //     echo 'LLEGA 5';

    //     $_SESSION['attempts'] = $_SESSION['attempts'] + 1;
    //     echo 'Intentos restantes: ' . ($maxAttempts - $_SESSION['attempts']) . '<br>';
    // }

    // $hidden = $_SESSION['hidden'];

    // foreach($hidden as $char) {
    //     echo $char . " ";
    // }

    
}