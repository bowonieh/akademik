<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//author Agus Wibowo
class Kategorimapel extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(array('msuratmasuk','mdb'));
        $this->load->helper('text');
        $this->load->library(array('form_validation'));
        
    }
    function index(){
    if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='1' || $this->session->userdata('level')==='111'){
         $data['title'] = 'Kategori Mata Pelajaran';   
         $this->load->view('admin/kurikulum/kategorimapel/index',$data);
        }else{
            redirect('home','refresh');
        }
    }
    
    function ambil(){
         if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='1' || $this->session->userdata('level')==='111'){
        
        $data = array();
        $query = $this->db->query("SELECT * FROM r_kategori_matpel");
        if ($query->num_rows() > 0) {
        foreach($query->result_array() as $row) {
        $data[] = $row;
            }
        }
        //json_encode($data);
        
        $jTableResult = array();
        $jTableResult['Result'] = "OK";
        $jTableResult['Records'] = $data;
        print json_encode($jTableResult);
        
         }else{
             redirect('home','refresh');
         }
    }
    
    function create(){
         if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='1' || $this->session->userdata('level')==='111'){
             $kategori = $this->input->post('kategori');
             $result1 = $this->db->insert('r_kategori_matpel', array('kategori'=>$kategori));
             $result1 = $this->db->query("SELECT * FROM r_prog_ahli where id_prog_ahli = LAST_INSERT_ID()");
            $row = $result1->result_array();
            $jTableResult = array();
            $jTableResult['Result'] = "OK";
            $jTableResult['Record'] = $row;
            print json_encode($jTableResult);
         }else{
             redirect('home','refresh');
         }
             
        
    }
    
    function update(){
        
    }
    
    function delete(){
        
    }
    
}