<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Surat_keluar extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('msuratkeluar');
        $this->load->library(array('form_validation','upload'));
        
    }
    //halaman utama persuratan
    function index(){
        $sess = new $this->session;
        if($sess->userdata('username',TRUE)&& $sess->userdata('level',TRUE)){
            $data['isi'] = $this->msuratkeluar->listall();
            $this->load->view('suratkeluarindex',$data);
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
                    //jika gagal form validation
                    $this->load->view('tambahsuratmasuk');
                }else{
                    //jika berhasil from validation
                    if(!$this->input->post('userfile')){
                        //if(!empty($_POST['filename'])){
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
                            $error = $this->upload->display_errors();
                            echo $error;
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
                            echo "Upload Berhasil";
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
                    }
                    
                    
                }
        }else{
            //session gagal
            redirect('login','refresh');
        }
    }
    
    
}