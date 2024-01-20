<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego del Ahorcado</title>
    <link rel="stylesheet" href="View/css/style.css">
    <script src="View/scripts/word-list.js" defer></script>
    <script src="View/scripts/script.js" defer></script>
</head>
<body>
    <div class="game-modal">
        <div class="content">
            <img src="View/images/lost.gif" alt="gif">  
            <h4>¡Has perdido!</h4>
            <p>La palabra correcta era: <b>rainbow</b></p>
            <button class="play-again">Juega de nuevo</button>
        </div>
    </div>
    <div class="container">
        <div class="hangman-box">
            <img src="View/images/hangman-0.svg" alt="hangman-img">
            <h1>Juego del Ahorcado</h1>
        </div>
        <div class="game-box">
            <ul class="word-display">
                <li class="letter"></li>
                <li class="letter"></li>
                <li class="letter guessed">a</li>
                <li class="letter"></li>
                <li class="letter"></li>
                <li class="letter"></li>
                <li class="letter"></li>
            </ul>
            <h4 class="hint-text">
                Hint: 
                <b>Lorem ipsum dolor sit amet consectetur adipisicing elit. </b>
            </h4>
            <h4 class="guesses-text">
                Intentos fallidos: 
                <b>0 / 6</b>
            </h4>
            <div class="keyboard"></div>
        </div>
    </div>
</body>
</html>