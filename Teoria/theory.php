Para comentar no PHP uma das forma de fazer comentario é usar //
                    
                    //Aula O PHP por dentro
                        
; Dica  -> As váriaveis no PHP não são "declaradas" elas são "inicidas".
                        
; O script PHP é inicializado com a seguinte tag <?php?> dentro do <body> 
                        
; A super_tag PHP <?php "Aqui dentro vai os comando "?> // É a mais atual e ultilizada.
                        
; A short_open tag <? "Aqui dentro vai os comandos "?> // Não é muito usada e nem é aconselhado usar.
                        
; A ASP_tag <%  "Aqui dentro vai os comandos " %> // Não funciona mais pois era usada na versão php 5 para trás. Mas para usar nas versões mais atuais php 7 para frente tem que fazer uma configuração.
                        
; A short_tah PHP <?php= "CursoemVídeo"?> é a super simplificação de <?php echo/print"CursoemVídeo" ?> // Situação especifica, nessa super tag é limitada a por dentro ou "echo" ou "print". Só funciona se for apenas 1 comando e tem que ser "echo" ou print.

                            Aula - Variável e constantes em PHP
;Variáveis - é um espaço inderesável/alocado da mémoria RAM do computador que pode variar o conteúdo (dado)
;Constantes -  é o mesmo espaço inderesável/alocado na memória RAM que uma variável, porém a constantes não altera o valore/conteúdo (dado)

    Exemplo de como inicializar/declarar uma Variável
                Na Váriavel é editável
                        <?php
                        $nome = "Rafael";
                        $sobrenome = "Gebra";
                        
                        print"Olá $nome $sobrenome";
                        

                        ?>

        Resultado       Olá Rafael Gebra

    Exemplo de como inicializar/declarar uma Constantes
                Na constante não é editavel
                        <?php
                        $nome = "Rafael";
                        $sobrenome = "Gebra";
                        const PAIS = "Brasil";   
                        
                        PAIS = "EUA"

                        print"Olá $nome $sobrenome! Você mora no " . Brasil;
                        ?>

        Resultado       Parse error: syntax error, unexpected token "=" in /home/user/scripts/code.php on line 6    
        
        

    Regras para nomes identificadores Variável/Contante
 
