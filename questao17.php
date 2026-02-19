<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intervalo</title>
</head>
<body>
    <h1>Intervalo</h1>
    <h2>17. Ler 80 números e ao final informar quantos<br> número(s) est(á)ão no intervalo entre 10 (inclusive) <br>e 150 (inclusive).</h2>

    <form action="" method="GET">
    
    <?php 
    for ($i = 1; $i <= 80; $i++) {
        echo "{$i}º número:<br> ";
        echo "<input type='number' name='num$i' step='any' required><br><br>";
    }
    ?>
    <button type="submit"> Verificar </button>
    </form>

    <?php 
    if (isset($_GET['num1'])) {
        
    $contador = 0;

    for ($i = 1; $i <= 80; $i++) {
        $valor = (int)$_GET["num$i"];

    
    if ($valor >= 10 && $valor <= 150) {
        $contador++;
    }
    }
    echo "<br><hr>";
    echo "<h2>Quantidade de números entre 10 e 150: $contador</h2>";
    }
    ?>
</body>
</html>