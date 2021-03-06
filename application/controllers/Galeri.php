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
		$data['gal'] = $this->a->get('galeri')->result();
		$this->load->view('dashboard', $data);
	}
	public function ins_galeri()
	{
		//$id = $this->session->userdata('auth');
		$acara = $this->input->post('namaacara');
		$komisi = $this->input->post('komisi');

		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		
		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('gambar')) {
			$error = array('error' => $this->upload->display_errors());
			var_dump($error);
		} else {
			$upload_data = $this->upload->data();
			$ins = array(
				'KONTEN' => $acara,
				'KOMISI' => $komisi,
				'GAL_NAMA' => $upload_data['file_name'],
			);
			$this->a->insert('galeri', $ins);
			redirect('galeri', 'refresh');
		}
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
