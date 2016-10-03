<?php
session_start();
//Si no esta el usariologeado en SESSION controla si existe el cookie con el logueado
//SI EXISTE EL COOKIE SIGNIFICA QUE PUSO QUE RECUERDE LA SESSION.
loguearCookie();
//Forwordea al home

function enviarAIndex(){
  header("location:index.php");
  exit;
}

//Validacion de formulario, server side, se crea un array con todos
//los errores y los imprime
function validarUsuario($miUsuario){

  $errores = [];
  //control de nombre fijandose si esta vacio
  if (trim($miUsuario["nombre"]) == "") {
    $errores[] = "Ingresar un nombre.";
  }
  //""
  if (trim($miUsuario["apellido"]) == "") {
    $errores[] = "Ingresar un apellido.";
  }
  //""
  if (trim($miUsuario["mail"]) == "") {
    $errores[] = "Ingresar un mail.";
  }
  //""
  if (trim($miUsuario["pass"]) == "") {
    $errores[] = "Ingresar una contrasena.";
  }
  //""
  if (!isset($miUsuario["sexo"])) {
    $errores[] = "Seleccionar un sexo.";
  }
  //Controlamos que pass y cpass sean iguales
  if ($miUsuario["pass"] != $miUsuario["cpass"]) {
    $errores[] = "Las contrasenas ingresadas son distintas.";
  }
  // validamos que el mail sea el formato correcto
  if (!filter_var($miUsuario["mail"], FILTER_VALIDATE_EMAIL)) {
    $errores[] = "Ingresar un mail valido.";
  }
  // nos fijamos si ya existe el mail en nuestro json
  if (existeMail($miUsuario["mail"])) {
    $errores[] = "El mail ingresado ya existe.";
  }
  //nos fijamos si se subio bien la imagen
  if (is_uploaded_file($_FILES["avatar"]["tmp_name"])) {
    if ($_FILES["avatar"]["error"] != 0) {
      $errores[] = "Hubo un problema al subir el avatar.";
    }
  }
  //devolvemos el array errores
  return $errores;
}

// Validamos el formulario de login
function validarLogin($miUsuario){
  $errores = [];
  // controlamos de que no este vacio el mail, luego de que exista en el json
  // y finalmente si coincide el mail con la contraseña
  if (trim($miUsuario["mail"]) == "") {
    $errores[] = "Ingresar un mail.";
  } elseif (!existeMail($miUsuario["mail"])) {
    $errores[] = "Mail ingresado no existe";
  } elseif (!validacionPass($miUsuario["mail"], $miUsuario["pass"])) {
    $errores[] = "El usuario y la contrasena no coinciden.";
  }
  //validamos que haya algo en contrasenia
  if (trim($miUsuario["pass"]) == "") {
    $errores[] = "Ingresar una contrasena.";
  }
  return $errores;
}

//Validacion si esta el mail en el json.
function existeMail($mail){
  //nos fijamos de que exista json y que no este vacio
  if (file_exists("usuarios.json") && filesize("usuarios.json") != 0) {
    //Traemos todos los datos del json en un formato utilizable (array)
    $arrayUsuarios = obtenerUsuarios();
    // para cada posicion del array
    foreach ($arrayUsuarios as $value) {
      // tiene un json en cada value, le hacemos decode
      $usuarios = json_decode($value, true);
      //buscamos el mail ingresado, si existe devuelve true sino false
      if ($mail == $usuarios["mail"]) {
        return true;
      }
    }
  }
  return false;
}
//Traemos los datos que tenemos en el json TODOS los usuarios.
function obtenerUsuarios(){
  $usuariosJson = file_get_contents("usuarios.json");
  // Hace un array que el limite de CADA posicion es el final del renglon
  $arrayUsuarios = explode(PHP_EOL, $usuariosJson);
  //quitamos la ultima posicion del array
  array_pop($arrayUsuarios);
  //devolvemos el array COMPLETO
  return $arrayUsuarios;
}
  //Guardamos los datos de usuario en el json
