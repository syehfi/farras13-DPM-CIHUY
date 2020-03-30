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
		$tabel = 'saran';
		$joinTabel = "users";
		$joinOn = "users.NIM = saran.NIM";
		$where = null;
		$whereClause = null;
		$attr = "saran.SARAN_ID, users.NAMA, saran.NIM, saran.SARAN, saran.DATE";
		$data['srn'] = $this->a->getJoinWhere($tabel, $joinTabel, $joinOn, $where, $whereClause, $attr)->result();
		$this->load->view('dashboard', $data);
	}

	public function handleAllAction()
	{
		if ($_POST['request'] == 'delete') {
			$this->del_saran();
		} else if ($_POST['request'] == 'print') {
			$this->print_saran();
		}
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
	public function print_saran()
	{
		$checkedData = $this->input->post_get('pilih');
		if (!empty($checkedData)) {
			foreach ($checkedData as $key) {
				$data[] = $key;
			}
			$this->printExecutor($data);
			redirect('saran');
		}
	}
	public function printExecutor($data)
	{
		foreach ($data as $key) {
			$tabel = 'saran';
			$joinTabel = "users";
			$joinOn = "users.NIM = saran.NIM";
			$where = "saran.SARAN_ID";
			$whereClause = $key;
			$attr = "saran.SARAN_ID, users.NAMA, saran.NIM, saran.SARAN, saran.DATE";
			$saranData = $this->a->getJoinWhere($tabel, $joinTabel, $joinOn, $where, $whereClause, $attr)->result();
			foreach ($saranData as $key) {
				$data['dataSaran'] = $key;
				$this->load->library('pdf');
				$this->pdf->setPaper('A4', 'potrait');
				$this->pdf->filename = "Saran " . $key->NAMA;
				$this->pdf->load_view('cetak_saran', $data);
			}
		}
	}
}

/* End of file Saran.php */
/* Location: ./application/controllers/Saran.php */
