<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrar extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->model('model_registrar');
  }

  public function add()
  {
    $datos=array(
      'nombre'=>$this->input->post('name'),
      'user'=>$this->input->post('user'),
      'pass'=>$this->input->post('pass'),
    );
    $id_user=$this->model_registrar->addUser($datos);
    redirect("login/ingresar/$id_user");
  }

}
