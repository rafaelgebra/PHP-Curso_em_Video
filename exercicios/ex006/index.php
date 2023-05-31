<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    // Capturando os dados dp formulário Retroalimentado
    $valor1 = $_GET['v1'] ??0 ;
    $valor2 = $_GET['v2'] ?? 0;

    ?>
    <main>
        <h1>Somador de Valores</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <!--<?=$_SERVER['ṔHP_SELF']?> é a simplificação de  <?php print $_SERVER['ṔHP_SELF']?>-->
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?php print $valor1?>"> <!--O mesmo que, value="<?=$valor1?>"-->
            <label for="v2">Valore 2</label>
            <input type="number" name="v2" id="v2" value="<?php print $valor2?>"> <!--O mesmo que, value="<?=$valor2?>"-->
            <input type="submit" value="Somar">

        </form>
    </main>
    <section id="resultado">
        <h2>Resultado da Soma</h2>
        <?php 
            $soma = $valor1 + $valor2;
            print"<p>A soma entre os valores $valor1 e $valor2 é <strong>$soma</strong></p>";
        ?>


    </section>
    
</body>
</html>