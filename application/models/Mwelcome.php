<?php
defined('BASEPATH') OR exist ('No direct script access allowed');

class Mwelcome extends CI_Model
{
  public function listar_personas()
  {
  	  return $this->db->get('persona')->result();
	  # code...
  }
}
