<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//author Agus Wibowo
class Kominti extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(array('msuratmasuk','mdb'));
        $this->load->helper('text');
        $this->load->library(array('form_validation'));
        
    }
    function index(){
    if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='1' || $this->session->userdata('level')==='111'){
         $data['title'] = 'KOMPETENSI INTI';   
         $this->load->view('admin/kurikulum/kompetensiinti/index',$data);
        }else{
            redirect('home','refresh');
        }
    }
    
    function ambil(){
         if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='1' || $this->session->userdata('level')==='111'){
        
        $data = array();
        
        $this->db->order_by('r_matpel.id_matpel','ASC');
        $this->db->join('r_matpel','r_matpel.id_matpel=r_kompetensi_inti.id_matpel','left');
        
        $query = $this->db->get('r_kompetensi_inti');
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
        if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='1' || $this->session->userdata('level')==='111' ){
        $kode_kominti = $this->input->post('kode_kominti');
        $id_matpel = $this->input->post('id_matpel');
        $kompetensi_inti = $this->input->post('kompetensi_inti');
        
        $result1 = $this->db->insert('r_kompetensi_inti', array('kode_kominti'=>$kode_kominti, 'id_matpel'=>$id_matpel,'kompetensi_inti'=>$kompetensi_inti));
        $result1 = $this->db->query("SELECT * FROM r_kompetensi_inti where id_kompetensi_inti = LAST_INSERT_ID()");
        $row = $result1->result_array();
        $jTableResult = array();
        $jTableResult['Result'] = "OK";
        $jTableResult['Record'] = $row;
        print json_encode($jTableResult);
        }else{
            
        }
    }
    
    function update(){
        if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='1' || $this->session->userdata('level')==='111' ){
            $id_kompetensi_inti = $this->input->post('id_kompetensi_inti');
            $id_matpel = $this->input->post('id_matpel');
            $kode_kominti = $this->input->post('kode_kominti');
            $kompetensi_inti = $this->input->post('kompetensi_inti');
            $result = $this->db->update('r_kompetensi_inti',array('id_matpel'=>$id_matpel,'kompetensi_inti'=>$kompetensi_inti,'kode_kominti'=>$kode_kominti),array('id_kompetensi_inti'=>$id_kompetensi_inti));
            $jTableResult = array();
            $jTableResult['Result'] = "OK";
            print json_encode($jTableResult);
        }else{
            
        }
    }
    
    function delete(){
        if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='1' || $this->session->userdata('level')==='111' ){
            $id_kompetensi_inti = $this->input->post('id_kompetensi_inti');
            $result= $this->db->delete('r_kompetensi_inti',array('id_kompetensi_inti'=>$id_kompetensi_inti));
            
            $jTableResult = array();
            $jTableResult['Result'] = "OK";
            print json_encode($jTableResult);
        }else{
            
        }
    }
    function getmatpel(){
        if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='1' || $this->session->userdata('level')==='111' ){
        //$result = mysql_query("SELECT id_prog_ahli AS Value , nama_prog_ahli as DisplayText FROM r_prog_ahli;");
        $result = $this->db->query("SELECT id_matpel AS Value , matpel as DisplayText FROM r_matpel");
        $rows = array();
         foreach($result->result_array() as $row)
        {
           $eil=array();
            $eil["DisplayText"]=$row["DisplayText"];
            $eil["Value"]=$row["Value"];
            $rows[]=$eil;
         }
                
            $jTableResult = array();
            $jTableResult['Result'] = "OK";
            $jTableResult['Options'] = $rows;
            print json_encode($jTableResult);
        }else{
            //Tidak Login
        }
    }
    
}