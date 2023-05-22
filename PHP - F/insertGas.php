<?php

require_once "conn.php";

$table = filter_input(INPUT_POST, 'table');
$ano = filter_input(INPUT_POST, 'ano');
$gasolina = filter_input(INPUT_POST, 'gasolina');
$salario = filter_input(INPUT_POST, 'salario');
$query = "INSERT INTO $table (anomatheus, gasolinamatheus, salariomatheus) VALUES(:ANO, GASOLINA, SALARIO)";




//preparar
$stmt = $conn->prepare($query);

//trocar
$stmt->bindValue (':ANO', $ano);
$stmt->bindValue(':GASOLINA', $gasolina);
$stmt->bindValue(':SALARIO', $salario);


//executar

$stmt->execute(); 

header('Location: loginGas.php');


?>