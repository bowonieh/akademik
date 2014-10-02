<?php

class Msuratkeluar extends CI_Model{
    function listall(){
        $this->db->order_by("id_suratkeluar", "asc");
        $ambil = $this->db->get('surat_keluar');
         if($ambil->num_rows() > 0)
        {
        foreach($ambil->result() as $baris)
        {
    
            $hasil[] = $baris;
	
	}
	
            return $hasil;
	
        }
    }
    
}