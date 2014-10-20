<?php
class Mwalas extends CI_Model
{
    function getall(){
        $this->db->join('kelas','kelas.id_kelas=walas.id_kelas','inner');
        $this->db->join('guru','guru.id_guru=walas.id_guru','inner');
        $ambil=$this->db->get('walas');
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