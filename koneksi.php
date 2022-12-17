<?php

$host = "localhost";
$user = "root";
$pass = "";
$db_name = "sardanab_hpsardana";
$koneksi = mysqli_connect($host,$user,$pass,$db_name);

/*
try {
	$pdo = new PDO('mysql:host=localhost;dbname=sardanab_hpsardana;charset=utf8;', $user, $pass);        
}
catch(Exception $e) {
	echo "Database not exist. Error : " . $e->getMessage();
}
*/


// $host = "localhost";
// $user = "root";
// $pass = "";
// $db_name = "sardanab_hpsardana";
// $koneksi = mysqli_connect($host,$user,$pass,$db_name);
// if($koneksi){
// 	echo "koneksi berhasil<br>";
// }else{
// 	echo "koneksi gagal<br>";
// }

//$database = mysqli_select_db($koneksi, );
/*if($database){
	echo "berhasil masuk database<br>";
}else{
	echo "gagal masuk database<br>";
}*/
?>