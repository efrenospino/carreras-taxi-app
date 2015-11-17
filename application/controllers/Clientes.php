<?php if (!defined("BASEPATH")) exit("No puede acceder directamente a este archivo");

class Clientes extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("clientes_model");
	}

	public function index()
    {
		if($this->session->userdata('logged_in'))
    	{
			$clientes = $this->clientes_model->listar();
			$this->load->view("templates/header", array(
					"title" => "Listado de Clientes"
				) );
			$this->load->view("clientes/listado", array(
					"clientes" => $clientes
				));
			$this->load->view("templates/footer");
		} else
    	{
      		redirect('login', 'refresh');
	   	}
	}

	public function crear()
    {
        if($this->session->userdata('logged_in'))
    	{
         	$this->load->view("templates/header", array(
    			"title" => "Crear cliente"));

            $campo_tipo_documento = array(
                "1" => "CC",
                "2" => "TI");

            $campo_sexo = array(
                "1" => "M",
                "2" => "F");

         	$cliente = new stdClass();
            $cliente->tipo_documento = "";
            $cliente->documento = "";
            $cliente->nombres = "";
            $cliente->apellidos = "";
            $cliente->sexo = "";
            $cliente->direccion = "";
            $cliente->barrio = "";
            $cliente->telefono = "";
            $cliente->email = "";
            $cliente->celular = "";
            $cliente->id = false;

            $datos = array(
                "cliente"=> $cliente,
                "campo_tipo_documento" => $campo_tipo_documento,
                "campo_sexo" => $campo_sexo);

            $this->load->view('clientes/formulario',$datos);

            $this->load->view("templates/footer");
        } else
        {
            redirect('login', 'refresh');
        }
    }

    public function editar($id="0")
    {
        if($this->session->userdata('logged_in'))
    	{
            if ($id==0){
                show_404();
            } else {

                $cliente = $this->clientes_model->cargar($id);

                $campo_tipo_documento = array(
                    "1" => "CC",
                    "2" => "TI");

                $campo_sexo = array(
                    "1" => "M",
                    "2" => "F");

                $datos = array(
                    "cliente"=> $cliente,
                    "campo_tipo_documento" => $campo_tipo_documento,
                    "campo_sexo" => $campo_sexo);

                $this->load->view("templates/header", array(
    				"title" => "Listado de clientes"
    			) );

                $this->load->view('clientes/formulario',$datos);

                $this->load->view("templates/footer");
            }
        } else {
            redirect('login', 'refresh');
        }
    }

    public function guardar()
    {
        if($this->session->userdata('logged_in'))
    	{
            $tipo_documento=$this->input->post("tipo_documento");
            $documento=$this->input->post("documento");
            $nombres=$this->input->post("nombres");
            $apellidos=$this->input->post("apellidos");
            $sexo=$this->input->post("sexo");
            $barrio=$this->input->post("barrio");
            $direccion=$this->input->post("direccion");
            $celular=$this->input->post("celular");
            $email=$this->input->post("email");
            $telefono=$this->input->post("telefono");
            $id=$this->input->post("id");
            if($id==false){
                $resultado=$this->clientes_model->guardar($tipo_documento, $documento,
                    $nombres, $apellidos, $sexo, $barrio, $direccion, $celular, $telefono, $email);
            } else {
                $resultado=$this->clientes_model->actualizar($id, $tipo_documento, $documento,
                    $nombres, $apellidos, $sexo, $barrio, $direccion, $celular, $telefono, $email);
            }
            //listado
            return redirect('clientes');
        } else {
            redirect('login', 'refresh');
        }

    }

    public function eliminar($id)
    {
        if($this->session->userdata('logged_in'))
    	{
            $this->clientes_model->eliminar($id);
            return redirect('clientes');
        } else {
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

                $cliente = $this->clientes_model->cargar($id);

                $campo_tipo_documento = array(
                    "1" => "CC",
                    "2" => "TI");

                $campo_sexo = array(
                    "1" => "M",
                    "2" => "F");

                $datos = array(
                    "cliente"=> $cliente,
                    "campo_tipo_documento" => $campo_tipo_documento,
                    "campo_sexo" => $campo_sexo);

                $this->load->view("templates/header", array(
                    "title" => "Perfil"
                ) );

                $this->load->view('clientes/ver', $datos);

                $this->load->view("templates/footer");
            }
        } else {
            redirect('login', 'refresh');
        }
    }

}
