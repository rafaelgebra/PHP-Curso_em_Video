<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analizandor de Número Real</h1>
        <?php 
        $num = $_GET["num"];
        $numReal = $_GET["num"][0] ;
        
        print"Analisando o número <strong>R$" . number_format($num, 3, ",", ".") ." </strong>informado pelo usuário. <br>";

        print"$numReal";
        



        ?>

    </main>
    
</body>
</html>