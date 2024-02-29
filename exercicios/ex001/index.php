<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Servidor</title>
</head>
<body>
    <h1>Dados do Servidor</h1>

    <script language="php"> // Não funciona mais

        /*
        $nome = "Rafael";
        print"<p>O meu nome é $nome</p>";
        echo "<p>O meu nome é $nome</p>";
        */
    </script>
    <?php
        //phpinfo(); // Para pegar informações do servidor usar esse comando.
        $nome = "Rafael";
        print"<p>O meu nome é $nome</p>";
        echo "<p>O meu nome é $nome</p>";
    ?>
</body>
</html>