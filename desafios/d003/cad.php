<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversorde Moedas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
    <h1>Conversor de Moedas</h1>

        <?php
        $moeda_br = $_GET["valor"] ?? 0;
        $cotação = 5.17;//$GET[""]; 
        $converção = $moeda_br/$cotação;
        //print"Seus R\$" . number_format($moeda_br, 2, ",", ".") . " equivalem a US\$" . number_format($converção, 2, ",", ".");
        // Formatação de moedas com internacionalização!
        $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
        print"<p> Seus " . numfmt_format_currency($padrao, $moeda_br,"BRL"). " equivalem a <strong>" . numfmt_format_currency($padrao, $converção, "USD</strong>")."</p>";
    
        ?>

        
    <button onclick="javascript:window.location.href='index.html'"> &#x2B05 Voltar</button>
    </main>
   
</body>
</html>