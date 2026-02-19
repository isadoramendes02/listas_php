<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário</title>
</head>
<body>
    <h1>Salário</h1>
    <h2>34. A escola “APRENDER” faz o pagamento de seus professores por hora/aula. Faça um algoritmo que calcule e exiba
    o salário de um professor. Sabe-se que o valor da hora/aula segue a tabela abaixo:<br>

    Professor Nível 1 R$12,00 por hora/aula<br>
    Professor Nível 2 R$17,00 por hora/aula<br>
    Professor Nível 3 R$25,00 por hora/aula<br></h2>

    <form action="" method="GET">
    <label>Escolha o nível do professor:</label>
    <select name="nivel" required>
        <option value=""> Escolha </option>
        <option value="n1"> Nível 1 </option>
        <option value="n2"> Nível 2 </option>
        <option value="n3"> Nível 3 </option>
    </select><br><br>

    <label>Digite a quantidade de hora/aula:</label>
    <input type="number" name="tempo" required><br><br>

    <button type="submit">Enviar</button>
    </form>

    <?php 
    if (isset($_GET['nivel']) && isset($_GET['tempo'])) {
    $nivel = $_GET['nivel'];
    $tempo = (int)$_GET['tempo'];

    $total = 0;
    
    if ($nivel == "n1") {
        $total = $tempo * 12;
    }

    elseif ($nivel == "n2") {
        $total = $tempo * 17;
    }

    elseif ($nivel == "n3") {
        $total = $tempo * 25;
    }

    echo "<hr>";
    echo "<h2>Total de hora/aula: $tempo</h2>";
    echo "<h2>Salário: R$ " . number_format($total, 2, ',', '.') . "</h2>";
    }
    ?>
</body>
</html>