<?php
include('connection.php');
$query = $mysqli->query("SELECT * FROM `emplyee_crud`LIMIT 1")or die($mysqli->error);
while($dados = $query->fetch_assoc()){
    var_dump($dados)
}

?>