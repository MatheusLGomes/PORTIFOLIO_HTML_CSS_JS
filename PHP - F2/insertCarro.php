<?php

require_once "conn.php";

$table = filter_input(INPUT_POST, 'table');
$ano = filter_input(INPUT_POST, 'ano');
$salario = filter_input(INPUT_POST, 'salario');
$precoDoCarro = filter_input(INPUT_POST, 'precoDocarro');
$query = "INSERT INTO $table (anomatheus, salariormatheus, precocarromatheus) VALUES(:ANO, :SALARIO, :PRECODoCARRO)";




//preparar
$stmt = $conn->prepare($query);

//trocar
$stmt->bindValue (':ANO', $ano);
$stmt->bindValue(':SALARIO', $salario);
$stmt->bindValue(':PRECOCARRO', $precoDocarro);


//executar

$stmt->execute(); 

header('Location: loginCarro.php');


?>