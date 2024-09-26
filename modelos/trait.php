<?php 

/**
 * un trait nos permite generar una serie de métodos para compartir entre diferentes clases
 */

 declare(strict_types=1);

 trait Loggeable {
    private string $logFile = 'app.log';

    public function log(string $mensaje):void{
        $timestamp = date('Y-m-d H:i:s');
        $logMensaje = "[{$timestamp}] {$mensaje}\n";
        file_put_contents($this->logFile, $logMensaje, FILE_APPEND);
    }

    public function setLogFile(string $fileName):void{
        $this->logFile = $fileName;
    }
 }

 class Usuario {
    use Loggeable;
    private string $nombre;

    public function __construct(string $nombre){
        $this->nombre = $nombre;
        $this->log("Nuevo usuario creado: {$this->nombre}");
    }
    public function getNombre():string{
        return $this->nombre;
    }
 }