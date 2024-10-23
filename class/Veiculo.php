<?php

class Veiculo {

    private int $ano;
    private string $modelo;
    private string $marca;
    private float $velocidadeAtual;


    public function __construct(string $marca, string $modelo, int $ano){

        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setAno($ano);
        $this->velocidadeAtual = 0;
    }

    public function setMarca(string $marca): void{
        if (empty($marca)){
            $this->marca = "Marca do veículo";
        } else {
            $this->marca = $marca;
        }
    }

    public function getMarca(): string {
        return $this->marca;
    }

    public function setModelo(string $modelo): void{
        if(empty($modelo)){
            $this->modelo = "Modelo do veículo";
        } else {
            $this->modelo = $modelo;
        }
    }

    public function getModelo(): string {
        return $this->modelo;
    }

    public function setAno(int $ano):void {
        if ($ano<0){
            $this->ano = 0;
        } else{
            $this->ano = $ano;
        }
    }

    public function getAno(): int {
        return $this->ano;
    }

    public function setVelocidadeAtual(float $velocidadeAtual): void {
        if($this->velocidadeAtual < 0){
            $this->velocidadeAtual = 0;
        } else {
            $this->velocidadeAtual = $velocidadeAtual;
        }
    }

    public function getVelocidadeAtual(): float {
        return $this->velocidadeAtual;
    }

    public function acelerar(float $quantidade): void{
        $this->velocidadeAtual += $quantidade;
        echo "Sua velocidade atual é de {$this->velocidadeAtual} Km/h.<br>";
    }

    public function frear(float $quantidade): void{
        if ($this->velocidadeAtual >= 0){
            if($this->velocidadeAtual - $quantidade >= 0){
                $this->velocidadeAtual -= $quantidade;
                echo "Sua velocidade atual é de {$this->velocidadeAtual} Km/h.<br>";
            } else{
                echo "Sua velocidade atual é 0 Km/h. <br>";
            }
        } else {
            echo "Impossível diminuar a velocidade abaixo de zero.<br>";
        }

    }
}