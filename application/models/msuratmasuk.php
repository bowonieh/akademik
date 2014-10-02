<?php

class Msuratmasuk extends CI_Model{
    function listall(){
        //$this->db->order_by("id_suratmasuk", "asc");
        $this->db->order_by('tanggal','desc');
        $ambil = $this->db->get('surat_masuk');
         if($ambil->num_rows() > 0)
        {
        foreach($ambil->result() as $baris)
        {
    
            $hasil[] = $baris;
	
	}
	
            return $hasil;
	
        }
    }
    function getdata()
  {
  $this->db->order_by('tanggal','desc');
  $ambil = $this->db->get('surat_masuk');
  if($ambil->num_rows() > 0)
   {
   foreach($ambil->result() as $baris)
    {
    
	 $hasil[] = $baris;
	
	}
	
    return $hasil;
	
   }
   return false;
  }

    function getlimit($limit)
  {
  $this->db->limit($limit);
  $this->db->order_by('tanggal','desc');
  $ambil = $this->db->get('surat_masuk');
  if($ambil->num_rows() > 0)
   {
   foreach($ambil->result() as $baris)
    {
    
	 $hasil[] = $baris;
	
	}
	
    return $hasil;
	
   }
   return false;
  }
  function detil($id){
        //$this ->db->where(array('id_suratmasuk'=>$id));
        //$this->db->join('kelas','kelas.id_kelas=siswa.id_kelas','inner');
        //$query = $this->db->get('siswa');
        $query  = $this->db->get_where('surat_masuk',array('id_suratmasuk' => $id));
        return $query->row();
  }
  
  function hapus($id){
      $query =  $this->db->delete('surat_masuk',array('id_suratmasuk'=>$id));
      return $query;
  }
}
