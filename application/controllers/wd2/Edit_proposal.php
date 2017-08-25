<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_proposal extends CI_Controller {

	public function __construct() {

		parent::__construct();
		if(!$this->session->userdata('logged_in')) {

	    	redirect('login', 'refresh');
	   	}
   		elseif($this->session->userdata('tingkatan') != "wd2" && $this->session->userdata('tingkatan') != "wd2") {

   		redirect('login', 'refresh');
	   	}
		$this->load->model('Input_model');
	}

	
	public function index() {

		if($query = $this->Input_model->get_data()) {
			$data['proposale'] = $query;
		}
		else
			$data['proposale'] = NULL;

		$this->load->view('wd2/edit_proposal', $data);

		
	}


	public function edit($id) {
		$this->load->model('Input_model');
		if($query = $this->Input_model->get_wd()) {
			$data['data_wd'] = $query;
		}
		else{
			$data['data_wd'] = NULL;
		}
		if($query = $this->Input_model->get_data_by_idproposal($id)) {
			$data['proposale'] = $query;
		}
		else
			$data['proposale'] = NULL;

		$this->load->view('wd2/edit_proposal', $data);
	}	
	
	public function tambah_proses() {
	$this->load->library('form_validation');
	$this->form_validation->set_message('required', '%s Harus Diisi.');
	$this->form_validation->set_rules('judul', 'Judul', 'required');
	$this->form_validation->set_rules('nama_pjk', 'Nama PJK', 'required');
	$this->form_validation->set_rules('rincian_kegiatan', 'Rincian Kegiatan', 'required');
	$this->form_validation->set_rules('rincian_biaya', 'Rincian Biaya', 'required');
	$this->form_validation->set_rules('bukti_biaya', 'Bukti Biaya', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->index();
		}
		else {
			$tgl = date("Y-m-d");
			$data = array(
				
				'judul' => $this->input->post('judul'),
				'nama_pjk' => $this->input->post('nama_pjk'),
				'rincian_kegiatan' => $this->input->post('rincian_kegiatan'),
				'rincian_biaya' => $this->input->post('rincian_biaya'),
				'bukti_biaya' => $this->input->post('bukti_biaya'),
				'tgl_input' => $tgl,

				);


			if($this->Input_model->tambah_laporan($data))
				redirect('pjk/data_kirim');
		}

	}

}
