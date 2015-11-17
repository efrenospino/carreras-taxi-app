<?php if (!defined("BASEPATH")) exit("No puede acceder directamente a este archivo");

class Servicios extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("servicios_model");
		$this->load->model("clientes_model");
		$this->load->model("conductores_model");
		$this->load->model("vehiculos_model");
	}

	public function index()
	{
		if($this->session->userdata('logged_in'))
		{
			$servicios = $this->servicios_model->listar();
			$campo_estado = array("1" => "En curso",
			"2" => "Finalizada", "3" => "Cancelada");
			$this->load->view("templates/header", array(
				"title" => "Listado de servicios"));

				$this->load->view("servicios/listado", array("servicios" => $servicios,
				"campo_estado" => $campo_estado));
				$this->load->view("templates/footer");
			} else {
				redirect('login', 'refresh');
			}
		}

		public function recorrer($arreglo, $valores) {
			$i = 0;
			foreach ($arreglo as $key => $value) {
				$resultado[(int)$value["id"]] = $value[$valores];
			}
			return $resultado;
		}

		public function crear()
		{
			if($this->session->userdata('logged_in'))
			{
				$clientes = $this->recorrer($this->clientes_model->listar(), "documento");
				$conductores = $this->recorrer($this->conductores_model->listar(), "cedula");
				$vehiculos = $this->recorrer($this->vehiculos_model->listar(), "matricula");

				$campo_estado = array(
					"1" => "En curso",
					"2" => "Finalizada",
					"3" => "Cancelada");

					$this->load->view("templates/header", array(
						"title" => "Crear servicio"));

						$servicio = new stdClass();
						$servicio->direccion_destino = "";
						$servicio->cliente = "";
						$servicio->conductor = "";
						$servicio->vehiculo = "";
						$servicio->estado = "";
						$servicio->monto = "";
						$servicio->id = false;

						$datos = array(
							"servicio" => $servicio, "clientes" => $clientes,
							"conductores" => $conductores, "vehiculos" => $vehiculos,
							"campo_estado" => $campo_estado);

							$this->load->view('servicios/formulario',$datos);

							$this->load->view("templates/footer");
						} else {
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

								$servicio = $this->servicios_model->cargar($id);

								$clientes = $this->recorrer($this->clientes_model->listar(), "documento");
								$conductores = $this->recorrer($this->conductores_model->listar(), "cedula");
								$vehiculos = $this->recorrer($this->vehiculos_model->listar(), "matricula");

								$campo_estado = array(
									"1" => "En curso",
									"2" => "Finalizada",
									"3" => "Cancelada");

									$datos = array(
										"servicio" => $servicio, "clientes" => $clientes,
										"conductores" => $conductores, "vehiculos" => $vehiculos,
										"campo_estado" => $campo_estado);

										$this->load->view("templates/header", array(
											"title" => "Editar transaccion"
										));

										$this->load->view('servicios/formulario',$datos);

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
									$direccion_destino=$this->input->post("direccion_destino");
									$cliente=$this->input->post("cliente");
									$conductor=$this->input->post("conductor");
									$vehiculo=$this->input->post("vehiculo");
									$estado=$this->input->post("estado");
									$monto=$this->input->post("monto");
									$id=$this->input->post("id");
									if($id==false){
										$resultado=$this->servicios_model->guardar($direccion_destino, $cliente,
										$conductor, $vehiculo, $estado, $monto);
									} else {
										$resultado=$this->servicios_model->actualizar($id, $direccion_destino, $cliente,
										$conductor, $vehiculo, $estado, $monto);
									}
									//listado
									return redirect('servicios');
								} else {
									redirect('login', 'refresh');
								}
							}

							public function eliminar($id)
							{
								if($this->session->userdata('logged_in'))
								{
									$this->servicios_model->eliminar($id);
									return redirect('servicios');
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
										$servicio = $this->servicios_model->cargar($id);
										if ($servicio===null) {
											show_404();
										} else {
											$vehiculo = $this->vehiculos_model->cargar($servicio->vehiculo);
											$conductor = $this->conductores_model->cargar($servicio->conductor);
											$cliente = $this->clientes_model->cargar($servicio->cliente);
											$campo_color = array("1" => "Amarillo", "2" => "Azul",
											"3" => "Blanco", "4" => "Negro");
											$campo_tipo = array("1" => "Automovil", "2" => "Camioneta");
											$campo_marca = array("1" => "Chevrolet", "2" => "Hyundai", "3" => "Mazda",
											"4" => "Daewoo", "5" => "JAC");
											$campo_estado = array(
												"1" => "En curso",
												"2" => "Finalizada",
												"3" => "Cancelada");


												$datos = array("servicio" => $servicio, "cliente" => $cliente,
												"conductor" => $conductor, "vehiculo" => $vehiculo,
												"campo_estado" => $campo_estado, "campo_tipo" => $campo_tipo,
												"campo_color" => $campo_color, "campo_marca" => $campo_marca);

												$this->load->view("templates/header", array(
													"title" => "Perfil"
												) );

												$this->load->view('servicios/ver', $datos);

												$this->load->view("templates/footer");
											}
										}
									} else {
										redirect('login', 'refresh');
									}
								}

							}
