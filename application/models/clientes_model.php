<?php if (!defined("BASEPATH")) exit("No puede acceder directamente a este archivo");

class clientes_model extends CI_Model {

	public function listar(){
		$this->db->select("id, documento, nombres, apellidos, direccion, celular");
		$this->db->from("clientes");
		$retorno = $this->db->get();
		return $retorno->result_array();
	}

	public function cargar($id) {
		$this->db->select('*');
		$this->db->from("clientes");
		$this->db->where("id", $id);
		$retorno = $this->db->get();
		return $retorno->row();
	}

	public function guardar($tipo_documento, $documento, $nombres, $apellidos, $sexo,
		$barrio, $direccion, $celular, $telefono, $email){
		return $this->db->insert("clientes",array(
			"tipo_documento" => $tipo_documento,
			"documento" => $documento,
			"nombres" => $nombres,
			"apellidos" => $apellidos,
			"sexo" => $sexo,
			"barrio" => $barrio,
			"direccion" => $direccion,
			"celular" => $celular,
			"telefono" => $telefono,
			"email" => $email
			));
	}

	public function actualizar($id, $tipo_documento, $documento, $nombres, $apellidos, $sexo,
		$barrio, $direccion, $celular, $telefono, $email) {
		$this->db->select("*");
		$this->db->from("clientes");
		$this->db->where("id<>",$id);
		$retorno = $this->db->get();
		$this->db->where("id",$id);
		$this->db->update("clientes", array(
			"tipo_documento" => $tipo_documento,
			"documento" => $documento,
			"nombres" => $nombres,
			"apellidos" => $apellidos,
			"sexo" => $sexo,
			"barrio" => $barrio,
			"direccion" => $direccion,
			"celular" => $celular,
			"telefono" => $telefono,
			"email" => $email
			));
		return true;
	}

	public function eliminar($id){
		$this->db->where("id", $id);
		$this->db->delete("clientes");
	}

}
