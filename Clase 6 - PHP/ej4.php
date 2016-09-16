<?php
// a. Crear una función que defina una variable de tipo string y haga echo de dicha variable.

$pass = 'estaesmipassword';
echo "Password original: ".$pass.'<br><br>';

// b. Agregar a la función un echo del resultado de encriptar la variable con la función md5.

echo "pass en MD5: ".md5($pass).'<br><br>';

// c. Agregar a la función un echo del resultado de encriptar la variable con la función sha1.

echo "pass en SHA1: ".sha1($pass).'<br><br>';

// d. Agregar a la función un echo del resultado de encriptar la variable con password_hash, utilizando como algoritmo: PASSWORD_DEFAULT.

echo "pass con password_hash PASSWORD_DEFAULT: ".password_hash($pass, PASSWORD_DEFAULT).'<br><br>';

// e. Agregar a la función un echo del resultado de encriptar la variable con password_hash, utilizando como algoritmo: PASSWORD_BCRYPT.

echo "pass con password_hash PASSWORD_BCRYPT: ".password_hash($pass, PASSWORD_BCRYPT).'<br><br>';
// f. Agregar a la función un echo del resultado de encriptar la variable con password_hash, utilizando como algoritmo: PASSWORD_BCRYPT y utilizando la opción “salt”.

$options = [
  "salt" => 'abcdefghijklmnopqrstuv'
];

echo "pass con password_hash PASSWORD_BCRYPT y salt: ".password_hash($pass, PASSWORD_BCRYPT, $options).'<br><br>';

// g. Comparar los 5 resultados.
