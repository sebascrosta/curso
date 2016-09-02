function numeros() {
    var numero1 = parseInt(prompt('Por favor, ingrese un numero base'));
    var numero2 = parseInt(prompt('Por favor, ingrese un numero límite'));

    if (confirm('Seguro de esos numeros?')) {
        var resultado = 0;
        var mensaje = [];
        while (resultado < numero2) {
            resultado += numero1;
            if (resultado <= numero2) {
                mensaje += resultado;
                mensaje += ', ';
            } else {
                break;
            }
        }
        alert(mensaje);
    } else {
        numeros();
    }
}

numeros();
