<?php
declare(strict_types= 1);
include __DIR__ .'/modelos/pelicula.php';
include __DIR__ .'/modelos/director.php';
include 'modelos/persona.php';
include 'modelos/coche.php';

//__DIR__ ruta absoluta del directorio dónde se encuentra el archivo actual
echo __DIR__;
echo '<br>';
//__FILE__ ruta absoluta del archivo actual
echo __FILE__;
echo '<br>';

$fecha = new DateTime('20-12-1950');
$creado = new DateTimeImmutable();

$director1 = new Director(1,  "Martin", "Scorsesse", $fecha, $creado, 'Muchas películas, de pequeño quería ser panadero');

//crear un objeto o instancia de la clase Pelicula
$pelicula1 = new Pelicula(1, 'Papillon', 33, $director1);

echo $pelicula1->toString();

echo $pelicula1->getDirector()->toString();
echo $pelicula1->getDirector()->getNombreCompleto();

$pelicula2 = new Pelicula(1, 'Gozzilla', 22);
echo  $pelicula2->toString();

$persona = new Persona('Manolo', 33);

echo $persona->saludar();

$miCoche = new Coche('Ferrari', 'SF1', 'Rojo', 2023);
echo $miCoche->obtenerInformacion();

