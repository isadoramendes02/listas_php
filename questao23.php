<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maior e menor</title>
</head>
<body>
    <h1>Maior e menor</h1>
    <h2>23. Faça um algoritmo que receba um número e mostre uma mensagem caso este número sege maior que 80, menor
    que 25 ou igual a 40.</h2>

    <form action="" method="GET">
    <label>Digite um número:</label>
    <input type="number" name="numero" step="any" required><br><br>
    
    <button type="submit"> Verificar </button>
    </form>

    <?php 
    if (isset($_GET['numero'])) {
        $numero = (float)$_GET['numero'];

    if ($numero > 80) {
        echo "<h2>O número $numero é maior que 80.</h2>";
       
    }

    elseif ($numero < 25) {
        echo "<h2>O número $numero é menor que 25.</h2>";
      
    }

    elseif ($numero == 40) {
        echo "<h2>O número $numero é igual a 40.</h2>";
        
    }

    else {
        echo "<h2><span style='color:red'>O número não esta em nenhuma das condições.</span></h2>";
    }
    }
    ?>
</body>
</html>