<?php if (!defined("BASEPATH")) exit("No puede acceder directamente a este archivo");

class vehiculos_model extends CI_Model {

	public function listar(){
		$this->db->select("id, matricula, tipo, estado");
		$this->db->from("vehiculos");
		$retorno = $this->db->get();
		return $retorno->result_array();
	}

	public function cargar($id) {
		$this->db->select('*');
		$this->db->from("vehiculos");
		$this->db->where("id", $id);
		$retorno = $this->db->get();
		return $retorno->row();
	}


	public function guardar($matricula, $color, $fecha_vinculacion,
		$tipo, $marca, $modelo, $estado, $comentarios){
		return $this->db->insert("vehiculos",array(
			"matricula" => $matricula,
			"color" => $color,
			"fecha_vinculacion" => $fecha_vinculacion,
			"tipo" => $tipo,
			"estado" => $estado,
			"marca" => $marca,
			"modelo" => $modelo,
			"comentarios" => $comentarios
			));
	}

	public function actualizar($id, $matricula, $color, $fecha_vinculacion,
		$tipo, $marca, $modelo, $estado, $comentarios){
		$this->db->select("*");
		$this->db->from("vehiculos");
		$this->db->where("id<>",$id);
		$retorno = $this->db->get();
		$this->db->where("id",$id);
		$this->db->update("vehiculos", array(
			"matricula" => $matricula,
			"color" => $color,
			"fecha_vinculacion" => $fecha_vinculacion,
			"tipo" => $tipo,
			"marca" => $marca,
			"modelo" => $modelo,
			"estado" => $estado,
			"comentarios" => $comentarios
			));
		return true;
	}

	public function eliminar($id){
		$this->db->where("id", $id);
		$this->db->delete("vehiculos");
	}

}
