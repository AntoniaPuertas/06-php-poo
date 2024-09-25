<?php
declare(strict_types= 1);

class Persona{
    private string $nombre;
    private int $edad;

    public function __construct(string $nombre, int $edad)
    {
        $this->nombre = $nombre;
        $this->margenEdad($edad); 
    }

    private function margenEdad($edad){
        try {
            if($edad < 1 || $edad > 120){
                $this->edad = 0;
                throw new Error("La edad tiene que ser un valor entre 1 y 120");
            }else{
                $this->edad = $edad;
            }
        } catch (\Throwable $th) {
            echo $th;
        }

        
        return true;
    }

    public function saludar(): string{
        return "Hola, mi nombre es: $this->nombre y tengo $this->edad años <br>";
    }
}