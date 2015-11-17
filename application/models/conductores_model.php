<?php if (!defined("BASEPATH")) exit("No puede acceder directamente a este archivo");

class conductores_model extends CI_Model {

	public function listar(){
		$this->db->select("id, cedula, nombres, apellidos, direccion, celular");
		$this->db->from("conductores");
		$retorno = $this->db->get();
		return $retorno->result_array();
	}

	public function cargar($id) {
		$this->db->select('*');
		$this->db->from("conductores");
		$this->db->where("id", $id);
		$retorno = $this->db->get();
		return $retorno->row();
	}

	public function guardar($cedula, $nombres, $apellidos, $sexo, $fecha_nacimiento,
		$fecha_vinculacion, $tipo_licencia, $barrio, $direccion, $celular, $telefono, $email, $comentarios){
		return $this->db->insert("conductores",array(
			"cedula" => $cedula,
			"nombres" => $nombres,
			"apellidos" => $apellidos,
			"sexo" => $sexo,
			"tipo_licencia" => $tipo_licencia,
			"barrio" => $barrio,
			"direccion" => $direccion,
			"celular" => $celular,
			"telefono" => $telefono,
			"email" => $email,
			"fecha_vinculacion" => $fecha_vinculacion,
			"fecha_nacimiento" => $fecha_nacimiento,
			"comentarios" => $comentarios
			));
	}

	public function actualizar($id, $cedula, $nombres, $apellidos, $sexo, $fecha_nacimiento,
		$fecha_vinculacion, $tipo_licencia, $barrio, $direccion, $celular, $telefono, $email, $comentarios){
		$this->db->select("*");
		$this->db->from("conductores");
		$this->db->where("id<>",$id);
		$retorno = $this->db->get();
		$this->db->where("id",$id);
		$this->db->update("conductores", array(
			"cedula" => $cedula,
			"nombres" => $nombres,
			"apellidos" => $apellidos,
			"sexo" => $sexo,
			"tipo_licencia" => $tipo_licencia,
			"barrio" => $barrio,
			"direccion" => $direccion,
			"celular" => $celular,
			"telefono" => $telefono,
			"email" => $email,
			"fecha_vinculacion" => $fecha_vinculacion,
			"fecha_nacimiento" => $fecha_nacimiento,
			"comentarios" => $comentarios
			));
		return true;
	}

	public function eliminar($id){
		$this->db->where("id", $id);
		$this->db->delete("conductores");
	}

}
