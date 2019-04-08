<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->model('model_pelis');
  }

  public function index()
  {
    $result['pelis']=$this->model_pelis->consultPelis();
    $this->load->view('view_home',$result);
  }

  public function cliente()
  {
    $result['pelis']=$this->model_pelis->consultPelis();
    $this->load->view('view_cliente',$result);
  }
}
