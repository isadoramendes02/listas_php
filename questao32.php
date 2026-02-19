<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora</h1>
    <h2>32. Dados três valores A, B e C, em que A e B são números reais e C é um caractere, pede-se para imprimir o resultado
    da operação de A por B se C for um símbolo de operador aritmético; caso contrário deve ser impressa uma mensagem
    de operador não definido. Tratar erro de divisão por zero.</h2>

    <form action="" method="GET">
    <label>Digite o valor de A:</label>
    <input type="number" name="a" required><br><br>

    <label>Digite o valor de B:</label>
    <input type="number" name="b" required><br><br>

    <label>Digite a operação de C:</label>
    <input type="text" name="operador" required><br><br>

    <button type="submit"> Calcular </button>
    </form>

    <?php 
    if (isset($_GET['a']) && isset($_GET['b']) && isset($_GET['operador'])) {
    $a = (float)$_GET['a'];
    $b = (float)$_GET['b'];
    $operador = $_GET['operador'];

    echo "<hr>";

    if ($operador == "+") {
        $operacao = $a + $b;
         echo "Resultado : <span style='color:green;'>$operacao</span>";
    }
    elseif ($operador == "-") {
        $operacao = $a - $b;
         echo "Resultado : <span style='color:green;'>$operacao</span>";
    }
    elseif ($operador == "*") {
        $operacao = $a * $b;
         echo "Resultado : <span style='color:green;'>$operacao</span>";
    }
    elseif ($operador == "/") {
       if ($b == 0) {
        echo "Não é possivel dividir por zero.";
       }
       else {
        $operacao = $a /$b;
        echo "Resultado : <span style='color:green;'>$operacao</span>";
       }
    }
    else {
        echo "Operador não definido.";
    }
    } 
    ?>
</body>
</html>