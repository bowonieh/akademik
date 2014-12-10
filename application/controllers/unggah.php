<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Unggah extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->helper('math');
	}
	
	public function naikgambar($table,$path,$x,$y){
		
		
		
		
	}
	
	function cetak_uuid(){
		
		$guid = getGUID();
		echo $guid;
		
	}
	
	function cetak_uuidv4(){
		$uidv4 = guidv4(openssl_random_pseudo_bytes(16));
		echo $uidv4;
	}
}
