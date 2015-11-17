<?php if (!defined("BASEPATH")) exit("No puede acceder directamente a este archivo");

class servicios_model extends CI_Model {

	public function listar(){
		$this->db->select("id, direccion_destino, estado, monto");
		$this->db->from("servicios");
		$retorno = $this->db->get();
		return $retorno->result_array();
	}

	public function cargar($id) {
		$this->db->select('*');
		$this->db->from("servicios");
		$this->db->where("id", $id);
		$retorno = $this->db->get();
		return $retorno->row();
	}

	public function guardar($direccion_destino, $cliente, $conductor, $vehiculo, $estado, $monto){
		return $this->db->insert("servicios",array(
			"direccion_destino" => $direccion_destino,
			"cliente" => $cliente,
			"conductor" => $conductor,
			"vehiculo" => $vehiculo,
			"estado" => $estado,
			"monto" => $monto
			));
	}

	public function actualizar($id, $direccion_destino, $cliente, $conductor, $vehiculo, $estado, $monto) {
		$this->db->select("*");
		$this->db->from("servicios");
		$this->db->where("id<>",$id);
		$retorno = $this->db->get();
		$this->db->where("id",$id);
		$this->db->update("servicios", array(
			"direccion_destino" => $direccion_destino,
			"cliente" => $cliente,
			"conductor" => $conductor,
			"vehiculo" => $vehiculo,
			"estado" => $estado,
			"monto" => $monto,
			));
		return true;
	}

	public function eliminar($id){
		$this->db->where("id", $id);
		$this->db->delete("servicios");
	}

}
