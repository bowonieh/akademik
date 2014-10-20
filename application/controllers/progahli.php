<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//author Agus Wibowo
class Progahli extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(array('msuratmasuk','mdb'));
        $this->load->helper('text');
        $this->load->library(array('form_validation'));
        
    }
    function index(){
            if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='1'){
                $data['title'] = "Data Kompetensi Keahlian";
                $this->load->view('admin/progahli/index',$data);
            }else{
                redirect('home','refresh');
            }
    }
    function ambil(){
        if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='1'){
            
            
        $data = array();
        $query = $this->db->query("SELECT * FROM r_prog_ahli");
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
            
        }
    }
    function create(){
        if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='1'){
        $kode_kk = $this->input->post('kode_kk');
        $nama_prog_ahli = $this->input->post('nama_prog_ahli');
        $result1 = $this->db->insert('r_prog_ahli', array('kode_kk'=>$kode_kk, 'nama_prog_ahli'=>$nama_prog_ahli));
        $result1 = $this->db->query("SELECT * FROM r_prog_ahli where id_prog_ahli = LAST_INSERT_ID()");
        $row = $result1->result_array();
        $jTableResult = array();
        $jTableResult['Result'] = "OK";
        $jTableResult['Record'] = $row;
        print json_encode($jTableResult);
            
        }else{
        
        }
    
    }
    function update(){
        if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='1'){
            $kode_kk = $this->input->post('kode_kk');
            $nama_prog_ahli = $this->input->post('nama_prog_ahli');
            $id_prog_ahli = $this->input->post('id_prog_ahli');
            $result = $this->db->update('r_prog_ahli', array('kode_kk'=>$kode_kk,'nama_prog_ahli'=>$nama_prog_ahli), array('id_prog_ahli'=>$id_prog_ahli));
            
            $jTableResult = array();
            $jTableResult['Result'] = "OK";
            print json_encode($jTableResult);
        }else{
            
        }
    }
    function delete(){
        if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='1'){
            $id_prog_ahli = $this->input->post('id_prog_ahli');
            $result = $this->db->delete('r_prog_ahli',array('id_prog_ahli'=>$id_prog_ahli));
            
            $jTableResult = array();
            $jTableResult['Result'] = "OK";
            print json_encode($jTableResult);
        }else{
            
        }
        
    }
    function getkelas(){
        if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='1'){
        $result = $this->db->get("d_kelas");
        $kelas = array();
        foreach($result->result_array() as $row) {
        $kelas[$row["id_kelas"]] = $row["kelas"];
        }
            $jTableResult = array();
            $jTableResult['Result'] = "OK";
            $jTableResult['Options'] = $kelas;
            print json_encode($jTableResult);
        }
    }
}