<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desefio d013 PHP</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota {
            height: 60px;
            margin: 5px;
        }

    </style>
</head>
<body>
    <?php 
    //Também pode ser feito assim.
    #$valor = $_GET['valor]??0;
    #restoValor = $valor;
    //Saque e R$100,00
    #$notas100 = floor($resto / 100);
    #$restoValor = $restoValor % 100; // ou $restoValor %= 100;
    #$notas10 = floor($restoValor / 50);
    #$restoValor = $restoValor % 50, // ou $restoValor %= 50;
    #$notas10 = floor($restoValor / 10);
    #$restoValor = $restoValor % 10; // ou $restoValor %= 10;
    #$notas10 = floor($restoValor / 5);
    #$restoValor = $restoValor % 5; // ou %restoValore %= 5
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
        <label for="valor">Qual valore você deseja sacar? (R$)<sup>*</sup></label>
        <input type="number" name="valor" id="valor" step="5" required value="<?=$valor?>">
        <p style="font-size: 0.9em;"><sub>*</sub>Notas disponiveis: R<sub>$</sub>100, R<sub>$</sub>50, R<sub>$</sub>10 e R<sub>$</sub>5</p>
        <input type="submit" value="Sacar">
    
        </form>

    </main>
    <section>
        <h2>Saque de R$<?=number_format($valor, 2, ",",".")?> realizado</h2>
        <p>O caixa eletrônico vai te estregar as seguintes notas:</p>
        <ul>
            <li><img src="imagens/100-reais.jpg" alt="nota 100" class="nota">x<?=$notas100?></li>
            <li><img src="imagens/50-reais.jpg" alt="nota 50" class="nota">x<?=$notas50?></li>
            <li><img src="imagens/10-reais.jpg" alt="nota 10" class="nota">x<?=$notas10?></li>
            <li><img src="imagens/5-reais.jpg" alt="nota 5" class="nota">x<?=$notas5?></li>
        </ul>
    </section>
    
</body>
</html>