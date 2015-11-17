<?php if (!defined("BASEPATH")) exit("No puede acceder directamente a este archivo");

class Conductores extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("conductores_model");
	}

	public function index()
	{
		if($this->session->userdata('logged_in'))
		{
			$conductores = $this->conductores_model->listar();
			$this->load->view("templates/header", array(
				"title" => "Listado de Conductores"
			) );
			$this->load->view("conductores/listado", array(
				"conductores" => $conductores
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
			$this->load->view("templates/header", array("title" => "Crear conductor"));

			$campo_licencia = array("1" => "C1", "2" => "C2", "3" => "C3");

			$campo_sexo = array(
						"1" => "M",
						"2" => "F");
						
						$dia = ""; $mes = ""; $anio = "";

						$conductor = new stdClass();
						$conductor->cedula = "";
						$conductor->nombres = "";
						$conductor->apellidos = "";
						$conductor->sexo = "";
						$conductor->tipo_licencia = "";
						$conductor->direccion = "";
						$conductor->barrio = "";
						$conductor->telefono = "";
						$conductor->email = "";
						$conductor->celular = "";
						$conductor->comentarios = "";
						$conductor->fecha_nacimiento = "";
						$conductor->fecha_vinculacion = "";
						$conductor->id = false;

						$datos = array(
							"conductor"=> $conductor,
							"campo_licencia" => $campo_licencia,
							"campo_sexo" => $campo_sexo);

							$this->load->view('conductores/formulario', $datos);

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
							}else{

								$conductor = $this->conductores_model->cargar($id);

								$campo_licencia = array(
									"1" => "C1", "2" => "C2", "3" => "C3");

									$campo_sexo = array(
										"1" => "M",
										"2" => "F");

										$datos = array(
											"conductor"=> $conductor,
											"campo_licencia" => $campo_licencia,
											"campo_sexo" => $campo_sexo);

											$this->load->view("templates/header", array(
												"title" => "Listado de conductores"
											) );

											$this->load->view('conductores/formulario',$datos);

											$this->load->view("templates/footer");
										}
									} else
									{
										redirect('login', 'refresh');
									}
								}

								public function guardar()
								{
									if($this->session->userdata('logged_in'))
									{
										$cedula=$this->input->post("cedula");
										$nombres=$this->input->post("nombres");
										$apellidos=$this->input->post("apellidos");
										$sexo=$this->input->post("sexo");
										$barrio=$this->input->post("barrio");
										$direccion=$this->input->post("direccion");
										$celular=$this->input->post("celular");
										$email=$this->input->post("email");
										$telefono=$this->input->post("telefono");
										$tipo_licencia=$this->input->post("tipo_licencia");
										$fecha_vinculacion=$this->input->post("fecha_vinculacion");
										$fecha_nacimiento=$this->input->post("fecha_nacimiento");
										$comentarios=$this->input->post("comentarios");
										$id=$this->input->post("id");
										if($id==false){
											$resultado=$this->conductores_model->guardar($cedula, $nombres, $apellidos,
											$sexo, $fecha_nacimiento, $fecha_vinculacion, $tipo_licencia, $barrio, $direccion,
											$celular, $telefono, $email, $comentarios);
										} else {
											$resultado=$this->conductores_model->actualizar($id, $cedula, $nombres, $apellidos,
											$sexo, $fecha_nacimiento, $fecha_vinculacion, $tipo_licencia, $barrio, $direccion,
											$celular, $telefono, $email, $comentarios);
										}
										//listado
										return redirect('conductores');
									} else
									{
										redirect('login', 'refresh');
									}
								}

								public function eliminar($id)
								{
									if($this->session->userdata('logged_in'))
									{
										$this->conductores_model->eliminar($id);
										return redirect('conductores');
									} else
									{
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

											$conductor = $this->conductores_model->cargar($id);

											$campo_licencia = array(
												"1" => "C1",
												"2" => "C2",
												"3" => "C3");

												$campo_sexo = array(
													"1" => "M",
													"2" => "F");

													$datos = array(
														"conductor"=> $conductor,
														"campo_licencia" => $campo_licencia,
														"campo_sexo" => $campo_sexo);

														$this->load->view("templates/header", array(
															"title" => "Perfil"
														) );

														$this->load->view('conductores/ver', $datos);

														$this->load->view("templates/footer");
													}
												} else
												{
													redirect('login', 'refresh');
												}
											}

										}
