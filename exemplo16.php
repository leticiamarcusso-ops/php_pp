<?php

class Visibilidade {
    public $varPublic;
    protected $varProtected;
    private $varPrivate;    
    
    public function __construct($varPublic, $varProtected, $varPrivate)
    {
        $this->varPublic = $varPublic;
        $this->varProtected = $varProtected;
        $this->varPrivate = $varPrivate;
    }
}

$teste = new Visibilidade("public", "protected", "private");
echo "Atributo Public: $teste->varPublic <br>";
echo "Atributo Protected: $teste->varProtected <br>";
echo "Atributo Private: $teste->varPrivate <br>";
    

