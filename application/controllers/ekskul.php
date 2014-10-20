<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ekskul extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(array('msuratmasuk','mdb'));
        $this->load->helper(array('text','form','url'));
        
        
        
    }
function index(){
    
}
    function tambah(){
        $nis = $this->uri->segment(3);
        $data['nis'] = $nis;
        $this->db->where(array('nis'=>$nis));
        $ds = $this->db->get('d_siswa');
        $data['siswa'] = $ds->row();
        $data['tahun'] = $this->mdb->getTahun();
        $data['ekskul'] = $this->mdb->getEkskul();
        $this->load->view('guru/mapel/tambahekskul',$data);
        
        
    }
    function simpan(){
        $id_tahun = $this->input->post('id_tahun');
        $id_ekskul = $this->input->post('id_ekskul');
        $nis = $this->input->post('nis');
        if ($this->mdb->chkekskul() === 0 ){
        $d = $this->db->insert('d_ekskul_siswa',array('id_tahun'=>$id_tahun,'id_ekskul'=>$id_ekskul,'nis'=>$nis));
        
            if ($d){
            echo "<div class='alert'>Data Berhasil Ditambahkan</div>";
            }else{
            echo "<div class='alert'>Data Gagal Ditambahkan</div>";
            }
        }else{
            echo "<div class='alert'>Data Sama Ditemukan</div>";
        }
    }
    
    
}