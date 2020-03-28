<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Histori extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('admin_model', 'a');
	}

	public function aspirasi()
	{
		$data['main_view'] = 'histori_aspirasi';
		$this->load->view('dashboard', $data);
	}
	public function saran()
	{
		$data['main_view'] = 'histori_saran';
		$this->load->view('dashboard', $data);
	}
	public function log()
	{
		$data['main_view'] = 'log';
		$this->load->view('dashboard', $data);
	}
}

/* End of file Histori.php */
/* Location: ./application/controllers/Histori.php */
