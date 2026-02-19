<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de dois números</title>
    <style>
    </style>
</head>
<body>
    <h1>Soma de dois números</h1>
    <h2>1. Faça um algoritmo que receba dois números<br> e exiba o resultado da sua soma.</h2>

    <form action="" method="GET">
        <label> Digite o primeiro numero:</label>
        <input type="number" name="n1" step="any" required><br><br>
        <label> Digite o segundo numero:</label>
        <input type="number" name="n2" step="any" required><br><br>
        <button type="submit"> Somar </button>

        <?php 
            if (isset($_GET['n1']) && isset($_GET['n2'])){
            $n1 = (float)$_GET['n1'];
            $n2 = (float)$_GET['n2'];
            $soma = $n1 + $n2;

            echo "<h2> O resultado da soma é: $soma </h2>";
            }
        ?>
    </form>
</body>
</html>
