<?php

require_once "conn.php";

$table = 'dadoslucas';
$ano = filter_input(INPUT_POST, 'year');
$gasolina = filter_input(INPUT_POST, 'gasoline');
$salario = filter_input(INPUT_POST, 'sallary');
$query = "INSERT INTO $table (anomatheus, gasolinamatheus, salariomatheus) VALUES(:ANO, :GASOLINA, :SALARIO)";




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