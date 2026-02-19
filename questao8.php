<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão em real</title>
</head>
<body>
    <h1>Conversão em real</h1>

    <h2>8. Elaborar um algoritmo que efetue a apresentação<br> do valor da conversão em real (R$) de um valor lido<br> em dólar (US$).
    O algoritmo deverá solicitar o valor<br> da cotação do dólar e também a quantidade de dólares<br>
    disponíveis com o usuário.</h2>

    <form action="" method="GET">
    <label>Digite o valor da cotação em dólar:</label>
    <input type="number" name="cotacao" step="any" required><br><br>

    <label>Digite a quantidade de dólares:</label>
    <input type="number" name="quantidade" step="any" required><br><br>

    <button type="submit"> Converter </button>
    </form>

    <?php 
    if (isset($_GET['cotacao']) && isset($_GET['quantidade'])) {
    $cotacao = (float)$_GET['cotacao'];
    $quantidade = (float)$_GET['quantidade'];

    $real = $cotacao * $quantidade;

    echo "<br><hr>";
    echo "<h2>Cotação: $cotacao</h2>";
    echo "<h2>Quantidade: $quantidade</h2>";
    echo "<h2>Real: $real </h2>";
    }
    ?>
</body>
</html>