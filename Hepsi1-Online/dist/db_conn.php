<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "hepsi";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Bağlantı hatası!";
}