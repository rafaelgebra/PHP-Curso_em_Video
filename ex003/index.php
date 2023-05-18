<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>

    <?php 
            // 0x = hexadecimal, 0b = binário, 0 = Octal
        //$num = 310;
        //print "o valor da variável e $num";

        //$v = 3.14;
        //var_dump($v)

        //$num = (int) 3e2; //é o mesmo que dizer 3 x 10² = 300
        //var_dump($num);
        //print "O valor e $num";
        // para transformar de forma forçada o numero em inteiro "coerção" é só por depois do = (int)


        //$vet = [6, 2.5, "Maria", 3, false];
        //print "O vetor é $vet"  Não suporta. ERRO
        //var_dump($vet)

        class Pessoa {
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p);
    ?>
    
</body>
</html>