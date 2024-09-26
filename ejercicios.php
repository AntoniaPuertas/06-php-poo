<?php 
/**
* Ejercicio 1
* Crea una clase llamada Persona 
* Debe tener los siguientes atributos: nombre y edad 
* Debe tener un método público llamado saludar() que devuelva un string con el formato "Hola, mi nombre es: [nombre] y tengo [edad] años"
*/

/**
* Ejercicio2 
* Crea una clase llamada Coche
* Debe tener tres propiedades privadas: marca, modelo y año
* Debe tener un constructor que incialice estas tres propiedades
* Debe tener un método público llamado obtenerInformacion() que devuelva un string con el siguiente formato "Coche [marca] [modelo] del año [año]
*/

/**
 * Ejercicio3
 * Crea una clase llamada CuentaBancaria que simule las operaciones bancarias básicas:
 * Debe tener una propiedad privada $saldo
 * Debe tener un constructor que inicialice el saldo
 * Debe tener 3 métodos públicos:
 *  depositar($cantidad) añade la cantidad al saldo si  es positiva y devuelve  true, si  no devuelve false
 *  retirar($cantidad) resta la cantidad del saldo si hay suficiente saldo y la cantidad es positiva, devuelve true si se realiza la operación, false si no
 *  obtenerSaldo() devuelve el saldo actual
 *  
 */

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