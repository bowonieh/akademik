<?php if (!defined('BASEPATH')) exit ('No Direct Script Access Allowed');

#Author Agus Wibowo
#aguswibowo.amd@gmail.com
#twitter @bowonieh

class Kurmapel extends CI_Controller{
    function __construct()
	{
		parent::__construct();
			//$this->load->library(array('uri'));	
			$this->load->model(array('mdb'));	
               $this->load->helper(array('text','form','math'));

	}
        
     function index(){
         //menampilkan list mata pelajaran yang terdaftar di siakad.
         $this->db->join('r_matpel','r_matpel.id_matpel = d_matpelguru.id_matpel','inner');
         $this->db->join('r_kategori_matpel','r_kategori_matpel.id_katmapel = r_matpel.id_katmapel','inner');
         $this->db->join('d_guru','d_guru.id_guru = d_matpelguru.id_guru','inner');
         $this->db->join('r_tahun','r_tahun.id_tahun = d_matpelguru.id_tahun','inner');
     	 $data['isi'] = $this->mdb->gettable('d_matpelguru');
     	$data['title'] = "Siakad || Daftar Seluruh Mata Pelajaran";
     	
     	 $this->load->view('admin/kurikulum/listmatpel',$data);
         
     }
     function download(){
         //download XLS File dari seluruh mata pelajaran yang ada disiakad
         
         $id_matpel = $this->uri->segment(3);
         
         if(empty($id_matpel) OR !is_numeric($id_matpel)){
             //Alihkan ke home
             redirect('home','refresh');
         }else{
         	
                $this->db->join('d_matpelguru','d_matpelguru.id_matpelguru = d_nilai.id_matpelguru','inner');
    		$this->db->join('d_guru','d_guru.id_guru = d_matpelguru.id_guru','inner');
    		$this->db->join('d_siswa','d_siswa.nis= d_nilai.nis','inner');
    		$this->db->join('d_kelas','d_kelas.id_kelas = d_siswa.id_kelas','inner');
    		//$d = $this->db->get_where('d_nilai',array('d_matpelguru.id_matpelguru'=>$id));
    		$this->db->where(array('d_matpelguru.id_matpelguru'=>$id_matpel));
    		$data['list'] = $this->mdb->gettable('d_nilai');
    		
    		$this->load->view('admin/kurikulum/downloadxls',$data);
         }
     }
     
     function edit(){
         //EDit Mapel Guru
         //
         
     }
     
     
     function hapus(){
         // Hapus Mapel Guru
         $id_matpelguru = $this->uri->segment(3);
         
         $this->db->where('id_matpelguru',$id_matpelguru);
         $a = $this->db->get('d_matpelguru');
         
        
         	$z = $this->mdb->delete('d_matpelguru',array('id_matpelguru'=>$id_matpelguru));
        	echo "Success";
        	
        	
        
     }
     
     function lihat(){
     	$id_matpelguru = $this->uri->segment(3);
     	$data['title'] = "Detil mata pelajaran";
 		
     	//Data Kelas
     	$this->db->distinct('id_kelas');
     	$this->db->join('d_nilai','d_nilai.id_matpelguru = d_matpelguru.id_matpelguru','inner');
     	$this->db->join('d_siswa','d_siswa.nis = d_nilai.nis','inner');
     	$this->db->join('d_kelas','d_kelas.id_kelas = d_siswa.id_kelas','inner');
     	$this->db->where(array('d_matpelguru.id_matpelguru'=>$id_matpelguru));
     	$this->db->group_by('d_kelas.id_kelas');
     	$o = $this->db->get('d_matpelguru'); 
     	$data['kelas'] = $o->num_rows();
 //Jumlah siswa ikut Matpel========================    	
     	$this->db->select(array('nis'));
     	$this->db->join('r_matpel','r_matpel.id_matpel = d_matpelguru.id_matpel','left');
     	$this->db->join('r_tahun','r_tahun.id_tahun=d_matpelguru.id_tahun','left');
     	$this->db->join('d_guru','d_guru.id_guru=d_matpelguru.id_guru','inner');
     	$this->db->join('d_nilai','d_nilai.id_matpelguru = d_matpelguru.id_matpelguru','inner');
     	$this->db->join('r_kategori_matpel','r_kategori_matpel.id_katmapel=r_matpel.id_katmapel','inner');
     	
     	$this->db->where(array('d_matpelguru.id_matpelguru'=>$id_matpelguru));
     	$a = $this->db->get('d_matpelguru');
     	$data['siswa'] = $a->num_rows();
//===================================================
     	$this->db->join('r_matpel','r_matpel.id_matpel = d_matpelguru.id_matpel','left');
     	$this->db->join('r_tahun','r_tahun.id_tahun=d_matpelguru.id_tahun','left');
     	$this->db->join('d_guru','d_guru.id_guru=d_matpelguru.id_guru','inner');
     	$this->db->join('r_kategori_matpel','r_kategori_matpel.id_katmapel=r_matpel.id_katmapel','inner');
     	$data['mapel'] = $this->mdb->getDetil('d_matpelguru',array('id_matpelguru'=>$id_matpelguru));
     	
     	
     	
     	$this->load->view('admin/kurikulum/matpel/detil',$data);
     }
     
     function aktivasi(){
     	//aktivasi aja :p 
         
     }
     
}

