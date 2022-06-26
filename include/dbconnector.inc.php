<?php

$host = 'localhost';
$database = 'restaurants';
$username = 'root';
$password = 'root';

// mit Datenbank verbinden
$mysqli = new mysqli($host, $username, $password, $database);

// Fehlermeldung, falls Verbindung fehl schlägt.
if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '. $mysqli->connect_error);
}

?>
