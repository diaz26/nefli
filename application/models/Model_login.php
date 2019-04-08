<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_login extends CI_Model {

  function __construct(){
    parent::__construct();

  }

  public function consultaUser($id)
  {
    $sql="SELECT * from user where id='$id'";
    $query=$this->db->query($sql);
    return $query->row();
  }
}
