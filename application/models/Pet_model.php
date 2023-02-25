<?php
  class Pet_model extends CI_Model{

    function __construct(){
      parent::__construct();
      $this->load->database();
    }

    public function insert($pet){
      $this->db->insert("pet", $pet);
    }

    public function getAll(){
      $pets = $this->db->get("pet");
      return $pets;
    }

    public function getOne($id){
      $this->db->where("id", $id);
      $pet = $this->db->get("pet");
      return $pet;
    }

    public function update($id, $pet){
      $this->db->where("id", $id);
      $this->db->update("pet", $pet);
    }

    public function delete($id){
      $this->db->where("id", $id);
      $this->db->delete("pet");
    }

  }

?>