<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendedor</title>
</head>
<body>
    <h1>Vendedor</h1>
    <h2>4. Escrever um algoritmo que leia o nome de<br> um vendedor, o seu salário fixo e o total de vendas<br> efetuadas por ele no
    mês (em dinheiro). Sabendo que<br> este vendedor ganha 15% de comissão sobre suas vendas<br>efetuadas, informar o
    seu nome, o salário fixo e salário no<br> final do mês.</h2>

    <form action="" method="GET">
    <label>Digite o nome do vendedor:</label>
    <input type="text" name="nome" required><br><br>

    <label>Digite o salário fixo:</label>
    <input type="number" name="fixo" step="any" required><br><br>

    <label>Digite o total de vendas:</label>
    <input type="number" name="vendas" step="any" required><br><br>
    <button type="submit"> Calcular </button>
    </form>

    <?php 
    if (isset($_GET['nome']) && isset($_GET['fixo']) && isset($_GET['vendas'])) {
        $nome = $_GET['nome'];
        $fixo = (float)$_GET['fixo'];
        $vendas = (float)$_GET['vendas'];

        $comissao = $vendas*0.15;
        $salario_final = $fixo + $comissao;

        echo "<br><hr>";
        echo "<h2>Nome: $nome</h2>";
        echo "<h2>Salário fixo: R$ " . number_format($fixo, 2, ',', '.') . "</h2>";
        echo "<h2>Total de vendas: R$ " . number_format($vendas, 2, ',', '.') . "</h2>";
        echo "<h2>Salário final: R$ " . number_format($salario_final, 2, ',', '.') . "</h2>";
    }
    ?>
</body>
</html>