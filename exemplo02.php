<?php

function calcularDesconto($salario, $previdencia) {
    return number_format($salario * 0.275 + $previdencia, 2, ",", ".");
}

$joaoNome = "João Filho";
$joaoDescontos = calcularDesconto(1000, 100);

$mariaNome = "Maria Rute";
$mariaDescontos = calcularDesconto(2000, 200);

$joseNome = "Jose Salgado";
$joseDescontos = calcularDesconto(3000, 300);

echo "O valor do desconto de $joaoNome é $joaoDescontos. <br>";
echo "O valor do desconto de $mariaNome é $mariaDescontos. <br>";
echo "O valor do desconto de $joseNome é $joseDescontos. <br>";

