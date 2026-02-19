<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperatura</title>
</head>
<body>
    <h1>Temperatura</h1>
    <h2>7. Ler uma temperatura em graus Celsius e apresentá-la <br> convertida em graus Fahrenheit. A fórmula de conversão <br> é:
    F = C x 1,8 + 32, sendo F a temperatura em Fahrenheit <br> e C a temperatura em Celsius.</h2>

    <form action="" method="GET">
    <label>Digite a temperatura em Cº:</label>
    <input type="number" name="c" step="any" required><br><br>

    <button type="submit"> Conversão </button>
    </form>

    <?php 
    if (isset($_GET['c'])) {
        $c = (float)$_GET['c'];

        $f = $c * 1.8 + 32;

        echo "<br><hr>";
        echo "<h2> Cº: $c </h2> ";
        echo "<h2> Fº: $f </h2> ";
    }
    ?>  
</body>
</html>