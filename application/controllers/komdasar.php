<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//author Agus Wibowo
//KOMPETENSI DASAR
class Komdasar extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(array('msuratmasuk','mdb'));
        $this->load->helper('text');
        $this->load->library(array('form_validation'));
        
    }
    
    function index(){
         if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='1' || $this->session->userdata('level')==='111'){
             $data['title'] = "HALAMAN KOMPETENSI DASAR";
             $this->db->order_by('r_matpel.id_katmapel','ASC');
             $this->db->join('r_kompetensi_inti','r_kompetensi_inti.id_matpel=r_matpel.id_matpel','left');
             $this->db->join('r_kategori_matpel','r_kategori_matpel.id_katmapel = r_matpel.id_katmapel','left');
             $data['isi'] = $this->mdb->gettable('r_matpel');
             $this->load->view('admin/kurikulum/komdasar/listmapel',$data);
             
         }else{
             redirect('home','refresh');
             
         }
         
    function mapel(){
        $id_katmapel = $this->uri->segment(3);
        if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='1' || $this->session->userdata('level')==='111'){
            
            
            
        }else{
            redirect('home','refresh');
        }
        
        
    }
    
         
         
}
    
    
    
}