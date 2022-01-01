<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "regissiswa";

$db = mysqli_connect($server, $user, $password, $nama_database);

if (!$db) {
    die("fail connect: " . mysqli_connect_error());
}

?>