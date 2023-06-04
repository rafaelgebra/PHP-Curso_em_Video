<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio d011 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $preco = $_GET['preco']??0;
    $percentual = $_GET['percentual']??0;
    $aumento = ($preco / 100) * $percentual;
    $precoFinal = $preco +$aumento;
    ?>
    
    <main>
        <h1>Reajustador de Preços</h1>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                <label for="preco">Preço do Produto(R$)</label>
                <input type="number" name="preco" id="preco" value="<?=$preco?>" step="0.01">
                <label for="percentual">Qual será o precentual de reajuste?</label>
                <input type="number" name="percentual" id="percentual" value="<?=$percentual?>">
                <input type="submit" value="Reajustar">

            </form>

    </main>
    <section>
        <h2>Resultado do Reajuste</h2>
        <?php 
        print"O produto que custava R\$".number_format($preco,2,",",".")." com <strong> $percentual% de aumento</strong> vai passar a custar <strong>R\$".number_format($precoFinal,2,",",".")."</strong> a partir de agora";
        
        ?>


    </section>
</body>
</html>