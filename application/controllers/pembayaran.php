<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pembayaran extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(array('msuratmasuk','mdb'));
        $this->load->helper(array('text','form'));
        
        
    }
    
    function index(){
         if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='1' || $this->session->userdata('level')==='110' ){
            $data['title'] = 'Menu Pembayaran';
            $tanggal = date('Y-m-d');
            $this->db->order_by('tanggal_bayar','ASC');
            $this->db->join('d_siswa','d_pembayaran.nis = d_siswa.nis','left');
            $this->db->join('d_kelas','d_siswa.id_kelas = d_kelas.id_kelas','left');
            $this->db->join('r_biaya','d_pembayaran.id_tagihan = r_biaya.id_tagihan','left');
            //$data['isi'] = $this->mdb->getWhere('d_pembayaran',array('tanggal_bayar'=>$tanggal));
            $data['isi'] = $this->mdb->gettableWhere('d_pembayaran',array('tanggal_bayar'=>$tanggal));
            //$data['isi'] = $this->mdb->gettable('d_pembayaran');
            //$this->load->view('admin/keuangan/pembayaran/index',$data);
            $this->db->select_sum('jumlah_bayar');
            $this->db->where(array('tanggal_bayar'=>$tanggal));
            $a = $this->db->get('d_pembayaran');
            $data['jumlah']= $a->row();
            $this->load->view('admin/keuangan/pembayaran/vpembayaran',$data);
        
         }else{
             redirect('home','refresh');
         }
        
    }
    function listall(){
         if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='1' || $this->session->userdata('level')==='110' ){
        $data = array();
        $tanggal = date('Y-m-d');
            $this->db->join('r_biaya', 'r_biaya.id_tagihan = d_pembayaran.id_tagihan', 'left');
            $this->db->join('d_siswa', 'd_siswa.nis = d_pembayaran.nis', 'left');
            //$query = $this->mdb->getWhere('d_pembayaran',array('tanggal_bayar'=>$tanggal));
            $query = $this->db->get('d_pembayaran');
        if ($query->num_rows() > 0) {
        foreach($query->result_array() as $row) {
        $data[] = $row;
            }
        }
        //json_encode($data);
        
        $jTableResult = array();
        $jTableResult['Result'] = "OK";
        $jTableResult['Records'] = $data;
        print json_encode($jTableResult);
         }else{
             redirect('home','refresh');
         }
    }
    function create(){
        if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='1' || $this->session->userdata('level')==='110' ){
        $nis = $this->input->post('nis');
        $id_tagihan = $this->input->post('id_tagihan');
        $tanggal_bayar = $this->input->post('tanggal_bayar');
        $jumlah_bayar = $this->input->post('jumlah_bayar');
        $result1 = $this->db->insert('d_pembayaran', array('nis'=>$nis, 'id_tagihan'=>$id_tagihan,'tanggal_bayar'=>$tanggal_bayar,'jumlah_bayar'=>$jumlah_bayar));
        $result1 = $this->db->query("SELECT * FROM d_pembayaran where id_pembayaran = LAST_INSERT_ID()");
        $row = $result1->result_array();
        $jTableResult = array();
        $jTableResult['Result'] = "OK";
        $jTableResult['Record'] = $row;
        print json_encode($jTableResult);
        }else{
            redirect('home','refresh');
        }
    }
    //Update Data
    function update(){
        if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='1' || $this->session->userdata('level')==='110' ){
            $id = $this->uri->segment(3);
            if (empty($id) || !is_numeric($id)){
            //periksa apakah id bernilai angka atau bukan
            redirect('pembayaran','refresh');
            }else{
            $data['title'] = 'Edit Data';
            $data['tagihan'] = $this->mdb->getTagihan();
            $this->db->join('d_siswa','d_siswa.nis = d_pembayaran.nis','inner');
            $this->db->join('r_biaya','r_biaya.id_tagihan = d_pembayaran.id_tagihan','inner');
            $data['isi'] = $this->mdb->getDetil('d_pembayaran',array('id_pembayaran'=>$id));
                    if(empty($data['isi'])){
                        echo "error";    
                    }else{
                        $this->load->view('admin/keuangan/pembayaran/veditpembayaran',$data);    
                    }
            
            }
        }else{
            redirect('home','refresh');
        }
    }
  
    function getTagihan(){
        if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='1' || $this->session->userdata('level')==='110' ){
         $result = $this->db->query("SELECT id_tagihan AS Value , nama_tagihan as DisplayText FROM r_biaya");
        $rows = array();
         foreach($result->result_array() as $row)
        {
           $eil=array();
            $eil["DisplayText"]=$row["DisplayText"];
            $eil["Value"]=$row["Value"];
            $rows[]=$eil;
         }
                
            $jTableResult = array();
            $jTableResult['Result'] = "OK";
            $jTableResult['Options'] = $rows;
            print json_encode($jTableResult);
            
        }else{
            redirect('home','refresh');
        }
    }
    
    
    function tambah(){
        if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='1' || $this->session->userdata('level')==='110' ){
            $data['title'] = "Tambah Pembayaran";
            $data['tagihan'] = $this->mdb->getTagihan();
            $this->load->view('admin/keuangan/pembayaran/tambah',$data);
        }else{
            redirect('home','refresh');
        }
    }
    
    function autocomplete($d){
        if (empty($d)){
            
        }else{
        $this->db->join('d_kelas','d_kelas.id_kelas = d_siswa.id_kelas','inner');
        $q = $this->mdb->get_autocomplete('nama_siswa',$d,'d_siswa');    
        foreach ($q->result() as $row){
            $arr['query'] = $d;
            $arr['suggestions'][] = array(
            'value'  =>$row->nama_siswa .  " " .strtoupper($row->kelas),
            'data'   =>$row->nis
         );
            
           // echo "<li id='$row->nis'>".$row->nama_siswa."</li>";
            }
            echo json_encode($arr);
        }
        
        
    }
    function hapus(){
        if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='1' || $this->session->userdata('level')==='110' ){
        $id = $this->uri->segment(3);
        $a = $this->db->delete('d_pembayaran', array('id_pembayaran'=>$id));
            if($a){
                echo "Sukses Menghapus Data";
            }else{
                echo "Gagal Menghapus Data";
            }
        }
        else{
            return FALSE;
        }
    }
    function aksitambah(){
        if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='1' || $this->session->userdata('level')==='110' ){
            //Aksi tambah
            $input = array(
            'nis'            => $this->input->post('nis'),
            'tanggal_bayar'  => $this->input->post('tanggal_bayar'),
            'id_tagihan'     => $this->input->post('id_tagihan'),
            'jumlah_bayar'   => $this->input->post('jumlah_bayar'),
            'ket_bayar'   => $this->input->post('keterangan')    
            );
            $a = $this->mdb->chkexist('d_pembayaran',$input);
            if ($a=== 0 ){
            $d = $this->db->insert('d_pembayaran',$input);
            if($d){
                //Berhasil
                echo "Berhasil menambahkan data pembayaran";
            }else{
                //Gagal
                echo "Gagal menambahkan data pembayaran";
            }
            }else{
                echo "Tidak Diijinkan memasukkan data 2 kali";
            }
        }else{
            return FALSE;
        }
        
    }
    function aksiupdate(){
        if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='1' || $this->session->userdata('level')==='110' ){
            //Aksi tambah
            $input = array(
            'id_pembayaran'  => $this->input->post('id_pembayaran'),    
            'nis'            => $this->input->post('nis'),
            'tanggal_bayar'  => $this->input->post('tanggal_bayar'),
            'id_tagihan'     => $this->input->post('id_tagihan'),
            'jumlah_bayar'   => $this->input->post('jumlah_bayar'),
            'ket_bayar'   => $this->input->post('keterangan')    
            );
           
            $d = $this->db->update('d_pembayaran', $input, array('id_pembayaran'=>$this->input->post('id_pembayaran')));
            if($d){
                //Berhasil
                echo "Berhasil memperbaharui data pembayaran";
            }else{
                //Gagal
                echo "Gagal memperbarui data pembayaran";
            }
            
        
        
            }
    }
    
  
    
    }