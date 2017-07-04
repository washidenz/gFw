<?php
//No tan opcionallllllllll
//no tan opcionalllllllll2222222
session_start();
define('ROOT', __DIR__ . DIRECTORY_SEPARATOR);
define('APP', ROOT );

// opcional, solo si se tienes dependencias installadas (lado Servidor)
if ( file_exists(ROOT . 'vendor/autoload.php') )
{
	require ROOT . 'vendor/autoload.php';
}

require APP . 'config.php';

require APP . 'core/application.php';
require APP . 'core/controller.php';

$app = new Application("home");
