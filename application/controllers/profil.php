<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//author Agus Wibowo
class Profil extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(array('msuratmasuk','mdb'));
        $this->load->helper(array('text','url','form'));
        $this->load->library(array('form_validation'));
        
    }
    
    function index(){
            if ($this->session->userdata('level')==='2'){
            //Untuk Guru
                $info_guru = $this->mdb->infouser();
                $data['namaguru'] = $this->mdb->infouser();
                $this->db->join('r_jenis_ptk','d_guru.id_jenisptk = r_jenis_ptk.id_jenisptk','left');
                $this->db->join('r_sttus_kepegawaian','d_guru.id_stts_kepeg = r_sttus_kepegawaian.id_stts_kepeg','left');
                $this->db->join('d_user','d_user.user_id = d_guru.user_id','inner');
                $this->db->where(array('d_guru.id_guru'=>$info_guru->id_guru));
                $a = $this->db->get('d_guru');
                $data['profil'] = $a->row();
                $data['title']= 'PROFIL SAYA';
                $this->load->view('profil/guruok',$data);
            }elseif($this->session->userdata('level')==='3'){
            //Untuk Siswa
                $infosiswa = $this->mdb->infosiswa();
                $data['namasiswa'] = $this->mdb->infosiswa();
                $data['title'] = "PROFIL SAYA";
                $this->db->join('d_kelas','d_kelas.id_kelas = d_siswa.id_kelas','inner');
                $this->db->where(array('d_siswa.id_siswa'=>$infosiswa->id_siswa));
                $z = $this->db->get('d_siswa');
                $data['profil'] = $z->row();
                $this->load->view('siswa/profil/profil',$data);
            
        
            }else{
            redirect('home','refresh');
        
            }
        }
    function edit()
        {
            if ($this->session->userdata('level')==='2'){
                $info_guru = $this->mdb->infouser();
                $data['namaguru'] = $this->mdb->infouser();
                $this->db->join('r_jenis_ptk','d_guru.id_jenisptk = r_jenis_ptk.id_jenisptk','left');
                $this->db->join('r_sttus_kepegawaian','d_guru.id_stts_kepeg = r_sttus_kepegawaian.id_stts_kepeg','left');
                $this->db->join('d_user','d_user.user_id = d_guru.user_id','inner');
                $this->db->where(array('d_guru.id_guru'=>$info_guru->id_guru));
                $a = $this->db->get('d_guru');
                $data['profil'] = $a->row();
                $data['title']= 'PROFIL SAYA';
                $data['jenisptk'] = $this->mdb->getJenisPTK();
                $data['statusptk'] = $this->mdb->getSttsPTK();
                $this->load->view('profil/editguru',$data);        
                                               
                        
            }elseif($this->session->userdata('level')==='3'){
                echo "Halaman Siswa";
            }else{
                redirect('home','refresh');
            }
        }
        function editpassword(){
            if ($this->session->userdata('level')==='2'){
                $info_guru = $this->mdb->infouser();
                $data['namaguru'] = $this->mdb->infouser();
                $this->db->join('r_jenis_ptk','d_guru.id_jenisptk = r_jenis_ptk.id_jenisptk','left');
                $this->db->join('r_sttus_kepegawaian','d_guru.id_stts_kepeg = r_sttus_kepegawaian.id_stts_kepeg','left');
                $this->db->join('d_user','d_user.user_id = d_guru.user_id','inner');
                $this->db->where(array('d_guru.id_guru'=>$info_guru->id_guru));
                $a = $this->db->get('d_guru');
                $data['profil'] = $a->row();
                $data['title']= 'PROFIL SAYA';
                $data['jenisptk'] = $this->mdb->getJenisPTK();
                $data['statusptk'] = $this->mdb->getSttsPTK();
                $this->load->view('profil/editpassword',$data);        
                                               
                        
            }elseif($this->session->userdata('level')==='3'){
                echo "Halaman Siswa";
            }else{
                redirect('home','refresh');
            }
        }
        
        function editusername(){
            if ($this->session->userdata('level')==='2'){
            $info_guru = $this->mdb->infouser();
                $data['namaguru'] = $this->mdb->infouser();
                $this->db->join('r_jenis_ptk','d_guru.id_jenisptk = r_jenis_ptk.id_jenisptk','left');
                $this->db->join('r_sttus_kepegawaian','d_guru.id_stts_kepeg = r_sttus_kepegawaian.id_stts_kepeg','left');
                $this->db->join('d_user','d_user.user_id = d_guru.user_id','inner');
                $this->db->where(array('d_guru.id_guru'=>$info_guru->id_guru));
                $a = $this->db->get('d_guru');
                $data['profil'] = $a->row();
                $data['title']= 'PROFIL SAYA';
                $data['jenisptk'] = $this->mdb->getJenisPTK();
                $data['statusptk'] = $this->mdb->getSttsPTK();
            $this->load->view('profil/editusername',$data);
            }
        }
        function checkusername(){
            if ($this->session->userdata('level')==='2'){
                $username = $this->input->post('username');
                $d = $this->mdb->chkexist('d_user',array('username'=>$username));
                
                if($d > 0 ){
                    echo "error";
                }else{
                    echo "unik";
                }
            }
            
        }
        //Belum Beres==============================
        function simpanusername(){
        	if ($this->session->userdata('level')==='2'){
        		$username = $this->input->post('username');
        		//$user_id =  $this->input->post('user_id');
        		$guru = $this->mdb->infouser();
        		$user_id = $guru->user_id;
        		$z = $this->mdb->chkexist('d_user',array('username'=>$username));
        	
        		if($z > 0 ){
        			//echo "error";
        			//jika error jalankan ini
        			echo "userExist";
        			//echo $d;
        		}else{
        			//echo "unik";
        			
        			$x = $this->db->update('d_user',array('username'=>$username),array('user_id'=>$user_id));
        			if ($x){
        				echo "Updated";
        				//redirect('keluar','refresh');
        			}else{
        				echo "notUpdated";
        			}
        		}
        	}
        }
        //=============================================
        function simpanpassword(){
            if ($this->session->userdata('level')==='2'){
                //untuk proses guru
                $user_id = $this->input->post('user_id');
                $pass_lama = md5($this->input->post('pass_lama'));
                $pass_baru = md5($this->input->post('pass_baru'));
                $pass_baru_confirm = md5($this->input->post('pass_baru_confirm'));
                
                if($this->mdb->chkpassword($user_id,$pass_lama)=== TRUE){
                    if($pass_baru === $pass_baru_confirm){
                        $d = $this->db->update('d_user', array('password'=>$pass_baru), array('user_id'=>$user_id));
                
                     if($d){
                        echo "<div class='alert'>Berhasil memperbarui password anda</div>";
                    }else{
                        echo "<div class='alert'>Gagal memperbarui Password anda</div>";    
                        }
                    }else{
                        echo "<div class='alert'>Password baru dan password confirm tidak sama</div>";    
                    }
                    
                }else{
                    echo "<div class='alert'>Password Lama Anda Salah</div>";    
                }
                
                //proses
                
                
                
            }elseif($this->session->userdata('level')==='3'){
                //untuk proses siswa
                
                echo "<div class='alert'>Berhasil memperbarui profil anda</div>";
                
            }else{
                
                echo "Anda belum Login";
            }
            
        }
        function simpan(){
            if ($this->session->userdata('level')==='2'){
                //untuk proses guru
                $id_guru = $this->input->post('id_guru');
                $input = array (
                
                'nama_guru' =>$this->input->post('nama_guru'), 
                'nik' =>$this->input->post('nik'),
                'nuptk' =>$this->input->post('nuptk'),
                'tempat' =>$this->input->post('tempat'),
                'alamat' =>$this->input->post('alamat'),
                'tgl_lahir' =>$this->input->post('tgl_lahir'),    
                'no_hp' =>$this->input->post('no_hp'),
                'no_telp_rumah' =>$this->input->post('no_telp_rumah'),    
                'email' =>$this->input->post('email'),    
                 'id_jenisptk' =>$this->input->post('id_jenisptk'),
                 'id_stts_kepeg' =>$this->input->post('id_stts_kepeg')   
                );
                //proses
                $d = $this->db->update('d_guru', $input, array('id_guru'=>$id_guru));
                
                if($d){
                echo "<div class='alert'>Berhasil memperbarui profil anda</div>";
                }else{
                echo "<div class='alert'>Gagal memperbarui profil anda</div>";    
                }
                
                
            }elseif($this->session->userdata('level')==='3'){
                //untuk proses siswa
                
                echo "<div class='alert'>Berhasil memperbarui profil anda</div>";
                
            }else{
                
                echo "Anda belum Login";
            }
        }
        function akun(){
            if($this->session->userdata('level')=== '2' && $this->session->userdata('username',true)){
                //untuk guru
                $id_guru = $this->mdb->infouser();
                $this->db->join('d_guru','d_guru.user_id = d_user.user_id','inner');
                $this->db->where(array('id_guru'=>$id_guru->id_guru));
                $d = $this->db->get('d_user');
                $data['namaguru'] = $id_guru;
                $data['title'] = "Manajemen Akun";
                $data['akun'] = $d->row();
                $this->load->view('profil/akunguru',$data);
            }elseif($this->session->userdata('level')=== '3' && $this->session->userdata('username',true)){
                //untuk siswa
                $id_siswa = $this->mdb->infosiswa();
                
                
            }else{
                redirect('home','refresh');
            }
        }
}