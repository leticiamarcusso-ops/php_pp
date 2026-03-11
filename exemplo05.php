<?php

class Funcionario
{
    public $nome;
    public $salario;
    public $previdencia;
    public $desconto;
    public $tipoFuncionario;


    function __construct($nome, $salario, $previdencia)
    {
        $this->nome = $nome;
        $this->salario = $salario;
        $this->previdencia = $previdencia;
        $this->desconto = $this->calcularDesconto();
        $this->tipoFuncionario = $this->categorizarFuncionario();
    }

    function calcularDesconto()
    {
      return number_format($this->salario * 0.275 + $this->previdencia, 2, ",", ".");
    }

    function categorizarFuncionario(): string
    {
      $salario = $this->salario;

      if ($salario >= 1000 && $salario < 2000) {
          $tipoFuncionario = "Junior";
      } else if ($salario >= 2000 && $salario < 3000) {
            $tipoFuncionario = "Pleno";
        } else if ($salario >= 3000) {
            $tipoFuncionario = "Senior";
        } else {
            $tipoFuncionario = "Estagiário";
        }
        return $tipoFuncionario;
    }
}


$joao = new Funcionario("João Filho", 1000, 100);
$maria = new Funcionario("Maria Rute", 2000, 200);
$jose = new Funcionario("Jose Salgado", 3000, 300);

echo "Funcionari@ $joao->nome é $joao->tipoFuncionario e o valor do desconto 
é de R$ $joao->desconto. <br>";

echo "Funcionari@ $maria->nome é $maria->tipoFuncionario e o valor do desconto 
é de R$ $maria->desconto. <br>";

echo "Funcionari@ $jose->nome é $jose->tipoFuncionario e o valor do desconto 
é de R$ $jose->desconto. <br>";