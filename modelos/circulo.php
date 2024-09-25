<?php 
declare(strict_types=1);
include_once 'figura.php';

class Circulo extends Figura{

    private float $radio;

    public function __construct(float $radio)
    {
        $this->radio = $radio;
        $this->calcularArea();
    }

    public function calcularArea(): void
    {
        //$this->area =  pi() * $this->radio * $this->radio;
        //$this->area =  pi() * ($this->radio ** 2);
        $this->area =  pi() * pow($this->radio, 2);
    }

}