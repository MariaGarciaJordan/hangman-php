<?php

    function hideCharacters($answer) 
    {
        $noOfHiddenChars = floor((strlen($answer) / 2) + 1);
        $count = 0;
        $hidden = $answer;

        while ($count < $noOfHiddenChars) {

            $rand_element = rand(0,strlen($answer) - 2);

            if ($hidden[$rand_element] != '_') {

                $hidden = str_replace($hidden[$rand_element],'_',$hidden,$replace_count);
                $count = $count + $replace_count;
            }
        }

        return $hidden;
    }

    function checkAndReplace($userInput, $hidden, $answer) 
    {
        $i = 0;
        $wrongGuess = true;

        while ($i < count($answer)) {

            if ($answer[$i] == $userInput) {

                $hidden[$i] = $userInput;
                $wrongGuess = false;
            }

            $i = $i + 1;
        }

        if (!$wrongGuess) {
            
            $_SESSION['attempts'] = $_SESSION['attempts'] - 1;

            return $hidden;
        }
    }

    function checkGameOver($maxAttempts, $userAttempts, $answer, $hidden)
    {
        if ($userAttempts >= $maxAttempts) {
            echo 'Fin del juego: La palabra correcta era ';

            foreach($answer as $letter) {
                echo $letter;
            }

            echo '<br><form action="" method="post>"<input type="submit" name="newWord" value="Intenta otra palabra"></form><br>';
            die;
        }

        if ($hidden == $answer) {
            
            echo 'Fin del juego: La palabra correcta es ';
            foreach($answer as $letter) {
                echo $letter;
            }

            echo '<br><form action="" method="post>"<input type="submit" name="newWord" value="Intenta otra palabra"></form><br>';
            die;
        }
    }

