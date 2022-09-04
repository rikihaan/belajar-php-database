<?php
require_once __DIR__."/getConnnection.php";
$connection = getConnecton();

$connection->beginTransaction();
$connection->exec("INSERT INTO  comments (email,comments) VALUES('joko@test.com','Hello joko')");
$connection->exec("INSERT INTO  comments (email,comments) VALUES('ujang@test.com','Hello ujang')");
$connection->exec("INSERT INTO  comments (email,comments) VALUES('firman@test.com','Hello firman')");
$connection->exec("INSERT INTO  comments (email,comments) VALUES('yaya@test.com','Hello yaya')");
$connection->commit();
$connection=null;