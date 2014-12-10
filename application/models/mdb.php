<?php

class Mdb extends CI_Model{
    //Insert based on select
    //INSERT INTO data (col1,col2)
    //SELECT col1, '438'
    //where data.id = 'id_val'
    function getall($table){
        
        $this->db->get($table);
        
    }
    function getTahunAktif(){
        $this->db->where(array('status_aktif'=>'Y'));
        $a = $this->db->get('r_tahun');
        return $a->row();

    }
    function tambahabsensi(){
      $nis = $this->input->post('nis');
      $tanggal = $this->input->post('tanggal');
      $alasan = $this->input->post('alasan');
      $id_tahun = $this->input->post('id_tahun');
      //$chk = $this->db->query("SELECT * FROM absensi WHERE tanggal = '$tanggal' AND nis = '$nis' "); 
      
          //$query = $this->db->query("INSERT INTO d_absensi (nis,tanggal,alasan,id_tahun) VALUES ($nis,$tanggal,$alasan,$id_tahun)");
      //$query = $this->db->insert_string('d_absensi', array('nis'=>$nis,'tanggal'=>$tanggal,'id_tahun'=>$id_tahun,'alasan'=>$alasan));
          $query = $this->db->insert_string('d_absensi', array('nis'=>$nis,'tanggal'=>$tanggal,'id_tahun'=>$id_tahun,'alasan'=>$alasan));
          return $query;
      
          
      
      
  }

