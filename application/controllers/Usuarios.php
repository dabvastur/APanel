<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Usuarios extends CI_Controller {
    public function __construct()
  {
        parent::__construct();
 
        // load Pagination library
        $this->load->library('pagination');
         
        // load URL helper
        $this->load->helper('url');
    }
     
    public function index() 
    {
        // load db and model
        $this->load->database();
        $this->load->model('Users');
 
        // init params
        $params = array();
        $limit_per_page = 10;
        $start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $total_records = $this->Users->get_total();
 
        if ($total_records > 0) 
        {
            // get current page records
            $params["results"] = $this->Users->get_current_page_records($limit_per_page, $start_index);
             
            $config['base_url'] = base_url() . 'usuarios/index';
            $config['total_rows'] = $total_records;
            $config['per_page'] = $limit_per_page;
            $config["uri_segment"] = 3;
             
            $this->pagination->initialize($config);
             
            // build paging links
            $params["links"] = $this->pagination->create_links();
        }
         
        $this->load->view("templates/header");
        
        $this->load->view('usuarios/list', $params);
        $this->load->view("templates/footer");
    }
     
    
}