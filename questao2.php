<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora</h1>

    <h2>2. Faça um algoritmo que receba dois números e<br> ao final mostre a soma, subtração, multiplicação e a divisão dos
    números lidos.</h2>

    <form action="" method="GET">
    <label>Digite o primeiro numero:</label>
    <input type="number" name="n1" step="any" required><br><br>

    <label>Digite o segundo numero:</label>
    <input type="number" name="n2" step="any" required><br><br>
    <button type= submit>Calcular</button>
    </form>

    <?php 
    if (isset($_GET['n1']) && isset($_GET['n2'])) {
    $n1 = (float)$_GET['n1'];
    $n2 = (float)$_GET['n2'];

    $soma = $n1 + $n2;
    echo "<h2>Soma: $soma</h2>";

    $subtracao = $n1 - $n2;
    echo "<h2>Subtração: $subtracao</h2>";

    $multiplicacao = $n1 * $n2;
    echo "<h2>Multiplicação: $multiplicacao</h2>";

    $divisao = ($n2 != 0) ?  $n1/$n2 : "Não pode dividir por 0";
    echo "<h2>Divisão: $divisao</h2>";
    }
    ?>
</body>
</html>