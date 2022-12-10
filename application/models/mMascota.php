<?php
  class mMascota extends CI_Model{

    function __construct(){
      parent::__construct();
      $this->load->database();
    }

    public function agregar($mascota){
      $insertado = $this->db->insert("mascota", $mascota);
      return $insertado;
    }

    public function obtenerTodo(){
      $mascotas = $this->db->get("mascota");
      return $mascotas;
    }

    public function obtenerPorId($id){
      $this->db->where("id", $id);
      $mascota = $this->db->get("mascota");
      return $mascota;
    }

    public function modificar($id, $mascota){
      $this->db->where("id", $id);
      $modificado = $this->db->update("mascota", $mascota);
      return $modificado;
    }

    public function eliminar($id){
      $this->db->where("id", $id);
      $eliminado = $this->db->delete("mascota");
      return $eliminado;
    }

  }

?>
