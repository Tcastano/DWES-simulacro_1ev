<?php

/**
 * 
 * 1. Arrays:
 * Crear un array que recoja las notas de la asignatura "DWES" de 5 alumnos. Dicho array ha de ser asociativo y las notas números aleatorios entre 1 y 10.
 * Añadir por cada estudiante, una clave más "DWEC" con números aleatorios entre 1 y 10.
 * 
 */

$alumnos = ["Tizziano", "Hugo", "Siro", "Fabio", "Adan"];

//Ej: 
//$notas = [
//     "Juan"=>
//     [
//         "DWEC"=>5,
//         "DWES"=>7
//     ],
//     "Marta"=>["DWEC"=>5,"DWES"=>7],
//     "Menanito"=>["DWEC"=>5,"DWES"=>7],
//]


$notas = [];

foreach ($alumnos as  $al) {
    $notas[$al] = ["DWES" => rand(1, 10)];
}

// print "<pre>" . print_r($notas, true) . "</pre>";

foreach ($notas as $alumno => $asignaturas) {
    $notas[$alumno]["DWEC"] = rand(1, 10);
}
//print "<pre>" . print_r($notas, true) . "</pre>";
