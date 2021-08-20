<?php

//$cargos = array();


// declarando um vetor
$cargos= [
   "Administração",
   "TI",
   "Gerente de Projetos",
   "Engenheiro de Software",
   

];


//adicionando um elemento no vetor
$cargos[] = "DBA";
$cargos[] = "Auxiliar Logístico";
$cargos[] = "Assistente Comercial";
$cargos[] = "Estatísticas";
$cargos[] = "Recepcionista";
$cargos[] = "Design";
$cargos[] = "Back-end";
$cargos[] = "Front-end";

//excluindo uma posição no vetor 
//Unset ($cargos[2]) 

//imprimindo um elemento na tela
//print_r($cargos);

//die;

?>









<!DOCTYPE html>
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

            <label for="nomeCompleto">
                Nome Completo
                <input type="text" id="nomeCompleto" name="nomeCompleto"required>
            </label>

            <label for="salario">
                Salário $
                <input type="text" id="salario" name="salarioAtual" required>
            </label>

    

        <label for="genero">Selecione um gênero</label><br>
 
        <div class="input-radio">
            <input type="radio" id="fem" name="genero" value="F">
            <label for="fem">Feminino:</label>
            
        </div>
        
        <div class="input-radio">
            <input type="radio" id="masc" name="genero" value="M">
            <label for="masc">Masculino:</label>
        </div> 

        <div class="input-radio">
            <input type="radio" id="outros" name="genero" value="O">
            <label for="outros">Outros:</label>

        </div>

        <label>
           <br> <span>Cargo</span>
         <select name="cargo">
            <option value="">SELECIONE</option>
            <?php
            foreach($cargos as $cargo){
                echo"<option>$cargo</option>";
            }
            
            ?>
          
          </select>
       </label>


        <button>Enviar</button>

    </form>

</body>