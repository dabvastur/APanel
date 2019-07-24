<?php
// models/Users.php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Busqueda_model extends CI_Model 
{
    function __construct() 
    {
      parent::__construct();
    }
 
    public function getBusqueda($text) 
    {
        $this->db->like("Usuario", $text, "both");
        $this->db->or_like("Cadena", $text, "both");
        $query = $this->db->get("logs");
 
        if ($query->num_rows() > 0) 
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }

}