    function mRata($id){
        $this->db->where(array('id_nilai'=>$id));
        $a = $this->db->get('d_nilai');

        $aa = $a->row();

        $data = array(
            //Nilai Keterampilan
            'tp1'=> $aa->tp1,
            'tp2'=> $aa->tp2,
            'tp3'=> $aa->tp3,
            'tp4'=> $aa->tp4,
            'rerata_tp' => rata_rata(array($aa->tp1,$aa->tp2,$aa->tp3,$aa->tp4)),
            'p1'=> $aa->p1,
            'p2'=> $aa->p2,
            'p3'=> $aa->p3,
            'p4'=> $aa->p4,
            'project' => rata_rata(array($aa->p1,$aa->p2,$aa->p3,$aa->p4)),
            'pr1'=> $aa->pr1,
            'pr2'=> $aa->pr2,
            'pr3'=> $aa->pr3,
            'porto'=> rata_rata(array($aa->pr1,$aa->pr2,$aa->pr3)),
            'nilai_ratusan' => ((2*rata_rata(array($aa->tp1,$aa->tp2,$aa->tp3,$aa->tp4)))+(rata_rata(array($aa->p1,$aa->p2,$aa->p3,$aa->p4)))+(rata_rata(array($aa->pr1,$aa->pr2,$aa->pr3))) )/4,
            'nilai4_keterampilan' => bilangan4(((2*rata_rata(array($aa->tp1,$aa->tp2,$aa->tp3,$aa->tp4)))+(rata_rata(array($aa->p1,$aa->p2,$aa->p3,$aa->p4)))+(rata_rata(array($aa->pr1,$aa->pr2,$aa->pr3))) )/4),
            'predikat_keterampilan' => predikat(((2*rata_rata(array($aa->tp1,$aa->tp2,$aa->tp3,$aa->tp4)))+(rata_rata(array($aa->p1,$aa->p2,$aa->p3,$aa->p4)))+(rata_rata(array($aa->pr1,$aa->pr2,$aa->pr3))) )/4), 
            //Nilai Pengetahuan
            'uh1' => $aa->uh1,
            'uh2' => $aa->uh2,
            'uh3' => $aa->uh3,
            'uh4' => $aa->uh4,
            'nuh' => rata_rata(array($aa->uh1,$aa->uh2, $aa->uh3,$aa->uh4)),
            't1' => $aa->t1,
            't2' => $aa->t2,
            't3' => $aa->t3,
            't4' => $aa->t4,
            'rata_tugas' => rata_rata(array($aa->t1,$aa->t2,$aa->t3,$aa->t4)),
            'total_harian_dan_tugas' => rata_rata(array(rata_rata(array($aa->uh1,$aa->uh2, $aa->uh3,$aa->uh4)),rata_rata(array($aa->t1,$aa->t2,$aa->t3,$aa->t4)))),
            'UTS'=> $aa->UTS,
            'UAS'=>$aa->UAS,
            'total_pengetahuan' => ((2*rata_rata(array(rata_rata(array($aa->uh1,$aa->uh2, $aa->uh3,$aa->uh4)),rata_rata(array($aa->t1,$aa->t2,$aa->t3,$aa->t4))))) + $aa->UTS + $aa->UAS) / 4,
            'skala4_pengetahuan' => bilangan4(((2*rata_rata(array(rata_rata(array($aa->uh1,$aa->uh2, $aa->uh3,$aa->uh4)),rata_rata(array($aa->t1,$aa->t2,$aa->t3,$aa->t4))))) + $aa->UTS + $aa->UAS) / 4),
            'predikat_pengetahuan' => predikat(((2*rata_rata(array(rata_rata(array($aa->uh1,$aa->uh2, $aa->uh3,$aa->uh4)),rata_rata(array($aa->t1,$aa->t2,$aa->t3,$aa->t4))))) + $aa->UTS + $aa->UAS) / 4),
            'observasi1'=>$aa->observasi1,
            'observasi2'=>$aa->observasi2,
            'rerata_observasi'=>rata_rata(array($aa->observasi1,$aa->observasi2)),
            'penilaian_diri1'=>$aa->penilaian_diri1,
            'penilaian_diri2'=>$aa->penilaian_diri2,
            'penilaian_diri3'=>$aa->penilaian_diri3,
            'rerata_penilaian_diri'=>  rata_rata(array($aa->penilaian_diri1,$aa->penilaian_diri2,$aa->penilaian_diri3)),
            'penilaian_teman1' => $aa->penilaian_teman1,
            'penilaian_teman2' => $aa->penilaian_teman2,
            'rerata_penilaian_teman' =>rata_rata(array($aa->penilaian_teman1,$aa->penilaian_teman2)),
            'jurnal1' => $aa->jurnal1,
            'jurnal2' =>$aa->jurnal2,
            'rerata_jurnal' => rata_rata(array($aa->jurnal1,$aa->jurnal2)),
            'nilai_raport' => (rata_rata(array($aa->observasi1,$aa->observasi2))+ rata_rata(array($aa->penilaian_diri1,$aa->penilaian_diri2,$aa->penilaian_diri3)) + rata_rata(array($aa->penilaian_teman1,$aa->penilaian_teman2)) + rata_rata(array($aa->jurnal1,$aa->jurnal2)) )/4,
            'predikat_sikap' => predikat((rata_rata(array($aa->observasi1,$aa->observasi2))+ rata_rata(array($aa->penilaian_diri1,$aa->penilaian_diri2,$aa->penilaian_diri3)) + rata_rata(array($aa->penilaian_teman1,$aa->penilaian_teman2)) + rata_rata(array($aa->jurnal1,$aa->jurnal2)) )/4),
            'skala4_sikap' => bilangan4((rata_rata(array($aa->observasi1,$aa->observasi2))+ rata_rata(array($aa->penilaian_diri1,$aa->penilaian_diri2,$aa->penilaian_diri3)) + rata_rata(array($aa->penilaian_teman1,$aa->penilaian_teman2)) + rata_rata(array($aa->jurnal1,$aa->jurnal2)) )/4)
            );

        if($this->db->update('d_nilai',$data,array('id_nilai'=>$id))){
            return TRUE;
        }else{
            return FALSE;
        }

    }
    function chkabsn(){
        // $query  = $this->db->get_where('tahun',array('status' => 1));
        //$this->db->where(array('status'=>'1'));
        $nis = $this->input->post('nis');
        $tanggal = $this->input->post('tanggal');
        $this->db->where(array('nis'=>$nis,'tanggal'=>$tanggal));
        //$this->db->where(array('tanggal'=>$tanggal));
        //$ambil = $this->db->get('tahun');
        $ambil = $this->db->get('d_absensi');
        return $ambil->num_rows();
        
    }
    function chkexist($table,$data){
        $this->db->where($data);
        $ambil = $this->db->get($table);
        return $ambil->num_rows();
    }
    //fungsi untuk memeriksa apakah dia walas atau bukan
    function chkwalas(){
        $id_guru = $this->infouser();
        $this->db->where(array('id_guru'=>$id_guru->id_guru));
        $a = $this->db->get('d_walas');
        return $a->num_rows();
        
    }
    function idwalas(){
    	$id_guru = $this->infouser();
    	$tahun_aktif = $this->getTahunAktif();
    	$this->db->where(array('id_guru'=>$id_guru->id_guru,'id_tahun' => $tahun_aktif->id_tahun));
    	$a = $this->db->get('d_walas');
    	return $a->row();
    }
    function chkekskul(){
        $id_tahun = $this->input->post('id_tahun');
        $id_ekskul = $this->input->post('id_ekskul');
        $nis        = $this->input->post('nis');
        $this->db->where(array('id_tahun'=>$id_tahun,'id_ekskul'=>$id_ekskul,'nis' => $nis));
        $d = $this->db->get('d_ekskul_siswa');
        return $d->num_rows();
    }
    public function chkpassword($user_id,$pass_lama){
        $this->db->select(array('user_id','password'));
        $this->db->where(array('user_id'=>$user_id));
        $a = $this->db->get('d_user');
        $d = $a->row();
        if($d->password === $pass_lama){
            return TRUE;
        }else{
            return FALSE;
        }
    }
        function chkprofil($user_id){
        if($this->session->userdata('level') === '2'){
        $id = $this->infouser();
        $this->db->select('user_id');
        $this->db->where(array('user_id'=>$id->user_id));
        $a = $this->db->get('d_user');
        $d = $a->row();
            if($user_id === $d->user_id){
            echo "1";
            }else{
            echo "2";
            }
        }elseif($this->session->userdata('level') === '3'){
         $id =  $this->infosiswa();   
         $this->db->select('user_id');
        $this->db->where(array('user_id'=>$id->user_id));
        $a = $this->db->get('d_user');
        $d = $a->row();
            if($user_id === $d->user_id){
            echo "1";
            }else{
            echo "2";
            }
         
         
        }
        
    }
    function gettable($table){
        $ambil = $this->db->get($table);
         if($ambil->num_rows() > 0)
        {
        foreach($ambil->result() as $baris)
        {
    
            $hasil[] = $baris;
	
	}
	
            return $hasil;
	
        }
        
        
    }
    
