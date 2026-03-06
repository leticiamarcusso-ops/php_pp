<?php

class Funcionario
{
    public $nome;
    public $salario;
    public $previdencia;
    public $desconto;

    function __construct($nome, $salario, $previdencia)
    {
        $this->nome = $nome;
        $this->salario = $salario;
        $this->previdencia = $previdencia;
        $this->desconto = $this->calcularDesconto();
    }

    function calcularDesconto()
    {
      return number_format($this->salario * 0.275 + $this->previdencia, 2, ",", ".");
    }
}

$joao = new Funcionario("João Filho", 1000, 100);
$maria = new Funcionario("Maria Rute", 2000, 200);
$jose = new Funcionario("Jose Salgado", 3000, 300);

echo "O valor do desconto de $joao->nome é de R$ $joao->desconto. <br>";
echo "O valor do desconto de $maria->nome é de R$ $maria->desconto. <br>";
echo "O valor do desconto de $jose->nome é de R$ $jose->desconto. <br>";