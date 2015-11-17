<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class verificar extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->model('usuarios_model','',TRUE);
  }

  function index()
  {
    //This method will have the credentials validation
    $this->load->library('form_validation');

    $this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|xss_clean');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');

    if($this->form_validation->run() == FALSE)
    {
      //Field validation failed.  User redirected to login page
      $this->load->view('login');
    }
    else
    {
      //Go to private area
      redirect('home', 'refresh');
    }

  }

  function check_database($password)
  {
    //Field validation succeeded.  Validate against database
    $nombre = $this->input->post('nombre');

    //query the database
    $result = $this->usuarios_model->login($nombre, $password);

    if($result)
    {
      $sess_array = array();
      foreach($result as $row)
      {
        $sess_array = array(
          'id' => $row->id,
          'nombre' => $row->nombre
        );
        $this->session->set_userdata('logged_in', $sess_array);
      }
      return TRUE;
    }
    else
    {
      $this->form_validation->set_message('check_database', 'Invalid username or password');
      return false;
    }
  }
}
?>
