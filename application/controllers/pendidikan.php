<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pendidikan extends CI_Controller {

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
            $data['title'] = "RIWAYAT PENDIDIKAN";
            $id_guru = $this->mdb->infouser();
            $this->db->join('r_pendidikan','r_pendidikan.id_rpendidikan=d_rwpendidikan.id_rpendidikan','inner');
            
            $data['isi'] = $this->mdb->gettableWhere('d_rwpendidikan',array('id_guru'=>$id_guru->id_guru));
            $this->load->view('guru/pendidikan/pendidikan',$data);
        }else{
            redirect('home','refresh');
        }
    }
    function tambah(){
        
        if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='2' ){
            //$sess =  $this->session->userdata('username');
            $data['infouser'] = $this->mdb->infouser();
            $data['namaguru']= $this->mdb->infouser();
            $data['title'] = "TAMBAH RIWAYAT PENDIDIKAN";
            $data['jenjang']= $this -> mdb -> getJenjang();
            $id_guru = $this->mdb->infouser();
            
            //$data['isi'] = $this->mdb->gettableWhere('d_matpelguru',array('id_guru'=>$id_guru->id_guru));
            $this->load->view('guru/pendidikan/tambah',$data);
        }else{
            redirect('home','refresh');
        }
    }
    //AKSI TAMBAH
    
     function aksitambah(){
        if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='2' ){
                $guru                   = $this->mdb->infouser();
                $id_guru                = $guru->id_guru;
                $id_rpendidikan         = $this->input->post('id_rpendidikan');
                $lembaga_pendidikan     = $this->input->post('lembaga_pendidikan');
                $thn_mulai              = $this->input->post('thn_mulai');
                $thn_lulus              = $this->input->post('thn_lulus');
                $sa                     = $this->db->get_where('d_rwpendidikan',array('id_guru'=>$id_guru,'id_rpendidikan'=>$id_rpendidikan));
                $dd                     = $sa->num_rows();
                if (empty($id_rpendidikan)|| empty($lembaga_pendidikan)|| empty($thn_mulai) || empty($thn_lulus)){
                        echo "ErrorForm";
                }
                elseif(!empty($dd)){
                    echo "DoubleJenjang";
                }
                
                else{
                    $sql = $this->db->insert('d_rwpendidikan',array('id_guru'=>$id_guru,'id_rpendidikan'=>$id_rpendidikan,'lembaga_pendidikan'=>$lembaga_pendidikan,'thn_mulai'=>$thn_mulai,'thn_lulus'=>$thn_lulus));
                    
                        
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
            $ss = $this->db->get_where('d_rwpendidikan',array('id_rwpendidikan'=>$p));
            $d = $ss->row();
            //$this->db->join('d_guru','d_guru.user_id = d_user.user_id','left');
            //$a = $this->db->get_where('d_user', array('id_guru'=>$p));
            //$b = $a->row();
            //$this->db->delete('d_user',array('user_id'=>$b->user_id));
         //
            
            if($d->id_guru !== $id_guru){
                echo "ErrorD";
            }
            elseif($d->id_guru === $id_guru)
                {
                $this->db->delete('d_rwpendidikan',array('id_rwpendidikan'=>$p));
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