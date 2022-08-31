<?php
function getConnecton(): PDO
{
    $host = "localhost";
    $port = 33061;
    $database = "belajar_php_database";
    $username = "root";
    $password = "1234";
    return new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
}
