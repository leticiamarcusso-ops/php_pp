<?php

class Conta 
// superclasse
{
    public $numero;
    public $saldo;

    // metodos construtor
    function __construct($numero, $saldo)
    {
        $this->numero = $numero;
        $this->saldo = $saldo;
        // this pegando os atributos da classe conta
    }

    // metodos
    function creditar($valor)
    {
        $this->saldo = $this->saldo + $valor;
    }

    function debitar($valor)
    {
        $this->saldo = $this->saldo - $valor;
    }

    function transferir($outraConta, $valor)
    {
        if($this->saldo >= $valor) {
           $this->debitar($valor);
           $outraConta->creditar($valor);
        }
    }     
}

class Poupanca extends Conta
// subclasse
{
    public $juros;

    function __construct($numero, $saldo, $juros)
    {
        parent::__construct($numero, $saldo);
       $this->juros = $juros;
    }

    function  atualizarJuros()
    {
        $this->saldo = $this->saldo * (1 + $this->juros);
    }

}

$conta= new Conta(1, 150);
$conta->creditar(50);
$conta->debitar(100);
echo "Saldo da conta: $conta->numero: $conta->saldo <br>";

$poupanca= new Poupanca(2, 150, 0.10);
$poupanca->creditar(50);
$poupanca->debitar(100);
$poupanca->atualizarJuros();
echo "Saldo da conta: $poupanca->numero: $poupanca->saldo <br>";



