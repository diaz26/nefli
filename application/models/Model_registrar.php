<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_registrar extends CI_Model {

  function __construct(){
    parent::__construct();

  }

  public function addUser($info)
  {
    $this->db->insert('user',$info);
    return $this->db->insert_id();
  }
}
