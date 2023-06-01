<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 007 PHP</title><link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $salarioMinimo = 1380;
    $salario = $_GET['salario']??0;
    ?>

    <main>
        <h1>Informe seu Salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="salario"  value="<?=$salario?>" step="0.01">
            <p>Considerando que o salário mínimo é de <strong>R$1.380,00</strong></p>
            <input type="submit" value="Calcular">

        </form>
        <?php 
            $quantidadeSalario = $salario / $salarioMinimo;
            $intQuantidadeSalario = (int)$quantidadeSalario;
            $restoSalario = $salario % $salarioMinimo;
            $RestoSalario = 
            
            Print"Quem recebe um salário de R\$".number_format($salario,2,",",".")." ganha <strong> $intQuantidadeSalario mínimos + </strong> R\$" .number_format($restoSalario,2,",",".");
            
        ?>

        
    </main>

    
</body>
</html>