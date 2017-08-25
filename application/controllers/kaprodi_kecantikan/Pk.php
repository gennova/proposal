<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pk extends CI_Controller {

	public function __construct() {

		parent::__construct();
		if(!$this->session->userdata('logged_in')) {

	    	redirect('login', 'refresh');
	   	}
   		elseif($this->session->userdata('tingkatan') != "kaprodi_kecantikan" && $this->session->userdata('tingkatan') != "kaprodi_kecantikan") {

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

		$this->load->view('kaprodi_kecantikan/cetak_pk',$data);
		
	}

	
	
}
