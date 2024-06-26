<?php
class mCalendar
{
	private $conexion;
	public function __construct()
	{
		require_once ('conexion.php');
		$this->conexion = new conexion();
		$this->conexion->conectar();
	}

	function update_event_modal($id, $action, $cal_fecha_inicio, $cal_fecha_fin, $cal_nombre_programa, $cal_descripcion_programa, $cal_link_reunion)
	{
		$sql = "CALL sp_v1_update_calendar_modal('$id', '$action', '$cal_fecha_inicio', '$cal_fecha_fin', '$cal_nombre_programa', '$cal_descripcion_programa', '$cal_link_reunion')";
		$this->conexion->conexion->set_charset('utf8');
		if ($this->conexion->conexion->query($sql)) {
			$this->conexion->cerrar();
			return true;
		} else {
			$this->conexion->cerrar();
			return false;
		}

	}

	function get_calendar_for_table()
	{
		$sql = "CALL sp_v1_get_calendar_for_table()";
		$this->conexion->conexion->set_charset('utf8');
		$resultados = $this->conexion->conexion->query($sql);
		$arreglo = array();
		while ($re = $resultados->fetch_array(MYSQLI_BOTH)) {
			$arreglo[] = $re;
		}
		$this->conexion->cerrar();
		return $arreglo;
	}

	function get_info_calendar($id)
	{
		$sql = "CALL sp_v1_get_info_calendar_by_idAsistencia($id)";
		$this->conexion->conexion->set_charset('utf8');
		$resultados = $this->conexion->conexion->query($sql);
		$arreglo = array();
		while ($re = $resultados->fetch_array(MYSQLI_BOTH)) {
			$arreglo[] = $re;
		}
		$this->conexion->cerrar();
		return $arreglo;
	}

	function get_ugel_by_dre($dre)
	{
		$sql = "CALL sp_v1_get_ugel_by_dre('$dre')";
		$this->conexion->conexion->set_charset('utf8');
		$resultados = $this->conexion->conexion->query($sql);
		$arreglo = array();
		while ($re = $resultados->fetch_array(MYSQLI_BOTH)) {
			$arreglo[] = $re;
		}
		$this->conexion->cerrar();
		return $arreglo;
	}

	function get_dre()
	{
		$sql = "CALL sp_v1_get_dre()";
		$this->conexion->conexion->set_charset('utf8');
		$resultados = $this->conexion->conexion->query($sql);
		$arreglo = array();
		while ($re = $resultados->fetch_array(MYSQLI_BOTH)) {
			$arreglo[] = $re;
		}
		$this->conexion->cerrar();
		return $arreglo;
	}

	function update_event($id, $new_start, $new_end)
	{
		$sql = "UPDATE tbl_calendar SET cal_fecha_inicio = '$new_start', cal_fecha_fin = '$new_end' WHERE id = $id";
		$this->conexion->conexion->set_charset('utf8');
		if ($this->conexion->conexion->query($sql)) {
			$this->conexion->cerrar();
			return true;
		} else {
			$this->conexion->cerrar();
			return false;
		}
	}

	function get_events_recents()
	{
		$sql = "CALL sp_v1_get_events_recents()";
		$this->conexion->conexion->set_charset('utf8');
		$resultados = $this->conexion->conexion->query($sql);
		$arreglo = array();
		while ($re = $resultados->fetch_array(MYSQLI_BOTH)) {
			$arreglo[] = $re;
		}
		$this->conexion->cerrar();
		return $arreglo;
	}

	function get_events()
	{
		$sql = "CALL sp_v1_get_events()";
		$this->conexion->conexion->set_charset('utf8');
		$resultados = $this->conexion->conexion->query($sql);
		$arreglo = array();
		while ($re = $resultados->fetch_array(MYSQLI_BOTH)) {
			$arreglo[] = $re;
		}
		$this->conexion->cerrar();
		return $arreglo;
	}

	function save_event($id, $cal_idArea, $cal_tipo_programa, $cal_nombre_programa, $cal_descripcion_programa, $cal_agenda, $cal_modalidad, $cal_cobertura, $cal_regiones, $cal_ugel, $cal_participantes, $cal_nro_participantes, $cal_fecha_inicio, $cal_fecha_fin, $cal_link_reunion, $cal_link_asistencia)
	{

		$sql = "INSERT INTO tbl_calendar VALUES ('$id', '$cal_idArea', '$cal_tipo_programa', '$cal_nombre_programa', '$cal_descripcion_programa', '$cal_agenda', '$cal_modalidad', '$cal_cobertura', '$cal_regiones', '$cal_ugel', '$cal_participantes', '$cal_nro_participantes', '$cal_fecha_inicio', '$cal_fecha_fin', '$cal_link_reunion', '$cal_link_asistencia',1)";
		$this->conexion->conexion->set_charset('utf8');
		if ($this->conexion->conexion->query($sql)) {
			$this->conexion->cerrar();
			return true;
		} else {
			$this->conexion->cerrar();
			return false;
		}

	}

	function get_areas_list()
	{
		$sql = "SELECT * FROM tbl_areas_diser";
		$this->conexion->conexion->set_charset('utf8');
		$resultados = $this->conexion->conexion->query($sql);
		$arreglo = array();
		while ($re = $resultados->fetch_array(MYSQLI_BOTH)) {
			$arreglo[] = $re;
		}
		$this->conexion->cerrar();
		return $arreglo;
	}
}