<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pet extends CI_Controller {

    function __construct(){

        parent::__construct();
    
        $this->load->helper("url");
        $this->load->library("form_validation"); 
        $this->load->model("Pet_model");

    }

    public function index(){

        $pets = $this->Pet_model->getAll()->result();

        $this->load->view("template/head", ["title" => "Mascotas"]);        
        $this->load->view("pets/index", ["pets" => $pets]);
        $this->load->view("template/foot");

	}

    public function create(){

        $this->load->view("template/head", ["title" => "Crear Mascota"]); 
        $this->load->view("pets/create");
        $this->load->view("template/foot");

    }

    public function insert(){
        $config = [
            ['field' => 'name', 'label' => 'Nombre', 'rules' => 'required'],
            ['field' => 'description', 'label' => 'Descripcion', 'rules' => 'required']
        ];
    
        $this->form_validation->set_rules($config);

        if($this->form_validation->run()  ==  FALSE){ 
          redirect("index.php/pet/create");
        } 

        $pet = [
            "name" => $this->input->post("name"),
            "description" => $this->input->post("description")
        ];    

        $this->Pet_model->insert($pet);

        redirect("index.php/pet/index");

    }

    public function edit($id){

        $pet = $this->Pet_model->getOne($id)->row();
        
        if(!$pet){
          show_404();
        }

        $this->load->view("template/head", ["title" => "Editar Mascota"]); 
        $this->load->view("pets/edit", ["pet" => $pet]);
        $this->load->view("template/foot");

    }
    
    public function update($id){
        $config = [
            ['field' => 'name', 'label' => 'Nombre', 'rules' => 'required'],
            ['field' => 'description', 'label' => 'Descripcion', 'rules' => 'required']
        ];
    
        $this->form_validation->set_rules($config);

        if($this->form_validation->run()  ==  FALSE){ 
          redirect("index.php/pet/edit");
        } 

        $pet = $this->Pet_model->getOne($id)->row();
        
        if(!$pet){
          show_404();
        }

        $pet = [ 
            "name"=> $this->input->post("name"),
            "description" => $this->input->post("description")
        ];

        $this->Pet_model->update($id, $pet);

        redirect("index.php/pet/index");
        
    }
    
    public function delete($id){

        $pet = $this->Pet_model->getOne($id)->row();
        
        if(!$pet){
          show_404();
        }
        
        $this->Pet_model->delete($id);
   
        redirect("index.php/pet/index");
    
    }

}
