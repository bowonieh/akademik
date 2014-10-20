<?php

class Mupload extends CI_Model{
    
    function insert_fotoGuru($id,$image_data = array()){
      
      $data = array(
        'foto' => $image_data['file_name']
          
      );
      //$foto = $image_data['full_path'];
      
      //$this->db->insert('guru', $data);
      if($this->session->userdata('level')==='2'){
            $this->db->where(array('username'=>$id));
            $this->db->update('guru',$data);
      }elseif($this->session->userdata('level')==='111'){
            $this->db->where(array('username'=>$id));
            $this->db->update('tatausaha',$data);
      }
      
      
}
function insert_fotoSiswa($id,$image_data = array()){
      
      $data = array(
        'foto' => $image_data['file_name']
          
      );
      //$foto = $image_data['full_path'];
      
      //$this->db->insert('guru', $data);
      $this->db->where(array('nis'=>$id));
      $this->db->update('siswa',$data);
      
}
}