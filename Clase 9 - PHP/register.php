<?php

require_once("funciones.php");
//nos si existe la session de "usuarioLogueado"
if (isLogged()) {
	enviarAIndex(); //Enviar a la home.
}

if ($_POST) {
	//Validamos usando la funcion validar usuario con TODOS los datos del post
	$errores = validarUsuario($_POST);
	// Si no hay ningun error creamos un usuario nuevo
	if (empty($errores)) {
		//Crear Usuario con los datos de POST
		$nuevoUsuario = crearUsuario($_POST);
		//Con lo que nos devolvio crearUsuario() lo guardamos en el json
		guardarUsuario($nuevoUsuario);
		//Si subio un avatar entonces la guardamos en su carpeta.
		if (is_uploaded_file($_FILES["avatar"]["tmp_name"])) {
			guardarImagen($nuevoUsuario);
		}

		//Redirigir a Index.
		enviarAIndex();
	}
}
 ?>


<html>
	<head>
		<title>Registracion</title>
	</head>
	<body>
		<h1>Registrate!</h1>
		<form action="register.php" method="POST" enctype="multipart/form-data">
			<?php if (!empty($errores)) {?>
				<div>
					<ul>
					 <!-- imprimimos los erroes si existen -->
						<?php foreach ($errores as $error) { ?>
								<li><?php echo $error ?></li>
							<?php } ?>
					</ul>
				</div>
			<?php } ?>
			<div>
				<!-- El value depende de lo que ingresan si esta completado manda ese dato sino vacio -->
				<label for="nombre">Nombre:</label>
				<input id="nombre" type="text" name="nombre" value="<?php echo(isset($_POST['nombre']) ? $_POST['nombre'] : '') ?>"></input>
			</div>
			<div>
				<label for="apellido">Apellido:</label>
				<input id="apellido" type="text" name="apellido" value="<?php echo(isset($_POST['apellido']) ? $_POST['apellido'] : '') ?>"></input>
			</div>
			<div>
				<label for="mail">Mail:</label>
				<input id="mail" type="text" name="mail" value="<?php echo(isset($_POST['mail']) ? $_POST['mail'] : '') ?>"></input>
			</div>
			<div>
				<label for="pass">Contrase&ntilde;a:</label>
				<input id="pass" type="password" name="pass"></input>
			</div>
			<div>
				<label for="cpass">Confirmar Contrase&ntilde;a:</label>
				<input id="cpass" type="password" name="cpass"></input>
			</div>
			<div>
				<label for="masculino">Masculino:</label>
				<input type="radio" name="sexo" value="m" id="masculino" <?php echo(isset($_POST["sexo"]) ? ($_POST['sexo'] == 'm' ? "checked='checked'" : '') : "") ?> />
				<label for="femenino">Femenino:</label>
				<input type="radio" name="sexo" value="f" id="femenino" <?php echo(isset($_POST["sexo"]) ? ($_POST['sexo'] == 'f' ? "checked='checked'" : '') : "") ?> />
			</div>
			<div>
				<label for="avatar">Subir Avatar:</label>
				<input id="avatar" type="file" name="avatar" value=""></input>
			</div>
			<div>
				<input id="submit" type="submit" name="submit" value="Enviar"></input>
			</div>
		</form>
	</body>
</html>
