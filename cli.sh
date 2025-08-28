#!/usr/bin/php
<?php
namespace catlair;

/* Constants for library inclusion */
define( 'ROOT', __DIR__ );
define( 'LIB', realpath( ROOT . '/../php/lib' ));

/* Include the application class */
require_once LIB . '/app/engine.php';

/* Create and run the application */
Engine::create() -> run();
