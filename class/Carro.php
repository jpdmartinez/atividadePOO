<?php

require_once('Veiculo.php');

class Carro extends Veiculo {

    private int $portas;
    
    public function __construct(string $marca, string $modelo, int $ano, int $portas){
        parent::__construct($marca, $modelo, $ano);
        $this->setPortas($portas);
    }
    
    public function setPortas($portas): void{
        if($portas<2){
            $this->portas = 2;
        } else {
            $this->portas = $portas;
        }
    }

    public function getPortas(): int{
        return $this->portas;
    }

    public function abrirPorta(int $numeroDaPorta): void{
        if($numeroDaPorta <= $this->portas){
            echo "A porta número {$numeroDaPorta} do carro foi aberta. <br>";
        } else {
            echo "O carro {$this->modelo} não possuí {$numeroDaPorta} portas. <br>";
        }
    }

    public function acelerar(float $quantidade): void{
        $this->setVelocidadeAtual($this->getVelocidadeAtual() + $quantidade);
        echo "O carro acelerou em {$quantidade} Km/h e sua velocidade atual é de {$this->getVelocidadeAtual()} Km/h.<br>";
    }

    public function frear(float $quantidade): void{
        if ($this->getVelocidadeAtual() >= 0){
            if($this->getVelocidadeAtual() - $quantidade >= 0){
                $this->setVelocidadeAtual($this->getVelocidadeAtual() - $quantidade);
                echo "O carro freou em {$quantidade} Km/h. Sua velocidade atual é de {$this->getVelocidadeAtual()} Km/h.<br>";
            } else{
                echo "Sua velocidade atual é 0 Km/h. <br>";
            }
        } else {
            echo "Impossível diminuar a velocidade abaixo de zero.<br>";
        }

    }

}