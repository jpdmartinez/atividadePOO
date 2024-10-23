<?php

require_once('Veiculo.php');

class Moto extends Veiculo {

    public function __construct($marca, $modelo, $ano){
        parent::__construct($marca, $modelo, $ano);
    }

    public function empinar(): void {
        if($this->getVelocidadeAtual() > 20){
            echo "Você está empinando a moto. <br>";
        } else {
            echo "Você não tem velocidade suficiente para empinar a moto. <br>";
        }
    }

    public function acelerar(float $quantidade): void{
        $this->setVelocidadeAtual($this->getVelocidadeAtual() + $quantidade);
        echo "A moto acelerou em {$quantidade} Km/h e sua velocidade atual é de {$this->getVelocidadeAtual()} Km/h.<br>";
    }

    public function frear(float $quantidade): void{
        if ($this->getVelocidadeAtual() >= 0){
            if($this->getVelocidadeAtual() - $quantidade >= 0){
                $this->setVelocidadeAtual($this->getVelocidadeAtual() - $quantidade);
                echo "A moto freou em {$quantidade} Km/h. Sua velocidade atual é de {$this->getVelocidadeAtual()} Km/h.<br>";
            } else{
                echo "Sua velocidade atual é 0 Km/h. <br>";
            }
        } else {
            echo "Impossível diminuar a velocidade abaixo de zero.<br>";
        }

    }
}