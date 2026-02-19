<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iguais ou diferentes </title>
</head>
<body>
    <h1>Iguais ou diferentes</h1>
    <h2>25. Faça um algoritmo que leia dois números e identifique se são iguais ou diferentes. Caso eles sejam iguais imprima
    uma mensagem dizendo que eles são iguais. Caso sejam diferentes, informe qual número é o maior, e uma
    mensagem que são diferentes.</h2>

    <form action="" method="GET">
    <label>Digite o 1º número:</label>
    <input type="number" name="n1" required><br><br>

    <label>Digite o 2º número:</label>
    <input type="number" name="n2" required><br><br>

    <button type="submit"> Verificar </button>
    </form>

    <?php 
    if (isset($_GET['n1']) && isset($_GET['n2'])) {
        $n1 = (int)$_GET['n1'];
        $n2 = (int)$_GET['n2'];

        if ($n1 == $n2) {
            echo "<h2>Os números são iguais.</h2>";  
        } 
        elseif ($n1 != $n2 && $n1 > $n2) {
            echo "<h2>Os números são diferentes.</h2>";
            echo "<h2>O número $n1 é maior que $n2.</h2>";
        }
        elseif ($n1 != $n2 && $n2 > $n1) {
            echo "<h2>Os números são diferentes.</h2>";
            echo "<h2>O número $n2 é maior que $n1.</h2>";
        }
        
    }
    ?>
</body>
</html>