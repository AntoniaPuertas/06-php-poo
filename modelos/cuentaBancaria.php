<?php 
declare(strict_types=1);

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
class CuentaBancaria{
    private float $saldo;

    public function __construct(float $saldo = 0)
    {
        $this->saldo = $saldo;
    }

    public function depositar($cantidad):bool{
        if($cantidad > 0){
            $this->saldo += $cantidad;
            return true;
        }else{
            return false;
        }
    }
    public function retirar($cantidad):bool{
        if($cantidad > 0 && $cantidad <= $this->saldo){
            $this->saldo -= $cantidad;
            return true;
        }else{
            return false;
        }
    }
    public function obtenerSaldo():float{
        return $this->saldo;
    }
}