<?php 

	$camisas = array(
		['name' => 'camisa 01', 'image' => 'uploads/camisa1.jpeg', 'price' => '55.9'],
		['name' => 'camisa 02', 'image' => 'uploads/camisa2.jpeg', 'price' => '45.9'],
		['name' => 'camisa 03', 'image' => 'uploads/camisa3.jpeg', 'price' => '65']
	);
	
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Loja simples</title>
</head>
<nav class="navbar navbar-light bg-danger">
	  <div class="container">
	    <a class="navbar-brand" href="#">
	      <img src="images/logo.jpeg" alt="" width="50" height="50" class="d-inline-block align-text-top">
	    </a>
	  </div>
	</nav>
	<div class="card-group text-center  container">
	  <div class="card">
	    <img src="uploads/camisa1.jpeg" class="card-img-top" alt="...">
	    <div class="card-body">
	      <h5 class="card-title">Camisa 01</h5>
	     <p class="card-text">R$ 49,90</p>
	      <a href="#" class="btn btn-warning">COMPRAR</a>
	    </div>

		<div class="card-group text-center  container">
	  <div class="card">
	    <img src="uploads/camisa2.jpeg" class="card-img-top" alt="...">
	    <div class="card-body">
	      <h5 class="card-title">Camisa 02</h5>
	     <p class="card-text">R$ 49,90</p>
	      <a href="#" class="btn btn-warning">COMPRAR</a>
	    </div>

		<div class="card-group text-center  container">
	  <div class="card">
	    <img src="uploads/camisa3.jpeg" class="card-img-top" alt="...">
	    <div class="card-body">
	      <h5 class="card-title">Camisa 03</h5>
	     <p class="card-text">R$ 49,90</p>
	      <a href="#" class="btn btn-warning">COMPRAR</a>
	    </div>


</body>
</html>
