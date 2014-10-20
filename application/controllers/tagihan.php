<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tagihan extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(array('msuratmasuk','mdb'));
        $this->load->helper('text');
        
        
    }
    function index(){
        //Hanya admin dan TU Keuangan yang diijinkan membuka data
         if($this->session->userdata('username') && $this->session->userdata('level') === '1' || $this->session->userdata('level') === '110' ){
             $data['title'] = "ITEM TAGIHAN";
                $this->load->view('admin/keuangan/index',$data);
         }else{
             redirect('home','refresh');
         }
    }
    function ambil(){
        if($this->session->userdata('username') && $this->session->userdata('level') === '1' || $this->session->userdata('level') === '110' ){
            
            $data = array();
            $this->db->order_by('id_tagihan','ASC');
        $query = $this->db->query("SELECT * FROM r_biaya");
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
        if($this->session->userdata('username') && $this->session->userdata('level') === '1' || $this->session->userdata('level') === '110' ){
        $nama_tagihan = $this->input->post('nama_tagihan');
        $status_aktif = $this->input->post('status_aktif');
        $jumlah_biaya = $this->input->post('jumlah_biaya');
        $result1 = $this->db->insert('r_biaya', array('nama_tagihan'=>$nama_tagihan, 'status_aktif'=>$status_aktif,'jumlah_biaya'=>$jumlah_biaya));
        $result1 = $this->db->query("SELECT * FROM r_biaya where id_tagihan = LAST_INSERT_ID()");
        $row = $result1->result_array();
        $jTableResult = array();
        $jTableResult['Result'] = "OK";
        $jTableResult['Record'] = $row;
        print json_encode($jTableResult);
            
        }else{
        //Kalo belum login
            
        }
    }
        function update(){
           if($this->session->userdata('username') && $this->session->userdata('level') === '1' || $this->session->userdata('level') === '110' ){
            $tanggal = date('Y-m-d H:i:s');
            $nama_tagihan = $this->input->post('nama_tagihan');
            $status_aktif = $this->input->post('status_aktif');
            $jumlah_biaya = $this->input->post('jumlah_biaya');
            $id_tagihan   = $this->input->post('id_tagihan');
            $user = $this->session->userdata('username');
            $result = $this->db->update('r_biaya', array('nama_tagihan'=>$nama_tagihan,'status_aktif'=>$status_aktif,'jumlah_biaya'=>$jumlah_biaya), array('id_tagihan'=>$id_tagihan));
            //masukin ke log
            $q = $this->db->get_where('r_biaya',array('id_tagihan'=>$id_tagihan));
            $a = $q->row();
            $this->db->insert('d_log',array('log'=>'Tagihan '.$a->nama_tagihan.' dengan id tagihan '.$a->id_tagihan.' diupdate','username'=>$user,'tanggal'=>$tanggal));
            
            $jTableResult = array();
            $jTableResult['Result'] = "OK";
            print json_encode($jTableResult);
        }else{
            
        }
    }
    function delete(){
           if($this->session->userdata('username') && $this->session->userdata('level') === '1' || $this->session->userdata('level') === '110' ){
            $id_tagihan = $this->input->post('id_tagihan');
            $q = $this->db->get_where('r_biaya',array('id_tagihan'=>$id_tagihan));
            $a = $q->row();
            $user = $this->session->userdata('username');
            $tanggal = date('Y-m-d H:i:s');
            $this->db->insert('d_log',array('log'=>'Tagihan '.$a->nama_tagihan.' dengan id tagihan '.$a->id_tagihan.' dihapus','username'=>$user,'tanggal'=>$tanggal));
            $result = $this->db->delete('r_biaya',array('id_tagihan'=>$id_tagihan));
            
            $jTableResult = array();
            $jTableResult['Result'] = "OK";
            print json_encode($jTableResult);
        }else{
            
        }
        
    }
    
    
}