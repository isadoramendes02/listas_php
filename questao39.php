<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular a nota</title>
</head>
<body>
    <h1>Calcular a nota</h1>
    <h2>39. Dado o nome de um estudante, com o respectivo número de matrícula e as três notas acima mencionadas,
desenvolva um algoritmo para calcular a nota final e a classificação de cada estudante. A classificação é dada
conforme a tabela abaixo:
Nota Final Classificação
[8,10] A
[7,8] B
[6,7] C
[5,6] D
[0,5] R
Imprima o nome do estudante, com o seu número, nota final e classificação.</h2>

<form action="" method="GET">
    <label>Digite o seu nome:</label>
    <input type="text" name="nome" required><br><br>

    <label>Digite o número da matrícula:</label>
    <input type="number" name="matricula" required><br><br>

    <label>Nota do Laboratório:</label>
    <input type="number" name="lab" step="0.1" min="0" max="10" required><br><br>

    <label>Nota da Avaliação Semestral:</label>
    <input type="number" name="sem" step="0.1" min="0" max="10" required><br><br>

    <label>Nota do Exame Final:</label>
    <input type="number" name="exa" step="0.1" min="0" max="10" required><br><br>

    <button type="submit">Calcular</button>
</form>

 <?php 
    if (isset($_GET['nome']) && isset($_GET['matricula']) && isset($_GET['lab']) && isset($_GET['sem']) && isset($_GET['exa'])) {

    $nome = $_GET['nome'];
    $matricula = $_GET['matricula'];
    $lab = $_GET['lab'];
    $sem = $_GET['sem'];
    $exa = $_GET['exa'];

    $pesolab = 2;
    $pesosem = 3;
    $pesoexa = 5;

    $media = ($lab * $pesolab + $sem * $pesosem + $exa * $pesoexa) / 10;

    if ($media >= 8 ){
        $classificacao = "A";
        }
    elseif ($media >= 7 ){
        $classificacao = "B";
    }
    elseif ($media >= 6){
        $classificacao = "C";
    }
    elseif ($media >= 5 ){
        $classificacao = "D";
    }
    else {
    $classificacao = "R";
    }

    echo "<hr>";
    echo "<h2>Nome: $nome</h2>";
    echo "<h2>Número de matrícula: $matricula</h2>";
    echo "<h2>Nota final: " . number_format($media, 2, ",", ".") . " </h2>";
    echo "<h2>Classificação: $classificacao</h2>";
    }
?>
</body>
</html>