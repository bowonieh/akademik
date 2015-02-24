<?php if (!defined('BASEPATH')) exit ('No Direct Script Access Allowed');

#Author Agus Wibowo
#aguswibowo.amd@gmail.com
#twitter @bowonieh

class Kurmapel extends CI_Controller{
    function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
                $this->load->library(array('form_validation'));

	}
        
     function index(){
         //menampilkan list mata pelajaran yang terdaftar di siakad.
         
     }
     function download(){
         //download XLS File dari seluruh mata pelajaran yang ada disiakad
         
         $id_matpel = $this->uri->segments(3);
         
         if(empty($id_matpel) OR !is_numeric($id_matpel)){
             //Alihkan ke home
         }else{
                $this->db->join('d_matpelguru','d_matpelguru.id_matpelguru = d_nilai.id_matpelguru','inner');
    		$this->db->join('d_guru','d_guru.id_guru = d_matpelguru.id_guru','inner');
    		$this->db->join('d_siswa','d_siswa.nis= d_nilai.nis','inner');
    		$this->db->join('d_kelas','d_kelas.id_kelas = d_siswa.id_kelas','inner');
    		//$d = $this->db->get_where('d_nilai',array('d_matpelguru.id_matpelguru'=>$id));
    		$this->db->where(array('d_matpelguru.id_matpelguru'=>$id_matpel));
    		$data['list'] = $this->mdb->gettable('d_nilai');
         }
     }
     
     function edit(){
         //EDit Mapel Guru
         //
         
     }
     
     
     function hapus(){
         // Hapus Mapel Guru
         
     }
     
     function aktivasi(){
         
     }
     
}

