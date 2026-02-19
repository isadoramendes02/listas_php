<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média</title>
</head>
<body>
    <h1>Média</h1>
    <h2>16. Escrever um algoritmo que leia o nome e as três<br> notas obtidas por um aluno durante o semestre. Calcular<br> a sua
    média (aritmética), informar o nome e sua menção<br> aprovado (media >= 7), Reprovado (media <= 5) e Recuperação<br>
    (media entre 5.1 a 6.9).</h2>

    <form action="" method="GET">
    <label>Digite o nome:</label>
    <input type="text" name="nome" step="any" required><br><br>
    
    <?php 
    for ($i = 1; $i <= 3; $i++) {
        echo "{$i}º Nota:  ";
        echo"<input type='number' name='nota$i' step='any' required><br><br>";
    }
    ?>
    <button type='submit'> Calcular </button>
    </form>

    <?php 
    if (isset($_GET['nome'])) {
    $nome = $_GET['nome'];
    $soma = 0;

    for ($i = 1; $i <= 3; $i++) {
        $soma += (float)$_GET["nota$i"];
    }

    $media = $soma / 3;

    echo "<br><hr>";
    echo "<h2>Aluno : $nome </h2>";
    echo "<h2>Média : $media </h2>";
    

    if ($media >= 7) {
        echo "<h2  style='color: green'> Aprovado!! </h2>";
    } 
    elseif ($media <= 5 ) {
            echo "<h2 style = 'color: orange'> Reprovado.. </h2>";   
    }
    else 
        echo "<h2 style = 'color : red'> Recuperação </h2>";
    }
    ?>  
</body>
</html>