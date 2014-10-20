<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Surat_masuk extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('msuratmasuk');
        $this->load->library(array('form_validation','upload','uri'));
        
    }
    //halaman utama persuratan
    function index(){
        $sess = new $this->session;
        if($sess->userdata('username',TRUE)&& $sess->userdata('level',TRUE)){
            $data['isi'] = $this->msuratmasuk->getdata();
            $data['title'] = 'Daftar Surat Masuk';
            $this->load->view('template/suratmasuk',$data);
        }else{
            redirect('login','refresh');
        }
        
    }
    function tambah(){
        $sess = new $this->session;
        if($sess->userdata('username',TRUE)&& $sess->userdata('level',TRUE)){
            $rules = array(
              array(
                    'field'=>'no_surat',
                    'label'=> 'NO Surat',
                    'rules'=> 'required'
              ),
              array(
                    'field'=>'judul',
                    'label'=>'JUDUL',
                    'rules'=>'required'
              ),
              array(
                  'field'=>'pengirim',
                  'label'=>'Pengirim Surat',
                  'rules'=>'required'
              ),
                array(
                    'field'=>'tanggal',
                    'label'=>'tanggal',
                    'rules'=>'required'
                )
                      
               
            );
            $this->form_validation->set_error_delimiters('<div class="alert alertbox" data-toggle="modal">', '</div>');
                $this->form_validation->set_rules($rules);
                if ($this->form_validation->run() == FALSE)
                {
                    $data['title'] = "Tambah Surat Masuk";
                    //jika gagal form validation
                    $this->load->view('template/tambahsuratmasuk',$data);
                }else{
                    //jika berhasil from validation
                    if(!$this->input->post('userfile')){
                      //if(!empty($_POST['userfile'])){
                        //Jika field filename tidak kosong
                    $config['upload_path'] = './doc/suratmasuk/';
                    $config['allowed_types'] = 'gif|jpg|png|JPG|jpeg}doc|docx|xls|xlsx|pdf';
                    //$config['max_size'] = '1000';
                    //$config['max_width']  = '';
                    //$config['max_height']  = '';
                    $config['overwrite'] = TRUE;
                    $config['remove_spaces'] = TRUE;
                    $config['file_name']= random_string('alnum',40) ;
                    
                    //$this->load->library('upload',$config);
                    $this->upload->initialize($config);
                    $this->upload->do_upload(); 
                        if(!$this->upload->do_upload()){
                            //tampilan view gagal
                            echo "gagal Upload";
                            
                            $this->upload->display_errors();
                            
                        }else{
                            $document = $this->upload->data();
                            
                            $filename = $document['file_name'];
                            
                            $judul = $this->input->post('judul');
                            $isi = $this->input->post('isi');
                            $pengirim = $this->input->post('pengirim');
                            $tanggal = $this->input->post('tanggal');
                            $no_surat = $this->input->post('no_surat');
                            $sql = "INSERT INTO surat_masuk (judul,isi,pengirim,no_surat,tanggal,filename) VALUES ('$judul','$isi','$pengirim','$no_surat','$tanggal','$filename')";
                            $this->db->query($sql);
                            redirect('surat_masuk','refresh');
                        }
                    }else{
                        //Insert tanpa foto
                        $judul = $this->input->post('judul');
                            $isi = $this->input->post('isi');
                            $pengirim = $this->input->post('pengirim');
                            $tanggal = $this->input->post('tanggal');
                            $no_surat = $this->input->post('no_surat');
                        $sql = "INSERT INTO surat_masuk (judul,isi,pengirim,no_surat,tanggal) VALUES ('$judul','$isi','$pengirim','$no_surat','$tanggal')";
                            $this->db->query($sql);
                            redirect('surat_masuk','refresh');
                    }
                    
                    
                }
        }else{
            //session gagal
            redirect('login','refresh');
        }
    }
    
    function detil(){
        $p = $this->uri->segment(3);
        $data['isi'] = $this->msuratmasuk->detil($p);
        $data['title']=  "Detil Surat";
        $this->load->view('template/detilsuratmasuk',$data);
    }
    function viewdetil(){
        $p = $this->uri->segment(3);
        $data['isi'] = $this->msuratmasuk->detil($p);
        $data['title']=  "Detil Surat";
        $this->load->view('template/modal/modal_detilsuratmasuk',$data);
    }
    
    function hapus(){
        $p = $this->uri->segment(3);
        $delete=$this->msuratmasuk->hapus($p);
      if($delete)
        {
          echo "Success";
        }
     else
        {
          echo "Error";
        }
    }
}