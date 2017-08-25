<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekomendasi_rab extends CI_Controller {

	public function __construct() {

		parent::__construct();
		if(!$this->session->userdata('logged_in')) {

	    	redirect('login', 'refresh');
	   	}
   		elseif($this->session->userdata('tingkatan') != "admin" && $this->session->userdata('tingkatan') != "admin") {

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

		$this->load->view('admin/input_rekomendasi_rab',$data);
		
	}

	
	
	

}
