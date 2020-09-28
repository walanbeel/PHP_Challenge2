<?php

$host = "localhost";
$dbname="db_school";
$username = "root";
$password = "";
$dsn="mysql:host=$host;dbname=$dbname";

$options=[
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE =>PDO::FETCH_BOTH,

]
?>