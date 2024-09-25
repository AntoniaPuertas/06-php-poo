<?php
declare(strict_types=1);
require_once 'animal.php';

class Gato extends Animal{
    private bool $esDomestico;

    public function __construct(string $nombre, int $edad, bool $esDomestico)
    {
        parent::__construct($nombre, $edad);
        $this->esDomestico = $esDomestico;
    }

    public function toString():string{
        return parent::toString() . " , " . (($this->esDomestico) ? " es un gato doméstico" : " es un gato salvaje") . "<br>";
    }

    public function hacerSonido(): string
    {
        return "Miau...<br>";
    }
}