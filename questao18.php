<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maior e Menor de idade</title>
</head>
<body>
    <h1>Maior e Menor de idade</h1>
    <h2>18. Faça um algoritmo que receba a idade de<br> 75 pessoas e mostre mensagem informando “maior<br> de idade” e “menor de
    idade” para cada pessoa. Considere<br> a idade a partir de 18 anos como maior de idade.</h2>

    <form action="" method="GET">
    <?php 

    for ($i = 1; $i <= 75; $i++) {
        echo "Digite a idade da {$i}º pessoa: ";
        echo "<input type='number' name='idade$i' required><br><br>";
    }
    ?>
    <button type="submit"> Verificar </button>
    </form>
    
    <?php 
    if (isset($_GET['idade1'])){

    echo "<br><hr>";
    echo "<h2>Resultados: </h2>";
      
    for  ($i = 1; $i <= 75; $i++) {
        $idade = (int)$_GET["idade$i"];

        if ($idade >= 18) {
             echo "<h2>Pessoa $i (idade $idade): <span style='color:green'> Maior de idade!! </span></h2>";
        }
        else
            echo "<h2>Pessoa $i (idade $idade): <span style='color:red'>Menor de idade</span></h2>";
    }
    }
    ?>
</body>
</html>