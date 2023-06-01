<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio d008 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $numero = $_GET['numero']??0;
    ?>
    <main>
    <h1>Informe um número</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="Numero">Número</label>
        <input type="number" name="numero" id="numero">
        <input type="submit" value="Calcular">

    </form>

    </main>    
        <section>
            <h2>Resultado final</h2>
        <?php
            $raizQuadrada = $numero ** (1/2);
            $raizCubica = $numero ** (1/3);


            print"<p>Analizando o número " .number_format($numero,2,",",".")." temos:</p>";
            print"<ul><li>A dua raiz quadrada é <strong>".number_format($raizQuadrada, 3, ",", ".")."</strong></li> <br>
            <li>A dua raiz cúbica é<strong> " .number_format($raizCubica, 3,",",".")."</strong></li></ul>";
        
        ?>

        </section>

</body>
</html>