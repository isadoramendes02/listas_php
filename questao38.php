<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular nota</title>
</head>
<body>
    <h1>Calcular nota</h1>
    <h2>38. Em um curso de Ciência da Computação a nota do estudante é calculada a partir de três notas atribuídas,
    respectivamente, a um trabalho de laboratório, a uma avaliação semestral e a um exame final. As notas variam, de 0
    a 10 e a nota final é a média ponderada das três notas mencionadas. A tabela abaixo fornece os pesos: Laboratório
    Peso 2
    Avaliação semestral Peso 3
    Exame final Peso 5</h2>

    <form action="" method="GET">
        <label>Nota do Laboratório:</label>
        <input type="number" name="lab" step="0.1" min="0" max="10" required><br><br>

        <label>Nota da Avaliação Semestral:</label>
        <input type="number" name="sem" step="0.1" min="0" max="10" required><br><br>

        <label>Nota do Exame Final:</label>
        <input type="number" name="exa" step="0.1" min="0" max="10" required><br><br>

        <button type="submit">Calcular</button>
    </form>

    <?php 
    if (isset($_GET['lab']) && isset($_GET['sem']) && isset($_GET['exa'])) {

      $lab = $_GET['lab'];
    $sem = $_GET['sem'];
    $exa = $_GET['exa'];

    $pesolab = 2;
    $pesosem = 3;
    $pesoexa = 5;

    $media = ($lab * $pesolab + $sem * $pesosem + $exa * $pesoexa) / 10;

    echo "<hr>";
    echo "<h2>Média final: <span style='color:green;'>" . number_format($media, 2, ",", ".") . "</span></h2>";
    }
  
    ?>
</body>
</html>