<?php


require __DIR__ . '/vendor/autoload.php';

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

