<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Keluarga extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(array('msuratmasuk','mdb'));
        $this->load->helper(array('text','form'));
        
        
        
    }
    
    function index(){
        if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='2' ){
            //$sess =  $this->session->userdata('username');
            $data['infouser'] = $this->mdb->infouser();
            $data['namaguru']= $this->mdb->infouser();
            $data['title'] = "DATA KELUARGA";
            $id_guru = $this->mdb->infouser();
            $this->db->join('r_hubkeluarga','r_hubkeluarga.id_rhkeluarga=d_guru_keluarga.id_rhkeluarga','inner');
            
            $data['isi'] = $this->mdb->gettableWhere('d_guru_keluarga',array('id_guru'=>$id_guru->id_guru));
            $this->load->view('guru/keluarga/keluarga',$data);
        
        }
        else{
            redirect('home','refresh');
        }
    }
    function tambah(){
        
        if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='2' ){
            //$sess =  $this->session->userdata('username');
            $data['infouser'] = $this->mdb->infouser();
            $data['namaguru']= $this->mdb->infouser();
            $data['title'] = "TAMBAH DATA KELUARGA";
            $data['hub']= $this -> mdb -> getHubkeluarga();
            $id_guru = $this->mdb->infouser();
            
            //$data['isi'] = $this->mdb->gettableWhere('d_matpelguru',array('id_guru'=>$id_guru->id_guru));
            $this->load->view('guru/keluarga/tambah',$data);
        }else{
            redirect('home','refresh');
        }
    }
    //AKSI TAMBAH
    
     function aksitambah(){
        if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='2' ){
                $guru                   = $this->mdb->infouser();
                $id_guru                = $guru->id_guru;
                $id_rhkeluarga          = $this->input->post('id_rhkeluarga');
                $nama_keluarga           = $this->input->post('nama_keluarga');
                
                
                if (empty($id_rhkeluarga)|| empty($nama_keluarga)){
                        echo "ErrorForm";
                }
                               
                else{
                    $sql = $this->db->insert('d_guru_keluarga',array('id_guru'=>$id_guru,'id_rhkeluarga'=>$id_rhkeluarga,'nama_keluarga'=>$nama_keluarga));
                    
                        
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
        if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='2'){
            $p = $this->uri->segment(3);
         //join 
            $user = $this->mdb->infouser();
            $id_guru = $user->id_guru;
            $ss = $this->db->get_where('d_guru_keluarga',array('id_keluarga'=>$p));
            $d = $ss->row();
            //$this->db->join('d_guru','d_guru.user_id = d_user.user_id','left');
            //$a = $this->db->get_where('d_user', array('id_guru'=>$p));
            //$b = $a->row();
            //$this->db->delete('d_user',array('user_id'=>$b->user_id));
         //
            
            
            if($d->id_guru === $id_guru)
                {
                $this->db->delete('d_guru_keluarga',array('id_keluarga'=>$p));
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