<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Walas extends CI_Controller {
//Halaman Walas. SMK Negeri 1 Kota Bekasi
    function __construct() {
        parent::__construct();
        $this->load->model(array('msuratmasuk','mdb'));
        $this->load->helper(array('text','form'));
        $this->load->library('dompdf_lib');   
        
        
    }
    
    function index(){
        if($this->session->userdata('level')=== '2' && $this->mdb->chkwalas() === 1  ){
        $id_guru = $this->mdb->infouser();
        
        $data['namaguru'] = $this->mdb->infouser();
       
        $this->db->join('d_walas','d_walas.id_guru = d_guru.id_guru','inner');
        $this->db->join('d_kelas','d_kelas.id_kelas = d_walas.id_kelas','inner');
        $this->db->join('d_siswa','d_kelas.id_kelas = d_siswa.id_kelas','inner');
        $this->db->where(array('d_guru.id_guru'=>$id_guru->id_guru));
        $this->db->order_by('d_siswa.nis','asc');
        $data['list'] = $this->mdb->gettable('d_guru');
        
        $this->db->join('d_walas','d_walas.id_guru = d_guru.id_guru','inner');
        $this->db->join('d_kelas','d_kelas.id_kelas = d_walas.id_kelas','inner');
        $this->db->join('d_siswa','d_kelas.id_kelas = d_siswa.id_kelas','inner');
        $this->db->where(array('d_guru.id_guru'=>$id_guru->id_guru));
        $dd = $this->db->get('d_guru');
        $data['dtl'] = $dd->row();
        
        
        $this->load->view('guru/mapel/walas',$data);
        
        }else{
            redirect('home','refresh');
        }
        
    }
    
    function nilaiproses(){
            if($this->session->userdata('level')=== '2' && $this->mdb->chkwalas() === 1  ){
                $nis = $this->uri->segment(3);
                $tahun =  $this->mdb->getTahunAktif();
                $id_tahun = $tahun->id_tahun;
                if (empty($nis) || !is_numeric($nis)){
                    //nis tidak boleh kosong
                    redirect('home','refresh');

                }else{

                    //query untuk siswa yng belum terdaftar
                    $this->db->join('d_kelas','d_kelas.id_kelas = d_siswa.id_kelas','inner');
                    $data['siswa']= $this->mdb->gettable('d_siswa');

                    //query jika nis diisi
                    $this->db->join('d_matpelguru','d_matpelguru.id_matpelguru = d_nilai.id_matpelguru','inner');
            $this->db->join('d_guru','d_guru.id_guru = d_matpelguru.id_guru','inner');
            $this->db->join('r_tahun','r_tahun.id_tahun=d_matpelguru.id_tahun','inner');
            $this->db->join('d_siswa','d_siswa.nis = d_nilai.nis','inner');
            $this->db->join('r_matpel','r_matpel.id_matpel = d_matpelguru.id_matpel','inner');
            $this->db->join('r_kategori_matpel','r_kategori_matpel.id_katmapel = r_matpel.id_katmapel','inner');
            $this->db->where(array('d_nilai.nis'=>$nis,'r_tahun.id_tahun'=>$id_tahun));
            $this->db->order_by('r_matpel.id_katmapel','asc');
            $data['isi'] = $this->mdb->gettable('d_nilai');
            //=====================================
            
            //walas
            $this->db->join('d_kelas','d_kelas.id_kelas = d_walas.id_kelas','inner');
            $this->db->join('d_guru','d_guru.id_guru = d_walas.id_guru');
            $this->db->join('d_siswa','d_siswa.id_kelas = d_kelas.id_kelas','inner');
            $this->db->where(array('d_siswa.nis'=>$nis));
            $da = $this->db->get('d_walas');
            $data['walas'] = $da->row();
            
            
            //Detil
            $this->db->join('d_nilai','d_nilai.nis=d_siswa.nis','left');

            $this->db->join('d_kelas','d_kelas.id_kelas = d_siswa.id_kelas','inner');
            //$this->db->join('r_kategori_matpel','r_kategori_matpel.id_katmapel = r_matpel.id_katmapel','inner');
            $this->db->where(array('d_siswa.nis'=>$nis,'r_tahun.id_tahun'=>$id_tahun));
            //$this->db->order_by('r_matpel.id_katmapel','asc');
            
            $dd = $this->db->get(array('d_siswa','r_tahun'));
            $data['dtl'] = $dd->row(); 
            //============
                $html = $this->load->view('siswa/mapel/nilaiproses',$data,true);
                $namafile = "".$data['dtl']->nama_siswa." nilai_proses ". date('Y-m-d')."";
                $dompdf = new DOMPDF();
                $dompdf->add_info('Title', 'e-Raport Siakad SMK Negeri 1 Kota Bekasi');
                $dompdf->load_html($html);
                $dompdf->set_paper("A4","potrait");
                $dompdf->render();
                $dompdf->stream($namafile.".pdf", array("Attachment" => 1));                               
            


                }

            }else{
                redirect('home','refresh');
            }
    }


    function nilairaport(){
            if($this->session->userdata('level')=== '2' && $this->mdb->chkwalas() === 1  ){
                $nis = $this->uri->segment(3);
                $tahun =  $this->mdb->getTahunAktif();
                $id_tahun = $tahun->id_tahun;
                if (empty($nis) || !is_numeric($nis)){
                    //nis tidak boleh kosong
                    redirect('home','refresh');

                }else{

                    //query untuk siswa yng belum terdaftar
                    $this->db->join('d_kelas','d_kelas.id_kelas = d_siswa.id_kelas','inner');
                    $data['siswa']= $this->mdb->gettable('d_siswa');

                    //query jika nis diisi
                    $this->db->join('d_matpelguru','d_matpelguru.id_matpelguru = d_nilai.id_matpelguru','inner');
            $this->db->join('d_guru','d_guru.id_guru = d_matpelguru.id_guru','inner');
            $this->db->join('r_tahun','r_tahun.id_tahun=d_matpelguru.id_tahun','inner');
            $this->db->join('d_siswa','d_siswa.nis = d_nilai.nis','inner');
            $this->db->join('r_matpel','r_matpel.id_matpel = d_matpelguru.id_matpel','inner');
            $this->db->join('r_kategori_matpel','r_kategori_matpel.id_katmapel = r_matpel.id_katmapel','inner');
            $this->db->where(array('d_nilai.nis'=>$nis,'r_tahun.id_tahun'=>$id_tahun));
            $this->db->order_by('r_matpel.id_katmapel','asc');
            $data['isi'] = $this->mdb->gettable('d_nilai');
            //=====================================
            
            //walas
            $this->db->join('d_kelas','d_kelas.id_kelas = d_walas.id_kelas','inner');
            $this->db->join('d_guru','d_guru.id_guru = d_walas.id_guru');
            $this->db->join('d_siswa','d_siswa.id_kelas = d_kelas.id_kelas','inner');
            $this->db->where(array('d_siswa.nis'=>$nis));
            $da = $this->db->get('d_walas');
            $data['walas'] = $da->row();
            
            
            //Detil
            $this->db->join('d_nilai','d_nilai.nis=d_siswa.nis','left');

            $this->db->join('d_kelas','d_kelas.id_kelas = d_siswa.id_kelas','inner');
            //$this->db->join('r_kategori_matpel','r_kategori_matpel.id_katmapel = r_matpel.id_katmapel','inner');
            $this->db->where(array('d_siswa.nis'=>$nis,'r_tahun.id_tahun'=>$id_tahun));
            //$this->db->order_by('r_matpel.id_katmapel','asc');
            
            $dd = $this->db->get(array('d_siswa','r_tahun'));
            $data['dtl'] = $dd->row(); 
            //============
                $html = $this->load->view('siswa/mapel/nilairaport',$data,true);
                $namafile = "".$data['dtl']->nama_siswa." nilai_raport ". date('Y-m-d')."";
                $dompdf = new DOMPDF();
                $dompdf->add_info('Title', 'e-Raport Siakad SMK Negeri 1 Kota Bekasi');
                $dompdf->load_html($html);
                $dompdf->set_paper("A4","potrait");
                $dompdf->render();
                $dompdf->stream($namafile.".pdf", array("Attachment" => 1));                               
            


                }

            }else{
                redirect('home','refresh');
            }
    }
    
    function ekskul(){
        $nis = $this->uri->segment(3);
        $id_guru = $this->mdb->infouser();
        $data['namaguru'] = $this->mdb->infouser();
        $data['title'] = 'Daftar Ekstrakulikuler';
        //==========================================================
        $this->db->join('d_siswa','d_ekskul_siswa.nis = d_siswa.nis','left');
        $this->db->join('r_ekstrakulikuler','r_ekstrakulikuler.id_ekskul = d_ekskul_siswa.id_ekskul','inner');
        $this->db->join('d_kelas','d_kelas.id_kelas = d_siswa.id_kelas','inner');
        $this->db->join('d_walas','d_walas.id_kelas = d_kelas.id_kelas','inner');
        $this->db->join('d_guru','d_guru.id_guru = d_walas.id_guru','inner');
        $this->db->where(array('d_siswa.nis'=>$nis,'d_guru.id_guru'=>$id_guru->id_guru));
        $this->db->order_by('d_siswa.nis','asc');
        $data['isi'] = $this->mdb->gettable('d_ekskul_siswa');
        //=========================================================
        //$this->db->join('d_ekskul_siswa','d_ekskul_siswa.nis = d_siswa.nis','left');
        //$this->db->join('r_ekstrakulikuler','r_ekstrakulikuler.id_ekskul = d_ekskul_siswa.id_ekskul','left');
        $this->db->join('d_kelas','d_kelas.id_kelas = d_siswa.id_kelas','left');
        //$this->db->join('d_walas','d_walas.id_kelas = d_kelas.id_kelas','left');
        //$this->db->join('d_guru','d_guru.id_guru = d_walas.id_guru','left');
        $this->db->where(array('d_siswa.nis'=>$nis));
        $this->db->order_by('d_siswa.nis','asc');
        $dd = $this->db->get('d_siswa');
        $data['dtl'] = $dd->row();
        $data['ekskul'] = $this->mdb->getEkskul();
        $data['tahun'] = $this->mdb->getTahun();
        //=========================================================
        
        $this->load->view('guru/mapel/ekskulwalas',$data);
        
    }
    
    function antarmapel(){
        
    }
    
}