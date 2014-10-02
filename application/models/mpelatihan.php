<?php if (!defined('BASEPATH')) exit ('No Direct Script Access Allowed');


class Mpelatihan extends CI_Model{

    function getpelatihan($username){
        $this->db->where(array('user.username'=>$username));
        $this->db->order_by('thn_pelatihan','ASC');
        $this->db->join('user','rpelatihan.id_user = user.id_user','inner');
        $this->db->join('guru','guru.username=user.username','inner');
        $ambil = $this->db->get('rpelatihan');
        
        if ($ambil->num_rows()>0){
            foreach($ambil->result() as $baris){
                $hasil[] = $baris;
            }
            return $hasil;
        }
    }
}