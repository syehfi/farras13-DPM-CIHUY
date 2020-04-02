<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Saran extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('admin_model', 'a');
	}

	public function index()
	{
		$data['main_view'] = 'saran';
		$data['srn'] = $this->a->getW('saran', 'STATUS', '0')->result();
		$this->load->view('dashboard', $data);
	}

	public function del_saran()
	{
		$dt = $this->input->post('pilih');
		$jl = count($dt);

		for ($i = 0; $i < $jl; $i++) {
			$this->a->delete('SARAN_ID', $dt[$i], 'saran');
		}

		redirect('saran');
	}
}

/* End of file Saran.php */
/* Location: ./application/controllers/Saran.php */
