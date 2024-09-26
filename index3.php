<?php
include_once 'modelos/cuentaBancaria.php';

$miCuenta = new CuentaBancaria(1000);

//mostrar el saldo
echo "Saldo inicial " . $miCuenta->obtenerSaldo() . '<br>';

$cantidad = 500;
//hacer un depósito

if($miCuenta->depositar($cantidad)){
    echo "Depósito realizado correctamente <br>";
}else{
    echo "El depóstio no se ha realizado <br>";
}

//retirar
$cantidadaRetirar = 500;
if($miCuenta->retirar($cantidadaRetirar)){
    echo "Retirada de cantidad realizada <br>";
}else{
    echo "No se pudo realizar la operación <br>";
}

//obtener el saldo
echo "Tu saldo actual es: " . $miCuenta->obtenerSaldo() . '<br>';
