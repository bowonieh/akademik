<?php if (!defined('BASEPATH')) exit ('No Direct Script Access Allowed');
//author agus wibowo
class Login extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
	}

	function index()
	{
            if($this->session->userdata('username',true) && $this->session->userdata('level',true)){
                redirect('home','refresh');
            }else{
	$data['username'] =  $this->input->post('username',true);
	$data['password'] =  $this->input->post('password',true);
		
	$this->load->view('template/login',$data);
            }
	}
	//
	function proseslogin() {
		$username = $this->input->post('username'); //read the username that filled by the user
		$password = $this->input->post('password'); //read the password that filled by the user
		$passwordx = md5($password); //this is for change $password into MD5 form
		//the query is to matching the username+password user with username+password from database
		$q = $this->db->query("SELECT * FROM d_user WHERE username='$username' AND password='$passwordx'");
		if ($q->num_rows() == 1) {
		// if the query is TRUE, then save the username into session and load the welcome view
		$username = $q->row()->username;
		//$password = $q->row()->password;
		$level = $q->row()->level;
                $user_id = $q->row()->user_id;
                
                $remote_ip = $_SERVER['REMOTE_ADDR'];
		
                $this->session->set_userdata('username',$username);
		//$this->session->set_userdata('password',$password);
		$this->session->set_userdata('level',$level);
                $this->session->set_userdata('user_id',$user_id);
		$this->session->set_userdata('remote_ip',$remote_ip);
		$tanggal = date('Y-m-d H:i:s');
                //$data['welcome'] = "Welcome $nama";
		//$this->load->view('welcome_view', $data);
		//redirect('home','refresh');
                $this->db->insert('d_log',array('log'=>'USER LOGIN','tanggal'=>$tanggal,'ip_address'=>$remote_ip,'username'=>$username));
                echo "Success";
		
		}
		else {
// query error
		//$data['error']='!! Wrong Username or Password !!';
		//$this->load->view('login/login_view');
                redirect('login','refresh');
		
		}
	}


//	


}
// application/controllers/login.php
