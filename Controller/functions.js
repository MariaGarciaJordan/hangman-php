function validateInput() {
    var x = document.forms["inputForm"]["userInput"].value;

    if (x == "" || x == " ") {
        alert ("Por favor, tiene que introducir una letra");
        return false;
    }

    if(!isNaN(x)) {
        alert ("Por favor, tiene que introducir una letra");
        return false;
    }
}