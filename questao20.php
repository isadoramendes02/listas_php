<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concessionária</title>
</head>
<body>
    <h1>Concessionária</h1>
    <h2>20. A concessionária de veículos “CARANGO VELHO” está vendendo os seus veículos com desconto. Faça um algoritmo
    que calcule e exiba o valor do desconto e o valor a ser pago pelo cliente de vários carros. O desconto deverá ser
    calculado de acordo com o ano do veículo. Até 2000 - 12% e acima de 2000 - 7%. O sistema deverá perguntar se
    deseja continuar calculando desconto até que a resposta seja: “(N) Não” . Informar total de carros com ano até 2000
    e total geral.</h2>

    <form action="" method="GET">
    <label>Digite o valor do carro:</label>
    <input type="number" name="valor" step="any" required><br><br>

    <label>Digite o ano do carro:</label>
    <input type="number" name="ano" step="any" required><br><br>

    <label>Deseja continuar?(S/N)</label>
    <input type="text" name="resposta" required><br><br>
    <button type="submit"> Calcular </button>

    <input type="hidden" name="total" value="<?php echo $_GET['total'] ?? 0; ?>">
    <input type="hidden" name="ate2000" value="<?php echo $_GET['ate2000'] ?? 0; ?>">
    </form>

    <?php 

    if (isset($_GET['valor'])) {

        $i = ($_GET['total'] ?? 0) + 1;
        $total = $_GET['total'] ?? 0;
        $ate2000 = $_GET['ate2000'] ?? 0;

        
        $valor = (float)$_GET["valor"];
        $ano = (int)$_GET["ano"];
        $resposta = strtoupper($_GET["resposta"]);

        if ($ano <= 2000) {
            $desconto = $valor * 0.12;
            $ate2000++;
        } else {
            $desconto = $valor * 0.07;
        }

        $final = $valor - $desconto;

        echo "<h2>Carro $i<br></h2>";
        echo "<h2>Valor final: $final</h2><br><br>";
        $total++;

        if ($resposta == "N") {
        echo "<h2>Total até 2000: $ate2000</h2><br>";
        echo "<h2>Total geral: $total</h2>";
        }
    }
    ?>

</body>
</html>