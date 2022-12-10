<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cMascota extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->helper("url");
    $this->load->model("mMascota");
  }

	public function index(){
    $mascotas = $this->mMascota->obtenerTodo()->result();
    $data = array(
      "name" => "Mascotas",
      "title" => "Mascotas",
      "mascotas" => $mascotas
    );
    $this->load->view("mascotas", $data);
	}

  public function crear(){
    $data = array(
      "name" => "Crear nueva mascota",
      "title" => "Crear"
    );
    $this->load->view("crear", $data);
  }

  public function insertar(){
    if(isset($_POST['btnAgregar'])){
      $mascota = array(
        "nombre" => $this->input->post("nombre"),
        "descripcion" => $this->input->post("descripcion")
      );
      $this->mMascota->agregar($mascota);
      redirect("index.php/cMascota/index");
    }
  }

  public function editar($id){
    $mascota = $this->mMascota->obtenerPorId($id)->row();
    $data = array(
      "name" => "Editar mascota",
      "title" => "Detalle mascota",
      "mascota" => $mascota
    );
    $this->load->view("detalle", $data);
  }

  public function actualizar($id){
    if(isset($_POST['btnEditar'])){
      $mascota = array(
        "nombre"=> $this->input->post("nombre"),
        "descripcion" => $this->input->post("descripcion")
      );
      $this->mMascota->modificar($id, $mascota);
      redirect("index.php/cMascota/index");
    }
  }

  public function eliminar($id){
    $this->mMascota->eliminar($id);
    redirect("index.php/cMascota/index");
  }

}
