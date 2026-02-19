<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário</title>
</head>
<body>
    <h1>Salário</h1>
    <h2>28. Escrever um algoritmo para uma empresa que decide dar um reajuste a seus 584 funcionários de acordo com os
    seguintes critérios:<br>
    a) 50% para aqueles que ganham menos do que três salários mínimos;<br>
    b) 20% para aqueles que ganham entre três até dez salários mínimos;<br>
    c) 15% para aqueles que ganham acima de dez até vinte salários mínimos;<br>
    d) 10% para os demais funcionários.
    Leia o nome do funcionário, seu salário e o valor do salário mínimo. Calcule o seu novo salário reajustado. Escrever o
    nome do funcionário, o reajuste e seu novo salário. Calcule quanto à empresa vai aumentar sua folha de pagamento.</h2>

    <form action="" method="GET">
    <label>Digite o seu nome:</label>
    <input type="text" name="nome" required><br><br>

    <label>Digite o seu salário:</label>
    <input type="number" name="salario" step="any" required><br><br>

    <button type="submit"> Calcular </button>
    </form>

    <?php 
    session_start();

    if (!isset($_SESSION['totalEmpresa'])) {
    $_SESSION['totalEmpresa'] = 0;
    }

    if (isset($_GET['nome']) && isset($_GET['salario'])) {
        $nome = $_GET['nome'];
        $salario = (float)$_GET['salario'];

        $reajuste = 0;
        $salariominimo = 1621;

        if ($salario == 0) {
        echo "<hr>";
        echo "<h2>Encerrado</h2>";
        echo "<h2>Total que a empresa vai aumentar: <span style='color:red'>"
        . $_SESSION['totalEmpresa'] .
        "</span></h2>";

        session_destroy();
        return;
    }
        if ($salario < ($salariominimo * 3)) {
            $reajuste = $salario * 0.50;
        }

        elseif ($salario <= ($salariominimo * 10)) {
            $reajuste = $salario * 0.20;
        }

        elseif ($salario <= ($salariominimo * 20)) {
            $reajuste = $salario * 0.15;
        }

        else {
            $reajuste = $salario * 0.10;
        }

        $novosalario = $salario + $reajuste;

        $_SESSION['totalEmpresa'] += $reajuste;


        echo "<hr>";
        echo "<h2>Nome: $nome </h2>";
        echo "<h2>Salário: $salario</h2>";
        echo "<h2>Salário minimo: $salariominimo</h2>";
        echo "<h2>Reajuste: $reajuste </h2>";
        echo "<h2>Novo salário: $novosalario</h2>";
    }
    ?>
</body>
</html>