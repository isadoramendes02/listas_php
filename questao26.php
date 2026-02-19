<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número por extenso</title>
</head>
<body>
    <h1>Numero por extenso</h1>
    <h2>26. Faça um algoritmo que leia um número de 1 a 5 e escreva por extenso. Caso o usuário digite um número que não
    esteja neste intervalo, exibir mensagem: número inválido.</h2>

    <form action="" method="GET">
    <label>Digite um número:</label>
    <input type="number" name="numero" required><br><br>

    <button type="submit"> Verificar </button>
    </form>

    <?php 
    if (isset($_GET['numero'])) {
        $numero = (int)$_GET['numero'];

        if ($numero == 1) {
            echo "<h2>$numero:Um</h2>";
        }
        elseif ($numero == 2) {
            echo "<h2>$numero:Dois</h2>";
        }
        elseif ($numero == 3) {
            echo "<h2>$numero:Três</h2>";
        }
        elseif ($numero == 4) {
            echo "<h2>$numero:Quatro</h2>";
        }
        elseif ($numero == 5) {
            echo "<h2>$numero:Cinco</h2>";
        }
        else {
            echo "<h2>Número inválido</h2>";
        }
    }
    ?>
</body>
</html>