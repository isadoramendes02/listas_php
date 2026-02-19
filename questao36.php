<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta de luz </title>
</head>
<body>
    <h1>Conta de luz</h1>
    <h2>36. Faça um algoritmo que calcule o valor da conta de luz de uma pessoa. Sabe-se que o cálculo da conta de luz segue<br>
    a tabela abaixo:<br>
    Tipo de Cliente Valor do KW/h<br>
    1 (Residência) 0,60<br>
    2 (Comércio) 0,48<br>
    3 (Indústria) 1,29</h2><br>

    <form action="" method="GET">
        <label>Escolha o tipo de cliente:</label>
        <select name="cliente" required>
        <option value =""> Escolha </option>
        <option value= "n1"> Residência </option>
        <option value= "n2"> Comércio </option>
        <option value= "n3"> Indústria </option>
        </select><br><br>

        <label>Digite o valor de KW/h:</label>
        <input type="number" name="valor" step="any" required><br><br>
        
    <button type="submit"> Enviar </button> 
</form>
<?php 
if (isset($_GET['cliente']) && isset($_GET['valor'])){
    $cliente = $_GET['cliente'];
    $valor = (float)$_GET['valor'];

    $resultado = 0;

    if ($cliente == "n1"){
        $resultado = $valor * 0.60;
    }
    elseif ($cliente == "n2"){
        $resultado = $valor * 0.48;
    }
    elseif ($cliente == "n3"){
        $resultado = $valor * 1.29;
    }
    else {
        echo "<h2>Opção inválida</h2>";
    }
    
    echo "<hr>";
    echo "<h2>Valor da conta de luz: R$ <span style='color:green;'>$resultado</span></h2>";
}
?>
</body>
</html>