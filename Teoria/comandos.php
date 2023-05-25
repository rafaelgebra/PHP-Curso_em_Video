var_dump() -> é uma função em php. VAR é de variável e DUMP é de despejo, além de mostrar o valor da variável também vai mostar o tipo primitivo. 
Ex:
    $v = 300;
    var_dump($v);
    int(300) // o resultado

    Ano atual -> date('Y') <!-- o Y grande mostra o ano completo ex: 2023 -->
    Ano atual -> date('y') <!-- O y pequeno mostra o ano abreviado ex: 23 -->

$_GET é uma vavriável super global "Ela vai funcionar independente da declaração"

$_POST é uma vavriável super global "Ela vai funcionar independente da declaração"

$_REQUEST  é uma vavriável super global "Ela vai funcionar independente da declaração" <!--A vantagem é que fonciona tanto com method="get" como method="post declarado no HTML--> // a $_REQUEST é uma junção de $_GET, $_POST e $_COOKIES.

?? no PHP isse é o simbulo que operador de qualessencia nula