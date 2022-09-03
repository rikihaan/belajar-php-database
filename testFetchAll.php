<?php
/**
 * FetchAll()
 * Sebelum nya kita sudah melakukan query, kita bisa melakukan perulangan forech untuk melakukan iterasi terhadap PDO statement 
 * Permasalahannya, foreach akan melakukan perulangan di haasil result, bagaimana jika kita hanya ingin mengambil data pertamanya saja misal ?  maka kita harus membuat counter secara manual 
 * Untungnya di PDOstatement memiliki sebuah function bernama fetch(), fetch digunakan untuk menarik satu data dari hasil query, ketika kita memanggiola function fetch() lagi, maka otomatis akan menarik data selanjutnya, jika panggil fetch() lagi, maka akana mengambil data ke tiga, dan seterusnya 
 * Jika function Fetch() mengembalikan nilai false maka, sudah tidak ada data yang bisa di tarik lagi dari hasil query (fdatannya habis)
 * jika kita ingin mengambil seluruh data sekaligus kita bisa gunakan fuction fetchAll()
 */

 require_once __DIR__."/getConnnection.php";
 $conn = getConnecton();
 $sql = "SELECT * FROM admin";
 $result=$conn->query($sql);
 var_dump($result->fetchAll());