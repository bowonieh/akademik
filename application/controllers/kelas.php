<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//author Agus Wibowo
class Kelas extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(array('msuratmasuk','mdb'));
        $this->load->helper('text');
        $this->load->library(array('form_validation'));
        
    }
    function index(){
            if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='1'){
                $data['title'] = "Data Kelompok Belajar";
                $this->load->view('admin/kelas/indexkelas',$data);
            }else{
                redirect('home','refresh');
            }
    }
    function ambil(){
        if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='1'){
        $count = mysql_query("SELECT COUNT(*) AS RecordCount FROM d_kelas;");
        $row = mysql_fetch_array($count);
        $recordCount = $row['RecordCount'];    

        $data = array();
        $this->db->join('r_prog_ahli','r_prog_ahli.id_prog_ahli = d_kelas.id_prog_ahli','left');
        $this->db->order_by($_GET["jtSorting"]);
        $this->db->limit($_GET["jtPageSize"],$_GET["jtStartIndex"] );
        $query = $this->db->get('d_kelas');
        
        //$query = $this->db->query("SELECT * FROM d_kelas");
        if ($query->num_rows() > 0) {
        foreach($query->result_array() as $row) {
        $data[] = $row;
           
        
            }
        }
        //json_encode($data);
        
        $jTableResult = array();
        $jTableResult['Result'] = "OK";
        $jTableResult['Records'] = $data;
        $jTableResult['TotalRecordCount'] = $recordCount;
        print json_encode($jTableResult);


        }else{
            
        }
    }
    function create(){
        if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='1'){
        $kelas = $this->input->post('kelas');
        $id_prog_ahli = $this->input->post('id_prog_ahli');
        $tingkat = $this->input->post('tingkat');
        $result1 = $this->db->insert('d_kelas', array('kelas'=>$kelas, 'id_prog_ahli'=>$id_prog_ahli,'tingkat'=>$tingkat));
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
            $id_kelas = $this->input->post('id_kelas');
            $kelas = $this->input->post('kelas');
            $tingkat = $this->input->post('tingkat');
            $id_prog_ahli = $this->input->post('id_prog_ahli');
            $result = $this->db->update('d_kelas', array('kelas'=>$kelas,'id_prog_ahli'=>$id_prog_ahli,'tingkat'=>$tingkat), array('id_kelas'=>$id_kelas));
            
            $jTableResult = array();
            $jTableResult['Result'] = "OK";
            print json_encode($jTableResult);
        }else{
            
        }
    }
    function delete(){
        if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='1'){
            $id_kelas = $this->input->post('id_kelas');
            $result = $this->db->delete('d_kelas',array('id_kelas'=>$id_kelas));
            
            $jTableResult = array();
            $jTableResult['Result'] = "OK";
            print json_encode($jTableResult);
        }else{
            
        }
        
    }
    function getkelas(){
        if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='1'){
        //$result = mysql_query("SELECT id_prog_ahli AS Value , nama_prog_ahli as DisplayText FROM r_prog_ahli;");
        $result = $this->db->query("SELECT id_prog_ahli AS Value , nama_prog_ahli as DisplayText FROM r_prog_ahli");
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