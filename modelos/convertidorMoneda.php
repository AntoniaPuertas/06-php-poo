<?php
declare(strict_types=1);

 /**
  * Ejercicio 4
  * Crea una clase llamada ConvertidorMoneda que permita realizar conversiones entre dólares y euros.
  * La clase debe cumplir los siguientes requisitos:
  * La clase debe tener dos propiedades estáticas privadas: $tasaDolarEuro inicializada con un valor 0.85 y $tasaEuroDolar inicializada con un valor 1.18
  * Implementa los siguientes métodos estáticos: 
  * dolaresaEuros(float $dolares):float - convierte dólares a euros
  * eurosaDolares(float $euros):float - convierte euros a dólares
  * actualizarTasas(float $nuevaTasaDolarEuro, float $nuevaTasaEuroDolar):void - actualiza las tasas de cambio
  * obtenerTasasActuales():array Devuelve un array con las tasas de cambio actuales
  *
  * Crea un script para probar la clase:
  * Realiza conversiones de 100 dólares a euros y 100 euros a dólares
  * Actualiza las tasas de cambio a 0.82 para dólar a  euro y 1.22 para euro a dólar
  * Realiza nuevamente las conversiones con las tasas actualizadas
  * Muestra las tasas de cambio actuales
  */
class ConvertidorMoneda{

    private static float $tasaDolarEuro = 0.85;
    private static float $tasaEuroDolar = 1.18;

    public static function dolaresaEuros(float $dolares):float{
        //convierte dólares a euros
        return $dolares * self::$tasaDolarEuro;
    }
    public static function eurosaDolares(float $euros):float{
        //convierte euros a dolares
        return $euros * self::$tasaEuroDolar;

    }
    public static function actualizarTasas(float $nuevaTasaDolarEuro, float $nuevaTasaEuroDolar):void{
        //se actualizan las tasas
        self::$tasaDolarEuro = $nuevaTasaDolarEuro;
        self::$tasaEuroDolar = $nuevaTasaEuroDolar;
    }
    public static function obtenerTasasActuales():Array{
        //devuelve un array con las tasas actuales
        return [
            'dolar_euro' => self::$tasaDolarEuro,
            'euro_dolar' => self::$tasaEuroDolar
        ];
    }
}