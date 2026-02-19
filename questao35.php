<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Idade de um nadador</title>
</head>
<body>
    <h1>Idade de um nadador</h1>
    <h2>35. Elabore um algoritmo que, dada a idade de um nadador. Classifique-o em uma das seguintes categorias:<br>
    Infantil A = 5 - 7 anos<br>
    Infantil B = 8 - 10 anos<br>
    juvenil A = 11- 13 anos<br>
    juvenil B = 14 - 17 anos<br>
    Sênior = 18 - 25 anos<br>
    Apresentar mensagem “idade fora da faixa etária” quando for outro ano não contemplado.</h2>

    <form action="" method="GET">
        <label>Digite a idade:</label>
        <input type="number" name="idade" required><br><br>

        <button type="submit"> Enviar </button>
    </form>

    <?php 
    if (isset($_GET['idade'])) {
        $idade = (int)$_GET['idade'];

        if ($idade >= 5 && $idade <= 7){
            echo "<h2>Classificação: Infantil A</h2>";
        }

        elseif ($idade >= 8 && $idade <= 10) {
            echo "<h2>Classificação: Infantil B</h2>";
        }

        elseif ($idade >= 11 && $idade <= 13) {
            echo "<h2>Classificação: Juvenil A</h2>";
        }

        elseif ($idade >= 14 && $idade <= 17) {
            echo "<h2>Classificação: Juvenil B</h2>";
        }

        elseif ($idade >= 18 && $idade <= 25) {
            echo "<h2>Classificação: Sênior</h2>";
        }

        else {
            echo "<h2>Idade fora da faixa etária</h2>";
        }
    }
    ?>
</body>
</html>