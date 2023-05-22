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

                                