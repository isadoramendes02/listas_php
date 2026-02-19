<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desconto</title>
</head>
<body>
    <h1>Desconto</h1>
    <h2>27. A concessionária de veículos “CARANGO” está vendendo os seus veículos com desconto. Faça um algoritmo que
    calcule e exiba o valor do desconto e o valor a ser pago pelo cliente. O desconto deverá ser calculado sobre o valor
    do veículo de acordo com o combustível (álcool – 25%, gasolina – 21% ou diesel –14%). Com valor do veículo zero
    encerra entrada de dados. Informe total de desconto e total pago pelos clientes.</h2>

    <form action="" method="GET">
        <label>Digite o valor do carro:</label>
        <input type="number" name="valor" step="any" required><br><br>

        <label>Escolha a opção de combustível:</label>
        <select name="combustivel" required>
        <option value=""> Escolha </option>;
        <option value="alcool"> Álcool </option>;
        <option value="gasolina"> Gasolina </option>;
        <option value="diesel"> Diesel </option>;
        </select><br><br>

    <button type="submit"> Calcular </button>
    </form>

    <?php 
    session_start();

    if (!isset($_SESSION['totaldesconto'])) {
    $_SESSION['totaldesconto'] = 0;
    }
    if (!isset($_SESSION['totalpago'])) {
    $_SESSION['totalpago'] = 0;
    }

    if (isset($_GET['valor']) && isset($_GET['combustivel'])) {
        $valor = (float)$_GET['valor'];
        $combustivel = $_GET['combustivel'];

        $desconto = 0;

         if ($valor == 0) {
            echo "<hr>";
            echo "<h2>Encerrado</h2>";
            echo "<h2> Valor de desconto:" .$_SESSION ['totaldesconto'] . "</h2><br>";
            echo "<h2> Valor total:<span style='color:green'>". $_SESSION ['totalpago'] ."</span></h2>";

            session_destroy();
            return;
         }

        if ($combustivel == "alcool") {
            $desconto = $valor * 0.25;
        }

        elseif ($combustivel == "gasolina") {
            $desconto = $valor * 0.21;
        }

        elseif ($combustivel == "diesel") {
            $desconto = $valor * 0.14;
        }

        $valortotal = $valor - $desconto;

        $_SESSION['totaldesconto'] += $desconto;
        $_SESSION['totalpago'] += $valortotal;

            echo "<hr>";
            echo "<h2> Valor de desconto: $desconto</h2><br>";
            echo "<h2> Valor total:<span style='color:green'> $valortotal</span></h2>";
    } 
    ?>
</body>
</html>