<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//author Agus Wibowo
class Guru extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(array('msuratmasuk','mdb'));
        $this->load->helper('text');
        $this->load->library(array('form_validation'));
        
    }
    function index(){
        if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='1'){
            //halaman Admin
            $data['title'] = "Daftar tenaga Pendidik | Halaman Admin";
            $this->db->order_by('nama_guru');
            $data['isi'] = $this->mdb->gettable('d_guru');
            $this->load->view('admin/guru/vindex',$data);
        }else{
            //halaman Biasa
        }
        
            
        }
        function tambah() {
            if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='1'){
                $rules= array(
                    array(
                        'field'=>'nama_guru',
                        'label'=>'NAMA GURU',
                        'rules'=>'required'
                    ),
                    array(
                        'field'=>'username',
                        'label'=>'USERNAME',
                        'rules'=>'required'
                    )
                );
                
                $this->form_validation->set_error_delimiters('<div class="alert alertbox" data-toggle="modal">', '</div>');
                $this->form_validation->set_rules($rules);
                if ($this->form_validation->run() == FALSE)
                {
                    $data['title'] = "Tambah Tenaga Pendidik";
                    $this->load->view('admin/guru/vtambah',$data);
                }else{
                    //Jika Berhasil
                    $nama_guru = $this->input->post('nama_guru');
                    $username = $this->input->post('username');
                    $tempat = $this->input->post('tempat');
                    $tgl_lahir = $this->input->post('tgl_lahir');
                    
                    $s = $this->db->get_where('d_user',array('username'=>$username));
                    $t = $s->num_rows();
                    if ($t > 0){
                        
                        
                    }else{
                        
                    $this->db->insert('d_user',array('username'=>$username, 'password'=>md5($username),'level'=>2));
                    //periksa username apakah exist
                    $a = $this->db->get_where('d_user', array('username'=>$username));
                    $b = $a->row();
                    $this->db->insert('d_guru',array('nama_guru'=>$nama_guru,'user_id'=>$b->user_id,'tempat'=>$tempat,'tgl_lahir'=>$tgl_lahir));
                    echo "Success";
                    //redirect ('guru','refresh');
                    //$data['title'] = "Tambah Tenaga Pendidik";
                    //$data['pesan'] = "SUKSES";
                    //$this->load->view('admin/guru/tambah',$data);
                    }
                    
                }
            }else{
                redirect('home','refresh');
            }
        }
        function detil(){
        $p = $this->uri->segment(3);
        $data['isi'] = $this->mdb->detilguru($p);
        $data['title']=  "Detil PTK";
        $this->load->view('guru/detilguru',$data);
    }
    function hapus(){
        if($this->session->userdata('username',TRUE) && $this->session->userdata('level')==='1'){
            $p = $this->uri->segment(3);
         //join 
            $this->db->join('d_guru','d_guru.user_id = d_user.user_id','left');
            $a = $this->db->get_where('d_user', array('id_guru'=>$p));
            $b = $a->row();
            $this->db->delete('d_user',array('user_id'=>$b->user_id));
         //
            $delete=$this->db->delete('d_guru',array('id_guru'=>$p));
            if($delete)
                {
                echo "Success";
            }
            else
            {
                echo "Error";
            }   
        }else{
            
        }
         
        
    }
    
    public function tambahguru()
{
    $rules= array(
                    array(
                        'field'=>'nama_guru',
                        'label'=>'NAMA GURU',
                        'rules'=>'required'
                    ),
                    array(
                        'field'=>'username',
                        'label'=>'USERNAME',
                        'rules'=>'required'
                    )
                );
    
    $this->form_validation->set_rules($rules);
    $this->form_validation->set_message('is_unique', 'Sorry but that %s is already in use!');
 
    if($this->form_validation->run() === FALSE)
    {
        echo json_encode(array('error' => '1', 'message' => validation_errors('<div class="alert alert-error"><strong>Error!</strong> ', '</div>')));
    } else {
        //Collect your form data
        $nama_guru = $this->input->post('nama_guru');
        $username = $this->input->post('username');
        //etc..
 
        //Save the data to the database, of course you will need all the data first.
        //$this->your_model->register_user($username);
        $this->db->insert('d_user',array('username'=>$username, 'password'=>md5($username),'level'=>2));
                    //periksa username apakah exist
                    $a = $this->db->get_where('d_user', array('username'=>$username));
                    $b = $a->row();
                    $this->db->insert('d_guru',array('nama_guru'=>$nama_guru,'user_id'=>$b->user_id));
 
        //Send the success to our javascript file.
        echo json_encode(array('error' => '0', 'message' => '<div class="alert alert-success"><strong>Success!</strong> You have been registered!</div>'));
    }
}
}