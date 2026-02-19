<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1>Cadastro</h1>
    <h2>30. Faça um algoritmo que receba o nome a idade, o sexo e salário fixo de um funcionário. Mostre o nome e o salário
    líquido:</h2>
    Sexo | Idade | Abono<br>
    ---------------------<br>
    M    | >= 30 | 100,00<br>
    M    | < 30  | 50,00<br>
    F    | >= 30 | 200,00<br>
    F    | < 30  | 80,00<br><br>

    <form action="" method="GET">
    <label>Digite o seu nome:</label>
    <input type="text" name="nome" required><br><br>

    <label>Digite sua idade:</label>
    <input type="number" name="idade" required><br><br>

    <label>Digite o seu salário:</label>
    <input type="number" name="salario" step="any" required><br><br>

    <label>Escolha seu sexo:</label>
    <select name="sexo" required>
    <option value=""> Escolha </option>
    <option value="F"> Feminino </option>
    <option value="M"> Masculino </option>
    </select><br><br>

    <button type="submit">Verificar</button>
    </form>

    <?php 
    if (isset($_GET['nome']) && isset($_GET['idade']) && isset($_GET['salario']) && isset($_GET['sexo'])) {
        $nome = $_GET['nome'];
        $idade = (int)$_GET['idade'];
        $salario = (float)$_GET['salario'];
        $sexo = $_GET['sexo'];

    
        $abono = 0;

        if ($sexo == "M" && $idade >= 30) {
        $abono = 100;
        }

        elseif ($sexo == "M" && $idade < 30) {
        $abono = 50;
        }

        elseif ($sexo == "F" && $idade >= 30) {
        $abono = 200;
        }

        elseif ($sexo == "F" && $idade < 30) {
        $abono = 80;
        }

        $Salarioliquido = $salario + $abono;

        echo "<hr>";
        echo "<h2>Nome: $nome</h2>";
        echo "<h2>Idade: $idade</h2>";
        echo "<h2>Sexo: $sexo</h2>";
        echo "<h2>Salário: $salario</h2>";
        echo "<h2>Sálario líquido: <span style='color:green'> $Salarioliquido</span></h2>";
    }
    ?>
</body>
</html>