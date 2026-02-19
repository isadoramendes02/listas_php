<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1>Cadastro</h1>
    <h2>19. Escrever um algoritmo que leia o nome e o sexo de 56 pessoas e informe o nome e se ela é homem ou mulher. No
    final informe total de homens e de mulheres.</h2>

    <form action="" method="GET">
    <?php 
    for ($i = 1; $i <= 56; $i++) {
        echo "Pessoa $i:<br>";
        echo "nome: ";
        echo "<input type='text' name='nome$i' required><br><br>";
        echo "Sexo: ";
        echo "<select name='sexo$i' required>
        <option value=''> Escolha </option>
        <option value='M'> Mulher </option>
        <option value='H'> Homem </option>
        </select><br><br>";
    }
    ?>
    <button type="submit"> Verificar </button>
    </form>

    <?php 
    if (isset($_GET['nome1'])) {

    $mulheres = 0;
    $homens = 0;

    echo "<br><hr>";
    echo "<h2>Resultado:</h2>";

    for ($i = 1; $i <= 56; $i++) {

    $nome = $_GET["nome$i"];
    $sexo = $_GET["sexo$i"];

    if ($sexo == "M") {
        echo "<h2>$nome é mulher</h2><br>";
        $mulheres++;}
    else {
        echo "<h2>$nome é homem</h2><br>";
        $homens++;}
    }
        echo "<br><hr>";
        echo"<h2><span style='color:blue'>Total de Homens: $homens</span></h2>";
        echo"<h2><span style='color:pink'>Total de Mulheres: $mulheres</span></h2>";
    }
    ?>
</body>
</html>