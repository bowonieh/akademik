<?php
class Mtatausaha extends CI_Model
{
    function getdata(){
        $this->db->order_by("id_tu", "asc");
        $ambil = $this->db->get('tatausaha');
         if($ambil->num_rows() > 0)
        {
        foreach($ambil->result() as $baris)
        {
    
            $hasil[] = $baris;
	
	}
	
            return $hasil;
	
        }
    }
    function addtu(){
        $username = $this->input->post('username');
        $nama = $this->input->post('nama');
        if(count($this->mguru->checkusername($username))>0){
        
    }else{
        $this->db->query("INSERT INTO tatausaha (nama,username) VALUES ('$nama','$username')");
        $this->db->query("INSERT INTO user (username,password,level) VALUES('$username',md5('$username'),'111')");
        
            }
    }
    function getTugas(){
        
        //$this->db->join('tugas','tatausaha.id_tu = tugas.id_tu','left');
        //$this->db->select('');
        $this->db->select(array('tatausaha.id_tu as idtu','nama','tugas_pokok'));
        $this->db->join('tugas','tatausaha.id_tu = tugas.id_tu','left');
        $this->db->join('tugas_pokok','tugas.id_tugaspokok = tugas_pokok.id_tugaspokok','left');
        $ambil = $this->db->get('tatausaha');
        if($ambil->num_rows() > 0)
        {
        foreach($ambil->result() as $baris)
        {
    
            $hasil[] = $baris;
	
	}
	
            return $hasil;
	
        }
    }
    function tugas($id){
        $this->db->where(array('tugas.id_tu'=>$id));
        //$this->db->select(array('tatausaha.id_tu as idtu','nama','tugas_pokok'));
        //$this->db->join('tatausaha','tatausaha.id_tu = tugas.id_tu','left');
        //$this->db->join('tugas_pokok','tugas.id_tugaspokok = tugas_pokok.id_tugaspokok','left');
        $ambil = $this->db->get('tugas');
        //return $ambil->num_rows();
        //if($ambil->num_rows() > 0)
        //{
        //foreach($ambil->result() as $baris)
       //{
    
       //     $hasil[] = $baris;
	
	//}
	
         //   return $hasil;
	
        //}
    }
}