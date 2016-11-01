<?php
require_once('requires.php');

define('USERS_FILE', 'usuarios.json');

function getByEmail($email)
{
	$repo = new UserDatabaseRepository();

	return $repo->getByEmail($email);
}

function guardarUsuario($datos)
{
	$user = new User(
		$datos['nombre'],
		$datos['apellido'],
		$datos['email'],
		$datos['username'],
		$datos['pass']
	);
	$user->setBirthDate($datos['fecha_nacimiento']);
	$user->setBio($datos['description']);

	$sectionRepo = new SectionDatabaseRepository();
	foreach($datos['secciones'] as $idSeccion)
	{
		$section = $sectionRepo->getById($idSeccion);
		$user->addSection($section);
	}

	$repo = new UserDatabaseRepository();

	try
	{
		$repo->save($user);
	}
	catch (Exception $e)
	{
		throw $e;
	}

	return $user;
}

/*
function obtenerUsuarios()
{
	if(!file_exists(USERS_FILE))
	{
		$f = fopen(USERS_FILE, 'w+');
		fwrite($f, json_encode(['usuarios' => []]));
		fclose($f);
	}

	$users = file_get_contents(USERS_FILE);
	$users = json_decode($users, true);

	return $users['usuarios'];
}

function buscarUsuario($atributo, $valor)
{
	$users = obtenerUsuarios();

	foreach($users as $user)
	{
		if($user[$atributo] == $valor)
		{
			return $user;
		}
	}

	return null;
}
*/