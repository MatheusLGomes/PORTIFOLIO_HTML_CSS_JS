<?php
$camisas = array(
    ['name' => 'Camisa 01', 'image' => 'uploads/camisa1.jpeg', 'price' => '55.9'],
    ['name' => 'Camisa 02', 'image' => 'uploads/camisa2.jpeg', 'price' => '45.9'],
    ['name' => 'Camisa 03', 'image' => 'uploads/camisa3.jpeg', 'price' => '65']
);

session_start();

// Verificar se o carrinho está vazio e inicializá-lo se necessário
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

// Adicionar um item ao carrinho
if (isset($_POST['add_to_cart'])) {
    $item_index = $_POST['item_index'];
    $_SESSION['cart'][] = $camisas[$item_index];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja Simples</title>
	<style>
		.container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
}

.card {
    width: 250px;
    margin: 10px;
    text-align: center;
    background-color: #f9f9f9;
    border-radius: 8px;
    padding: 10px;
}

.card img {
    height: 200px;
    width: 100%;
    object-fit: cover;
    border-radius: 8px;
}

.card-title {
    font-size: 20px;
    margin-top: 10px;
}

.card-text {
    font-size: 18px;
    margin-top: 10px;
}

.btn {
    margin-top: 10px;
    padding: 8px 20px;
    font-size: 16px;
    background-color: #ffc107;
    color: #fff;
    border: none;
    border-radius: 4px;
    text-decoration: none;
}

.btn:hover {
    background-color: #e0a800;
    cursor: pointer;
}

.cart-link {
    color: #fff;
    text-decoration: none;
    margin-left: 10px;
    font-weight: bold;
}

.cart-count {
    background-color: #ffc107;
    color: #000;
    padding: 2px 6px;
    border-radius: 50%;
    font-size: 12px;
    vertical-align: middle;
}
		</style>
</head>
<body>
<nav class="navbar navbar-light bg-danger">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="images/logo.jpeg" alt="" width="50" height="50" class="d-inline-block align-text-top">
            </a>
            <a href="cart.php" class="cart-link">Carrinho<span class="cart-count"><?php echo count($_SESSION['cart']); ?></span></a>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <?php foreach ($camisas as $index => $camisa) : ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?php echo $camisa['image']; ?>" alt="Camisa" class="card-img">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $camisa['name']; ?></h5>
                            <p class="card-text">R$ <?php echo $camisa['price']; ?></p>
                            <form action="" method="POST">
                                <input type="hidden" name="item_index" value="<?php echo $index; ?>">
                                <button type="submit" class="btn btn-warning" name="add_to_cart">Adicionar ao Carrinho</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
</html>
