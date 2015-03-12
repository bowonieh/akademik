<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Event extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(array('msuratmasuk','mdb'));
        $this->load->helper('text');
        
        
    }

    function index(){
    	if($this->session->userdata('username') && $this->session->userdata('level') === '111'){
    		//halaman kurikulum
    		$data['title'] = "Agenda Kegiatan";
    		$this->db->order_by('id_event','desc');
    		$data['isi'] = $this->mdb->gettable('d_event');
    		$this->load->view('admin/kurikulum/event/eventindex',$data);
    	}else{
    		redirect('home','refresh');
    	}
    }
    
    function tambah(){
    	if($this->session->userdata('username') && $this->session->userdata('level') === '111'){
    		$data['title'] = "Tambah Agenda Kegiatan";
    		$this->db->order_by('id_event','desc');
    		$data['isi'] = $this->mdb->gettable('d_event');
    		$this->load->view('admin/kurikulum/event/eventtambah',$data);
    	}else{
    		redirect('home','refresh');
    	}
    }
    
    function aksitambah(){
    	if($this->session->userdata('username') && $this->session->userdata('level') === '111'){
    		$input = array(
    				'title'            	=> $this->input->post('title'),
    				'start'  			=> $this->input->post('start'),
    				'end'    		 	=> $this->input->post('end'),
    				'isi'		   		=> $this->input->post('isi')
    				
    		);
    		$a = $this->mdb->chkexist('d_event',$input);
    		if ($a=== 0 ){
    			$d = $this->db->insert('d_event',$input);
    			if($d){
    				//Berhasil
    				echo "Berhasil menambahkan data kegiatan";
    			}else{
    				//Gagal
    				echo "Gagal menambahkan data kegiatans";
    			}
    		}else{
    			echo "Tidak Diijinkan memasukkan data 2 kali";
    		}
    	}else{
    		
    	}
    }
    
    function hapus(){
    	if($this->session->userdata('username') && $this->session->userdata('level') === '111'){
    		$id_event = $this->uri->segment(3);
    		
    		$a = $this->db->delete('d_event',array('id_event'=>$id_event));
    		if($a){
    			echo "Success";
    		}else{
    			echo "Error";
    		}
    	}else{
    		redirect('home','refresh');
    	}
    	
    }
    
}