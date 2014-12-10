<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mapelsaya extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(array('msuratmasuk','mdb'));
        $this->load->helper(array('text','form','math'));
        
        
        
    }
    
    function index(){
        if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='2' ){
            //$sess =  $this->session->userdata('username');
            $data['infouser'] = $this->mdb->infouser();
            $data['namaguru']= $this->mdb->infouser();
            $data['title'] = "MATA PELAJARAN SAYA";
            $id_guru = $this->mdb->infouser();
            $data['isi'] = $this->mdb->gettableWhere('d_matpelguru',array('id_guru'=>$id_guru->id_guru));
            $this->load->view('guru/mapel/mapelsaya',$data);
        } elseif($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='3' ){
            $data['infosiswa'] = $this->mdb->infosiswa();
            $data['namasiswa']= $this->mdb->infosiswa();
            $data['title'] = "MATA PELAJARAN SAYA";
            $id_siswa = $this->mdb->infosiswa();
            //$this->db->where(array('status_aktif'=>'Y'));
            //$this->db->join('d_nilai_keterampilan','d_nilai_keterampilan.id_matpelguru= d_matpelguru.id_matpelguru','inner');
            //$this->db->join('d_nilai_pengetahuan','d_nilai_pengetahuan.id_matpelguru= d_matpelguru.id_matpelguru','inner');
            $this->db->join('d_matpelguru','d_nilai.id_matpelguru= d_matpelguru.id_matpelguru','inner');
            $this->db->join('d_guru','d_guru.id_guru=d_matpelguru.id_guru','inner');
            $this->db->join('r_tahun','r_tahun.id_tahun= d_matpelguru.id_tahun','inner');
            //$this->db->select(array('d_matpelguru.id_matpelguru','r_tahun.tahun','d_matpelguru.nama_matpel','d_guru.nama_guru'));
            $this->db->where(array('d_nilai.nis'=>$id_siswa->nis));
            $data['isi'] = $this->mdb->gettable('d_nilai');
            //$data['isi'] = $this->mdb->gettableWhere('d_matpelguru',array('id_guru'=>$id_guru->id_guru));
            $this->load->view('siswa/mapel/mapelsaya',$data);
        }else{
            redirect('home','refresh');
        }
    }
    function tambah(){
        if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='2' ){
            //$sess =  $this->session->userdata('username');
            $data['infouser'] = $this->mdb->infouser();
            $data['namaguru']= $this->mdb->infouser();
            $data['title'] = "TAMBAH MATA PELAJARAN SAYA";
            $data['kat_mapel']= $this -> mdb -> get_katmapel();
            $data['tahun']= $this -> mdb -> getTahun();
            $id_guru = $this->mdb->infouser();
            
            //$data['isi'] = $this->mdb->gettableWhere('d_matpelguru',array('id_guru'=>$id_guru->id_guru));
            $this->load->view('guru/mapel/tambahmapel',$data);
        }else{
            redirect('home','refresh');
        }
    }
    
    function get_matpel($id_katmapel){

         
         header('Content-Type: application/x-json; charset=utf-8');
         echo(json_encode($this->mdb->get_matpel($id_katmapel)));

    }
    function aksitambah(){
        if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='2' ){
                $guru           = $this->mdb->infouser();
                $id_guru        = $guru->id_guru;
                $id_katmapel    = $this->input->post('id_katmapel');
                $id_matpel      = $this->input->post('id_matpel');
                $id_tahun       = $this->input->post('id_tahun');
                $nama_matpel    = $this->input->post('nama_matpel');
                if (empty($id_katmapel)|| empty($id_matpel)|| empty($id_tahun) || empty($nama_matpel)){
                        echo "ErrorForm";
                }else{
                    if($this->mdb->chkexist('d_matpelguru',array('id_guru'=>$id_guru,'id_matpel'=>$id_matpel,'id_tahun'=>$id_tahun,'nama_matpel'=>$nama_matpel)) >= 1){

                            echo 'dataDouble';

                        }else{
                    $sql = $this->db->insert('d_matpelguru',array('id_guru'=>$id_guru,'id_matpel'=>$id_matpel,'id_tahun'=>$id_tahun,'nama_matpel'=>$nama_matpel));
                    
                        
                            if($sql){
                                echo 'Success';    
                            }else{
                                echo "errorInput";    
                            }
                        }
                    
                    }
                
                    
                
        }else{
            echo "Error";
        }
    }
    function hapus($id){
        if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='2' ){
        if(empty($id)){
            echo "ERROR";
            
        }else{
            $this->db->delete('d_matpelguru',array('id_matpelguru'=>$id));
            echo "Success";
            }
        }
    }
    function detil($id){
        if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='2' ){
         //$id = $this->uri->segment(2);
          $data['infouser'] = $this->mdb->infouser();
          $data['namaguru']= $this->mdb->infouser();
            
         $data['title']= "Detil Mata Pelajaran";
         $this->db->join('r_matpel','r_matpel.id_matpel = d_matpelguru.id_matpel','left');
         $this->db->join('r_tahun','r_tahun.id_tahun=d_matpelguru.id_tahun','left');
         $this->db->join('r_kategori_matpel','r_kategori_matpel.id_katmapel=r_matpel.id_katmapel','inner');
         $data['mapel'] = $this->mdb->getDetil('d_matpelguru',array('id_matpelguru'=>$id));
         
         $this->db->join('d_nilai','d_nilai.id_matpelguru=d_matpelguru.id_matpelguru','inner');
         $this->db->join('d_siswa','d_siswa.nis=d_nilai.nis','inner');
         $siswa = $this->db->get_where('d_matpelguru',array('d_matpelguru.id_matpelguru'=>$id));
         $data['stat'] = $siswa->num_rows();
         
         $this->db->where(array('id_matpelguru'=>$id));
         
         $data['kelasikut']= $this->mdb->gettable('d_kelasmatpel');
         if($data['mapel']->id_guru === $data['infouser']->id_guru){
         $this->load->view('guru/mapel/detil',$data);
         }else{
             redirect('home','refresh');
         }
         
     }else{
         redirect('home','refresh');
     }
        
    }
    
    function addkelasmatpel($id){
        if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='2' ){
            
            $a = $this->mdb->infouser();
            $b = $this->mdb->getDetil('d_matpelguru',array('id_matpelguru'=>$id));
            if (empty($b)){
                echo "KOSONG";//JIKA ID TIDAK DITEMUKAN
            }else{
                if ($a->id_guru === $b->id_guru ){
                $data['infouser'] = $this->mdb->infouser();
                $data['namaguru']= $this->mdb->infouser();
                $data['matpel'] = $b;
                
                $data['kelas'] = $this->mdb->getKelas();
                $data['title'] = "";
                $this->load->view('guru/mapel/addkelas',$data);
                
          
                }else{
                redirect('home','refresh');
                }
         //$id = $this->uri->segment(2);
            }
          
        }else{
            redirect('home','refresh');
        }
    }
    function daftar(){
        if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='3' ){
            $data['infosiswa'] = $this->mdb->infosiswa();
            $data['namasiswa']= $this->mdb->infosiswa();
            $data['title'] = "MATA PELAJARAN SAYA";
            $id_siswa = $this->mdb->infosiswa();
            //echo $id_siswa->nis;
            //$this->db->where(array('status_aktif'=>'Y'));
            //$this->db->where('d_nilai_keterampilan.nis',$id_siswa->nis);
            //$this->db->where_not_in('d_nilai_keterampilan.nis',$id_siswa->nis);
            
            //$this->db->join('d_nilai_keterampilan','d_nilai_keterampilan.id_matpelguru= d_matpelguru.id_matpelguru','left');
            //$this->db->join('d_nilai_pengetahuan','d_nilai_pengetahuan.id_matpelguru= d_matpelguru.id_matpelguru','left');
            //$this->db->join('d_nilai_sikap','d_nilai_sikap.id_matpelguru= d_matpelguru.id_matpelguru','left');
            $this->db->join('r_tahun','r_tahun.id_tahun= d_matpelguru.id_tahun','inner');
            $this->db->join('d_guru','d_guru.id_guru= d_matpelguru.id_guru','inner');
            $this->db->select(array('d_matpelguru.id_matpelguru','r_tahun.tahun','d_matpelguru.nama_matpel','d_guru.nama_guru'));
            $data['isi'] = $this->mdb->gettable('d_matpelguru');
            //$data['isi'] = $this->mdb->gettableWhere('d_matpelguru',array('id_guru'=>$id_guru->id_guru));
            $this->load->view('siswa/mapel/daftar',$data);
        }else{
            redirect('home','refresh');
        }
    }
    
    function register(){
        $id = $this->uri->segment(3);
        if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='3' ){
            $id_siswa = $this->mdb->infosiswa();
            $nis = $id_siswa -> nis;
            //$this->db->join('d_nilai_keterampilan','d_nilai_keterampilan.id_matpelguru=d_matpelguru.id_matpelguru','inner');
            //$this->db->join('d_nilai_pengetahuan','d_nilai_pengetahuan.id_matpelguru=d_matpelguru.id_matpelguru','inner');
            //$this->db->join('d_nilai_sikap','d_nilai_sikap.id_matpelguru=d_matpelguru.id_matpelguru','inner');
            $this->db->join('d_nilai','d_nilai.id_matpelguru=d_matpelguru.id_matpelguru','inner');
            $a = $this->db->get_where('d_matpelguru', array('d_matpelguru.id_matpelguru'=>$id,'d_nilai.nis'=>$nis));
            $b = $a->num_rows();
            
        
            
            if($b === 0 )
                {
                //$this->db->insert('d_nilai_sikap',array('id_matpelguru'=>$id,'nis'=>$nis));
                //$this->db->insert('d_nilai_pengetahuan',array('id_matpelguru'=>$id,'nis'=>$nis));
                $this->db->insert('d_nilai',array('id_matpelguru'=>$id,'nis'=>$nis));
                echo "Success";
            }
            else
            {
                echo "Error";
            } 
        }else{
            echo "Error";
        }
        
    }
    //olah nilai satu table
    function olahnilai(){
        //INPUT NILAI KETERAMPILAN
        
        if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='2' ){
                $id = $this->uri->segment(4);
                $id_matpelguru = $this->uri->segment(3);
                $data['namaguru'] = $this->mdb->infouser();
                $data['title'] = "Masukkan data nilai keterampilan";
                $id_guru = $this->mdb->infouser();
                $aa = $this->db->get_where('d_matpelguru',array('id_matpelguru'=>$id_matpelguru));
                $da = $aa->num_rows();
                $ds = $aa->row();
                if (empty($da) || $ds->id_guru !== $id_guru->id_guru ){
                    //echo "error 1";
                    redirect('home','refresh');
                }else{
                    
                
                
                $this->db->join('d_nilai_sikap','d_matpelguru.id_matpelguru=d_nilai_sikap.id_matpelguru','inner');
                $this->db->join('d_nilai_keterampilan','d_matpelguru.id_matpelguru=d_nilai_keterampilan.id_matpelguru','inner');
                $this->db->join('d_nilai_pengetahuan','d_matpelguru.id_matpelguru=d_nilai_pengetahuan.id_matpelguru','inner');
                $this->db->join('d_siswa','d_nilai_keterampilan.nis=d_siswa.nis','inner');
                $this->db->join('d_kelas','d_kelas.id_kelas=d_siswa.id_kelas','inner');
                //$this->db->join('d_matpelguru','d_nilai_keterampilan.id_matpelguru=d_matpelguru.id_matpelguru','inner');
                $this->db->join('d_guru','d_guru.id_guru=d_matpelguru.id_guru','inner');
                $as = $this->db->get_where('d_matpelguru',array('d_nilai_sikap.nis'=>$id,'d_matpelguru.id_matpelguru'=>$id_matpelguru));
                $data['isi'] = $as->row();
                if ($data['isi']->id_guru !== $id_guru->id_guru){
                    redirect('home','refresh');
                }else{
                    
                    $this->load->view('guru/mapel/olahnilai',$data);
                    
                    }
                }
                
                
        }else{
            redirect('home','refresh');
        }
    }
    function aksiedit(){
    	if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='2' ){
    		$guru           = $this->mdb->infouser();
    		$id_matpelguru	= $this->input->post('id_matpelguru');
    		$id_guru        = $guru->id_guru;
    		$id_katmapel    = $this->input->post('id_katmapel');
    		$id_matpel      = $this->input->post('id_matpel');
    		$id_tahun       = $this->input->post('id_tahun');
    		$nama_matpel    = $this->input->post('nama_matpel');
    		if (empty($id_katmapel)|| empty($id_matpel)|| empty($id_tahun) || empty($nama_matpel)){
    			echo "ErrorForm";
    		}else{
    			//if($this->mdb->chkexist('d_matpelguru',array('id_guru'=>$id_guru,'id_matpel'=>$id_matpel,'id_tahun'=>$id_tahun,'nama_matpel'=>$nama_matpel)) >= 1){
    	
    				//echo 'dataDouble';
    	
    			//}else{
    				//$sql = $this->db->insert('d_matpelguru',array('id_guru'=>$id_guru,'id_matpel'=>$id_matpel,'id_tahun'=>$id_tahun,'nama_matpel'=>$nama_matpel));
    				
    				
    				$sql = $this->db->update('d_matpelguru',array('id_guru'=>$id_guru,'id_matpel'=>$id_matpel,'id_tahun'=>$id_tahun,'nama_matpel'=>$nama_matpel),array('id_matpelguru'=>$id_matpelguru));
    	
    				if($sql){
    					echo 'Success';
    				}else{
    					echo "errorInput";
    				}
    			//}
    	
    		}
    	
    	
    	
    	}else{
    		echo "Error";
    	}
    	 
    	
    }
    function edit(){
    	$id= $this->uri->segment(3);
    	if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='2' ){
    		$data['infouser'] = $this->mdb->infouser();
            $data['namaguru']= $this->mdb->infouser();
            $data['title'] = "TAMBAH MATA PELAJARAN SAYA";
            $data['kat_mapel']= $this -> mdb -> get_katmapel();
            $data['tahun']= $this -> mdb -> getTahun();
            $id_guru = $this->mdb->infouser();
            
    		$data['title']= "Edit Mata Pelajaran";
    		$this->db->join('r_matpel','r_matpel.id_matpel = d_matpelguru.id_matpel','left');
    		$this->db->join('r_tahun','r_tahun.id_tahun=d_matpelguru.id_tahun','left');
    		$this->db->join('r_kategori_matpel','r_kategori_matpel.id_katmapel=r_matpel.id_katmapel','inner');
    		$data['mapel'] = $this->mdb->getDetil('d_matpelguru',array('id_matpelguru'=>$id));
    		 
    		$this->db->where(array('id_matpelguru'=>$id));
    		 
    		//$data['kelasikut']= $this->mdb->gettable('d_kelasmatpel');
    		if($data['mapel']->id_guru === $data['infouser']->id_guru){
    			$this->load->view('guru/mapel/edit',$data);
    		}
    	}else{
    		redirect('home','refresh');
    	}
    }
    function berinilai(){
        $id = $this->uri->segment(3);
            if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='2' ){
                $data['namaguru'] = $this->mdb->infouser();
                $data['title'] = "NILAI SISWA";
                $id_guru = $this->mdb->infouser();
                $d = $this->db->get_where('d_matpelguru',array('id_matpelguru'=>$id));
                $dd = $d->row();
                $data['de'] = $dd;
                //$this->db->select(array('.d_siswa.nama_siswa','d_kelas.kelas','d_matpelguru.nama_matpel'));
                $this->db->where(array('d_matpelguru.id_matpelguru'=>$id));
                //$this->db->join('d_nilai_sikap','d_nilai_sikap.id_matpelguru=d_matpelguru.id_matpelguru','inner');
                //$this->db->join('d_nilai_pengetahuan','d_nilai_pengetahuan.id_matpelguru=d_matpelguru.id_matpelguru','inner');
                $this->db->join('d_nilai','d_nilai.id_matpelguru=d_matpelguru.id_matpelguru','inner');
                $this->db->join('d_siswa','d_siswa.nis=d_nilai.nis','inner');
                
                $this->db->join('d_kelas','d_kelas.id_kelas=d_siswa.id_kelas','inner');
                
                //$this->db->order_by('d_kelas.id_kelas','ASC');
                $data['isi'] = $this->mdb->gettable('d_matpelguru');
                if ($dd->id_guru !== $id_guru->id_guru){
                    redirect('home','refresh');
                }else{
                    
                    $this->load->view('guru/mapel/berinilai',$data);
                    
                }
                
            }else{
                redirect('home','refresh');
            }
    }
    
    function nilaisiswa(){
            $id = $this->uri->segment(3);
            if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='2' ){
                $data['namaguru'] = $this->mdb->infouser();
                $data['title'] = "NILAI SISWA";
                $id_guru = $this->mdb->infouser();
                $d = $this->db->get_where('d_matpelguru',array('id_matpelguru'=>$id));
                $dd = $d->row();
                $data['de'] = $dd;
                //$this->db->select(array('.d_siswa.nama_siswa','d_kelas.kelas','d_matpelguru.nama_matpel'));
                $this->db->where(array('d_matpelguru.id_matpelguru'=>$id));
                $this->db->join('d_nilai_sikap','d_nilai_sikap.id_matpelguru=d_matpelguru.id_matpelguru','inner');
                $this->db->join('d_nilai_pengetahuan','d_nilai_pengetahuan.id_matpelguru=d_matpelguru.id_matpelguru','inner');
                $this->db->join('d_siswa','d_siswa.nis=d_nilai_pengetahuan.nis','inner');
                
                $this->db->join('d_kelas','d_kelas.id_kelas=d_siswa.id_kelas','inner');
                $this->db->join('d_nilai_keterampilan','d_nilai_keterampilan.id_matpelguru=d_matpelguru.id_matpelguru','inner');
                //$this->db->order_by('d_kelas.id_kelas','ASC');
                $data['isi'] = $this->mdb->gettable('d_matpelguru');
                if ($dd->id_guru !== $id_guru->id_guru){
                    redirect('home','refresh');
                }else{
                    
                    $this->load->view('guru/mapel/nilai',$data);
                    
                }
                
            }else{
                redirect('home','refresh');
            }
        }
    
    function nilai_nk(){
        //INPUT NILAI KETERAMPILAN
        if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='2' ){
                $id = $this->uri->segment(3);
                $data['namaguru'] = $this->mdb->infouser();
                $data['title'] = "Masukkan data nilai keterampilan";
                $id_guru = $this->mdb->infouser();
                $this->db->join('d_nilai_keterampilan','d_matpelguru.id_matpelguru=d_nilai_keterampilan.id_matpelguru','inner');
                $d = $this->db->get_where('d_matpelguru',array('id_nk'=>$id));
                $dd = $d->row();
                
                $this->db->join('d_siswa','d_nilai_keterampilan.nis=d_siswa.nis','inner');
                $this->db->join('d_kelas','d_kelas.id_kelas=d_siswa.id_kelas','inner');
                $this->db->join('d_matpelguru','d_nilai_keterampilan.id_matpelguru=d_matpelguru.id_matpelguru','inner');
                $as = $this->db->get_where('d_nilai_keterampilan',array('id_nk'=>$id));
                $data['isi'] = $as->row();
                if ($dd->id_guru !== $id_guru->id_guru){
                    redirect('home','refresh');
                }else{
                    
                    $this->load->view('guru/mapel/nilai_nk',$data);
                    
                }
        
                
                
        }else{
            redirect('home','refresh');
        }
    }
    function editnk(){
        if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='2' ){
            //Check apakah no
            $id_nk = $this->input->post('id_nk');
            
            
            $tp1 = $this->input->post('tp1');
            $tp2 = $this->input->post('tp2');
            $tp3 = $this->input->post('tp3');
            $tp4 = $this->input->post('tp4');
            $p1 = $this->input->post('p1');
            $p2 = $this->input->post('p2');
            $p3 = $this->input->post('p3');
            $p4 = $this->input->post('p4');
            $pr1 = $this->input->post('pr1');
            $pr2 = $this->input->post('pr2');
            $pr3 = $this->input->post('pr3');
            $rerata_tp = array_sum(array($tp1,$tp2,$tp3,$tp4))/ (cekno($tp1)+cekno($tp2)+cekno($tp3)+cekno($tp4));
            $project = array_sum(array($p1,$p2,$p3,$p4))/ (cekno($p1)+cekno($p2)+cekno($p3)+cekno($p4));
            $porto = array_sum(array($pr1,$pr2,$pr3))/ (cekno($pr1)+cekno($pr2)+cekno($pr3));
            $nilai_ratusan = array_sum(array($rerata_tp,$project,$porto)) / (cekno($rerata_tp)+cekno($project)+cekno($porto));
            $bilangan4 = bilangan4($nilai_ratusan);
            $predikat = predikat($nilai_ratusan);
           $d =  $this->db->update('d_nilai_keterampilan', array('tp1'=>$tp1,'tp2'=>$tp2,'tp3'=>$tp3,'tp4'=>$tp4 ,'p1'=>$p1,'p2'=>$p2, 'p3'=>$p3,'p4'=>$p4, 'pr1'=>$pr1,'pr2'=>$pr2,'pr3'=>$pr3,'rerata_tp'=>$rerata_tp,'project'=>$project,'porto'=>$porto,'nilai_ratusan'=>$nilai_ratusan,'nilai4'=>$bilangan4,'predikat'=>$predikat), array('id_nk'=>$id_nk));
           
           
            
           if($d){
                
                echo "Success";
                //echo array_sum(array($tp1,$tp2,$tp3,$tp4))/count(array($tp1,$tp2,$tp3,$tp4));
                //echo array_sum(array($tp1,$tp2,$tp3,$tp4))/count(cekno(array($tp1,$tp2,$tp3,$tp4)));
                //echo cekno($tp1)+cekno($tp2)+cekno($tp3)+cekno($tp4);
            }else{
                echo "Error";
            }
    
    
        
        }else{
        
        }
    }
    function nilai($id){
        if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='3' ){
            
            $data['infosiswa'] = $this->mdb->infosiswa();
            $data['namasiswa']= $this->mdb->infosiswa();
            $d = $this->mdb->infosiswa();
            
            //$id_siswa = $d -> row();
            
            $nis = $d -> nis;
            //nilai keterampilan
            
            //$this->db->join('d_matpelguru','d_matpelguru.id_matpelguru = d_nilai_keterampilan.id_matpelguru','inner');
            //$this->db->where(array('d_nilai_keterampilan.nis'=>$nis,'d_nilai_keterampilan.id_matpelguru'=>$id));
            //$this->db->join('d_siswa','d_siswa.nis=d_nilai_keterampilan.nis','inner');
            //$nk = $this->db->get('d_nilai_keterampilan');
             //$data['nilai_keterampilan'] = $nk->row();
            //nilai pengetahuan
            //$this->db->join('d_matpelguru','d_matpelguru.id_matpelguru = d_nilai_pengetahuan.id_matpelguru','inner');
            //$this->db->join('d_siswa','d_siswa.nis=d_nilai_pengetahuan.nis','inner');
            //$this->db->where(array('d_nilai_pengetahuan.nis'=>$nis,'d_nilai_pengetahuan.id_matpelguru'=>$id));
            //$np = $this->db->get('d_nilai_pengetahuan');
            //$data['nilai_pengetahuan'] = $np->row();
            //nilai sikap
            //$this->db->join('d_matpelguru','d_matpelguru.id_matpelguru = d_nilai_sikap.id_matpelguru','inner');
            //$this->db->join('d_siswa','d_siswa.nis=d_nilai_sikap.nis','inner');
            //$this->db->where(array('d_nilai_sikap.nis'=>$nis,'d_nilai_sikap.id_matpelguru'=>$id));
            //$nsikap = $this->db->get('d_nilai_sikap');
            //$data['nilai_sikap'] = $nsikap->row();
            
            $this->db->join('d_siswa','d_siswa.nis = d_nilai.nis','inner');
            $this->db->join('d_matpelguru','d_matpelguru.id_matpelguru = d_nilai.id_matpelguru','inner');
            $this->db->where(array('d_nilai.nis'=>$nis,'d_nilai.id_matpelguru'=>$id));
            $nilai = $this->db->get('d_nilai');
            $data['nilai'] = $nilai->row();
            
            $data['title'] = "NILAI MAPEL ";
            if(empty($data['nilai']->nis)){
               redirect('home');
            }else{
            
            
            $this->load->view('siswa/mapel/nilai',$data);
            }
        }else{
            redirect('home','refresh');
        }
    }

    function entrynilai(){
        if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='2'){
            $id = $this->uri->segment(3);
            $data['namaguru'] = $this->mdb->infouser();
            $data['title'] = 'Olah Nilai Siswa';
            $id_guru = $this->mdb->infouser();
            $this->db->join('d_matpelguru','d_matpelguru.id_matpelguru = d_nilai.id_matpelguru','inner');
            $this->db->join('d_guru','d_guru.id_guru = d_matpelguru.id_guru','inner');
            $this->db->join('d_siswa','d_siswa.nis= d_nilai.nis','inner');
            $this->db->join('d_kelas','d_kelas.id_kelas = d_siswa.id_kelas','inner');
            $d = $this->db->get_where('d_nilai',array('d_matpelguru.id_matpelguru'=>$id));
            $data['isi'] = $d->row();
            $chk = $d->row();


            $this->db->join('d_matpelguru','d_matpelguru.id_matpelguru = d_nilai.id_matpelguru','inner');
            $this->db->join('d_guru','d_guru.id_guru = d_matpelguru.id_guru','inner');
            $this->db->join('d_siswa','d_siswa.nis= d_nilai.nis','inner');
            $this->db->join('d_kelas','d_kelas.id_kelas = d_siswa.id_kelas','inner');
            //$d = $this->db->get_where('d_nilai',array('d_matpelguru.id_matpelguru'=>$id));
            $this->db->where(array('d_matpelguru.id_matpelguru'=>$id));
            $data['list'] = $this->mdb->gettable('d_nilai');
            if (empty($chk)){
                    //jika belum ada siswa yang mendaftar
                    redirect('mapelsaya','refresh');
            }else{
                if($chk->id_guru !== $id_guru->id_guru){
                    redirect('home','refresh');
                }else{
                    $this->load->view('guru/mapel/entrynilai',$data);
                }
            }
        }else{
            redirect('home','refresh');
        }
    }
    function nilai_pe(){
        //INPUT NILAI KETERAMPILAN
        if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='2' ){
                $id = $this->uri->segment(3);
                $data['namaguru'] = $this->mdb->infouser();
                $data['title'] = "Masukkan data nilai Pengetahuan";
                $id_guru = $this->mdb->infouser();
                $this->db->join('d_nilai_pengetahuan','d_matpelguru.id_matpelguru=d_nilai_pengetahuan.id_matpelguru','inner');
                $d = $this->db->get_where('d_matpelguru',array('id_d_nilai_pengetahuan'=>$id));
                $dd = $d->row();
                
                $this->db->join('d_siswa','d_nilai_pengetahuan.nis=d_siswa.nis','inner');
                $this->db->join('d_kelas','d_kelas.id_kelas=d_siswa.id_kelas','inner');
                $this->db->join('d_matpelguru','d_nilai_pengetahuan.id_matpelguru=d_matpelguru.id_matpelguru','inner');
                $as = $this->db->get_where('d_nilai_pengetahuan',array('id_d_nilai_pengetahuan'=>$id));
                $data['isi'] = $as->row();
                if (empty($dd)){
                    
                }else{
                if ($dd->id_guru !== $id_guru->id_guru){
                    redirect('home','refresh');
                }else{
                    
                    $this->load->view('guru/mapel/nilai_pe',$data);
                    
                    }
                }
                
                
        }else{
            redirect('home','refresh');
        }
    }
    function editnp(){
        if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='2' ){
            //Check apakah no
            $id_d_nilai_pengetahuan = $this->input->post('id_d_nilai_pengetahuan');
            
            
            $uh1 = $this->input->post('uh1');
            $uh2 = $this->input->post('uh2');
            $uh3 = $this->input->post('uh3');
            $uh4 = $this->input->post('uh4');
            $t1 = $this->input->post('t1');
            $t2 = $this->input->post('t2');
            $t3 = $this->input->post('t3');
            $t4 = $this->input->post('t4');
            $UTS = $this->input->post('UTS');
            $UAS = $this->input->post('UAS');
            $keterangan = $this->input->post('keterangan');
            $nuh = array_sum(array($uh1,$uh2,$uh3,$uh4))/ (cekno($uh1)+cekno($uh2)+cekno($uh3)+cekno($uh4));
            $rata_tugas = array_sum(array($t1,$t2,$t3,$t4))/ (cekno($t1)+cekno($t2)+cekno($t3)+cekno($t4));
            $total_harian_dan_tugas = array_sum(array($nuh,$rata_tugas))/(cekno($nuh)+cekno($rata_tugas));
            $total = array_sum(array($UTS,$UAS))/ (cekno($UTS)+cekno($UAS));
            
            $bilangan4 = bilangan4($total);
            $predikat = predikat(array_sum(array($UTS,$UAS))/ (cekno($UTS)+cekno($UAS)));
           $d =  $this->db->update('d_nilai_pengetahuan', array('uh1'=>$uh1,'uh2'=>$uh2,'uh3'=>$uh3,'uh4'=>$uh4 ,'t1'=>$t1,'t2'=>$t2, 't3'=>$t3,'t4'=>$t4, 'UAS'=>$UAS,'UTS'=>$UTS,'keterangan'=>$keterangan,'nuh'=>$nuh,'rata_tugas'=>$rata_tugas,'total_harian_dan_tugas'=>$total_harian_dan_tugas,'total'=>$total,'skala4'=>$bilangan4,'predikat'=>$predikat), array('id_d_nilai_pengetahuan'=>$id_d_nilai_pengetahuan));
           
           
            
           if($d){
                
                echo "Success";
                //echo array_sum(array($tp1,$tp2,$tp3,$tp4))/count(array($tp1,$tp2,$tp3,$tp4));
                //echo array_sum(array($tp1,$tp2,$tp3,$tp4))/count(cekno(array($tp1,$tp2,$tp3,$tp4)));
                //echo cekno($tp1)+cekno($tp2)+cekno($tp3)+cekno($tp4);
            }else{
                echo "Error";
            }
    
    
        
        }else{
        
        }
    }
    
    //fungsi penilaian
    function penilaian(){
        //INPUT NILAI KETERAMPILAN
        if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='2' ){
                $id = $this->uri->segment(3);
                $data['namaguru'] = $this->mdb->infouser();
                $data['title'] = "Masukkan data nilai keterampilan";
                $id_guru = $this->mdb->infouser();
                $this->db->join('d_nilai','d_matpelguru.id_matpelguru=d_nilai.id_matpelguru','inner');
                $d = $this->db->get_where('d_matpelguru',array('id_nilai'=>$id));
                $dd = $d->row();
                
                $this->db->join('d_siswa','d_nilai.nis=d_siswa.nis','inner');
                $this->db->join('d_kelas','d_kelas.id_kelas=d_siswa.id_kelas','inner');
                $this->db->join('d_matpelguru','d_nilai.id_matpelguru=d_matpelguru.id_matpelguru','inner');
                $as = $this->db->get_where('d_nilai',array('id_nilai'=>$id));
                $data['isi'] = $as->row();
                if ($dd->id_guru !== $id_guru->id_guru){
                    redirect('home','refresh');
                }else{
                    
                    $this->load->view('guru/mapel/penilaian',$data);
                    
                }
        
                
                
        }else{
            redirect('home','refresh');
        }
    }

    function testarray(){
        $a = array(99,0.00,80,98.88);
        $z = rata_rata($a);
        echo count(array_filter($a));
        echo "<br>";
        echo $z;

    }
    function aksipenilaian(){
        if($this->session->userdata('username',TRUE)&& $this->session->userdata('level')==='2'){
                   
                               
                $ms                         = new $this->input;
                $id_nilai                   = $ms->post('id_nilai');
                $tp1                        = $ms->post('tp1');
                $tp2                        = $ms->post('tp2');
                $tp3                        = $ms->post('tp3');
                $tp4                        = $ms->post('tp4');
                $rerata_tp                  = rata_rata(array($tp1,$tp2,$tp3,$tp4));
                $p1                         = $ms->post('p1');
                $p2                         = $ms->post('p2');
                $p3                         = $ms->post('p3');
                $p4                         = $ms->post('p4');
                $project                    = rata_rata(array($p1,$p2,$p3,$p4));//array_sum(array($p1,$p2,$p3,$p4))/ (cekno($p1)+cekno($p2)+cekno($p3)+cekno($p4));
                $pr1                        = $ms->post('pr1');
                $pr2                        = $ms->post('pr2');
                $pr3                        = $ms->post('pr3');
                $porto                      = rata_rata(array($pr1,$pr2,$pr3));//array_sum(array($pr1,$pr2,$pr3))/ (cekno($pr1)+cekno($pr2)+  cekno($pr3));
                $keterangan_keterampilan    = $ms->post('keterangan_keterampilan');
                //$nilai_ket_ratusan          = array_sum(array($rerata_tp,$project,$porto)) / (cekno($rerata_tp)+cekno($project)+cekno($porto));
                $nilai_ket_ratusan          = ((2*$rerata_tp)+$project+$porto )/4;
                $nilai4_ket                 = bilangan4($nilai_ket_ratusan);
                $predikat_ket               = predikat($nilai_ket_ratusan);
                //===========================================================
                $uh1                        = $ms->post('uh1');
                $uh2                        = $ms->post('uh2');
                $uh3                        = $ms->post('uh3');
                $uh4                        = $ms->post('uh4');
                $nuh                        = rata_rata(array($uh1,$uh2,$uh3,$uh4));
                $t1                         = $ms->post('t1');
                $t2                         = $ms->post('t2');
                $t3                         = $ms->post('t3');
                $t4                         = $ms->post('t4');
                $rata_tugas                 = rata_rata(array($t1,$t2,$t3,$t4));
                $UTS                        = $ms->post('UTS');
                $UAS                        = $ms->post('UAS');
                $keterangan_pengetahuan     = $ms->post('keterangan_pengetahuan');
                            
                $total_harian_dan_tugas     = rata_rata(array($nuh,$rata_tugas));
                //$total                      = array_sum(array($UTS,$UAS))/ (cekno($UTS)+cekno($UAS));
                $total                      = (2*$total_harian_dan_tugas + $UTS + $UAS) / 4;
                $skala4_pengetahuan         = bilangan4($total);
                $predikat_pengetahuan       = predikat($total);
            //============================================
                $observasi1                 = $ms->post('observasi1');
                $observasi2                 = $ms->post('observasi2');
                $rata_observasi             = rata_rata(array($observasi1,$observasi2));//array_sum(array($observasi1,$observasi2))/ (cekno($observasi1)+cekno($observasi2));
                $penilaian_teman1           = $ms->post('penilaian_teman1');
                $penilaian_teman2           = $ms->post('penilaian_teman2');
                $rata_penilaianteman         = rata_rata(array($penilaian_teman1,$penilaian_teman2));
                $penilaian_diri1            = $ms->post('penilaian_diri1');
                $penilaian_diri2            = $ms->post('penilaian_diri2');
                $penilaian_diri3            = $ms->post('penilaian_diri3');
                $rata_penilaiandiri         = rata_rata(array($penilaian_diri1,$penilaian_diri2,$penilaian_diri3));
                $jurnal1                    = $ms->post('jurnal1');
                $jurnal2                    = $ms->post('jurnal2');
                $rata_jurnal                = rata_rata(array($jurnal1,$jurnal2)); //array_sum(array($jurnal1,$jurnal2))/ (cekno($jurnal1)+cekno($jurnal2));
                $desc_kemajuan_belajar      = $ms->post('desc_kemajuan_belajar');
                         

                
                
                $nilai_raport               = ($rata_observasi+$rata_penilaiandiri+$rata_penilaianteman+$rata_jurnal) / 4;
                $skala4_sikap               = bilangan4($nilai_raport);
                $predikat_sikap             = predikat($nilai_raport);
                $d = $this->db->update('d_nilai',
                        array('tp1' => $tp1 , 'tp2'=>$tp2,'tp3'=>$tp3, 'tp4'=>$tp4,
                            'rerata_tp'=>$rerata_tp,'p1'=>$p1,'p2'=>$p2,'p3'=>$p3,
                            'p4'=>$p4,'project'=>$project,'pr1'=>$pr1,'pr2'=>$pr2,
                            'pr3'=>$pr3,'porto'=>$porto,'keterangan_keterampilan'=>$keterangan_keterampilan,
                            'nilai_ratusan'=>$nilai_ket_ratusan , 'nilai4_keterampilan'=>$nilai4_ket,'predikat_keterampilan'=>$predikat_ket,
                            'uh1'=>$uh1,'uh2'=>$uh2,'uh3'=>$uh3,'uh4'=>$uh4,'nuh'=>$nuh,'t1'=>$t1,'t2'=>$t2,'t3'=>$t3,'t4'=>$t4,'rata_tugas'=>$rata_tugas,
                            'total_harian_dan_tugas'=>$total_harian_dan_tugas,'total_pengetahuan'=>$total,'UTS'=>$UTS,'UAS'=>$UAS,
                            'skala4_pengetahuan'=> $skala4_pengetahuan,'predikat_pengetahuan'=>$predikat_pengetahuan,'keterangan_pengetahuan'=>$keterangan_pengetahuan,
                            'observasi1'=>$observasi1,'observasi2'=>$observasi2,'rerata_observasi'=>$rata_observasi,'penilaian_diri1'=>$penilaian_diri1,
                            'penilaian_diri2'=>$penilaian_diri2,'penilaian_diri3'=>$penilaian_diri3,'rerata_penilaian_diri'=>$rata_penilaiandiri,
                            'penilaian_teman1'=>$penilaian_teman1,'penilaian_teman2'=>$penilaian_teman2,'rerata_penilaian_teman'=>$rata_penilaianteman,
                            'jurnal1'=>$jurnal1,'jurnal2'=>$jurnal2 , 'rerata_jurnal'=>$rata_jurnal,'desc_kemajuan_belajar'=>$desc_kemajuan_belajar,
                            'nilai_raport'=>$nilai_raport,'predikat_sikap'=>$predikat_sikap,'skala4_sikap'=>$skala4_sikap
                        ),
                        array('id_nilai'=>$id_nilai));
                if($d){
                    echo "Success";
                 
                }else{
                    echo "Error";
                }
        }else{
            echo "ErrorLogin";
        }
    }

    function ajaxpostnilai(){
        if($this->session->userdata('username',TRUE)&& $this->session->userdata('level')==='2'){
            if(!empty($_POST)){
                foreach($_POST as $field_name => $val)
                 {
                    //clean post values
                    $field_userid = strip_tags(trim($field_name));
                    $val = strip_tags(trim(mysql_real_escape_string($val)));

                    //from the fieldname:user_id we need to get user_id
                    $split_data = explode(':', $field_userid);
                    $user_id = $split_data[1];
                    $field_name = $split_data[0];
                    if(!empty($user_id) && !empty($field_name) && !empty($val) || is_float($val) || is_numeric($val))
                        {
                            $this->db->update('d_nilai',array(''.$field_name.''=>$val),array('id_nilai'=>$user_id));
                            //update the values
                            //mysql_query("UPDATE user_details SET $field_name = '$val' WHERE user_id = $user_id") or mysql_error();
                            if($this->mdb->mRata($user_id)){
                                
                                echo "Data Berhasil diperbarui";        
                            }else{
                                echo "Nilai tidak bisa dimasukkan";
                            }
                            
                        
                        } else {
                        echo "Gagal Memasukkan nilai";
                        }
            

                }

            }
        }

    }

    function deskripsi(){
        if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='2'){
            $id = $this->uri->segment(3);
            $data['namaguru'] = $this->mdb->infouser();
            $data['title'] = 'Olah Deskripsi Siswa';
            $id_guru = $this->mdb->infouser();
            $this->db->join('d_matpelguru','d_matpelguru.id_matpelguru = d_nilai.id_matpelguru','inner');
            $this->db->join('d_guru','d_guru.id_guru = d_matpelguru.id_guru','inner');
            $this->db->join('d_siswa','d_siswa.nis= d_nilai.nis','inner');
            $this->db->join('d_kelas','d_kelas.id_kelas = d_siswa.id_kelas','inner');
            $d = $this->db->get_where('d_nilai',array('d_matpelguru.id_matpelguru'=>$id));
            $data['isi'] = $d->row();
            $chk = $d->row();


            $this->db->join('d_matpelguru','d_matpelguru.id_matpelguru = d_nilai.id_matpelguru','inner');
            $this->db->join('d_guru','d_guru.id_guru = d_matpelguru.id_guru','inner');
            $this->db->join('d_siswa','d_siswa.nis= d_nilai.nis','inner');
            $this->db->join('d_kelas','d_kelas.id_kelas = d_siswa.id_kelas','inner');
            //$d = $this->db->get_where('d_nilai',array('d_matpelguru.id_matpelguru'=>$id));
            $this->db->where(array('d_matpelguru.id_matpelguru'=>$id));
            $data['list'] = $this->mdb->gettable('d_nilai');
            if (empty($chk)){
                    //jika belum ada siswa yang mendaftar
                    redirect('mapelsaya','refresh');
            }else{
                if($chk->id_guru !== $id_guru->id_guru){
                    redirect('home','refresh');
                }else{
                    $this->load->view('guru/mapel/deskripsi',$data);
                }
            }
        }else{
            redirect('home','refresh');
        }
    }

    function ajaxpostdeskripsi(){
        if($this->session->userdata('username',TRUE)&& $this->session->userdata('level')==='2'){
            if(!empty($_POST)){
                foreach($_POST as $field_name => $val)
                 {
                    //clean post values
                    $field_userid = strip_tags(trim($field_name));
                    $val = strip_tags(trim(mysql_real_escape_string($val)));

                    //from the fieldname:user_id we need to get user_id
                    $split_data = explode(':', $field_userid);
                    $user_id = $split_data[1];
                    $field_name = $split_data[0];
                    if(!empty($user_id) && !empty($field_name) && !empty($val) || is_float($val) || is_numeric($val))
                        {
                            $this->db->update('d_nilai',array(''.$field_name.''=>$val),array('id_nilai'=>$user_id));
                            echo "Berhasil memperbarui deskripsi";
                            
                        
                        } else {
                        echo "Deskripsi tidak dimasukkan ke database";
                        }
            

                }

            }
        }

    }
    function keluarkansiswa(){
    	if($this->session->userdata('username',TRUE)&& $this->session->userdata('level')==='2'){
    		//ID MATPEL
    		$id = $this->uri->segment(3);
    		//id_siswa
    		$nis = $this->uri->segment(4);
    		//check Harus no
    		
    			//operasi hapus database
    			$a = $this->db->delete('d_nilai',array('id_matpelguru'=>$id,'nis'=>$nis));
    			if($a){
    				echo "Sukses";
    			}else{
    				echo "Gagal";
    			}
    			
    			
    		
    		
    	}else{
    		redirect('home','refresh');
    	}
    }
    function unregister(){
         if($this->session->userdata('username',TRUE)&& $this->session->userdata('level')==='3'){
             $id = $this->uri->segment(3);
             $id_siswa = $this->mdb->infosiswa();
             if(!empty($id)){
                 
                 //$this->db->where(array('id_nilai'=>$id));
                 $a = $this->db->delete('d_nilai',array('id_matpelguru'=>$id,'nis'=>$id_siswa->nis));
                 if($a){
                     echo "Sukses";
                 }else{
                     echo "Gagal";
                 }
                 
             }else{
                 
             }
         }else{
             echo "noLoginYet";
         }
    }
    
    function terdaftar(){
    	if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='2'){
    		//melihat daftar siswa terdaftar
    		$id = $this->uri->segment(3);
    		$data['namaguru'] = $this->mdb->infouser();
    		$data['title'] = 'Siswa terdaftar';
    		$guru = $this->mdb->infouser();

    		if (empty($id) || !is_numeric($id) ){
    			redirect('home','refresh');
    		}else{
    			//validasi apakah matpel guru dan id guru
    			$id_guru = $guru->id_guru;
    			$this->db->join('d_nilai','d_nilai.id_matpelguru = d_matpelguru.id_matpelguru','inner');
    			//$this->db->where(array('id_nilai'=>$id));
    			//$this->mdb->gettable('d_matpelguru');
    			$aa = $this->mdb->ambilBaris('d_matpelguru',array('d_matpelguru.id_matpelguru'=>$id));
    			//$aa = $this->mdb->ambilBaris('d_nilai','id_nilai= $id');
    			$da = $aa->id_guru;
    			if($this->mdb->chkequal($id_guru,$da)){
    				//echo "SESUAI";
    				$this->db->join('d_matpelguru','d_matpelguru.id_matpelguru = d_nilai.id_matpelguru','inner');
    				$this->db->join('d_guru','d_guru.id_guru = d_matpelguru.id_guru','inner');
    				$this->db->join('d_siswa','d_siswa.nis= d_nilai.nis','inner');
    				$this->db->join('d_kelas','d_kelas.id_kelas = d_siswa.id_kelas','inner');
    				$d = $this->db->get_where('d_nilai',array('d_matpelguru.id_matpelguru'=>$id));
    				$data['isi'] = $d->row();
    				$chk = $d->row();
    				
    				
    				$this->db->join('d_matpelguru','d_matpelguru.id_matpelguru = d_nilai.id_matpelguru','inner');
    				$this->db->join('d_guru','d_guru.id_guru = d_matpelguru.id_guru','inner');
    				$this->db->join('d_siswa','d_siswa.nis= d_nilai.nis','inner');
    				$this->db->join('d_kelas','d_kelas.id_kelas = d_siswa.id_kelas','inner');
    				//$d = $this->db->get_where('d_nilai',array('d_matpelguru.id_matpelguru'=>$id));
    				$this->db->where(array('d_matpelguru.id_matpelguru'=>$id));
    				$data['list'] = $this->mdb->gettable('d_nilai');
    				$this->load->view('guru/mapel/terdaftar',$data);
    				//echo json_encode($data['list'])
    				
    			}else{
    				//redirect
    				redirect('home','refresh');
    				//echo "TIDAK SAMA";
    				//echo '</p>';
    				//echo $da;
    				//echo '</p>';
    				//echo $id_guru;
    			}
    			
    		}
    		
    	}else{
    		redirect('home','refresh');
    	}
    }

}
