<?php
class conexion
{
    private $servidor;
    private $usuario;
    private $contrasena;
    private $basedatos;
    public  $conexion;

    public function __construct()
    {
        $this->servidor   = "localhost";
        $this->usuario	  = "root";
        $this->contrasena = "root";
        $this->basedatos  = "e_contable";
    }
    function conectar()
    {
        $this->conexion = new mysqli($this->servidor, $this->usuario, $this->contrasena, $this->basedatos);
    }
    function cerrar()
    {
        $this->conexion->close();
    }
}