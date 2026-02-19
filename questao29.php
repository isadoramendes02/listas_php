<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  Número do mês </title>
</head>
<body>
    <h1> Número do mês </h1>
    <h2>29. Faça um algoritmo utilizando switch/case, que receba o número do mês e mostre o mês correspondente. Valide mês
    inválido.</h2>

    <form action="" method="GET">
        <label>Digite o número do mês: (1 a 12):</label>
        <input type="number" name="mes" required><br><br>

        <button type="submit"> Enviar </button>
    </form>

    <?php 
    if (isset($_GET['mes'])) {
        $mes = (int)$_GET['mes'];
    

    echo "<hr>";

    switch($mes) {
        case 1: 
            echo "Janeiro";
            break;

        case 2:
            echo "Fevereiro";
            break;

        case 3:
            echo "Março";
            break;

        case 4:
            echo "Abril";
            break;

        case 5:
            echo "Maio";
            break;

        case 6:
            echo "Junho";
            break;

        case 7:
            echo "Julho";
            break;

        case 8:
            echo "Agosto";
            break;

        case 9:
            echo "Setembro";
            break;

        case 10:
            echo "Outubro";
            break;

        case 11:
            echo "Novembro";
            break;

        case 12:
            echo "Dezembro";
            break;

        default:
            echo "Mês inválido.";
    }
    }
    ?>
</body>
</html>