function guardarUsuario($miUsuario){
  $usuarioJson = json_encode($miUsuario);
//traducimos usuario json a json y los appendamos al final del json
  file_put_contents("usuarios.json", $usuarioJson . PHP_EOL, FILE_APPEND);
}
//crear el array con los datos dados para armar el json.
function crearUsuario($miUsuario){
  $usuario = [
    "nombre" => $miUsuario["nombre"],
    "apellido" => $miUsuario["apellido"],
    "mail" => $miUsuario["mail"],
    "pass" => password_hash($miUsuario["pass"], PASSWORD_DEFAULT),
    "sexo" => $miUsuario["sexo"],
    "id" => obtenerIdNuevo()
  ];
  //en pass hasheamos el password
  return $usuario;
}
// validamos la contrasenia (necesario por el hash)
function validacionPass($mail, $pass){
  $usuario = obtenerUsuarioPorMail($mail);

  if (password_verify($pass, $usuario["pass"])) {
    return true;
  }
  return false;
}
//guardamos la imagen en la carpeta img/ID USUARIO/
function guardarImagen($usuario){
  //si no existe la carpeta la creamos
  if (!is_dir(dirname(__FILE__) . "/img/")) {

    mkdir(dirname(__FILE__) . "/img/", 0777);
  }
  //crear carpeta de id del usuario
  $path = dirname(__FILE__) . "/img/" . $usuario["id"] . "/";
  mkdir($path, 0777);
  //guaramos la extension de la img subida
  $ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
  // movemos la imagen
  move_uploaded_file($_FILES["avatar"]["tmp_name"], $path . "avatar." . $ext);

}
//Crear el id del nuevo usuario sumandole 1 al valor anterior
function obtenerIdNuevo(){
  //validamos que efectivamente exista el json
  if (!file_exists("usuarios.json") || filesize("usuarios.json") == 0) {
    return 1;
  }
  //traemos los usuarios
  $arrayUsuarios = obtenerUsuarios();
  $arrayUltimoUsuario = json_decode($arrayUsuarios[count($arrayUsuarios) - 1], true);
  //hacemos un decode de LA UTLIMA posicion del json. le sumamos 1 a su id y lo
  // retornamos
  return $arrayUltimoUsuario["id"] + 1;
}

//Traemos traemos todos los datos del usuario utilizando el email.
function obtenerUsuarioPorMail($mail){
  $arrayUsuarios = obtenerUsuarios();
  foreach ($arrayUsuarios as $usuario) {
    $usuarioDecoded = json_decode($usuario, true);

    if ($usuarioDecoded["mail"] == $mail) {
      return $usuarioDecoded;
    }
  }
  return false;
}

// creamos SESSION usuario logeado con los datos, menos pass
function loguearUsuario($usuarioLogueado){
  unset($usuarioLogueado["pass"]);
  $_SESSION["usuarioLogueado"] = $usuarioLogueado;
}
//creamos la cookie con los dats de session
function loguearCookie(){
  if (!isset($_SESSION["usuarioLogueado"])) {

    if (isset($_COOKIE['logueado'])) {
      $idUsuario = $_COOKIE["logueado"];
      $usuarioLogueado = obtenerUsuarioPorId($idUsuario);
      $_SESSION["usuarioLogueado"] = $usuarioLogueado;
    }
  }
}
//Traemos traemos todos los datos del usuario utilizando el id.
function obtenerUsuarioPorId($id){
  $arrayUsuarios = obtenerUsuarios();
  foreach ($arrayUsuarios as $usuario) {
    $usuarioDecoded = json_decode($usuario, true);

    if ($usuarioDecoded["id"] == $id) {
      return $usuarioDecoded;
    }
  }
  return false;
}
//nos fijamos si estamos logueado, vuelve true or false
function isLogged(){
  return isset($_SESSION["usuarioLogueado"]);
}
//hacemos destruimos la session y borramos la cookie
function logout(){
  session_destroy();
  unsetCookie("logueado");
}
// borramos la cookie
function unsetCookie($nombreCookie){
  setcookie($nombreCookie, "", time() - 1);
}
//traemos el avatar utilizando el id
function getAvatarById($id){
  $imgPath = glob("img/" . $id . "/" . "avatar.*");
  return $imgPath[0];
}
?>
