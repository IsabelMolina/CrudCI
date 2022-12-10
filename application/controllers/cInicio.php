<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cInicio extends CI_Controller {
 
  function __construct(){
    parent::__construct();
    $this->load->helper('url');
  }

	public function index(){
    $data = array(
      "name" => "Index",
      "title" => "Inicio"
    );
		$this->load->view("index", $data);
	}

  public function servicios(){
    $data = array(
      "name" => "Servicios",
      "title" => "Servicios"
    );
	  $this->load->view("servicios", $data);
  }
}
