<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    private $model ='mwelcome';

	public function __construct(){
		parent:: __construct();
		$this->load->model($this->model);

	}

	public function  index()
	{
		$this->load->view('welcome_message');
	}

    public function listar(){
			$data['persona']= $this->{$this->model}->listar_personas();
             $this->load-> view('lista_productos',$data);
		}
  
}
