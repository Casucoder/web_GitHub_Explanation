<?php

require ('vendor/autoload.php');
require ('wordpress/wp-load.php');
require ('villes.php');
require ('texte.php');

use \utilphp\util;


try
{
$db = new PDO('mysql:host=localhost;dbname=', 'test', 'mdp');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e)
{
echo "Échec : " . $e->getMessage();
}
