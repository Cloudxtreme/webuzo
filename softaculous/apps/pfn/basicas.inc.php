<?php
/****************************************************************************
* data/conf/basicas.inc.php
*
* Fichero de configuraciónes básicas
*

PHPfileNavigator versión 2.3.3

Copyright (C) 2004-2005 Lito <lito@eordes.com>

http://phpfilenavigator.litoweb.net/

Este programa es software libre. Puede redistribuirlo y/o modificarlo bajo los
términos de la Licencia Pública General de GNU según es publicada por la Free
Software Foundation, bien de la versión 2 de dicha Licencia o bien (según su
elección) de cualquier versión posterior.

Este programa se distribuye con la esperanza de que sea útil, pero SIN NINGUNA
GARANTÍA, incluso sin la garantía MERCANTIL implícita o sin garantizar la
CONVENIENCIA PARA UN PROPÓSITO PARTICULAR. Véase la Licencia Pública General de
GNU para más detalles.

Debería haber recibido una copia de la Licencia Pública General junto con este
programa. Si no ha sido así, escriba a la Free Software Foundation, Inc., en
675 Mass Ave, Cambridge, MA 02139, EEUU.
*******************************************************************************/

defined('OK') or die();

// Este fichero se crea automaticamente, pero se pueden
// variar los valores almacenados si es necesario
// This file is created automatically, but you can change
// the values if it's necessary
return array(
	'clave' => '[[clave]]', // Clave de encriptación / Encription key
	'version' => '233',
	'estilo' => 'estilos/pfn/',
	'idioma' => 'en', // Language
	'email' => '[[admin_email]]',
	'gd2' => true, // GD2 instalado / GD2 installed
	'zlib' => true, // ZLIB instalado / ZLIB installed
	'charset' => 'UTF-8', // Juego de caracteres / Charset
	'envio_alertas' => false, // Envio de correo alertando de intento de intrusion / Send mail notify an intrusion try access
	'db' => array( // Base de datos / Data base
		'host' => '[[softdbhost]]',
		'base_datos' => '[[softdb]]', // Nombre de la base de datos / Data base name
		'usuario' => '[[softdbuser]]', // Usuario / User
		'contrasinal' => '[[softdbpass]]', // Contraseña / Password
		'prefixo' => '[[dbprefix]]' // Prefijo para las tablas / Table prefix
	)
);
?>