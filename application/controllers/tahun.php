<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tahun extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(array('mdb'));
        $this->load->helper('text');
        $this->load->library('form_validation');
        
        
    }
    function index(){
        if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='1' || $this->session->userdata('level')==='111' ){
            $data['title'] = "Daftar TAHUN Pelajaran";
            $data['isi'] = $this->mdb->gettable('r_tahun');
            $this->load->view('admin/tahun/index',$data);
            
        }else{
            redirect('home','refresh');
        }
    }
    function tambah(){
        if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='1' || $this->session->userdata('level')==='111'){
            $rules = array(
                array(
                    'field'=>'tahun',
                    'label'=> 'Tahun',
                    'rules'=> 'required'
                )
            );
            $this->form_validation->set_error_delimiters('<div class="alert alertbox" data-toggle="modal">', '</div>');
                $this->form_validation->set_rules($rules);
                if ($this->form_validation->run() == FALSE)
                {
                    $data['title'] = "Tambah Tahun Ajaran Baru";
                    $this->load->view('admin/tahun/tambah',$data);
                }else{
                    //Jika Berhasil
                    $tahun = $this->input->post('tahun');
                    //$this->mdb->insert('r_tahun',array('tahun'=>$tahun));
                    //$this->db->insert_string('r_tahun.',array('tahun'=>$tahun));
                    $this->db->insert('r_tahun',array('tahun'=>$tahun));
                    redirect ('tahun','refresh');
                }
        }else{
            redirect('home','refresh');
        }
    }
    
}