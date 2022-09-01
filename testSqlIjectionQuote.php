<?php
require_once __DIR__."/getConnnection.php";

$connection = getConnecton();
$username = $connection->quote('admin');
$password = $connection->quote("'; #");
$success = false;
$user=null;

$sql = "SELECT * FROM admin WHERE username = $username AND passsword = $password";
$result =$connection->query($sql);

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