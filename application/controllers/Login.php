<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->model('model_login');
  }

  function ingresar($id){

		$result=$this->model_login->consultaUser($id);

		if(count($result)==1){

			$session=array(
				'ID'=> $result->id,
				'USUARIO'=> $result->user,
				'CONTRASENA'=> $result->pass,
				'NOMBRE'=> $result->nombre,
				'is_logged_in'=>TRUE ,
			);
			$this->session->set_userdata($session);
      redirect("home/cliente");
    }
	}
}
