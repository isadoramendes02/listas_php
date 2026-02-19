<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acréscimo</title>
</head>
<body>
    <h1>Acréscimo</h1>
    <h2>11. Faça um algoritmo que receba o preço de custo<br> de um produto e mostre o valor de venda. Sabe-se que<br> o preço de
    custo receberá um acréscimo de acordo com<br> um percentual informado pelo usuário.</h2>

    <form action="" method="GET">
    <label>Digite o preço de custo:</label>
    <input type="number" name="custo" step="any" required><br><br>

    <label>Digite o valor de acréscimo:</label>
    <input type="number" name="acrescimo" step="any" required><br><br>

    <button type="submit">Calcular</button>
    </form>

    <?php 
    if (isset($_GET['custo']) && isset($_GET['acrescimo'])) {
        $custo = (float)$_GET['custo'];
        $acrescimo = (float)$_GET['acrescimo'];

        $valor = $custo + ($custo * $acrescimo/100);

        echo "<br><hr>";
        echo "<h2>Valor de venda:". number_format($valor, 2) ."</h2>";
    }
    ?>
</body>
</html>