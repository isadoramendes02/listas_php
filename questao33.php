<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipo de triângulo</title>
</head>
<body>
    <h1>Tipo de triângulo</h1>
    <h2>33. Escrever um algoritmo que leia três valores inteiros e verifique se eles podem ser os lados de um triângulo. Se forem,
    informar qual o tipo de triângulo que eles formam: equilátero, isóscele ou escaleno.
    Propriedade: o comprimento de cada lado de um triângulo é menor do que a soma dos comprimentos dos outros
    dois lados.
    Triângulo Equilátero: aquele que tem os comprimentos dos três lados iguais;
    Triângulo Isóscele: aquele que tem os comprimentos de dois lados iguais. Portanto, todo triângulo equilátero é
    também isóscele;
    Triângulo Escaleno: aquele que tem os comprimentos de seus três lados diferentes.</h2>

    <form action="" method="GET">
        <label>Digite o 1º número:</label>
        <input type="number" name="n1" required><br><br>

        <label>Digite o 2º número:</label>
        <input type="number" name="n2" required><br><br>

        <label>Digite o 3º número:</label>
        <input type="number" name="n3" required><br><br>

        <button type="submit"> Enviar </button>
    </form>

    <?php 
    if (isset($_GET['n1']) && isset($_GET['n2']) && isset($_GET['n3'])) {
    $n1 = (int)$_GET['n1'];
    $n2 = (int)$_GET['n2'];
    $n3 = (int)$_GET['n3'];


    echo "<hr>";
    if ($n1 < $n2 + $n3 && $n2 < $n1 + $n3 && $n3 < $n1 + $n2) {
        echo "<h2>Os números formam um triangulo.</h2><br>";
    
    if ($n1 == $n2 && $n2 == $n3) {
        echo "<h2>Triângulo equilátero</h2>";
    }
    elseif ($n1 == $n2 || $n1 == $n3 || $n2 == $n3) {
        echo "<h2>Triângulo isósceles</h2>";
    }
    else {
        echo "<h2>Triângulo Escaleno</h2>";
    }

}   else {
        echo "<h2>Os números não formam um triângulo.</h2>";
    }
    }
    ?>
</body>
</html>