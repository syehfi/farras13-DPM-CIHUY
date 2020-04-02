<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Aspirasi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('admin_model', 'a');
	}

	public function index()
	{
		$data['main_view'] = 'aspirasi';
		$data['asp'] = $this->a->getASP('0')->result();
		$this->load->view('dashboard', $data);
	}

	public function del_aspirasi()
	{
		$dt = $this->input->post('pilih');
		$jl = count($dt);

		for ($i = 0; $i < $jl; $i++) {
			$this->a->delete('ASP_ID', $dt[$i], 'aspirasi');
		}

		redirect('aspirasi');
	}
}

/* End of file Aspirasi.php */
/* Location: ./application/controllers/Aspirasi.php */
