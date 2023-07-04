<?php

include "conexao.php"


$clienteNome    = $_POST[];
$nomeServico    = $_POST[];
$data           = $_POST[];
$hora           = $_POST[];
$telefone       = $_POST[];
$cpf            = $_POST[];

$sql = "SELECT  * FROM agenda WHERE  ";

$result = mysqli_query($conn,$sql);
$rows = mysqli_affected_array($conn);

?>