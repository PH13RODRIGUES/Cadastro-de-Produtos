<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "Geladao";

$link = mysqli_connect($host, $user, $password, $database);

if (!$link) {
    die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
}
?>