1 - Variáveis sempre começa com o símbolo $
2 - O segundo caracter depois do $ pode ser uma letra ou o símbolo_
3 - Aceita os caracteres [a-z], [A-Z], [0-9"podendo ser do terceiro caracter para frente] e [_]
4 - Aceita caracteres da tabela ASCII apartir do código 128 //apartir da versão 5 do PHP consegue por qualquer símbolo básico ou qualquer caracter acentuado no nome de uma variável (não é interessante por acento porque os outros idiomas não tem acentuação)
5 - Aceita caracteres acentiafos como á, ó, õ, ç ...
6 - A linguagem pe CASE SENSITIVE em relação aos nomes // Isso signigica que o PHP deferência de letras Maiúsculas e minúsculas na Variável/contantes
7 - Nomes especias não podem ser usados como Variável/Constante // ex: $this
8 - Não pode ter espaço entre as palavra // $nomeCompleto

    Recomendações para dar nomes as coisas em PHP
1 - Tente dar nomes CLAROS e de FÁCIL indentificação
2 - Evite nomes muito CURTOS ou muito LONGOS //evite ser mono silábico ou contador
3 -  Defina um PADRÃO e siga em todo o projeto // se declarar as variáveis com minúscolo faça todas com minúsculo
4 - Para variáveis, de preferência a letras minúsculas
5 - Para constantes, dé preferência a letras Maiúsculas
6 - Use camelCase para métodos e atributos // basicamente camelCase é a primeira palavra em minúscolo e a segunda começa com Maiúscula Ex: camelCase, rafaelRodriguesGebra 
7 - Use SNAKE_CASE_case para nomear constantes //$telefone_contato_fornecedor -> quando for variável ou TELEFONE_CONTATO_FORNECEDOR -> quando for constante

                                Aula - Tipos Primitivos

                    No PHP tem 3 tipos/classificação de tipos Primitivos

1 - Escalares

$sobrenome = "Silva" // esse tipo é considerado string. String segnifica sequência de letras, números e símbulos, sempre representados entre aspas.

$idade = 34 // Esse tipo é considerado int ou integer. é um valor numérico inteiro, aquele que vem sem a parte decimal

$peso = 85.9 // Esse é o tipo float, double ou real. (a palavra REAL não é usada mais desda verção 7.4 do PHP) para o PHP não tem diferença entre esses tipos float e double. 

$casado = true // Esse é o tipo bool ou boolean. Um valor lógico ou Booleano, que aceita apenas os valores verdadeiro ou falso(true ou false). 

"RJ"        -> string
3.1415      -> float/double
17          -> int/integer
true        -> bool/booleano
""          -> string
-19         -> int/interger
"false"     -> string
0x1A        -> int/integer // base númerica hexadecimal todo número hexadecimal começa com 0x
3e2         -> float/double // Quando tem a letra (e) no meio dos números significa elevado a potência
"1024"      -> string

exemplo de bases numérica
        0x = hexadecimal, 0b = binário, 0 = Octal

Exemplos e explicação de tipos primitivos
                $num = 310;
                print "o valor da variável e $num";

                $v = 3.14;
                var_dump($v);
    Resultado   float(3.14)    


                $num = (int) 3e2; //é o mesmo que dizer 3 x 10² = 300
                var_dump($num);
    Resultado   int(300) //Para transformar de forma forçada o numero em inteiro "coerção" é só por depois do = (int) isso pode ser feito com outro tipos primitivos.
    ex:
    $num = (int) 3e2;
    $num = (float) 3e2;
    $num = (string) 3e2;

                $casado = false;
                var_dump($casado);
    Resultado   bool(false)
        Mas se fazer isso com o print/echo da um certo erro.
                $casado = false;
                print"O valor de casado é $casado";
    Resultado   O valor de casado é //não aparece o resultado porque no php o false no print e vazio, se o resultado fosse true o resultado seria 1.






2 - Compostos

Array
        $vet = [6, 2.5, "Maria", 3, false];
        print "O vetor é $vet"  Não suporta. ERRO
        var_dump($vet)

Object
        class Pessoa {
            private string $nome;   
        }

        $p = new Pessoa;
        var_dump($p)

3 - Especiais - Será estudado mais para frente

Null

Resource

Callabe

Mixed // surgio a partir da versão 8.0 representa todos os outros tipos primitivos

                <!--AULA - Manipulação de string com PHP-->

                double quoted - Aspas Duplas e Aspas Simples

Pois as aspas é string.

O operador de concatenação de string (concatenation operator) é: <!--(é o ponto .)-->
Não é o simbolo de +, em outras linguagem é utilizado para concatenar e para somar números, mas no PHP NÃO.

Nas aspas duplas tem a interpretação do conteúdo nas aspas simples não.
Ex: 
"PHP\u1{F418}" -> vai aparecer o emoji. Porque tem a interpretar o conteúdo
'PHP\u1{F418}' -> não vai aparecer o emoji. Porque o sistema vai ler de forma literal

Para constantes não funciona as aspas simples e duplas. Para resolver usando a concatenação
        Ex: const ESTADO = "SP";
            print "Moro no ESTADO"; -> Moro no ESTADO   = Não tem interpretação
            print 'Moro no ESTADO'; -> Moro no ESTADO   = Não tem interpretação
            print "Moro no".ESTADO; -> Moro no SP       = Tem interpretação


Para anular as aspas usar contra barra antes \. Isso se chama sequênçia de escape
            Ex:
                $nom = "Rodrigo";
		        $snom = "Nogueira";
		        print"$nom \"Nogueira\" $snom";

    Resultado   Rodrigo "Nogueira" Nogueira

Para aspas duplas "" tem muitas seguencias de escapes.
        \n      -> nova linha
        \t      -> Sinal de tabulação horizontal 'ESPAÇO'
        \\      -> exibir a barra invertida
        \$      -> exibir o sinal $
        \u{}    -> Codepoint Unicode

A unica sequênçia de escape para aspas simples '' é \'\'


                <!--Essas duas não é tão comum de achar-->

                <!--Heredoc--> 
"Vantagem" consegue fazer a quebra de linha no formato texto "LIXO"

$canal = "Curso em Vídeo";
    $ano = date('Y');

    echo <<< TESTE
        Olá galeta do $canal!
                        Tudo bem com vocês?
            Como esta sendo esse ano de $ano?


    TESTE;

                <!--Nowdor-->
"Vantagem" consegue fazer a quebra de linha no formato texto sem interpretação - "LIXO"

$canal = "Curso em Vídeo";
    $ano = date('Y');

    echo <<< 'TESTE'
        Olá galeta do $canal!
                        Tudo bem com vocês?
            Como esta sendo esse ano de $ano?


    TESTE;