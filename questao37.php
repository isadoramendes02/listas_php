<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>   
</head>
<body>  
    <h1>Cadastro</h1>
    <h2>37. Faça um algoritmo que leia o nome, o sexo, a altura e a idade de uma pessoa. Calcule e mostre nome e o seu peso
    ideal de acordo com as seguintes características da pessoa:</h2>

    <form action="" method="GET">
        <label>Digite o seu nome:</label>
        <input type="text" name="nome" required><br><br>

        <label>Digite a sua idade:</label>
        <input type="number" name="idade" required><br><br>

        <label>Digite a sua altura:</label>
        <input type="number" name="altura" step="0.01" required><br><br>

        <label>Escolha o seu sexo:</label>
        <select name="sexo" required>
            <option value=""> Escolha </option>
            <option value="F"> Feminino </option>
            <option value="M"> Masculino </option>
        </select><br><br>

        <button type="submit"> Enviar </button>
    </form>

    <?php 
    if (isset($_GET['nome']) && isset($_GET['idade']) && isset($_GET['altura']) && isset($_GET['sexo'])) {
        $nome = $_GET['nome'];
        $idade = $_GET['idade'];
        $altura = $_GET['altura'];
        $sexo = $_GET['sexo'];

        $pesoidealf = 0;
        $pesoidealm = 0;

        if ($altura > 1.70 && $sexo == "M" && $idade <= 20){
            $pesoidealm = (72.7 * $altura) - 58;
            $resultado = $pesoidealm;
        }
        elseif ($altura > 1.70 && $sexo == "M" && $idade >= 21 && $idade <= 39){
            $pesoidealm = (72.7 * $altura) - 53;
            $resultado = $pesoidealm;
        }
        elseif ($altura > 1.70 && $sexo == "M" && $idade >= 40){
            $pesoidealm = (72.7 * $altura) - 45;
            $resultado = $pesoidealm;
        }
        elseif ($altura <= 1.70 && $sexo == "M" && $idade <= 40){
            $pesoidealm = (72.7 * $altura) - 50;
            $resultado = $pesoidealm;
        }
        elseif ($altura <= 1.70 && $sexo == "M" && $idade > 40){
            $pesoidealm = (72.7 * $altura) - 58;
            $resultado = $pesoidealm;
        }
        elseif ($altura > 1.50 && $sexo == "F"){
            $pesoidealf = (62.1 * $altura) - 44.7;
            $resultado = $pesoidealf;
        }
        elseif ($altura <= 1.50 && $sexo == "F" && $idade >= 35){
            $pesoidealf = (62.1 * $altura) - 45;
            $resultado = $pesoidealf;
        }
        elseif ($altura <= 1.50 && $sexo == "F" && $idade < 35){
            $pesoidealf = (62.1 * $altura) - 49;
            $resultado = $pesoidealf;
        }
        echo "<hr>";
        echo "<h2>$nome, seu peso ideal é <span style='color:green;'>"
        . number_format($resultado, 2, ",", ".") .
        " kg</span></h2>";
    }
    ?>
</body>
</html>