<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ledger extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(array('msuratmasuk','mdb'));
        $this->load->helper(array('text','form','math','pivot'));
        
        
        
    }


    //SELECT `d_siswa`.`nama_siswa`,`nama_matpel`,`skala4_pengetahuan`,`nilai4_keterampilan`,`skala4_sikap` 
    //FROM (`d_siswa`) INNER JOIN `d_kelas` ON `d_kelas`.`id_kelas`=`d_siswa`.`id_kelas` 
    //LEFT JOIN `d_nilai` ON `d_nilai`.`nis`=`d_siswa`.`nis` INNER JOIN `d_matpelguru` 
    //ON `d_matpelguru`.`id_matpelguru`=`d_nilai`.`id_matpelguru` INNER JOIN `r_tahun` 
    //ON `r_tahun`.`id_tahun` = `d_matpelguru`.`id_tahun` WHERE `d_kelas`.`id_kelas` = '4' 
    //AND `r_tahun`.`id_tahun` = '3' ORDER BY `d_siswa`.`nis`;
    
   function lihat(){
   	$tahun = $this->uri->segment(4);
   	$kelas = $this->uri->segment(3);
   	$sql1 = "SELECT `d_siswa`.`nama_siswa`,`nama_matpel`,`skala4_pengetahuan`,`nilai4_keterampilan`,`skala4_sikap` 
    FROM (`d_siswa`) INNER JOIN `d_kelas` ON `d_kelas`.`id_kelas`=`d_siswa`.`id_kelas` 
    LEFT JOIN `d_nilai` ON `d_nilai`.`nis`=`d_siswa`.`nis` INNER JOIN `d_matpelguru` 
    ON `d_matpelguru`.`id_matpelguru`=`d_nilai`.`id_matpelguru` INNER JOIN `r_tahun` 
    ON `r_tahun`.`id_tahun` = `d_matpelguru`.`id_tahun` WHERE `d_kelas`.`id_kelas` = $kelas 
    AND `r_tahun`.`id_tahun` = $tahun ORDER BY `d_siswa`.`nis`";
   	
   	//Nama
   	$this->db->select(array('nama_siswa','nis'));
   	$this->db->where(array('id_kelas'=>$kelas));
   	$this->db->order_by('nis');
   	$data['nama'] = $this->mdb->gettable('d_siswa');
   	
   	$data['tahun'] = $tahun;
   	$data['kelas'] = $kelas;
   	
   	//List Matpel
   	$this->db->select('matpel','skala4_sikap');
   	$this->db->where(array('id_tahun'=>$tahun,'d_kelas.id_kelas'=>$kelas));
   	$this->db->group_by('matpel');
   	$this->db->join('d_matpelguru','d_matpelguru.id_matpelguru=d_nilai.id_matpelguru','left');
   	$this->db->join('r_matpel','r_matpel.id_matpel = d_matpelguru.id_matpel','left');
   	$this->db->join('d_siswa', 'd_siswa.nis= d_nilai.nis','inner');
   	$this->db->join('d_kelas','d_kelas.id_kelas=d_siswa.id_kelas','inner');
   	$this->db->order_by('r_matpel.id_matpel');
   	$data['nama_matpel']=$this->mdb->gettable('d_nilai');
   	
   	//nilai
   	$data['nilai'] = $this->db->query($sql1)->result_array();
   	
   	$this->load->view('admin/kurikulum/ledger2',$data);
   }
}