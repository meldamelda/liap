<?php

$db_host		= "localhost";
$db_user		= "root";
$db_password	= "120898";
$db_name		= "db_rsulin";

$link = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if (!$link) {
	die("Gagal Terkoneksi".mysqli_connect_errno(). " - ". mysqli_connect_error());
	exit();
}
?>