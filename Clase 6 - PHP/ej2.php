<?php

//a. Crear una función que compruebe si existe un archivo llamado texto.txt​ en el mismo directorio que archivos.php.​ En el caso que exista debe abrirlo con derechos de lectura y escritura para agregarle información. En caso de que no exista, debe crearlo con derechos de lectura y escritura.
// function crear_texto (){
//   if(file_exists("texto.txt")){
//     $archivo = fopen("texto.txt", 'a');
//   } else {
//     $archivo = fopen("texto.txt", 'w+');
//   }
//
//   return $archivo;
// }
//
// $archivo = crear_texto();
//

// b. Que se escriba “Hola mundo! testing.” 100 veces en el archivo 1 vez por renglón. Luego de esto que se cierre el archivo.
//
// for ($i=0; $i < 100; $i++) {
//   fwrite($archivo, "Hola mundo! Testing \n");
// }
//
// fclose($archivo);

//c. Mostrar los contenidos del archivo texto.txt​ leyendo todo el archivo junto.
// $contenidoarchivo = file_get_contents("texto.txt");
// echo $contenidoarchivo;
//
//d. Mostrar los contenidos del archivo texto.txt​ leyendo e imprimiendo línea por línea.
//
// $archivo = fopen("texto.txt", 'r');
// while (($linea = fgets($archivo)) !== false){
//   echo $linea.'<br>';
// }
//
// fclose($archivo);


// e. Borrar el archivo texto.txt
// $archivo = fopen("texto.txt", 'w');
// fclose($archivo);

//f. Crear un nuevo archivo llamado texto2.txt​ que contenga el texto: “Hola nuevamente mundo!”.
// $archivo = fopen("texto2.txt", 'w');
// fwrite($archivo, "Hola nuevamente mundo");
// fclose($archivo);


//g. Escribir en el archivo texto2.txt​ “¿Este texto pisa el anterior?”. Y nos fijamos si efectivamente piso el texto que estaba en el archivo.
// $archivo = fopen("texto2.txt", 'a');
// fwrite($archivo, "\nEstoy pisando todo?");
// fclose($archivo);

//h. Escribir en el archivo texto2.txt​: “YA NO!” luego del texto que ya existe.
$archivo = fopen("texto2.txt", 'a');
fwrite($archivo, "\nNope");
fclose($archivo);
