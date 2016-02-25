<?php

//var_dump(PDO::getAvailableDrivers());

// PDO --> avantage c'est la portabilité okko`

// connexion

// declarer constante

define('DB_HOST', 'localhost');
define('DB_NAME', 'boom');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');


try{
    //connexion
    $db= new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PASSWORD);
    //gerer les erreurs
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e){
    die("Error: ". $e->getMessage());
}