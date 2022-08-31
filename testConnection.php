<?php
$host = "localhost";
$port = 33061;
$database = "belajar_php_database";
$username = "root";
$password = "a1234";

try {
    $connection = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
    echo "Sukses Koneksi Kedatabase" . PHP_EOL;
} catch (PDOException $exception) {
    echo "Gagal Koneksi Ke Data Base " . $exception->getMessage();
}
