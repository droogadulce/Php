var inputFields = document.theform.getElementsByTagName("input");

// Si se añaden más patrones, se valida uno por uno.
for (key in inputFields) {
    var myField = inputFields[key];
    var myError = document.getElementById('formerror');

    myField.onchange = function () {
        // Obtenemos el patrón
        var myPattern = this.pattern;
        // Obtenemos el valor del placeholder
        var myPlaceholder = this.placeholder;
        // Si el patrón no es válido, regresa -1
        var isValid = this.value.search(myPattern) >= 0;

        if (!(isValid)) {
            myError.innerHTML = "La entrada no coincide con el patrón. " + myPlaceholder;
            myError.style = "color: red";
        } else { // Patrón no válido
            myError.innerHTML = "";
        } // Patrón válido
    } // myField ha cambiado
} // inputFields

