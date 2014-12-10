<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Siswa extends CI_Controller{
	function __construct() {
		parent::__construct();
		$this->load->model(array('msuratmasuk','mdb'));
		$this->load->helper('text');
		$this->load->library(array('form_validation'));
	
	}
	
	function detil(){
		$id = $this->uri->segment(3);
		//$this->db->where(array('id_siswa'=>$id));
		
		$data['isi'] = $this->mdb->ambilBaris('d_siswa',array('id_siswa'=>$id));
		$this->load->view('siswa/detil',$data);
	}
}