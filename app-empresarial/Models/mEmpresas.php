<?php
class mEmpresas
{
    private $conexion;
    public function __construct()
    {
        require_once('conexion.php');
        $this->conexion = new conexion();
        $this->conexion->conectar();
    }

	function get_active()
    {
        $sql = "CALL sp_v1_get_active_empresa()";
        $this->conexion->conexion->set_charset('utf8');
		$resultados = $this->conexion->conexion->query($sql);
		$arreglo    = array();
		while ($re  = $resultados->fetch_array(MYSQLI_BOTH)) {
			$arreglo[] = $re;
		}
		$this->conexion->cerrar();
		return $arreglo;
    }

    function set_status($id)
	{
		$sql = "CALL sp_v1_activate_empresa($id)";
		$this->conexion->conexion->set_charset('utf8');
		if ($this->conexion->conexion->query($sql)) {
			$this->conexion->cerrar();
			return true;
		} else {
			$this->conexion->cerrar();
			return false;
		}
	}

    function empresas_get_list($nameRubro)
    {
        $sql = "CALL sp_v1_empresas_get_list('$nameRubro')";
        $this->conexion->conexion->set_charset('utf8');
		$resultados = $this->conexion->conexion->query($sql);
		$arreglo    = array();
		while ($re  = $resultados->fetch_array(MYSQLI_BOTH)) {
			$arreglo[] = $re;
		}
		$this->conexion->cerrar();
		return $arreglo;
    }
}