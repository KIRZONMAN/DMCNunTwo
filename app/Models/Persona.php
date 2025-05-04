<?php

namespace App\Models;

class Persona
{
    public $nombre;
    public $edad;
    public $rol;

    public function __construct($nombre, $edad, $rol)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->rol = $rol;
    }

    public function obtenerInfo()
    {
        return "{$this->nombre} tiene {$this->edad} años y es {$this->rol}.";
    }
}
