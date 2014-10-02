<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ortu extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(array('msuratmasuk','mdb'));
        $this->load->helper(array('text','form'));
        
        
        
    }
    
    function index(){
        if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='3' ){
            //$sess =  $this->session->userdata('username');
            $data['infouser'] = $this->mdb->infosiswa();
            $data['namasiswa']= $this->mdb->infosiswa();
            $data['title'] = "DATA ORANG TUA";
            $id_siswa = $this->mdb->infosiswa();
            $this->db->join('r_penghasilan','r_penghasilan.id_penghasilan=d_siswa_ortu.id_penghasilan','inner');
            
            $data['isi'] = $this->mdb->gettableWhere('d_siswa_ortu',array('nis'=>$id_siswa->nis));
            $this->load->view('siswa/ortu/index',$data);
        
        }
        else{
            redirect('home','refresh');
        }
    }
    function tambah(){
        
        if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='3' ){
            //$sess =  $this->session->userdata('username');
            $data['infouser'] = $this->mdb->infosiswa();
            $data['namasiswa']= $this->mdb->infosiswa();
            $data['title'] = "TAMBAH DATA ORANG TUA";
            $data['penghasilan']= $this -> mdb -> getPenghasilan();
            $id_siswa = $this->mdb->infosiswa();
            
            //$data['isi'] = $this->mdb->gettableWhere('d_matpelguru',array('id_guru'=>$id_guru->id_guru));
            $this->load->view('siswa/ortu/tambah',$data);
        }else{
            redirect('home','refresh');
        }
    }
    //AKSI TAMBAH
    
     function aksitambah(){
        if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='3' ){
                $siswa                   = $this->mdb->infosiswa();
                $nis                     = $siswa->nis;
                $id_penghasilan          = $this->input->post('id_penghasilan');
                $nama_ortu               = $this->input->post('nama_ortu');
                $pekerjaan               = $this->input->post('pekerjaan');
                $jenis_ortu              = $this->input->post('jenis_ortu');
                
                
                if (empty($nama_ortu)|| empty($pekerjaan)){
                        echo "ErrorForm";
                }
                               
                else{
                    $sql = $this->db->insert('d_siswa_ortu',array('nis'=>$nis,'id_penghasilan'=>$id_penghasilan,'nama_ortu'=>$nama_ortu,'jenis_ortu'=>$jenis_ortu));
                    
                        
                        if($sql){
                        echo 'Success';   
                        }else{
                        echo "errorInput";    
                        }
                        
                    
                    }
                
                    
                
        }else{
            echo "Error";
        }
    }
    
    function hapus(){
        if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='3'){
            $p = $this->uri->segment(3);
         //join 
            $user = $this->mdb->infosiswa();
            $nis = $user->nis;
            $ss = $this->db->get_where('d_siswa_ortu',array('id_ortu'=>$p));
            $d = $ss->row();
            //$this->db->join('d_guru','d_guru.user_id = d_user.user_id','left');
            //$a = $this->db->get_where('d_user', array('id_guru'=>$p));
            //$b = $a->row();
            //$this->db->delete('d_user',array('user_id'=>$b->user_id));
         //
            
            
            if($d->nis === $nis)
                {
                $this->db->delete('d_siswa_ortu',array('id_ortu'=>$p));
                echo "Success";
            }
            else
            {
                echo "Error";
            }   
        }else{
            
        }
         
        
    }
    
}