<?php
class mUsuario
{
    private $conexion;
    public function __construct()
    {
        require_once('./conexion.php');
        $this->conexion = new conexion();
        $this->conexion->conectar();
    }

    function set_login($usuario, $password)
    {
        /*$sql = "CALL sp_v1_set_login('$usuario', '$password');";
        $this->conexion->conexion->set_charset('utf8');
        $resulatdos = $this->conexion->conexion->query($sql);
        if ($resulatdos->num_rows > 0) {
            $r = $resulatdos->fetch_array();
        } else {
            $r[0] = 0;
        }
        $this->conexion->cerrar();
        return $r;*/
    }
}