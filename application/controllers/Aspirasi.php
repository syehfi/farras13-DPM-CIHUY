<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Aspirasi extends CI_Controller {

    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('aspirasi/index');
        $this->load->view('template/footer');
        
    }

}

/* End of file Aspirasi.php */
