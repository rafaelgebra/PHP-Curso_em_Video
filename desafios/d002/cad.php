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
        <h1>Trabalhando com números aleatórios</h1>
        <p></p>
        <?php 
            // também pode fazer com variáveis.
            $vmin = 0;
            $vmax = 100;
            $num = mt_rand($vmin, $vmax);
            // $num = mt_rand(0,100);
            print"<p>Gerando um  número aleatório entre 0 e 100...<br> O valor gerado foi <strong>$num</strong>.</p>"
        ?>
            
        <button onclick="javascript:document.location.reload()">&#x1F504; Gerar outro </button>

    </main>

</body>
</html>