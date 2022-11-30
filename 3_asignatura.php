<?php

/**
 * Clase Asignatura
 */
class Asignatura{
    protected $nombre;
    protected $horas;
    protected $profesor;

    function __construct($nombre,$horas,$profesor)
    {
        $this->nombre =$nombre;
        $this->horas=$horas;
        $this->profesor=$profesor;

    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getHoras(){
        return $this->horas;
    }

    public function setHoras($horas){
        $this->horas = $horas;
    }

    public function getProfesor(){
        return $this->profesor;
    }

    public function setProfesor($profesor){
        $this->profesor = $profesor;
    }

    public function __toString()
    {
        return "Nombre: {$this->nombre}, Horas: {$this->horas}, Profesor: {$this->profesor}";
    }

    public function toArray()
    {
        $arrayAsignatura["nombre"] = $this ->nombre;
        $arrayAsignatura["horas"] = $this ->horas;
        $arrayAsignatura["profesor"] = $this ->profesor;
        
        $asignaturaEncoded = json_encode($arrayAsignatura,JSON_UNESCAPED_UNICODE);
        file_put_contents('./datos.json',$asignaturaEncoded);

        return $asignaturaEncoded;
    }


}


