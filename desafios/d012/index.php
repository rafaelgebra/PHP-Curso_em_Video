<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio D012 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $segundos = $_GET['segundos'];
        $semanas = (int) ($segundos / 604800);
        $restoSegundos = $segundos % 604800;
        $dias = (int) ($restoSegundos/ 86400);
        $restoSegundos = $segundos % 86400;
        $horas = (int) ($restoSegundos / 3600);
        $restoSegundos =  $segundos % 3600;
        $minutos = (int) ($restoSegundos / 60);
        $restoSegundos = $restoSegundos % 60;
    
    ?>


    <main>
        <h1>Calculadora de tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="segundos">Qual é o tempo de segundos</label>
            <input type="number" name="segundos" id="segundos" value="<?=$segundos?>">
            <input type="submit" value="Calcular">

        </form>
        
    </main>

    <section>
        <h2>Totalizando tudo</h2>
        <?php 
        
            print"Analisando o valor que você digitou, <strong>".number_format($segundos,0,".",".")." segundos</strong> equivalem a um total de: <ul><li>$semanas semanas</li> <li>$dias dias</li><li>$horas horas</li><li>$minutos minutos</li><li>$restoSegundos segundos</li></ul>";
        

            print"$intDia";
        ?>

    </section>



</body>
</html>