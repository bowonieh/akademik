<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(array('msuratmasuk','mdb'));
        $this->load->helper('text');
        
        
    }
    
    function index(){
        
        if($this->session->userdata('username') && $this->session->userdata('level') === '1'){
            //halaman admin
            $data['title'] = "HALAMAN ADMIN ";
            $this->load->view('home/admin/vhomeadmin',$data);
        }elseif($this->session->userdata('username') && $this->session->userdata('level') === '2'){
            //halaman guru
            
            $data['namaguru']= $this->mdb->infouser();
            $id_guru = $this->mdb->infouser();
            $this->db->join('d_kelas','d_kelas.id_kelas = d_walas.id_kelas','inner');
            $this->db->join('d_guru','d_guru.id_guru = d_walas.id_guru','inner');
            $this->db->where(array('d_guru.id_guru'=>$id_guru->id_guru));
            $dd = $this->db->get('d_walas');
            $data['isi'] = $dd->row();
            
            $this->db->join('d_matpelguru','d_matpelguru.id_guru = d_guru.id_guru','inner');
            $this->db->where(array('d_guru.id_guru'=>$id_guru->id_guru));
            $de = $this->db->count_all_results('d_guru');
            $data['jmlmapel'] = $de;
            $this->load->view('guru/beranda',$data);
        }elseif($this->session->userdata('username') && $this->session->userdata('level') === '3'){
            //halaman siswa
            $data['title'] = "HALAMAN SISWA ";
            $data['namasiswa']= $this->mdb->infosiswa();
            $this->db->order_by('id_event','desc');
            $data['event'] = $this->mdb->gettable('d_event');
            $this->load->view('home/siswa/beranda',$data);
        }elseif($this->session->userdata('username') && $this->session->userdata('level') === '110'){
            //halaman administrasi keuangan
            $data['title'] = "HALAMAN Administrasi Keuangan ";
            $this->load->view('home/tukeuangan',$data);
        }elseif($this->session->userdata('username') && $this->session->userdata('level') === '111'){
            //halaman kurikulum
            $data['title'] = "HALAMAN Administrasi Kurikulum ";
            $this->load->view('admin/kurikulum/home',$data);
        }elseif($this->session->userdata('username') && $this->session->userdata('level') === '112'){
            $data['title'] = "HALAMAN ABSENSI ";
            $today = date('Y-m-d');
            $this->db->join('d_siswa','d_siswa.nis= d_absensi.nis','inner' );
            $this->db->where(array('d_siswa.tanggal'=>$today));
            
            
            
            $this->load->view('absensi/home',$data);
        }
        else{
            redirect('login','refresh');
        }
        
    }
    public function json_cal(){
        $q = $this->db->get('d_event');
        //return $q->result_array();
        $jsonevent = array();
        foreach ($q->result() as $d ){
            $jsonevent[]=array(
              'id'      =>  $d->id_event,
              'start'   =>  $d->start,
              'end'     =>  $d->end,
              'title'   =>  $d->title,
              'body'    => word_limiter($d->isi,100),
              'url'     =>base_url().'index.php/agenda/detil/'.$d->id_event, 
              'multi'   => 0,
              'allDay'  => false,
              'extension_id'    =>2
            );
        }
        echo json_encode($jsonevent);
    }
    
}