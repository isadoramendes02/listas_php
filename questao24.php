<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Negativo ou positivo</title>
</head>
<body>
    <h1>Negativo ou positivo</h1>
   <h2>24. Faça um algoritmo que receba “N” números e mostre positivo, negativo ou zero para cada número.</h2>

   <form action="" method="GET">
   <label>Digite quantos números deseja verificar:</label>
   <input type="number" name="qtd" required><br><br>

   <button type="submit">Verificar</button>
   </form>

   <?php 
   if (isset($_GET['qtd']) && !isset($_GET['numero'])) {

   $qtd = (int)$_GET['qtd'];

   echo "<hr>";
   echo "<form method='GET'>";
   echo "<input type='hidden' name='qtd' value='$qtd'>";

   for ($i = 1; $i <=$qtd; $i++){
    echo "Número $i: ";
    echo "<input type='number' name='numero[]' required><br><br>";
   }

   echo "<button type='submit'> Verificar </button>";
   echo "</form>";

   }

   if (isset($_GET['numero'])) {
    $numero = $_GET['numero'];

    echo "<hr>";

    for ($i = 0; $i < count($numero); $i++) {

    $n = (float)$numero[$i];

    if ($n > 0) {
        echo "<h2>Número" . ($i + 1) . ": Positivo<br></h2>";
    }
    elseif ($n < 0 ) {
        echo "<h2>Número" . ($i + 1) . ": Negativo<br></h2>";
    }
    else {
        echo "<h2>Número" . ($i + 1) . ": Zero<br></h2>";
    }
   }
   }
   ?>
</body>
</html>