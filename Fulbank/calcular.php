
<?php

if (isset($_POST["cidadeOrigem"]) && isset($_POST["cidadeDestino"]) && isset($_POST["distancia"]) && isset($_POST["pedagios"])){

    $cidadeOrigem = $_POST["cidadeOrigem"];
    $cidadeDestino = $_POST["cidadeDestino"];
    $distancia = $_POST["distancia"];
    $pedagios = $_POST["pedagios"];

    $valorFrete = 0;

    $valorfrete = $distancia * 6;

    $valorfrete += $pedagios * 9.4;

    // $valorfrete = ($distancia * 6) + ($pedagios * 9.4);



}else{
    echo "Você não enviou os dados";
    exit;
}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de frete</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form method="POST" action="calcular.php">
        <p>Calcular Fretes</p>

            <label for="cidadeOrigem">
                Cidade de Origem
                <input type="text" id="cidadeOrigem" name="cidadeOrigem" value="<?= $cidadeOrigem ?>" readonly>
            </label>

            <label for="cidadeDestino">
                Cidade de Destino
                <input type="text" id="cidadeDestino" name="cidadeDestino" value="<?= $cidadeDestino ?>" readonly>
            </label>

        <label for="distancia">
            Distância em KM
            <input id="distancia" name="distancia" value="<?= $distancia ?>" readonly>
        </label>

        <label for="pedagios">
            Quantidade de Pedágios
            <input  id="pedagios" name="pedagios" value="<?= $pedagios ?>" readonly>
        </label>


        <p class="total">A viagem de <?= $cidadeOrigem ?> à <?= $cidadeDestino ?> irá custar o valor total de R$<em><?= number_format($valorfrete,2, ".", ".") ?></em></p>

    </form>

</body>

</html>
