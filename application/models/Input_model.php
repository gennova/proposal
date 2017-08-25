<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Input_model extends CI_Model {

	function __construct() {

		parent::__construct();
		
	}

	function get_wd() {
		$this->db->select('*');
		$query = $this->db->get('wd');
		return $query->result();
	}
	function get_jurusan() {
		$this->db->select('*');
		$query = $this->db->get('jurusan');
		return $query->result();
	}
	function get_prodi() {
		$this->db->select('*');
		$query = $this->db->get('prodi');
		return $query->result();
	}
	function update($id,$data) {
		$this->db->where('id_proposal',$id);
		$this->db->update('proposal',$data);
	}

function tambah($data) {
		$this->db->insert('proposal',$data);
		return;
	}

	function tambah_laporan($data) {
		$this->db->insert('laporan',$data);
		return;
	}

	function get_data() {

		$this->db->select('*');
		$this->db->from('proposal');
		$this->db->join('wd','proposal.jenis_proposal = wd.id_wd');
		$query = $this->db->get();
		return $query->result();
	}

	function get_proposal_by_idproposal($id_proposal) {

		$this->db->select('*');
		$this->db->from('proposal');
		$this->db->where('id_proposal = "'.$id_proposal.'"');
		$query = $this->db->get();
		return $query->result();
	}

	function get_data_by_idproposal($id_proposal) {

		$this->db->select('*');
		$this->db->from('proposal');
		$this->db->join('wd','proposal.jenis_proposal = wd.id_wd');
		$this->db->where('proposal.id_proposal = "'.$id_proposal.'"');
		$query = $this->db->get();
		return $query->result();
	}

	function get_data_pjk($id_user) {

		$this->db->select('*');
		$this->db->from('proposal');
		$this->db->join('wd','proposal.jenis_proposal = wd.id_wd');
		$this->db->where('proposal.id_user = "'.$id_user.'"');
		$query = $this->db->get();
		return $query->result();
	}

	function get_data_kajur_elektro($jurusan) {

		$this->db->select('*');
		$this->db->from('proposal');
		$this->db->join('wd','proposal.jenis_proposal = wd.id_wd');
		$this->db->where('proposal.jurusan = "'.$jurusan.'"');
		$query = $this->db->get();
		return $query->result();
	}

	function get_data_wd1() {

		$this->db->select('*');
		$this->db->from('proposal');
		$this->db->join('wd','proposal.jenis_proposal = wd.id_wd');
		$this->db->where('wd.id_wd=1');
		$query = $this->db->get();
		return $query->result();
	}

	function get_data_wd2() {

		$this->db->select('*');
		$this->db->from('proposal');
		$this->db->join('wd','proposal.jenis_proposal = wd.id_wd');
		$this->db->where('wd.id_wd=2');
		$query = $this->db->get();
		return $query->result();
	}

	function get_data_wd3() {

		$this->db->select('*');
		$this->db->from('proposal');
		$this->db->join('wd','proposal.jenis_proposal = wd.id_wd');
		$this->db->where('wd.id_wd=3');
		$query = $this->db->get();
		return $query->result();
	}

function get_laporan() {

		$this->db->select('*');
		$this->db->from('laporan');
		$query = $this->db->get();
		return $query->result();
	}

	function hapus($id) {		
		$this->db->where('id_proposal',$id);	
		$this->db->delete('proposal');	
		return;
	}	
}