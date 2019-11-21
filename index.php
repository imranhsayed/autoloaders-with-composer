<?php

/**
 * Tell your php script that any time you instantiate a class,
 * just go and look for it through this function and load it.
 * So it will only load class files for the classes that are instantiated.
 */
spl_autoload_register( function ( $classname ) {
	include_once 'classes/' . $classname . '.php';
} );


require __DIR__ . '/vendor/autoload.php';

$a = new A();

/**
 * Load A class
 * By using spl autoload register,
 * PHP is telling you “I will give you the chance to go and load your class even if you didn’t load it before your statement $a = new A();
 * after that, I will throw an error if it didn’t work”.
 */
$a = new A();


// check the list of all loaded files
echo '<pre>';
print_r( get_included_files() );

