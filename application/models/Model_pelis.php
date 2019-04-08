<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_pelis extends CI_Model {

  function __construct(){
    parent::__construct();

  }

  public function consultPelis()
  {
    $sql="SELECT * from peliculas";
    $query=$this->db->query($sql);
    return $query->result();
  }
}
