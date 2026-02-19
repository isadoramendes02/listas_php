<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valores Trocados</title>
</head>
<body>
    <h1>Valores Trocados</h1>

    <h2>6. Ler dois valores para as variáveis A e B, e efetuar<br> as trocas dos valores de forma que a variável A passe<br> a possuir o
    valor da variável B e a variável B passe a<br> possuir o valor da variável A. Apresentar os valores<br> trocados.</h2>

    <form action="" method="GET">
    <label>Digite o valor de A:</label>
    <input type="number" name="a" step="any" required><br><br>

    <label>Digite o valor de B:</label>
    <input type="number" name="b" step="any" required><br><br>

    <button type="submit"> Trocar </button>
    </form>

    <?php 
    if (isset($_GET['a']) && isset($_GET['b'])) {
        $a = (float)($_GET['a']);
        $b = (float)($_GET['b']);

        $temp = $a;
        $a = $b;
        $b = $temp;

        echo "<br><hr>";
        echo "<h2>Valores trocados:</h2>";
        echo "<h2>Valor de A: $a </h2>";
        echo "<h2>Valor de B: $b </h2>";
    }
    ?>
</body>
</html>