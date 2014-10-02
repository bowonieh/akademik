<?php if (!defined('BASEPATH')) exit ('No Direct Script Access Allowed');

class Keluar extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
	}
        function index(){
            $tanggal = date('Y-m-d H:i:s');
            $username = $this->session->userdata('username');
            $this->session->sess_destroy();
            $this->db->insert('d_log',array('log'=>'USER KELUAR','tanggal'=>$tanggal,'username'=>$username));
			redirect('login', 'refresh');
        }
}