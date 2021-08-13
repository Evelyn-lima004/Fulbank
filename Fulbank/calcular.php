<?php
 
if (isset ($_POST["nomeCompleto"]) && isset($_POST["salarioAtual"])
    && isset($_POST["genero"]) && isset($_POST["cargo"]))
{
    $nome = $_POST["nomeCompleto"];
    $salarioAtual = $_POST["salarioAtual"];
    $genero = $_POST["genero"];
    $cargo = $_POST["cargo"];
 
    $salarioNovo = 0;
 
} else {
    die ("<main>Você não enviou os dados</main>");
} 
 
// if ($salarioAtual > 5000) {
 
//     $salarioNovo = $salarioAtual * 1.1;
// } else {
//     $salarioNovo = $salarioAtual * 1.2;
// }
 
$salarioNovo = $salarioAtual > 5000 ? $salarioAtual * 1.1 : $salarioAtual * 1.2;
 
?>
 
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Aumento Salarial</title>
</head>
<body>
    <main>
        <p>
            <?= $genero === "m" ? "O" : ($genero === "f" ? "A" : "") ?>
            <?= $nome ?> passará a receber R$
            <?= number_format($salarioNovo, 2, ",", ".") ?>, 
            no cargo de <?= $cargo ?>
        </p>
    </main>
</body>
</html>

<!-- <!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aumento Salarial</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form method="POST" action="calcular.php">
        <p>Aumento Salarial</p>

        <label for="nome">
            Nome
            <input class="texto" type="text" id="nome" name="nome" value="<?= $nome ?>" readonly>
        </label>

        <label for="salario">
            Antigo Salário em R$
            <input class="texto" type="number" id="salario" name="salario" value="<?= $salario ?>" readonly>
        </label>

        <div class="genero">
            <label>Gênero:</label>
            <label for="masculino">
                <input type="radio"  name="genero" checked value="<?= $genero ?>"><?= $genero ?>
            </label> 

            <br>
            <br>
            <br>

        <label id="cargosLabel" for="cargos">
            Cargos
            <select id="cargos" name="cargos" disabled>
                <option id="selecione" selected value=""><?= $cargos ?></option>
            </select>
        </label>


        <textarea id="total" cols="22" rows="4" readonly>Parabéns <?= $nome ?>! Você passará a receber R$<?= $novoSalario ?> no cargo de <?= $cargos ?>!</textarea>

    </form>

</body>

</html> -->
