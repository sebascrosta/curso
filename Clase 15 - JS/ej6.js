function numeros() {
    var numero1 = prompt('Por favor, ingrese un numero');
    var numero2 = prompt('Por favor, ingrese otro numero');

    var estaSeguro = confirm('Seguro de esos numeros?');

    if (estaSeguro) {
        if (numero1 > numero2) {
            alert(numero1 + ' es el mayor de ambos números.');
        }
        else if(numero1 < numero2) {
            alert(numero2 + ' es el mayor de ambos números.');
        } else {
            alert('Los números son iguales')
        }
    } else {
        numeros();
    }
}

numeros();
