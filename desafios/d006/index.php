<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio D006 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $dividendo = $_GET['dividendo']??0;
        $divisor = $_GET['divisor']??0;
    ?>
    <main>
        <h1>Somador de valores</h1>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                <label for="dividendo">Dividendo</label>
                <input type="number" name="dividendo" id="dividendo" value="<?=$dividendo?>">
                <label for="divisor">Divisor</label>
                <input type="number" name="divisor" id="divisor" value="<?=$divisor?>">
                <input type="submit" value="Analizar">                
            </form>
    </main>
    <section>
        <h2>Estrutuda da Divisão</h2>
        <?php 
            $cosiente = $dividendo / $divisor;
            $intCosiente = (int)$cosiente;
            $resto = ($dividendo % $divisor);
            print"O valor do dividendo é $dividendo <br>";
            print"O valor do divisor é $divisor <br>";
            print"O valor do cosiente $intCosiente <br>";
            Print"O resto da divisão é $resto";
        ?>
    </section>

    
</body>
</html>