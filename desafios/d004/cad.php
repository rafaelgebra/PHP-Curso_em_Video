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
        // inicio dos dados direto do banco central
        $inicio = date("m-d-Y", strtotime("-7 days")); 
        $fim = date("m-d-Y") ;
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
    
        $dados = json_decode(file_get_contents($url), true);
    
        $cotacao = $dados["value"][0]["cotacaoCompra"];
        $data = $dados["value"][0]["dataHoraCotacao"];
        // Fim dos dados do banco central

        $moeda_br = $_GET["valor"] ?? 0;
        $convercao = $moeda_br/$cotacao;
        //print"Seus R\$" . number_format($moeda_br, 2, ",", ".") . " equivalem a US\$" . number_format($converção, 2, ",", ".");
        // Formatação de moedas com internacionalização!
        $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
        print"<p> Seus " . numfmt_format_currency($padrao, $moeda_br,"BRL"). " equivalem a <strong>" . numfmt_format_currency($padrao, $convercao, "USD</strong>")."</p>";
    
        ?>

        
    <button onclick="javascript:window.location.href='index.html'"> &#x2B05 Voltar</button>
    </main>
   
</body>
</html>