    function delete($table,$key){
         $this->db->delete($table,$key);   
        }
    function update($table,$data,$where){
        $this->db->update_string($table, $data, $where);
    }
    function insert($table,$data){
        $this->db->insert_string($table, $data);
    }
    function addguru($username){
        
        $query = $this->db->get_where('d_user',array('username'=>$username));
        return $query->row();
    }
    function detilguru($id){
        $query  = $this->db->get_where('d_guru',array('id_guru' => $id));
        return $query->row();
    }
    function getWhere($table,$key){
       $this->db->where($key);
        $ambil = $this->db->get($table);
       return $ambil;
    }
    function infouser(){
        $a = $this->session->userdata('user_id');
        $this->db->where(array('d_user.user_id'=>$a));
        $this->db->join('d_guru','d_guru.user_id = d_user.user_id','inner');
        $d = $this->db->get('d_user');
        $as = $d->row();
        return $as;
        
    }
    
    function infosiswa(){
        $a = $this->session->userdata('username');
        $this->db->where(array('username'=>$a));
        $this->db->join('d_siswa','d_siswa.user_id = d_user.user_id','inner');
        $this->db->join('d_kelas','d_siswa.id_kelas = d_kelas.id_kelas','inner');
        $d = $this->db->get('d_user');
        $as = $d->row();
        return $as;
    }
    
    function getDetil($table,$id){
        $this->db->where($id);
        $a = $this->db->get($table);
        return $a->row();
    }
    function gettableWhere($table,$key){
       $this->db->where($key);
        $ambil = $this->db->get($table);
       if($ambil->num_rows() > 0)
        {
        foreach($ambil->result() as $baris)
        {
    
            $hasil[] = $baris;
	
	}
	
            return $hasil;
	
        }
    }
    
    function get_katmapel() {
        $this -> db -> select('id_katmapel,kategori');
        $query = $this -> db -> get('r_kategori_matpel');
 
        $katmapel = array();
 
        if ($query -> result()) {
        foreach ($query->result() as $d) {
        $katmapel[$d -> id_katmapel] = $d -> kategori;
        }
        return $katmapel;
        } else {
        return FALSE;
            }
        }
        
        function get_matpel($id_katmapel = null){
            $this->db->select('id_matpel, matpel');
 
            if($id_katmapel != NULL){
            $this->db->where('id_katmapel', $id_katmapel);
            }
 
            $query = $this->db->get('r_matpel');
 
            $matpel = array();
 
            if($query->result()){
                foreach ($query->result() as $d) {
                $matpel[$d->id_matpel] = $d->matpel;
            }
            return $matpel;
            }else{
                return FALSE;
            }
        }
        
