<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 01</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Resultado Final</h1>
        <?php 
        $num = $_GET["num"] ?? 0 ;
        $num_antecessor = $num - 1;
        $num_sucessor = $num + 1;
        print("O número escolhido foi <strong>$num</strong>.") ;
        // também pode ser frito da segunte forma sem as variáveis.
        // print("O seu seu <em>antecessor</em> é $num_antecessor" . ($num - 1) ."\n")
        print( "<br>O seu <em>antecessor</em> é $num_antecessor ") ;
         // print("O seu <em>sucessor</em> é $num_sucessor" .($num + 1) ."\n")
        print(" <br>O seu <em>sucessor</em> é $num_sucessor ")          
        ?>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05 Voltar</button>
        <!--outra opção de fazer o botão de VOLTAR é:
        <button onclick="javascript:history.go(-1)">&#x2B05; Valtar</button> -->
    </main>


</body>

</html>