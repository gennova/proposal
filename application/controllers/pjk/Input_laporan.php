<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Input_laporan extends CI_Controller {

	public function __construct() {

		parent::__construct();
		if(!$this->session->userdata('logged_in')) {

	    	redirect('login', 'refresh');
	   	}
   		elseif($this->session->userdata('tingkatan') != "pjk" && $this->session->userdata('tingkatan') != "pjk") {

   		redirect('login', 'refresh');
	   	}
		$this->load->model('Input_model');
	}

	
	public function index() {

		$this->load->view('pjk/input_laporan');
		
	}

	
	public function tambah_proses() {
	$config['upload_path']          = './assets/image/';
                $config['allowed_types']        = 'gif|jpg|jpeg|png|pdf';
                $config['max_size']             = 10000;
                $config['max_width']            = 4068;
                $config['max_height']           = 2046;
    $data_upload;
    $data_upload2;
    $this->load->library('upload', $config);
	$this->load->library('form_validation');
	$this->form_validation->set_message('required', '%s Harus Diisi.');
	$this->form_validation->set_rules('judul', 'Judul', 'required');
	$this->form_validation->set_rules('nama_pjk', 'Nama PJK', 'required');
	$this->form_validation->set_rules('rincian_kegiatan', 'Rincian Kegiatan', 'required');
	$this->form_validation->set_rules('rincian_biaya', 'Rincian Biaya', 'required');
	$this->form_validation->set_rules('bukti_biaya', 'Bukti Biaya', 'required');
	if  ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());
                }else{
                        $data_upload = array('upload_data' => $this->upload->data());
                }
            if( ! $this->upload->do_upload('userfile2'))
                {
                        $error = array('error' => $this->upload->display_errors());
                }else{
                        $data_upload2 = array('upload_data' => $this->upload->data());                        
                }

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
				'file1' => $data_upload['file_name'],
				'file2' => $data_upload2['file_name'],

            );
			if($this->Input_model->tambah_laporan($data))
				redirect('pjk/laporan_terkirim');
		}

		redirect('pjk/laporan_terkirim');
	}

	public function do_upload()
        {
                $config['upload_path']          = './assets/image/';
                $config['allowed_types']        = 'gif|jpg|jpeg|png|pdf';
                $config['max_size']             = 10000;
                $config['max_width']            = 4068;
                $config['max_height']           = 2046;
                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form', $error);
                }else if( ! $this->upload->do_upload('userfile2'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        $this->load->view('upload_success', $data);
                }

        }

	

}
