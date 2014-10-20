<?php if (!defined('BASEPATH')) exit ('No Direct Script Access Allowed');

class Absensi extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->database();
                $this->load->library('pagination');
                $this->load->helper('url');
		//$this->load->library('grocery_crud');
		$this->load->model('mjurusan');
                $this->load->model('msiswa');
                $this->load->library(array('form_validation','curl'));
                $this->load->model(array('mdb'));
                $this->load->helper('text');
                

	}
        function getrkpabsen(){
         
	 //$query = $this->db->query("select distinct(jenismapel.jenismapel) as jns , count(mapel.mapel) as jmlmapel from mapel,jenismapel where mapel.id_jenismapel = jenismapel.id_jenismapel group by jenismapel.jenismapel");
	 $query = $this->db->query("SELECT distinct(d_absensi.alasan)  as alasan ,(SELECT count(nis) from d_siswa where d_siswa.nis=d_absensi.nis) as jml from d_absensi");
	 foreach ($query->result_array() as $r){
			$dt[] = array (
				'alasan' => $r['alasan'],
				'jml' => $r['jml']
			);
		}
                if (empty($dt)){
                    $dd[] = array(
                        'alasan' => 'Kosong',
                        'jml' => 0
                    );
                    echo json_encode($dd);
                }else{
		echo json_encode($dt);
                }
        }
        
        function tambah(){
            if($this->session->userdata('username') && $this->session->userdata('level') === '112'){
                $rules = array(
                array(
                    'field'=>'nis',
                    'label'=>'NOMOR INDUK',
                    'rules'=>'required|xss_clean'
                    )  
                );
                $this->form_validation->set_error_delimiters('<div class="alert alertbox">', '</div>');
                $this->form_validation->set_rules($rules);
                if ($this->form_validation->run() == FALSE){
                    $this->db->where(array('status_aktif'=>'Y'));
                    $thn = $this->db->get('r_tahun');
                    $data['isi'] = $thn->row();
                    $data['title'] = "Tambah Absensi Harian";
                    $this->load->view('absensi/tambah',$data);
                }else{
                    //check absensi
                    //if($this->mdb->chkabsn() > 0){
                      //  redirect('absensi/tambah','refresh');
                    //}else{
                        //$this->mdb->tambahabsensi();
                        $nis = $this->input->post('nis');
                        $tanggal = $this->input->post('tanggal');
                        $alasan = $this->input->post('alasan');
                        $this->mdb->insert('d_absensi',array('nis'=>$nis,'tanggal'=>$tanggal,'alasan'=>$alasan));
                        redirect('absensi/tambah','refresh');
                   // }
                }
            }else{
                redirect('home','refresh');
                
            }
        }
        
