<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exemplo PHP</h1>
    <?php // Só funciona se por <?php senão não funciona
        date_default_timezone_set("America/Sao_Paulo"); // timezone BRASIL
        echo "Hoje é dia " . date("d/M/Y") . " - Com interpretação de conteúdo  com aspas duplas \"\"<br>";
   
        echo 'Hoje é dia ' . date('d/M/Y') . " - Sem interpretação de conteúdo com aspas simples ''<br>";
        echo "E a hora atual é " . date("G:i:s") . " - Com interpretação do conteúdo com aspas duplas \"\"<br> "; // Para mostrar a hora é: G (maiuscolo) é hora, i (minisculo) é minutos, s (minisculo) é o segundo.
        echo 'E a hora atual é ' . date('G:i:s') . " - Sem interpretação do conteúdo com aspas simples ''<br>";

        ?>

</body>
</html>