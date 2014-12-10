<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Laporan extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(array('msuratmasuk','mdb'));
        $this->load->library(array('adodb_loader'));
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
    public function simpleHtmlTable($data)
    {
    	// do you like spaghetti?
    	echo "<table border='1'>";
    	echo "<thead>";
    	foreach (array_keys($data[0]) as $item) {
    	echo "<td><b>{$item}<b></td>";
    	}
    	echo "</thead>";
    	foreach ($data as $row) {
    	echo "<tr>";
    	foreach ($row as $item) {
    	echo "<td>{$item}</td>";
    	}
    		echo "</tr>";
    	}
    	echo "</table>";
    	}
    
    
    function downloadpivot(){
		//$this->adodb->connect('localhost','siakad','siakad3214','dbakademik');
		//PivotTableSQL($db, $tables, $rowfields, $colfield)
		$db = ADONewConnection('mysql');
	    $db->Connect('localhost', 'siakad', 'siakad3214', 'dbakademik');
	    //$db->debug = true;
		
		$d = PivotTableSQL($db, 'd_siswa,d_kelas,r_biaya,d_pembayaran', 'd_siswa.nama_siswa', 
				
				'r_biaya.nama_tagihan',
				'd_siswa.id_kelas = d_kelas.id_kelas AND 
				d_pembayaran.nis = d_siswa.nis AND d_pembayaran.id_tagihan = r_biaya.id_tagihan','tanggal_bayar',$sumlabel='',$aggfn ='', $showcount = FALSE);
		
				$recordset =& $this->adodb->query($d);
		
				rs2html($recordset);
			   //echo json_encode($recordset);
				//echo $recordset;
			   $recordset->Close();
    }
    function report(){
    	//header
    	$this->db->select(array('nama_tagihan'));
    	$this->db->order_by('nama_tagihan');
    	$data['header'] = $this->mdb->gettable('vw_pembayaran');
    	//nama_siswa
    	$this->db->select(array('siswa'));
    	$data['nama'] = $this->mdb->gettable('vw_pembayaran');
    	//isi
    	
    	$this->db->select(array('tanggal_bayar'));
    	//$this->db->order_by('nama_tagihan');
    	$data['tgl'] = $this->mdb->gettable('vw_pembayaran');
    	
    	$this->load->view('admin/keuangan/pivot.php',$data);
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