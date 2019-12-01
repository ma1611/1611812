<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'Mert');
define('DB_PASSWORD', 'Arici');
define('DB_NAME', '1611812');
 
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

?>
