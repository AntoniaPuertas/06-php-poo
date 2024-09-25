<?php 
declare(strict_types=1);

require_once 'modelos/perro.php';
require_once 'modelos/gato.php';
require_once 'modelos/cuadrado.php';
require_once 'modelos/circulo.php';
require_once 'modelos/plan.php';


$miPerro = new Perro('Tula', 14, 'Cunera');

echo '<pre>';
var_dump($miPerro);
echo '</pre>';

echo $miPerro->toString();
echo $miPerro->hacerSonido();

$miGato = new Gato('Gus', 3, true);
$miGata = new Gato('Lía', 2, false);

echo $miGato->toString();
echo $miGata->toString();


$miCuadrado = new Cuadrado(6);

echo $miCuadrado->mostrarArea();

$miCirculo = new Circulo(6);
echo $miCirculo->mostrarArea();

echo '<br>';

$planBasico = new Plan(Plan::PLAN_BASICO);
echo $planBasico->obtenerPrecio();

$planEstandard = new Plan(Plan::PLAN_ESTANDARD);
echo $planEstandard->obtenerPrecio();

$planPremium = new Plan(Plan::PLAN_PREMIUM);
echo $planPremium->obtenerPrecio();

$planes = Plan::obtenerTodosLosPlanes();
echo '<br>';
echo '<p>Los planes disponibles son:</p>';

foreach($planes as $plan => $precio){
    echo "$plan: $precio <br>";
}

