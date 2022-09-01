<?php
require_once __DIR__."/getConnnection.php";

$connection = getConnecton();
$username = "admin";
$password ="admin";
$success = false;
$user=null;

$sql = "SELECT * FROM admin WHERE username =:username AND passsword =:pass";
$result=$connection->prepare($sql);
$result->bindParam('username',$username);
$result->bindParam('pass',$password);
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