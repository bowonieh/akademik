<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//author Agus Wibowo
class Mapel extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(array('msuratmasuk','mdb'));
        $this->load->helper('text');
        $this->load->library(array('form_validation'));
        
    }
    function index(){
    if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='1' || $this->session->userdata('level')==='111'){
         $data['title'] = 'Mata Pelajaran';   
         $this->load->view('admin/kurikulum/matpel/index',$data);
        }else{
            redirect('home','refresh');
        }
    }
    
    function ambil(){
         if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='1' || $this->session->userdata('level')==='111'){
        
        $data = array();
        
        $this->db->order_by('r_matpel.id_katmapel','ASC');
        $this->db->join('r_kategori_matpel','r_kategori_matpel.id_katmapel=r_matpel.id_katmapel','left');
        
        $query = $this->db->get('r_matpel');
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
        $id_katmapel = $this->input->post('id_katmapel');
        $matpel = $this->input->post('matpel');
        $result1 = $this->db->insert('r_matpel', array('id_katmapel'=>$id_katmapel, 'matpel'=>$matpel));
        $result1 = $this->db->query("SELECT * FROM r_matpel where id_matpel = LAST_INSERT_ID()");
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
    function getkatmapel(){
        if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='1' || $this->session->userdata('level')==='111' ){
        //$result = mysql_query("SELECT id_prog_ahli AS Value , nama_prog_ahli as DisplayText FROM r_prog_ahli;");
        $result = $this->db->query("SELECT id_katmapel AS Value , kategori as DisplayText FROM r_kategori_matpel");
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