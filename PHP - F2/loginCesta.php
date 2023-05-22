<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Ces-Sal</title>
    <link rel="stylesheet" href="style-login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>


<body>

<main class="form-login">
    <form action="" method="post">
        <img class="mb-4" src="images/cesta.jpeg" alt="" width="100" height="100">
    </form>
    <h5>SALÁRIO X Cesta Básica<h5>

    <form action="insertCesta.php" method="post">
        <!-- <div  class="form-floating mb-3">
            <label for="year">Insira o ano: </label>
            <input type="text" class="form-control" style="height: 80px" name="year" id="year">
        </div> -->
        
        <!-- <div class="form-floating mb-3">
            <label for="sallary" >Salário no respectivo ano: </label>
            <input type="text" class="form-control" style="height: 80px" name="sallary" id="sallary">
        </div>
        <div  class="form-floating mb-3">
            <label for="gasoline">Quantos litros de gasolina por salário? </label>
            <input type="text" class="form-control" style="height: 80px" name="gasoline" id="gasoline">
        </div> -->
        
         <div>
            <button type="submit" class="btn btn-primary mt-2">Cadastrar informações</button>
            </div>
            </form>
            <form action="chartCesta.php" method="get">
            <input type="submit"  class="btn btn-info" value="Gerar Gráfico">
            </form>
            <form action="index.php" method="get">
            <input type="submit"  class="btn btn-info" value="Voltar">
            </form>
                         




</body>
</html>