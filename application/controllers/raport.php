<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Raport extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(array('msuratmasuk','mdb'));
        $this->load->helper(array('text','form','math'));
        $this->load->library('dompdf_lib');   
        
        
    }
    function index(){
    //pilih tahun ajaran
        if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='3' ){
            $data['infosiswa'] = $this->mdb->infosiswa();
            $data['namasiswa']= $this->mdb->infosiswa();
            $data['title'] = "Nilai Raport Saya";
            $data['tahun']= $this -> mdb -> getTahun();
            $id_siswa = $this->mdb->infosiswa();
            
            $id_tahun = $this->input->post('id_tahun');
            $this->load->view('siswa/mapel/raport',$data);
            
        }else {
            redirect('home','refresh');
        }
    }
    
    function cetak(){
        
    }
    
    function download(){

            $id_tahun = $this->uri->segment(3);
            $id_siswa = $this->mdb->infosiswa();
     //$id_tahun = $this->input->post('id_tahun');
            $this->db->join('d_matpelguru','d_matpelguru.id_matpelguru = d_nilai.id_matpelguru','inner');
            $this->db->join('d_guru','d_guru.id_guru = d_matpelguru.id_guru','inner');
            $this->db->join('r_tahun','r_tahun.id_tahun=d_matpelguru.id_tahun','inner');
            $this->db->join('d_siswa','d_siswa.nis = d_nilai.nis','inner');
            $this->db->join('r_matpel','r_matpel.id_matpel = d_matpelguru.id_matpel','inner');
            $this->db->join('r_kategori_matpel','r_kategori_matpel.id_katmapel = r_matpel.id_katmapel','inner');
            $this->db->where(array('d_nilai.nis'=>$id_siswa->nis,'r_tahun.id_tahun'=>$id_tahun));
            $this->db->order_by('r_matpel.id_katmapel','asc');
            $data['isi'] = $this->mdb->gettable('d_nilai');
            //=====================================
            
            //walas
            $this->db->join('d_kelas','d_kelas.id_kelas = d_walas.id_kelas','inner');
            $this->db->join('d_guru','d_guru.id_guru = d_walas.id_guru');
            $this->db->join('d_siswa','d_siswa.id_kelas = d_kelas.id_kelas','inner');
            $this->db->where(array('d_siswa.nis'=>$id_siswa->nis));
            $da = $this->db->get('d_walas');
            $data['walas'] = $da->row();
            
            
            $this->db->join('d_matpelguru','d_matpelguru.id_matpelguru = d_nilai.id_matpelguru','inner');
            $this->db->join('d_guru','d_guru.id_guru = d_matpelguru.id_guru','inner');
            $this->db->join('r_tahun','r_tahun.id_tahun=d_matpelguru.id_tahun','inner');
            //$this->db->join('d_walas','d_walas.id_guru=d_guru.id_guru','inner');
            $this->db->join('d_siswa','d_siswa.nis = d_nilai.nis','inner');
            $this->db->join('r_matpel','r_matpel.id_matpel = d_matpelguru.id_matpel','inner');
            $this->db->join('d_kelas','d_kelas.id_kelas = d_siswa.id_kelas','inner');
            $this->db->join('r_kategori_matpel','r_kategori_matpel.id_katmapel = r_matpel.id_katmapel','inner');
            $this->db->where(array('d_nilai.nis'=>$id_siswa->nis,'r_tahun.id_tahun'=>$id_tahun));
            $this->db->order_by('r_matpel.id_katmapel','asc');
            
            $dd = $this->db->get('d_nilai');
            $data['dtl'] = $dd->row(); 
            //============
                $html = $this->load->view('siswa/mapel/downloadpdf',$data,true);
                $namafile = date('Y-m-d');
                $dompdf = new DOMPDF();
                $dompdf->add_info('Title', 'e-Raport Siakad SMK Negeri 1 Kota Bekasi');
                $dompdf->load_html($html);
                $dompdf->set_paper("A4","potrait");
                $dompdf->render();
                $dompdf->stream($namafile.".pdf", array("Attachment" => 1));                               
            
            
     
    }
    
    function get(){
        if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='3' ){
            $id_tahun = $this->input->post('id_tahun');
            $id_siswa = $this->mdb->infosiswa();
            
            
            $this->db->join('d_matpelguru','d_matpelguru.id_matpelguru = d_nilai.id_matpelguru','inner');
            $this->db->join('d_guru','d_guru.id_guru = d_matpelguru.id_guru','inner');
            $this->db->join('r_tahun','r_tahun.id_tahun=d_matpelguru.id_tahun','inner');
            $this->db->join('d_siswa','d_siswa.nis = d_nilai.nis','inner');
            $this->db->join('r_matpel','r_matpel.id_matpel = d_matpelguru.id_matpel','inner');
            $this->db->join('r_kategori_matpel','r_kategori_matpel.id_katmapel = r_matpel.id_katmapel','inner');
            $this->db->where(array('d_nilai.nis'=>$id_siswa->nis,'r_tahun.id_tahun'=>$id_tahun));
            $this->db->order_by('r_matpel.id_katmapel','asc');
            $data['isi'] = $this->mdb->gettable('d_nilai');
            //=====================================
            
            
            
            
            $this->db->join('d_matpelguru','d_matpelguru.id_matpelguru = d_nilai.id_matpelguru','inner');
            $this->db->join('d_guru','d_guru.id_guru = d_matpelguru.id_guru','inner');
            $this->db->join('r_tahun','r_tahun.id_tahun=d_matpelguru.id_tahun','inner');
            $this->db->join('d_siswa','d_siswa.nis = d_nilai.nis','inner');
            $this->db->join('r_matpel','r_matpel.id_matpel = d_matpelguru.id_matpel','inner');
            $this->db->join('d_kelas','d_kelas.id_kelas = d_siswa.id_kelas','inner');
            $this->db->join('r_kategori_matpel','r_kategori_matpel.id_katmapel = r_matpel.id_katmapel','inner');
            $this->db->where(array('d_nilai.nis'=>$id_siswa->nis,'r_tahun.id_tahun'=>$id_tahun));
            $this->db->order_by('r_matpel.id_katmapel','asc');
            
            $dd = $this->db->get('d_nilai');
            $data['dtl'] = $dd->row(); 
            //============
            $this->load->view('siswa/mapel/printraport',$data);
            
            
        }else{
            return false;
        }
    }
    
    
    
    
}