        function getTahun(){
            
        $this -> db -> select('id_tahun,tahun');
        $query = $this -> db -> get('r_tahun');
 
        $tahun = array();
 
        if ($query -> result()) {
        foreach ($query->result() as $d) {
        $tahun[$d -> id_tahun] = $d ->tahun;
        }
        return $tahun;
        } else {
        return FALSE;
            }
            
        }
        function getKelas(){
            
        $this -> db -> select('id_kelas,kelas');
        $query = $this -> db -> get('d_kelas');
 
        $kelas = array();
 
        if ($query -> result()) {
        foreach ($query->result() as $d) {
        $kelas[$d -> id_kelas] = $d ->kelas;
        }
        return $kelas;
        } else {
        return FALSE;
            }
            
        }
        function getJenjang(){
            
        $this -> db -> select('id_rpendidikan,jenjang');
        $query = $this -> db -> get('r_pendidikan');
 
        $jenjang = array();
 
        if ($query -> result()) {
        foreach ($query->result() as $d) {
        $jenjang[$d -> id_rpendidikan] = $d ->jenjang;
        }
        return $jenjang;
        } else {
        return FALSE;
            }
            
        }
        function getHubkeluarga(){
            
        $this -> db -> select('id_rhkeluarga,hubungan_keluarga');
        $query = $this -> db -> get('r_hubkeluarga');
 
        $h = array();
 
        if ($query -> result()) {
        foreach ($query->result() as $d) {
        $h[$d -> id_rhkeluarga] = $d ->hubungan_keluarga;
        }
        return $h;
        } else {
        return FALSE;
            }
            
        }
        
        function getPenghasilan(){
            
        $this -> db -> select('id_penghasilan,jumlah_penghasilan');
        $query = $this -> db -> get('r_penghasilan');
 
        $h = array();
 
        if ($query -> result()) {
        foreach ($query->result() as $d) {
        $h[$d -> id_penghasilan] = $d ->jumlah_penghasilan;
        }
        return $h;
        } else {
        return FALSE;
            }
            
        }
        
        function getEkskul(){
            
        $this -> db -> select('id_ekskul,ekstrakulikuler');
        $query = $this -> db -> get('r_ekstrakulikuler');
 
        $h = array();
 
        if ($query -> result()) {
        foreach ($query->result() as $d) {
        $h[$d -> id_ekskul] = $d ->ekstrakulikuler;
        }
        return $h;
        } else {
        return FALSE;
            }
            
        }
        function getJenisPTK(){
            
        $this -> db -> select('id_jenisptk,jenis_ptk');
        $query = $this -> db -> get('r_jenis_ptk');
 
        $h = array();
 
        if ($query -> result()) {
        foreach ($query->result() as $d) {
        $h[$d -> id_jenisptk] = $d ->jenis_ptk;
        }
        return $h;
        } else {
        return FALSE;
            }
            
        }
        function getSttsPTK(){
            
        $this -> db -> select('id_stts_kepeg,status_kepegawaian');
        $query = $this -> db -> get('r_sttus_kepegawaian');
 
        $h = array();
 
        if ($query -> result()) {
        foreach ($query->result() as $d) {
        $h[$d -> id_stts_kepeg] = $d ->status_kepegawaian;
        }
        return $h;
        } else {
        return FALSE;
            }
            
        }
        function getTagihan(){
            $this -> db -> select('id_tagihan,nama_tagihan');
            $query = $this -> db -> get('r_biaya');
 
            $h = array();
 
            if ($query -> result()) {
            foreach ($query->result() as $d) {
            $h[$d -> id_tagihan] = $d ->nama_tagihan;
             }
                    return $h;
                } else {
                    return FALSE;
            }
            
        }
        //autocomplete siswa
        function get_autocomplete($a,$d,$t){
            if(empty($d)){
                
            }else{
                
            
            //$this->db->select($a);
            //$this->db->where($a,1);
            $this->db->like($a,$d);
            return $this->db->get($t,10);
            }
            return "Kosong";
        }
        function testno($no){
            if ($no > 0){
                return true;
            }else{
                return false;
            }
        }
        
        public function getTypeahead($table,$select,$like,$input){
            $post = $this->input->post($input);
            $this->db->select($select);
            $this->db->from($table);
            $this->db->like($like,$post);
            $q  = $this->db->get();
            $q_array = array();
            foreach($q -> result() as $row){
                $q_array[]= $row->$select;
            }
            $data = $q_array;
            return $data;
        }
        
        function ambilBaris($table,$key){
        	$this->db->where($key);
        	$a = $this->db->get($table);
        	return $a->row();
        }
        
        function chkequal($val1,$val2){
        	if($val1 === $val2){
        		return TRUE;
        	}else {
        		return FALSE;
        	}
        }
}