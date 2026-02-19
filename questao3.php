<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consumo médio</title>
</head>
<body>
    <h1>Consumo Médio</h1>
    <h2>3. Escrever um algoritmo para determinar o consumo<br> médio de um automóvel sendo fornecida a distância total<br>
    percorrida pelo automóvel e o total de combustível gasto.</h2>

    <form action="" method="GET">
    <label>Digite a distância total percorrida:</label>
    <input type="number" name="distancia" step="any" required><br><br>

    <label>Digite o total de combustível gasto:</label>
    <input type="number" name="combustivel" step="any" required><br><br>
    <button type="submit"> Calcular </button>
    </form>

    <?php 
    if (isset($_GET['distancia']) && isset($_GET['combustivel'])) {
        $distancia = (float)$_GET['distancia'];
        $combustivel = (float)$_GET['combustivel'];

        $media = ($combustivel!= 0) ? $distancia/$combustivel: "Não é possivel dividir por zero";

        echo "<h2> Consumo do automóvel: $media </h2>";
    }



    
    ?>
</body>
</html>