<?php

/**
 * Sebelumnya saat kita melakukan query, kita biasanya menggunkan perulanggan forech untuk melakukan iterasi terhadap object PDOstatement 
 * permasalahanya, foreach akan seluruh perulangan di hasil result. Bagaimana jika kita hanya inggin mengambil data pertama saja misal? maka kita harus membuat counter secara manual 
 * Untung nya di PDOstatement memiliki sebuah function bernama fetch(), fetch di gunakan untuk menarik satu data dari hasil query, ketika kita memanggil function fect()lagi maka otomatis akan menarik data selanjutnya, jika kita panggil fetch() , akan mengambil data selanjutnya , dan seterusnya sampai data habis 
 * Jika function mengembalikan boolean false, artinya sudah tidak ada data lagi yang bisa diambil dari hasil query 
 * jika kita ingin mengambil seluruh data sekaligus, maka kita bisa menggunkan fetchAll()
 */
require_once __DIR__ . "/getConnnection.php";
$con = getConnecton();
$username = "admin";
$password = "admin";
$sql = "SELECT * FROM admin WHERE username =? AND password = ?";
$result = $con->prepare($sql);
$result->execute([$username, $password]);
if ($row = $result->fetch()) {
    echo "Login Berhasil : " . $row["username"] . PHP_EOL;
} else {
    echo "Login gagal" . PHP_EOL;
}
var_dump($result->fetch());
$con = null;
