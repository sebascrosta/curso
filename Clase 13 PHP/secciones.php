<?php
require_once('requires.php');

function obtenerSecciones()
{
	$repo = new SectionDatabaseRepository();

	return $repo->listAll();
}