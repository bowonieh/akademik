<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Surat extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('msuratmasuk');
        $this->load->helper('text');
    }
    //halaman utama persuratan
    function index(){
        if($this->session->userdata('username',TRUE)&&$this->session->userdata('level',TRUE)&&$this->session->userdata('level')==='1'){
            //halaman Admin
            $data['title'] = "APLIKASI REKAM PERSURATAN ICT CENTER KOTA BEKASI";
            $data['user'] = $this->session->userdata('username');
                        
            $data['suratmasuk']= $this->db->count_all_results('surat_masuk');
            $data['suratkeluar']= $this->db->count_all_results('surat_keluar');
            $data['smterkini']= $this->msuratmasuk->getlimit(3);
            $this->load->view('template/index',$data);
            
        }elseif($this->session->userdata('username',TRUE)&&$this->session->userdata('level',TRUE)&&$this->session->userdata('level')==='2'){
            //halaman user biasa
            echo "user Biasa";
        }else{
            //redirect ke halaman login
            redirect('login','refresh');
        }
    }
    
}