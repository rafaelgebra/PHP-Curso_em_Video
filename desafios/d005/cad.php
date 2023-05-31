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

        
        print"Analisando o número <strong>R$" . number_format($num, 3, ",", ".") ." </strong>informado pelo usuário. <br>";

        $int = (int) $num;
        $fra = $num - $int;
        

        print"<ul><li> A parte inteira do número é <strong>" .number_format($int, 0, ",",".") ."</strong></li>";
        print"<li> A parte fracionada do número é <strong>" .number_format($fra, 3, ",",".") ."</strong></li></ul>";
        
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>

    </main>
    
</body>
</html>