<?php

class Conta 
// superclasse
{
    private $numero;
    protected $saldo;

    // metodos construtor
    function __construct($numero, $saldo)
    {
        $this->numero = $numero;
        $this->saldo = $saldo;
        // this pegando os atributos da classe conta
    }
    // metodos getters e setters
    public function getNumero()
    {
        return $this->numero;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    protected function setSaldo($novoSaldo)
    {
        $this->saldo = $novoSaldo;
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
    protected $juros;

    function __construct($numero, $saldo, $juros)
    {
        parent::__construct($numero, $saldo);
       $this->juros = $juros;
    }

    function creditar($valor)
    {
       parent::creditar($valor);
       $this->atualizarJuros(); 
    }

    function  atualizarJuros()
    {
        $novoSaldo = $this->getSaldo() * (1 + $this->juros);
        $this->setSaldo($novoSaldo);
    }

}

$conta= new Conta(1, 150);
$conta->creditar(50);
$conta->debitar(100);
echo "Saldo da conta: {$conta->getNumero()}: {$conta->getSaldo()} <br>";

$poupanca= new Poupanca(2, 150, 0.10);
$poupanca->creditar(50);
$poupanca->debitar(100);
$poupanca->atualizarJuros();
echo "Saldo da poupança: {$poupanca->getNumero()}: {$poupanca->getSaldo()} <br>";

