<?php if (!defined("BASEPATH")) exit("No puede acceder directamente a este archivo");

class usuarios extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("usuarios_model");
	}

	public function index()
    {
		if($this->session->userdata('logged_in'))
    	{
			$usuarios = $this->usuarios_model->listar();
			$this->load->view("templates/header", array(
					"title" => "Listado de usuarios"
				) );
			$this->load->view("usuarios/listado", array(
					"usuarios" => $usuarios
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
    			"title" => "Crear usuario"));

         	$usuario = new stdClass();
            $usuario->nombre = "";
            $usuario->password = "";
            $usuario->id = false;

            $datos = array(
                "usuario"=> $usuario);

            $this->load->view('usuarios/formulario',$datos);

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

                $usuario = $this->usuarios_model->cargar($id);

                $datos = array(
                    "usuario"=> $usuario);

                $this->load->view("templates/header", array(
    				"title" => "Listado de usuarios"
    			) );

                $this->load->view('usuarios/formulario',$datos);

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
            $nombre=$this->input->post("nombre");
            $password=$this->input->post("password");
            $id=$this->input->post("id");
            if($id==false){
                $resultado=$this->usuarios_model->guardar($nombre, $password);
            } else {
                $resultado=$this->usuarios_model->actualizar($id, $nombre, $password);
            }
            //listado
            return redirect('usuarios');
        } else {
            redirect('login', 'refresh');
        }

    }

    public function eliminar($id)
    {
        if($this->session->userdata('logged_in'))
    	{
            $this->usuarios_model->eliminar($id);
            return redirect('usuarios');
        } else {
            redirect('login', 'refresh');
        }
    }

}