function absensisiswa(){
        $rules = array(
          array(
                'field'=>'nis',
                'label'=>'NOMOR INDUK',
                'rules'=>'required|xss_clean'
          )  
        );
             if ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='1'){
                 
                $this->form_validation->set_error_delimiters('<div class="alert alertbox">', '</div>');
                $this->form_validation->set_rules($rules);
                
                if ($this->form_validation->run() == FALSE)
                {
                    $row = $this->mtahun->tahunaktif();
                    $data['isi'] = $row->row();
                    $data['dd'] = $this->msiswa->rekapabsensi('Sakit');
                    $data['a'] = $this->msiswa->rekapabsensi('Tanpa Keterangan');
                    $data['ij'] = $this->msiswa->rekapabsensi('Ijin');
                    //$dd = $this->msiswa->chkabsn();
                    //$data['chk'] = $dd->row();
                    $this->load->view('utama/header');
                    //$this->load->view('menu/menuadmin');
                    $this->load->view('siswa/absensi',$data);
                    $this->load->view('utama/footer');
                }else{
                    if($this->msiswa->chkabsn() >0 ){
                         redirect('user/absensisiswa','refresh'); 
                    }else{
                       $this->msiswa->tambahabsensi();
                       redirect('user/absensisiswa','refresh');
                    
                        
                       
                    }
                    
                }
                 
                 
             }elseif ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='10'){
                 
                    $this->form_validation->set_error_delimiters('<div class="alert alertbox">', '</div>');
                $this->form_validation->set_rules($rules);
                
                if ($this->form_validation->run() == FALSE)
                {
                    $row = $this->mtahun->tahunaktif();
                    $data['isi'] = $row->row();
                    $r1 = $this->msiswa->rekapabsensi('Ijin');
                    $r2 = $this->msiswa->rekapabsensi('Sakit');
                    $r3 = $this->msiswa->rekapabsensi('Tanpa Keterangan');
                    $data['ij'] = count($r1->row());
                    $data['a'] = count($r3->row());
                    $data['s'] = count($r2->row());
                    
                    //$dd = $this->msiswa->chkabsn();
                    //$data['chk'] = $dd->row();
                    $this->load->view('utama/header');
                    //$this->load->view('menu/menuabsen');
                    $this->load->view('siswa/absensi',$data);
                    $this->load->view('utama/footer');
                }else{
                    if($this->msiswa->chkabsn() >0 ){
                         redirect('user/absensisiswa','refresh'); 
                    }else{
                       $this->msiswa->tambahabsensi();
                       redirect('user/absensisiswa','refresh');
                    
                        
                       
                    }
                    
                }
                 
             }elseif ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='2'){
                 
                 $this->form_validation->set_error_delimiters('<div class="alert alertbox">', '</div>');
                $this->form_validation->set_rules($rules);
                
                if ($this->form_validation->run() == FALSE)
                {
                    $row = $this->mtahun->tahunaktif();
                    $data['isi'] = $row->row();
                    //$dd = $this->msiswa->chkabsn();
                    //$data['chk'] = $dd->row();
                    $this->load->view('header');
                    $this->load->view('menu/menuguru');
                    $this->load->view('siswa/absensi',$data);
                    $this->load->view('footer');
                }else{
                    if($this->msiswa->chkabsn() >0 ){
                         redirect('user/absensisiswa','refresh'); 
                    }else{
                       $this->msiswa->tambahabsensi();
                       redirect('user/absensisiswa','refresh');
                    
                        
                       
                    }
                    
                }
                 
             }else{
                 redirect('user','refresh');
             }
    }
function listabsensi(){
    if ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='10'){
    $data['isi'] = $this->mguru->_option_tahun();
    $this->load->view('utama/header');
    //$this->load->view('menu/menuabsen');
    $this->load->view('siswa/listabsensi',$data);
    $this->load->view('utama/footer');
    }elseif ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='1'){
    $data['isi'] = $this->mguru->_option_tahun();
    $this->load->view('utama/header');
    //$this->load->view('menu/menuadmin');
    $this->load->view('siswa/listabsensi',$data);
    $this->load->view('utama/footer');    
    }else{
        redirect('user','refresh');
    }
    
}

function hapusabsensi(){
    if ($this->session->userdata('username',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata('password',TRUE) && $this->session->userdata['level']=='10' || $this->session->userdata['level']=='1' ){
     $id_absensi = $this->uri->segment(3);
    $this->db->where(array('id_absensi'=>$id_absensi));
    $query = $this->db->delete('absensi');
    //return $query;
    if($query){
        redirect ('user/listabsensi','refresh');
        }   
    }else{
        redirect('user','refresh');
    }
    
    
}
function getsiswa(){
        $nis = $this->input->post('nis');
        if(empty($nis)){
        return "kosong";
        //echo "kosong";
    }else{
        //$this->db->where(array('no_peserta'=>$no_peserta));
        //$this->db->like('berita_singkat', $cari, 'both');
        $this->db->where(array('nis'=>$nis));
        $aa = $this->db->get('d_siswa');
        $da = $aa->num_rows();
        if ( $da === 0){
            //return "Kosong";
            //echo $da;
            //$this->load->view('absensi/kosong');
            echo "kosong";
        }else{
        //$this->db->like('berita_singkat', $cari, 'both');
        $this->db->where(array('nis'=>$nis));
        $dd = $this->mdb->gettable('d_siswa');
        $data['isi'] = $dd;
        //load view data
        //echo "berhasil";
        $this->load->view('absensi/hasilcari',$data);
        }
    }
    }

}