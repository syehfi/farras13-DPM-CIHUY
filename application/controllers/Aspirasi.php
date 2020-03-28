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
		$data['asp'] = $this->a->getASP()->result();
		$this->load->view('dashboard', $data);
	}

	public function handleAllAction()
	{
		if ($_POST['request'] == 'delete') {
			$this->del_aspirasi();
		} else if ($_POST['request'] == 'print') {
			$this->print_aspirasi();
		}
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
	public function print_aspirasi()
	{
		$checkedData = $this->input->post_get('pilih');

		if (!empty($checkedData)) {
			foreach ($checkedData as $checked) {
				$data[] = $checked;
			}
			$this->printExecutor($data);
			redirect('aspirasi');
		}
	}
	public function printExecutor($dataAspirasi)
	{
		$ct = count($dataAspirasi);
		for ($i = 0; $i < $ct; $i++) {
			$id = $dataAspirasi[$i];
			$dataInfo = $this->a->getASPById($id)->result_array();
			foreach ($dataInfo as $key) {
				$makerName = $key['NAMA'];
				$destination = $key['TUJUAN'];
			}
			$data['dataAspirasi'] = $dataInfo;
			$this->load->library('pdf');
			$this->pdf->setPaper('A4', 'potrait');
			$this->pdf->filename = "Aspirasi " . $makerName . " Untuk " . $destination;
			//Desain format laporannya belum aku buat, masih desain acak tapi work kok :)
			$this->pdf->load_view('cetak_aspirasi', $data);
		}
	}
}

/* End of file Aspirasi.php */
/* Location: ./application/controllers/Aspirasi.php */
