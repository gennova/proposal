<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status extends CI_Controller {

	public function __construct() {

		parent::__construct();
		if(!$this->session->userdata('logged_in')) {

	    	redirect('login', 'refresh');
	   	}
   		elseif($this->session->userdata('tingkatan') != "kajur_ts" && $this->session->userdata('tingkatan') != "kajur_ts") {

   		redirect('login', 'refresh');
	   	}
		$this->load->model('Input_model');
	}

	
	public function index() {
		$sessiondata = $this->session->userdata('id_user');
		if($query = $this->Input_model->get_data_pjk($sessiondata)) {
			$data['proposale'] = $query;
		}
		else
			$data['proposale'] = NULL;

		$this->load->view('kajur_ts/status_proposal',$data);
		
	}

	

}
