<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('admin_model', 'a');
	}

	public function index()
	{
		$data['main_view'] = 'galeri';
		$data['glr'] = $this->a->get('galeri')->result();
		$this->load->view('dashboard', $data);
	}
	public function ins_galeri()
	{
		# code...
	}
	public function upd_galeri()
	{
		# code...
	}
	public function del_galeri()
	{
		# code...
	}
}

/* End of file Galeri.php */
/* Location: ./application/controllers/Galeri.php */
