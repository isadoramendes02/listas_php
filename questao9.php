<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poupança</title>
</head>
<body>
    <h1>Poupança</h1>

    <h2>9. Faça um algoritmo que receba um valor que foi<br> depositado e exiba o valor com rendimento após um<br> mês.
    Considere fixo o juro da poupança em 0,70% a. m.</h2>

    <form action="" method="GET">
    <label>Digite o valor depositado:</label>
    <input type="number" name="depositado" step="any" required><br><br>
    <button type="submit"> Rendimento </button>
    </form>

    <?php 
    if (isset($_GET['depositado'])) {
        $depositado = (float)$_GET['depositado'];

        $rendimento = $depositado * 0.007;
        $total = $rendimento + $depositado;

        echo "<br><hr>";
        echo "<h2>Rendimento: R$" . number_format($rendimento, 2) . "</h2>";
        echo "<h2>Valor total após 1 mês: R$". number_format($total, 2) ."</h2>";
    }
    ?>
</body>
</html>