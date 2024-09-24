<?php

$host = 'localhost';
$dbname = 'nome_do_banco';
$user = 'usuario';
$pass = 'senha';

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
  die("Falha na conexão: " . mysqli_connect_error());
}
