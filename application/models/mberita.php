<?php
class Mberita extends CI_Model
 {
    function getberita($id){
            
  $this->db->where(array('id_berita'=>$id));
  //$this->db->order_by("tanggal", "desc");
  $this->db->join('r_kategori','r_kategori.id=berita.id_kategori','inner');
  $ambil = $this->db->get('berita');
  if($ambil->num_rows() > 0)
   {
   foreach($ambil->result() as $baris)
    {
    
	 $hasil[] = $baris;
	
	}
	
    return $hasil;
	
   }
    }
   function listberita(){
        $this->db->join('r_kategori','r_kategori.id=berita.id_kategori','inner');
        $this->db->order_by('tanggal','desc');
        $ambil = $this->db->get('berita');
        if($ambil->num_rows() > 0)
        {
         foreach($ambil->result() as $baris)
        {
    
            $hasil[] = $baris;
	
                }
	
            return $hasil;
	
        }
    }
    
    function getkomentar($id){
        $this->db->where(array('berita.id_berita'=>$id));
        $this->db->order_by('komentar.tanggal','desc');
        $this->db->join('berita','berita.id_berita = komentar.id_berita','inner');
        $this->db->join('view_user','komentar.username=view_user.username','inner');
        $ambil = $this->db->get('komentar');
  if($ambil->num_rows() > 0)
   {
   foreach($ambil->result() as $baris)
    {
    
	 $hasil[] = $baris;
	
	}
	
    return $hasil;
	
   }
    }
   
  function _option_kategori() {
        $result = $this->db->get("r_kategori");
        $kelas = array();
        foreach($result->result_array() as $row) {
        $kelas[$row["id"]] = $row["kategori"];
        }
            return $kelas;
        }
   function tambah(){
       $berita = array (
         'judul' => $this->input->post('judul'),
         'id_kategori' =>$this->input->post('id_kategori'),
         'ISI' => $this->input->post('ISI'),
         'tanggal' => date('Y-m-d')
       );
       $this->db->insert('berita',$berita);
   }
   function hapus($id){
       $this->db->query("DELETE FROM berita WHERE id_berita = '$id'");
   }
}
