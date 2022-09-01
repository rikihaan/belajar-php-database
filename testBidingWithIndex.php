<?php
require_once __DIR__."/getConnnection.php";

$connection = getConnecton();
$username = "admin";
$password ="admin";
$success = false;
$user=null;

$sql = "SELECT * FROM admin WHERE username =? AND passsword =?";
$result=$connection->prepare($sql);
// Biding index di mulai dari angka 1 bukan Nol (0)
$result->bindParam(1,$username);
$result->bindParam(2,$password);
$result->execute();

foreach($result as $row){
    $success=true;
    $user = $row['username'];
}

if ($success){
    echo "Login succes, Selamat Datang $user".PHP_EOL;
}else{
    echo "Login Gagal".PHP_EOL;
}


$connection =null;