# DWES

## Simulacro 1ª Ev

1. Arrays:

   - Crear un array que recoja las notas de la asignatura "DWES" de 5 alumnos. Dicho array ha de ser asociativo y las notas números aleatorios entre 1 y 10.
   - Añadir por cada estudiante, una clave más "DWEC" con números aleatorios entre 1 y 10.

2. Formularios

   - Crear una lista iterando el array anterior que muestre todos los alumnos y sus notas.
   - Crear un formulario que permita seleccionar la asignatura a mostrar de los estudiantes. Utilizar o un select o un grupo de radio-buttons.
   - Filtrar las asignaturas de manera similar al apartado anterior pero con un parámetro por URL.
   - Crear un fichero json con los datos de cada alumno
   - Decodificarlo y mostrar la nota media de cada alumno por pantalla

3. Clases
   - Crear una clase Asignatura
     - propiedades:nombre, horas, profesor
     - métodos: constructor, getters,setters, toString, toArray, guardar
   - Un formulario que recoja nombre, horas, profesor. Al enviar el formulario, se llama al fichero controlador.php.
   - Controlador.php importa la clase sirve para crear instancias de la clase asignatura con los datos del formulario. Una vez creada la instancia, llamar al método "guardar" de la clase. Dicho método ha de convertir dicha instancia en un array(toArray), codificarlo en json y guardarlo en el fichero 3_datos.json.
