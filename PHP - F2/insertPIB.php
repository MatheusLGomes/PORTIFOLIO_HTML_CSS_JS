<?php

require_once "conn.php";

$table = filter_input(INPUT_POST, 'table');
$ano = filter_input(INPUT_POST, 'ano');
$dolar = filter_input(INPUT_POST, 'dolar');
$salario = filter_input(INPUT_POST, 'salario');
$query = "INSERT INTO $table (anomatheus, dolarmatheus, salariomatheus) VALUES(:ANO, DOLAR, SALARIO)";




//preparar
$stmt = $conn->prepare($query);

//trocar
$stmt->bindValue (':ANO', $ano);
$stmt->bindValue(':DOLAR', $dolar);
$stmt->bindValue(':SALARIO', $salario);


//executar

$stmt->execute(); 

header('Location: loginPIB.php');


?>