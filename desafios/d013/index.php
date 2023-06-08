<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desefio d013 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $valor = $_GET['valor']??0;
    $notas100 = (int)($valor / 100);
    $restoValor = $valor % 100;
    $notas50 = (int)($restoValor / 50);
    $restoValor = $valor % 50;
    $notas10 = (int)($restoValor / 10);
    $restoValor = $valor % 10;
    $notas5 = (int)($restoValor / 5)
    ?>
    <main>
        <h1>Caixa eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="valor">Qual valore você deseja sacar? (R$)*</label>
        <input type="number" name="valor" id="valor" min="5" value="<?=$valor?>">
        <p>*Notas disponiveis: R$100, R$50, R$10 e R$5</p>
        <input type="submit" value="Sacar">
    
        </form>

    </main>
    <section>
        <h2>Saque de R$ realizado</h2>
        <p>O caixa eletrônico vai te estregar as seguintes notas:</p>
        <ul>
            <li><?=$notas100?>x</li>
            <li><?=$notas50?>x</li>
            <li><?=$notas10?>x</li>
            <li><?=$notas5?>x</li>
        </ul>
    </section>
    
</body>
</html>