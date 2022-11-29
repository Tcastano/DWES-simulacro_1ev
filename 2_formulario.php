<?php

require_once('1_arrays.php');
/**
 * 
 * 2. Formularios
 * - Crear una lista iterando el array anterior que muestre todos los alumnos y sus notas.
 * - Crear un formulario que permita seleccionar la asignatura a mostrar de los estudiantes. Utilizar o un select o un grupo de radio-buttons.
 * - Filtrar las asignaturas de manera similar al apartado anterior
 * - Crear un fichero json con los datos de cada alumno
 * - Decodificarlo y mostrar la nota media de cada alumno por pantalla
 * 
 * 
 */

var_dump($_POST);
$asignaturaselecionada=null;
if (!empty($_POST)) {
    $asignaturaselecionada=$_POST['Asignatura'];
}
$arrayNotasFiltradas = $notas;
if ($asignaturaselecionada!=null) {
    foreach ($notas as $key => $value) {
        $arrayNotasFiltradas[$key] = [$asignaturaselecionada=>$value["$asignaturaselecionada"]];
    }
}

?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
     <ol>
    <?php
    foreach ($arrayNotasFiltradas as $key => $value) {
        echo "<li>$key</li>";
        foreach ($value as $clave => $valor) {
            echo "<ul>";
            echo "<li>$clave: $valor</li>";
            echo "</ul>";
        }
    }
    ?>
    </ol>

    <form action="2_formulario.php" method="post">
        <input type="radio" name="Asignatura" id="Servidor" value="DWES">
                    <label for="Servidor">EntornoServidor</label><br>

                    <input type="radio" name="Asignatura" id="Cliente" value="DWEC">
                    <label for="Cliente">EntornoCliente</label><br>

                    <input type="submit" value="Enviar">
    </form>
 </body>
 </html>