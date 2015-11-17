<?php
Class usuarios_model extends CI_Model
{
	function login($nombre, $password)
	{
		$this->db->select('id, nombre, password');
		$this->db->from('usuarios');
		$this->db->where('nombre = ' . "'" . $nombre . "'");
		$this->db->where('password = ' . "'" . MD5($password) . "'");
		$this->db->limit(1);

		$query = $this->db->get();

		if($query->num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}

	public function listar(){
		$this->db->select("*");
		$this->db->from("usuarios");
		$retorno = $this->db->get();
		return $retorno->result_array();
	}

	public function cargar($id) {
		$this->db->select('*');
		$this->db->from("usuarios");
		$this->db->where("id", $id);
		$retorno = $this->db->get();
		return $retorno->row();
	}

	public function guardar($nombre, $password){
		return $this->db->insert("usuarios",array(
			"nombre" => $nombre, "password" => MD5($password)));
	}

	public function actualizar($id, $nombre, $password) {
		$this->db->select("*");
		$this->db->from("usuarios");
		$this->db->where("id<>",$id);
		$retorno = $this->db->get();
		$this->db->where("id",$id);
		$this->db->update("usuarios", array(
			"nombre" => $nombre, "password" => $password));
		return true;
	}

	public function eliminar($id){
		$this->db->where("id", $id);
		$this->db->delete("usuarios");
	}

}
?>
