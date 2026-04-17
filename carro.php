<?php
class Carro {
    public $modelo;
    private $velocidade;

    public function __construct($modelo, $velocidade) {
        $this->modelo = $modelo;
        $this->setVelocidade($velocidade); 
    }

    public function getVelocidade(){
        return $this->velocidade;
    }

    public function setVelocidade($novaVelocidade){
        if ($novaVelocidade >= 0 && $novaVelocidade <= 200){
            $this->velocidade = $novaVelocidade;
        } else {
            echo "Velocidade inválida! Você deve estar entre 0 e 200 km/h.<br>";
        }
    }
}

// --- TESTE DO VEÍCULO ---
$meuCarro = new Carro("Senai-Mobile", 0);

// ✅ Agora usando o setter corretamente
$meuCarro->setVelocidade(5000); // inválido
$meuCarro->setVelocidade(-60);  // inválido
$meuCarro->setVelocidade(120);  // válido

echo "Modelo: " . $meuCarro->modelo . "<br>";
echo "Velocidade atual: " . $meuCarro->getVelocidade() . " km/h";
?>