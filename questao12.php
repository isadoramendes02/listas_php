<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custo</title>
</head>
<body>
    <h1>Custo</h1>
    <h2>12. O custo ao consumidor de um carro novo é a soma<br>do custo de fábrica com a porcentagem do distribuidor<br> e dos
    impostos (aplicados, primeiro os impostos sobre o<br>custo de fábrica, e depois a percentagem do distribuidor<br> sobre o
    resultado). Supondo que a percentagem do distribuidor<br> seja de 28% e os impostos 45%. Escrever um algoritmo que
    leia<br> o custo de fábrica de um carro e informe o custo ao consumidor<br> do mesmo.</h2>

    <form action="" method="GET">
    <label>Digite o custo de fábrica do carro:</label>
    <input type="number" name="fabrica" step="any" required><br><br>
    <button type="submit"> Custo </button>
    </form>

    <?php 
    if (isset($_GET['fabrica'])) {
    $fabrica = (float)$_GET['fabrica'];

    $distribuidor = 0.28;
    $imposto = 0.45;

    $custo = $fabrica + ($fabrica * $imposto);
    $custo_fabrica = $custo;

    $resultado = $custo_fabrica + ($custo_fabrica * $distribuidor);
    $custo_total = $resultado;

    echo "<br><hr>";
    echo "<h2>Valor de fábrica:" . number_format($fabrica, 2, ',', '.') . "</h2>";
    echo "<h2>Custo total:" . number_format($custo_total, 2, ',', '.') . "</h2>";
    }
    ?>
</body>
</html>