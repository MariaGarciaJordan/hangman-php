const keyboardDiv = document.querySelector(".keyboard");

const getRandomWord = () => {
    fetch('./Controller/word-list.php')
    .then(response => response.json())
    .then(data => {
        const { word, hint } = data;
        console.log(word, hint);
    });
}

for (let i = 97; i <= 122; i++) {
    const button = document.createElement("button");
    button.innerText = String.fromCharCode(i);
    keyboardDiv.appendChild(button);
}

getRandomWord();