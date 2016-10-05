<?php

require_once 'creador.php';
require_once 'creadorMail.php';
require_once 'creadorContact.php';
require_once 'mail.php';
require_once 'contact.php';
require_once 'botonNuevo.php';

$miBoton = new BotonNuevo();
$unCreadorDeMail = new CreadorMail();
$miBoton->setCreador($unCreadorDeMail);
$miBoton->click();

echo '<br>';

$unCreadorDeContacto = new CreadorContact();
$miBoton->setCreador($unCreadorDeContacto);
$miBoton->click();
