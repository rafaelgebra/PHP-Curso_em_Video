<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Me livrando da Maldição</title>
</head>
<body>
    <h1>Aula anterior</h1>
        <h2>
            <?php
                echo "Olá, troxa! \u{1F30E} \u{1F596}<br>"; // só funciona com duas aspas.
                echo 'Olá, troxa! \u{1F30E} \u{1F596}'; // Não funciona com uma aspa
            ?>
        </h2>
    <h1>Refazendo o curso 2024/29/02</h1>
        <h2>
            <?php
                print "Olá, troxa! \u{1F30E} \u{1F596} <br>"; // Funciona a compatibilidade com caracteres especiais (unicodes)
                print 'Ola, troxa! \u{1f30E} \u{1F596} '; // Não tem compatibilidade com caracteres especiais (unicodes)
            ?>
        </h2>
    <p>Vamos tentar nos livrar da maldição</p>
</body>
</html>