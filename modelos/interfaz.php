<?php 
declare(strict_types=1);

/**
 * Se declara utilizando la palabra clave interface
 * Todos los métodos de una interfaz deben ser públicos
 * No pueden  contener propiedades o variables de instancia
 * Una clase  puede implementar varias interfaces
 * Las clases que implementan una interfaz deben proporcionar una implementación para todos los métodos declarados en la interfaz
 */

 interface Reproducible{
    public function reproducir():void;
    public function pausar(): void;
    public function detener(): void;
 }

 class Cancion implements Reproducible{
    private string $titulo;

    public function __construct($titulo)
    {
        $this->titulo = $titulo;
    }

    public function reproducir(): void
    {
        echo "Reproduciendo la canción " . $this->titulo;
    }
    public function pausar():void{
        echo "Canción pausada";
    }
    public function detener():void{
        echo "Reproducción de canción detenida";
    }
 }

 class Video implements Reproducible {
    private string $nombre;

    public function __construct($titulo)
    {
        $this->nombre = $titulo;
    }

    public function reproducir(): void
    {
        echo "Reproduciendo el vídeo " . $this->nombre;
    }
    public function pausar():void{
        echo "Vídeo pausado";
    }
    public function detener():void{
        echo "Reproducción del vídeo detenido";
    }
 }