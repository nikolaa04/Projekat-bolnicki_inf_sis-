<?php


$host = "localhost";
$username = "root";
$password = "";
$dbname = "bolnicki_inf_sis";

$mysqli = new mysqli($host, $username, $password, $dbname);
if ($mysqli->connect_error) {
    die('Error:(' . $mysqli->connect_errno . ')' . $mysqli->connect_error);
}

?>
