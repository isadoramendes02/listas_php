<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serviço militar</title>
</head>
<body>
    <h1>Serviço militar</h1>
    <h2>21. Escrever um algoritmo que leia os dados de “N” pessoas (nome, sexo, idade e saúde) e informe se está apta ou não
    para cumprir o serviço militar obrigatório. Informe os totais.</h2>

    <?php 

    $mostrarFormulario = true;

    if (isset($_GET['nome'])) {

    $nome = $_GET['nome'];
    $sexo = $_GET['sexo'];
    $idade = (int)$_GET['idade'];
    $saude = $_GET['saude'];
    $resposta = $_GET['resposta'];

    $total = isset($_GET['total']) ? (int)$_GET['total'] : 0;
    $aptos = isset($_GET['aptos']) ? (int)$_GET['aptos'] : 0;
    $naoaptos = isset($_GET['naoaptos']) ? (int)$_GET['naoaptos'] : 0;

    echo "<hr>";
    
     if ($sexo == "homem" && $idade >= 18 && $saude == "Boa") {
        echo "<h2> $nome está <span style='color: green'>APTO</span>.</h2>";
        $aptos++;
    } else {
        echo "<h2>$nome está <span style='color:red'> NÃO APTO</span></h2>";
        $naoaptos++;
    }

    $total++;

    if ($resposta == "Não") {
        echo "<hr>";
        echo "<h2>Total de pessoas: $total</h2>";
        echo "<h2>Aptos: $aptos</h2>";
        echo "<h2>Não aptos: $naoaptos</h2>";
        $mostrarFormulario = false;
    }
}
    ?>

    <?php if ($mostrarFormulario) { ?>

    <form action="" method="GET">
    <label>Nome:</label>
    <input type="text" name="nome" required><br><br>

    <label>Idade:</label>
    <input type="number" name="idade" required><br><br>

    <label>Sexo:</label>
    <select name="sexo" required>
        <option value="">Escolha</option>
        <option value="homem"> Homem</option>
        <option value ="mulher"> Mulher</option>
    </select>
    <br><br>

    <label>Saúde:</label>
    <select name="saude" required>
        <option value=""> Escolha </option>
        <option value="Boa"> Boa </option>
        <option value="Ruim"> Ruim </option>
    </select>
    <br><br>

    <label>Deseja continuar?</label>
    <select name="resposta" required>
    <option value=""> Escolha </option>
    <option value="Sim"> Sim </option>
    <option value="Não"> Não </option>
    </select>
    <br><br>

    <input type="hidden" name="total" value="<?php echo $total ?? 0; ?>">
    <input type="hidden" name="aptos" value="<?php echo $aptos ?? 0; ?>">
    <input type="hidden" name="naoaptos" value="<?php echo $naoaptos ?? 0; ?>">


    <button type="submit"> Verificar </button>
    </form>

    <?php } ?>
</body>
</html>