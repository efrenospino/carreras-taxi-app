<?php if (!defined("BASEPATH")) exit("No puede acceder directamente a este archivo");

class Vehiculos extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("vehiculos_model");
	}

	public function index()
    {
		if($this->session->userdata('logged_in'))
		{
			$campo_tipo = array("1" => "Automovil", "2" => "Camioneta");
			$campo_estado = array("1" => "En circulacion", "2" => "En reparacion",
	                "3" => "Inmovilizado", "4" => "Multado");

			$vehiculos = $this->vehiculos_model->listar();
			$this->load->view("templates/header", array(
					"title" => "Listado de vehiculos"));
			$this->load->view("vehiculos/listado", array(
				"vehiculos" => $vehiculos, "campo_tipo" => $campo_tipo, "campo_estado" => $campo_estado));
			$this->load->view("templates/footer");
		} else{
			redirect('login', 'refresh');
		}
	}

	public function crear()
    {
		if($this->session->userdata('logged_in'))
		{
	     	$this->load->view("templates/header", array(
				"title" => "Crear vehiculo"));

	        $campo_color = array("1" => "Amarillo", "2" => "Azul", "3" => "Blanco", "4" => "Negro");

	        $campo_tipo = array("1" => "Automovil", "2" => "Camioneta");

	        $campo_marca = array("1" => "Chevrolet", "2" => "Hyundai", "3" => "Mazda",
	                "4" => "Daewoo", "5" => "JAC");

	        $campo_estado = array("1" => "En circulacion", "2" => "En reparacion",
	                "3" => "Inmovilizado", "4" => "Multado");

	     	$vehiculo = new stdClass();
	        $vehiculo->matricula = "";
	        $vehiculo->color = "";
	        $vehiculo->fecha_vinculacion = "";
	        $vehiculo->tipo = "";
	        $vehiculo->marca = "";
	        $vehiculo->modelo = "";
	        $vehiculo->estado = "";
	        $vehiculo->comentarios = "";

	        $vehiculo->id = false;

	        $datos = array(
	            "vehiculo"=> $vehiculo,"campo_color" => $campo_color,
	            "campo_tipo" => $campo_tipo, "campo_marca" => $campo_marca,
	            "campo_estado" => $campo_estado);

	        $this->load->view('vehiculos/formulario',$datos);

	        $this->load->view("templates/footer");
				} else{
			  	redirect('login', 'refresh');
			 	}
    }

    public function editar($id="0")
    {
		if($this->session->userdata('logged_in'))
		{
	        if ($id==0){
	            show_404();
	        }else{

	            $vehiculo = $this->vehiculos_model->cargar($id);

	            $campo_color = array("1" => "Amarillo", "2" => "Azul", "3" => "Blanco", "4" => "Negro");

	            $campo_tipo = array("1" => "Automovil", "2" => "Camioneta");

	            $campo_marca = array("1" => "Chevrolet", "2" => "Hyundai", "3" => "Mazda",
	                    "4" => "Daewoo", "5" => "JAC");

	            $campo_estado = array("1" => "En circulacion", "2" => "En reparacion",
	                    "3" => "Inmovilizado", "4" => "Multado");

	            $datos = array(
	                "vehiculo"=> $vehiculo,"campo_color" => $campo_color,
	                "campo_tipo" => $campo_tipo, "campo_marca" => $campo_marca,
	                "campo_estado" => $campo_estado);

	            $this->load->view("templates/header", array(
					"title" => "Listado de vehiculos"
				) );

	            $this->load->view('vehiculos/formulario',$datos);

	            $this->load->view("templates/footer");
	        }
				} else{
			  	redirect('login', 'refresh');
			 	}
    }

    public function guardar()
    {
			if($this->session->userdata('logged_in'))
			{
				$matricula=$this->input->post("matricula");
		    $color=$this->input->post("color");
		    $fecha_vinculacion=$this->input->post("fecha_vinculacion");
		    $tipo=$this->input->post("tipo");
		    $estado=$this->input->post("estado");
		    $comentarios=$this->input->post("comentarios");
				$marca=$this->input->post("marca");
				$modelo=$this->input->post("modelo");
	      $id=$this->input->post("id");
	      if($id==false){
	          $resultado=$this->vehiculos_model->guardar($matricula, $color, $fecha_vinculacion,
						$tipo, $marca, $modelo, $estado, $comentarios);
	      } else {
	          $resultado=$this->vehiculos_model->actualizar($id, $matricula, $color, $fecha_vinculacion,
								$tipo, $marca, $modelo, $estado, $comentarios);
	      }
	      //listado
	      return redirect('vehiculos');
			} else{
		  	redirect('login', 'refresh');
		 	}
	}

    public function eliminar($id)
    {
			if($this->session->userdata('logged_in'))
			{
		    $this->vehiculos_model->eliminar($id);
		    return redirect('vehiculos');
			} else{
		  	redirect('login', 'refresh');
		 	}
	  }

    public function perfil($id="0")
    {
		if($this->session->userdata('logged_in'))
		{
	        if ($id==0){
	            show_404();
	        } else {

	            $vehiculo = $this->vehiculos_model->cargar($id);

	            $campo_color = array("1" => "Amarillo", "2" => "Azul", "3" => "Blanco", "4" => "Negro");

	            $campo_tipo = array("1" => "Automovil", "2" => "Camioneta");

	            $campo_marca = array("1" => "Chevrolet", "2" => "Hyundai", "3" => "Mazda",
	                    "4" => "Daewoo", "5" => "JAC");

	            $campo_estado = array("1" => "En circulacion", "2" => "En reparacion",
	                    "3" => "Inmovilizado", "4" => "Multado");

	            $datos = array(
	                "vehiculo"=> $vehiculo,"campo_color" => $campo_color,
	                "campo_tipo" => $campo_tipo, "campo_marca" => $campo_marca,
	                "campo_estado" => $campo_estado);

	            $this->load->view("templates/header", array(
	                "title" => "Perfil"));

	            $this->load->view('vehiculos/ver', $datos);

	            $this->load->view("templates/footer");
	        }
			} else{
		  	redirect('login', 'refresh');
		 	}
    }


}
