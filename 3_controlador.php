<?php

/**
 * Controlador del formulario
 */
 require_once("./3_asignatura.php");

$asignatura =  new Asignatura($_POST['nombre'],$_POST['horas'],$_POST['profesor']); 

file_put_contents("./3_datos.json",$asignatura->toArray());

$totalAsignaturas = file_get_contents("./3_datos.json");
$totalAsignaturasDecoded = json_decode($totalAsignaturas, true, 512, JSON_UNESCAPED_UNICODE);

if (!empty($totalAsignaturasDecoded))
{
    foreach ($totalAsignaturasDecoded as $key => $value) 
    {
       echo ($key. ':' .$value. "<br>");
    }
}





