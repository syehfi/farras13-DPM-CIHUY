<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peminjaman extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('admin_model', 'a');
	}
	
	public function index()
	{
		$data['main_view'] = 'barang';
		$this->load->view('dashboard', $data);
	}
	
	public function listPeminjaman()
	{
		$data['main_view'] = 'peminjaman';
		$this->load->view('dashboard', $data);
	}
	
	public function ins_peminjaman()
	{
		# code...
	}
	
	public function ins_barangP()
	{
		# code...
	}

	public function del_peminjaman()
	{
		# code...
	}
	
	public function del_barangP()
	{
		# code...
	}
	
	public function upd_peminjaman()
	{
		# code...
	}

	public function upd_barangP()
	{
		# code...
	}
}

/* End of file Peminjaman.php */
/* Location: ./application/controllers/Peminjaman.php */
