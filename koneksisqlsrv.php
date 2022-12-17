<?php

$dsn1 = 'sqlsrv:server=103.160.12.43,1433;Database=SALES-100011';
$dsn2 = 'sqlsrv:server=103.160.12.43,1433;Database=SALES-100706';

// dummy server
$dsn1_dummy = 'sqlsrv:server=192.168.100.100,1433;Database=SALES-100011-dummy';
$dsn2_dummy = 'sqlsrv:server=192.168.100.100,1433;Database=SALES-100706-dummy';

$pdo_option = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO:: ATTR_DEFAULT_FETCH_MODE => PDO:: FETCH_ASSOC];


/*
try {
    $pdo = new PDO($dsn1, 'sa', 'Brav02010IT'



);
} catch (PDOException $e) {
    echo $e->getMessage();
}
*/

?>