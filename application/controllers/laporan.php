<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Laporan extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(array('msuratmasuk','mdb'));
        
        $this->load->helper(array('url','text','form','php-excel'));
        
        
    }
    
    function index(){
         if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='1' || $this->session->userdata('level')==='110' ){
            $data['title'] = 'Laporan pembayaran';
            $this->db->order_by('tanggal_bayar','desc');
            $this->db->join('d_siswa','d_pembayaran.nis = d_siswa.nis','left');
            $this->db->join('d_kelas','d_siswa.id_kelas = d_kelas.id_kelas','left');
            $this->db->join('r_biaya','d_pembayaran.id_tagihan = r_biaya.id_tagihan','left');
            $data['isi'] = $this->mdb->gettable('d_pembayaran');
            $this->db->select_sum('jumlah_bayar');
            $a = $this->db->get('d_pembayaran');
            $data['jumlah']= $a->row();
            
            
            $this->db->join('r_biaya','r_biaya.id_tagihan = d_pembayaran.id_tagihan','RIGHT');
            $this->db->join('d_siswa','d_siswa.nis = d_pembayaran.nis','RIGHT');
            $this->db->join('d_kelas','d_siswa.id_kelas = d_kelas.id_kelas','right');
            //$this->db->distinct('nama_tagihan');
            
            $this->db->group_by('nama_tagihan');
            //$this->db->group_by('nama_siswa');
            //$data['hor'] = $this->mdb->gettable('d_pembayaran');

            $data['hor'] = $this->db->get('d_pembayaran');
            
            $this->load->view('admin/keuangan/laporan/laporan.php',$data);
        
         }else{
             redirect('home','refresh');
         }
        
    }
    function download(){
        $no = 1;
            $this->db->order_by('tanggal_bayar','desc');
            $this->db->join('d_siswa','d_pembayaran.nis = d_siswa.nis','left');
            $this->db->join('d_kelas','d_siswa.id_kelas = d_kelas.id_kelas','left');
            $this->db->join('r_biaya','d_pembayaran.id_tagihan = r_biaya.id_tagihan','left');
            $query = $this->mdb->gettable('d_pembayaran');
            $this->db->select_sum('jumlah_bayar');
            $a = $this->db->get('d_pembayaran');
            $jml = $a->row();
            $fields = (
                $field_array[] = array ("NO","NIS","NAMA SISWA","KELAS","PEMBAYARAN","TANGGAL","JUMLAH BAYAR")
                   );
            foreach ($query as $row)
            {
                    $data_array[] = array( $no++,$row->nis,$row->nama_siswa, $row->kelas, $row->nama_tagihan,$row->tanggal_bayar,  number_format($row->jumlah_bayar) );
            }
            $jumlah[] = array("","","","","","TOTAL",number_format($jml->jumlah_bayar));
            $xls = new Excel_XML;
            $xls->addArray ($field_array);
            $xls->addArray ($data_array);
            $xls->addArray ($jumlah);
            $xls->generateXML ( "LAPORAN KEUANGAN ".date('Y-m-d') );
        
    }
    
    function get_reportjson(){
        $awal = $this->uri->segment(3);
        $akhir = $this->uri->segment(4);
        if(empty($awal) || empty($akhir)){
            //laporan utuh
            $report=$this->mdb->gettable('d_pembayaran');
            echo json_encode($report);
        }else{
            $this->db->where('tanggal_bayar BETWEEN "'.date('Y-m-d',strtotime($awal)).'" AND "'.date('Y-m-d',strtotime($akhir)).'"');
            $report= $this->mdb->gettable('d_pembayaran');
            echo json_encode($report);
        }
    }
    
}