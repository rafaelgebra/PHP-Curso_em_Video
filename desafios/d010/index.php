<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio d010 PHP</title>
</head>
<body>
    <?php 
    $anoAtual = date('Y');
    $anoNasceu = $_GET['anonasceu']?? 0;
    $anoFuturo = $_GET['anofuturo']?? $anoAtual;
    $idade = $anoFuturo - $anoNasceu
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="anonasceu">Em que ano você nasceu?</label>
            <input type="number" name="anonasceu" id="anonasceu" max="<?=$anoAtual?>" value="<?=$anoNasceu?>">
            <label for="anofuturo">Quer saber sua idade em que ano?(atualmente estamos em <?=$anoAtual?>)</label>
            <input type="number" name="anofuturo" id="anofuturo" value="<?=$anoFuturo?>">
            <input type="submit" value="Qual será minha idade?">

        </form>
         
    </main>    
    <section>
        <h2>Resultado</h2>
        
        <?php 
        print"Quem nasceu em $anoNasceu vai ter <strong>$idade anos </strong> em $anoFuturo ";
        
        
        
        ?>
    </section>


</body>
</html>