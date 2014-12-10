<?php

class Pesan extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model(array('msuratmasuk','mdb'));
		$this->load->helper(array('text','url','form'));
		$this->load->library(array('form_validation'));
	}
	function index(){
		//Halaman utama pesan adalah inbox
		if ($this->session->userdata('level')==='2'){
			$info_guru = $this->mdb->infouser();
			$data['namaguru'] = $this->mdb->infouser();
			$data['title']= "Kotak Masuk ";
			$this->db->where(array('id_penerima'=>$info_guru->user_id));
			//$this->db->join('d_user');
			$this->db->select(array('timestamp','jam','judul','pesan','sudah_dibaca','d_guru.nama_guru','d_siswa.nama_siswa'));
			$this->db->join('d_siswa','d_siswa.user_id = d_pesan.id_pengirim','left');
			$this->db->join('d_guru','d_guru.user_id = d_pesan.id_pengirim','left');
 			$data['list'] = $this->mdb->gettable('d_pesan');
 			$this->load->view('pesan/inbox',$data);
 			//echo json_encode($data);
		}elseif ($this->session->userdata('level')==='3'){
			
		}else{
			redirect('home','refresh');
		}
	}
	function terkirim(){
		//menampilkan surat terkirim
		
	}
	function tulis(){
		//menu tulis surat
	} 
	function getusername(){
		
	}
	function aksikirim(){
		
	}
	function baca(){
		
	}
	function balas(){
		
	}
}