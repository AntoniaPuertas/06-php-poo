<?php
declare(strict_types= 1);
include 'modelos/pelicula.php';
include 'modelos/director.php';

$fecha = new DateTime('20-12-1950');
$creado = new DateTimeImmutable();

$director1 = new Director(1,  "Martin", "Scorsesse", $fecha, $creado, 'Muchas películas, de pequeño quería ser panadero');

//crear un objeto o instancia de la clase Pelicula
$pelicula1 = new Pelicula(1, 'Papillon', 33, $director1);

echo $pelicula1->toString();

echo $pelicula1->getDirector()->toString();
