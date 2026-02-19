<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <style>
    .linha {
    display: flex;
    gap: 20px;
    margin-bottom: 10px;
    }

    .bloco {
    display: flex;
    flex-direction: column;
    }
    </style>

</head>
<body>
    <h1>Produtos</h1>
    <h2>22. Faça um algoritmo que receba o preço de custo e o preço de venda de 40 produtos. Mostre como resultado se houve
    lucro, prejuízo ou empate para cada produto. Informe media de preço de custo e do preço de venda.</h2>



    <form action="" method="GET">
    <?php 
    for ($i = 0; $i < 40; $i++) {
    echo "<div class= 'linha'>";

    echo "<div class='bloco'>";
    echo "<label>Custo $i:</label>";
    echo "<input type='number' name='custo[]' step='any' required>";
    echo "</div>";

    echo "<div class='bloco'>";
    echo "<label>Venda $i:</label>";
    echo "<input type='number' name='venda[]' step='any' required>";
    echo "</div>";

    echo "</div>";
    }
    ?>

    <button type="submit"> Calcular </button>
    </form>

    <?php 
    if (isset($_GET['custo'])) {
        $custo = $_GET['custo'];
        $venda = $_GET['venda'];

        $totalcusto = 0;
        $totalvenda = 0;

        echo "<hr>";

        for ($i = 0; $i < 40; $i++) {

        
            $c = (float)$custo[$i];
            $v = (float)$venda[$i];

            if ($v > $c) {
                echo "Produto" . ($i+1). "<span style='color:green'>Lucro</span><br>";
            } 
            elseif ($v < $c) {
                echo "Produto" . ($i+1) . "<span style='color:red'>Prejuízo</span><br>";
            } 
            else {
                echo "Produto" . ($i+1) . "<span style='color:orange'>Empate</span><br>";
            }

            $totalcusto += $c;
            $totalvenda += $v;
        }

        echo "<hr>";
        echo "<h1>Média custo:" . ($totalcusto/40) ."</h1><br>";
        echo "<h1>Média venda:" . ($totalvenda/40) . "</h1><br>";
    }

    ?>
</body>
</html>