<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Ordem crescente </title>
</head>
<body>
    <h1>Ordem crescente</h1>
    <h2> 31. Escrever um algoritmo que leia três valores inteiros distintos e os escreva em ordem crescente.</h2>

    <form action="" method="GET">
    <label>Digite o 1º número:</label>
    <input type="number" name="n1" required><br><br>

    <label>Digite o 2º número:</label>
    <input type="number" name="n2" required><br><br>

    <label>Digite o 3º número:</label>
    <input type="number" name="n3" required><br><br>

    <button type="submit"> Organizar </button>
    </form>

    <?php 
    if (isset($_GET['n1']) && isset($_GET['n2']) && isset($_GET['n3'])) {
        $n1 = (int)$_GET['n1'];
        $n2 = (int)$_GET['n2'];
        $n3 = (int)$_GET['n3'];

        if ($n1 == $n2 || $n1 == $n3 || $n2 == $n3) {
        echo "<hr>";
        echo "Os números devem ser diferentes.";
        } else {

        $numeros = [$n1, $n2, $n3];
        sort($numeros);

        echo "<hr>";
        echo "<h2>Ordem crescente</h2>";
        echo "$numeros[0] - $numeros[1]- $numeros[2]";
    }
    }
    ?>
</body>
</html>