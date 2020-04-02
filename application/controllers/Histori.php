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
		$data['asp'] = $this->a->getASP('1')->result();
		$this->load->view('dashboard', $data);
	}
	public function saran()
	{
		$data['main_view'] = 'histori_saran';
		$data['hsr'] = $this->a->getW('saran', 'STATUS', '1')->result();
		$this->load->view('dashboard', $data);
	}
	public function log()
	{
		$data['main_view'] = 'log';
		$data['log'] = $this->a->get('log')->result();
		$this->load->view('dashboard', $data);
	}

	public function del_haspi()
	{
		$dt = $this->input->post('pilih');
		$jl = count($dt);

		for ($i = 0; $i < $jl; $i++) {
			$this->a->delete('ASP_ID', $dt[$i], 'aspirasi');
		}

		redirect('Histori/aspirasi');
	}

	public function del_hasran()
	{
		$dt = $this->input->post('pilih');
		$jl = count($dt);
		if($dt == 'dt'){
			
		}
		for ($i = 0; $i < $jl; $i++) {
			$this->a->delete('SARAN_ID', $dt[$i], 'saran');
		}

		redirect('Histori/saran');
	}

	public function del_log()
	{
		$dt = $this->input->post('pilih');
		$jl = count($dt);

		for ($i = 0; $i < $jl; $i++) {
			$this->a->delete('LOG_ID', $dt[$i], 'log');
		}

		redirect('Histori/log');
	}
}

/* End of file Histori.php */
/* Location: ./application/controllers/Histori.php */
