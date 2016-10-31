<?php
    if($_POST){
        if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL){
            if($usuario = existeMail($_POST["email"])){
                mail($_POST["email"],"Reinicio de cuenta", "El enlace para reiniciar su contraseña de Qplay es");
            }
        }
    }

    function existeMail($mail){
        $json = file_get_contents('usuarios.json');
        $usuariosArray = explode(PHP_EOL, $json);

        foreach ($usuariosArray as $usuarioJSON){
            $usuario = json_decode($usuarioJSON, true);
            if ($usuario["email"] == $mail) {
                return $usuario;
            }
        }
        return false;
    }
?>

<html>

    <head>
        <title>Olvide</title>
    </head>

    <body>
    <form action="olvide.php" method="post">
        <input type="text" name="email" placeholder="Email">
        <input type="submit" value="submit">
    </form>
    </body>
</html>
