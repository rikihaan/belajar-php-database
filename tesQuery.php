<?php
require_once __DIR__ . "/getConnnection.php";

$conn = getConnecton();

$sql = <<<SQL
INSERT INTO custumers (id,name,email) VALUE('riki','riki','riki@tes.com');
SQL;

$conn->exec($sql);
$conn = null;
