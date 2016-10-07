<!DOCTYPE html>
<html>

<?php require_once "soporte.php";

if ($_POST){
  $errores = Validator::validarUsuario($_POST);

  if(empty($errores)){
    $usuario = new Usuario ($_POST);
    $usuario->setPassword($_POST["password"]);
    $repositorio->getUserRepository()->guardarUsuario($usuario);
  }
}

?>
  <head>
    <meta charset="utf-8">
    <title>Register</title>

    <style media="screen">
      div{margin: 10px;}
      .errores{color:red;}
    </style>
  </head>
  <body>
    <div class="errores">
      <ul>

      <?php
          if(!empty($errores)){
      foreach($errores as $error){
        echo "<li>". $error . '</li>';
      }}?>
    </ul>
    </div>
    <form action="register.php" method="post">
      <div><input type="text" name="nombre" placeholder="Nombre"> </div>
      <div><input type="text" name="apellido" placeholder="Apellido"></div>
      <div><input type="text" name="email" placeholder="Email"></div>
      <div><input type="password" name="password"  placeholder="Password"></div>
      <div><input type="password" name="password2" placeholder="Repita su password"></div>
      <div><input type="submit" name="submit" value="Enviar"></div>
    </form>
  </body>
</html>
