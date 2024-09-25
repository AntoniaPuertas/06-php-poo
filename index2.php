<?php 
declare(strict_types=1);

require_once 'modelos/perro.php';
require_once 'modelos/gato.php';

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


