<?php
declare(strict_types= 1);

class Coche {
    private string $marca;
    private string $modelo;
    private string $color;
    private int $anio;

    public function __construct(string $marca, string $modelo, string $color, int $anio)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
        $this->anio = $anio;
    }

    public function obtenerInformacion():string{
        return "Coche $this->marca $this->modelo de color $this->color del año $this->anio";
    }
}