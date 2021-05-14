<?php
$host = "localhost";
$user = "root";
$password =  "";
$db = "blutrix_system";


$mysqli = new mysqli($host, $user, $password, $db);
// Check connection
if($mysqli->connect_error){
    die("Falha na conexão com banco de dados");
}