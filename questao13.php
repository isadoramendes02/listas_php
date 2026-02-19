<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensagem</title>
</head>
<body>
    <h1>Mensagem</h1>
    <h2>13. Faça um algoritmo que receba um número e mostre<br> uma mensagem caso este número seja maior que 10.</h2>

    <form action="" method="GET">
    <label>Digite um número:</label>
    <input type="number" name="numero" step="any" required>
    <button type="submit"> Enviar </button>
    </form>

    <?php 
    if (isset($_GET['numero'])) {
        $numero = (float)$_GET['numero'];

        if ($numero > 10) {
            echo "<h2>Bem-vindo ao mundo PHP!</h2>";
        }
    }
    ?>
</body>
</html>