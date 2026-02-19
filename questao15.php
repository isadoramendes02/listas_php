<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intervalo entre 100 a 200</title>
</head>
<body>
    <h1>Intervalo entre 100 a 200</h1>
    <h2>15. Faça um algoritmo que receba um número<br> e diga se este número está no intervalo entre 100 e 200.</h2>

    <form action="" method="GET">
    <label>Digite o número:</label>
    <input type="number" name="numero" step="any" required><br><br>
    <button type="submit"> Verificar </button>
    </form>

    <?php 
    if (isset($_GET['numero'])) {
    $numero = (float)$_GET['numero']; 

    if ($numero >= 100 && $numero <= 200) {
        echo "<h2>O número está no intervalo de 100 a 200.</h2>";} 
       else { 
        echo "<h2>O número não esta no intervalo de 100 a 200.</h2>";}
    }
    ?>
</body>
</html>