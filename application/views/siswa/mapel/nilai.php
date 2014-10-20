<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" >
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>SIAKAD SMK Negeri 1 kota Bekasi || <?php echo $title;?></title>
<meta name="viewport" content="width=device-width">
<meta name="viewport" content="height=device-height">

	
<!-- css -->
<link href="<?php echo base_url();?>style/css/bootstrap-cerulean1.css" rel="stylesheet">
<link rel="stylesheet" media="screen" href="<?php echo base_url();?>style/guru/css/widescreen.css" type="text/css">
<link rel="stylesheet" media="screen and (max-width: 900px)" href="<?php echo base_url();?>style/guru/css/mobile.css" type="text/css">
<!-- jQuery -->
<link href="<?php echo base_url();?>style/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="<?php echo base_url();?>style/css/charisma-app.css" rel="stylesheet">
	<link href="<?php echo base_url();?>style/css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
	<link href='<?php echo base_url();?>style/css/fullcalendar.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>style/css/fullcalendar.print.css' rel='stylesheet'  media='print'>
	<link href='<?php echo base_url();?>style/css/chosen.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>style/css/uniform.default.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>style/css/colorbox.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>style/css/jquery.cleditor.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>style/css/jquery.noty.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>style/css/noty_theme_default.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>style/css/elfinder.min.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>style/css/elfinder.theme.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>style/css/jquery.iphone.toggle.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>style/css/opa-icons.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>style/css/uploadify.css' rel='stylesheet'>
	
	
</head>

<body>
<!-- seluruh body -->
<div id="allb">
<!-- header -->
	<div id="header">
    	<img src="<?php echo base_url();?>style/guru/images/logo.png" class="logohead">
        <div class="headerkanan">
       	  <div class="status" align="right">SISWA</div>
          <div class="namauser" align="right"><?php echo strtoupper($namasiswa->nama_siswa);?></div>
        </div>
  </div>
    <!-- MENU -->
    <ul id="navigasi">
    	<li class="navigasibutton">
            <div class="navigasigambar" align="center"><img src="<?php echo base_url();?>style/guru/images/g_beranda.png" class="gambarnyanavigasi"></div>
            <div class="navigasitulisan" align="center">BERANDA</div>
        </li>
        <li class="navigasibutton">
          <div class="navigasigambar" align="center"><img src="<?php echo base_url();?>style/guru/images/g_profil.png" class="gambarnyanavigasi"></div>
            <div class="navigasitulisan" align="center">PROFIL</div>
        			<ul class="navigasisubbutton">
                    		<div class="titlesubbox">
                            	<div class="titlesubmenu">PROFIL SISWA</div>
                                <div class="titlehr"></div>
                            </div>
                            <div class="isisubbox">
                            	<div class="isisubmenu"><a href="<?php echo base_url();?>index.php/profilguru">PROFIL SAYA</a></div>
							</div>
                            <div class="isisubbox">
                            	<div class="isisubmenu"><a href="<?php echo base_url();?>index.php/ortu">DATA ORANG TUA</a></div>
							</div>
                            <div class="isisubbox">
                            	<div class="isisubmenu"><a href="<?php echo base_url();?>index.php/pendidikan">RIWAYAT PENDIDIKAN</a></div>
							</div>
                    		<div class="titlesubbox">
                            	<div class="titlesubmenu">INFORMASI PENGGUNA</div>
                                <div class="titlehr"></div>
                            </div>
                            <div class="isisubbox">
                            	<div class="isisubmenu">GANTI PASSWORD</div>
							</div>
                    </ul>
      </li>
        <li class="navigasibutton">
            <div class="navigasigambar" align="center"><img src="<?php echo base_url();?>style/guru/images/g_jadwal.png" class="gambarnyanavigasi"></div>
            <div class="navigasitulisan" align="center">JADWAL</div>
        			<ul class="navigasisubbutton">
                    		<div class="titlesubbox">
                            	<div class="titlesubmenu">JADWAL PENDIDIK</div>
                                <div class="titlehr"></div>
                            </div>
                            <div class="isisubbox">
                            	<div class="isisubmenu">JADWAL MENGAJAR SAYA</div>
							</div>
                    		<div class="titlesubbox">
                            	<div class="titlesubmenu">JADWAL UMUM</div>
                                <div class="titlehr"></div>
                            </div>
                            <div class="isisubbox">
                            	<div class="isisubmenu">JADWAL PELAJARAN</div>
							</div>
                      <div class="isisubbox">
                            	<div class="isisubmenu">KALENDER AKADEMIK</div>
					  </div>
                    </ul>
        </li>
		<li class="navigasibutton">
            <div class="navigasigambar" align="center"><img src="<?php echo base_url();?>style/guru/images/g_adm.png"  class="gambarnyanavigasi"></div>
            <div class="navigasitulisan" align="center">ADM.KBM</div>
        			<ul class="navigasisubbutton">
                    		<div class="titlesubbox">
                            	<div class="titlesubmenu">ADMINISTRASI PENDIDIK</div>
                                <div class="titlehr"></div>
                            </div>
                            <div class="isisubbox">
                            	<div class="isisubmenu"><a href="<?php echo base_url();?>index.php/mapelsaya">MATA PELAJARAN SAYA</a></div>
							</div>
                    		<div class="titlesubbox">
                            	<div class="titlesubmenu">INFORMASI SISWA</div>
                                <div class="titlehr"></div>
                            </div>
                            <div class="isisubbox">
                            	<div class="isisubmenu">KELAS BIMBINGAN</div>
							</div>
                            <div class="isisubbox">
                            	<div class="isisubmenu">INFORMASI KELAS & SISWA</div>
							</div>
                            <div class="isisubbox">
                            	<div class="isisubmenu">NILAI SISWA</div>
							</div>
          </ul>
        </li>
		<li class="navigasibutton">
            <div class="navigasigambar" align="center"><img src="<?php echo base_url();?>style/guru/images/g_info.png" class="gambarnyanavigasi"></div>
            <div class="navigasitulisan" align="center">INFORMASI</div>
        			<ul class="navigasisubbutton">
                    		<div class="titlesubbox">
                            	<div class="titlesubmenu">INFORMASI PRIBADI</div>
                                <div class="titlehr"></div>
                            </div>
                            <div class="isisubbox">
                            	<div class="isisubmenu">PESAN BARU</div>
							</div>
                            <div class="isisubbox">
                            	<div class="isisubmenu">PESAN MASUK</div>
							</div>
                            <div class="isisubbox">
                            	<div class="isisubmenu">PESAN KELUAR</div>
							</div>

                    		<div class="titlesubbox">
                            	<div class="titlesubmenu">INFORMASI UMUM</div>
                                <div class="titlehr"></div>
                            </div>
                            <div class="isisubbox">
                            	<div class="isisubmenu">BUAT PENGUMUMAN</div>
							</div>
                            <div class="isisubbox">
                            	<div class="isisubmenu">PENGUMUMAN</div>
							</div>                            
          </ul>
        </li>
		<li class="navigasibuttonLOG">
            <div class="navigasigambarLOG" align="center"><img src="<?php echo base_url();?>style/guru/images/LOGOLOG_34.png" class="gambarnyanavigasiLOG"></div>
            <div class="navigasitulisanLOG"><a href="<?php echo base_url();?>index.php/keluar">TUTUP</a></div>
        </li>
      <li class="menurepeat"></li>
    </ul>
  <!-- konten -->
  
  <div id="kontenbody">
      
   <div class="map">Siswa> NILAI <?php echo $nilai->nama_matpel;?></div>
   
   
 
   <div class="span8">  
       
       <p class="judul">NILAI KETERAMPILAN <?php echo $nilai->nama_matpel;?></p>
       <p class="hrnya"></p>
       
   <!--
   NILAI KETERAMPILAN
   -->
   <div id="nilai_keterampilan">
       <?php if(empty($nilai)){
           
       }else{?>
       
       <table class="table table-condensed table-hover">
           <tr>
               <td colspan="3"><strong>TUGAS PRAKTEK</strong></td>
           </tr>
           <tr>
               <td>TP1</td>
               <td>:</td>
               <td><?php echo $nilai->tp1;?></td>
           </tr>
           <tr>
               <td>TP2</td>
               <td>:</td>
               <td><?php echo $nilai->tp2;?></td>
           </tr>
           <tr>
               <td>TP3</td>
               <td>:</td>
               <td><?php echo $nilai->tp3;?></td>
           </tr>
           <tr>
               <td>TP4</td>
               <td>:</td>
               <td><?php echo $nilai->tp4;?></td>
           </tr>
           <tr>
               <td>RATA RATA</td>
               <td>:</td>
               <td><?php echo $nilai->rerata_tp;?></td>
           </tr>
           <tr>
               <td colspan="3"><strong>NILAI PROJECT</strong></td>
           </tr>
           <tr>
               <td>P1</td>
               <td>:</td>
               <td><?php echo $nilai->p1;?></td>
           </tr>
           <tr>
               <td>P2</td>
               <td>:</td>
               <td><?php echo $nilai->p2;?></td>
           </tr>
           <tr>
               <td>P3</td>
               <td>:</td>
               <td><?php echo $nilai->p3;?></td>
           </tr>
           <tr>
               <td>P4</td>
               <td>:</td>
               <td><?php echo $nilai->p4;?></td>
           </tr>
           <tr>
               <td>RATA RATA</td>
               <td>:</td>
               <td><?php echo $nilai->project;?></td>
           </tr>
           <tr>
               <td colspan="3"><strong>NILAI PORTOFOLIO</strong></td>
           </tr>
           <tr>
               <td>PR1</td>
               <td>:</td>
               <td><?php echo $nilai->pr1;?></td>
           </tr>
           <tr>
               <td>PR2</td>
               <td>:</td>
               <td><?php echo $nilai->pr2;?></td>
           </tr>
           <tr>
               <td>PR3</td>
               <td>:</td>
               <td><?php echo $nilai->pr3;?></td>
           </tr>
           
           <tr>
               <td>RATA RATA</td>
               <td>:</td>
               <td><?php echo $nilai->porto;?></td>
           </tr>
           <tr>
               <td><strong>NILAI RATUSAN</strong></td>
               <td>:</td>
               <td><?php echo $nilai->nilai_ratusan;?></td>
           </tr>
           <tr>
               <td><strong>NILAI 1-4</strong></td>
               <td>:</td>
               <td><?php echo $nilai->nilai4_keterampilan;?></td>
           </tr>
           <tr>
               <td><strong>PREDIKAT</strong></td>
               <td>:</td>
               <td><?php echo $nilai->predikat_keterampilan;?></td>
           </tr>
           
           
           
       </table>
       
       <?}?>
       
       <!-- Nilai Pengetahuan-->
       
       <p class="judul">NILAI Pengetahuan <?php echo $nilai->nama_matpel;?></p>
       <p class="hrnya"></p>
       
   <!--
   NILAI Pengetahuan
   -->
   <div id="nilai_pengetahuan">
       <?php if(empty($nilai)){
           
       }else{?>
       
       <table class="table table-condensed table-hover">
           <tr>
               <td colspan="3"><strong>ULANGAN HARIAN</strong></td>
           </tr>
           <tr>
               <td>HARIAN 1</td>
               <td>:</td>
               <td><?php echo $nilai->uh1;?></td>
           </tr>
           <tr>
               <td>HARIAN 2</td>
               <td>:</td>
               <td><?php echo $nilai->uh2;?></td>
           </tr>
           <tr>
               <td>HARIAN 3</td>
               <td>:</td>
               <td><?php echo $nilai->uh3;?></td>
           </tr>
           <tr>
               <td>HARIAN 4</td>
               <td>:</td>
               <td><?php echo $nilai->uh4;?></td>
           </tr>
           <tr>
               <td>NIL ULANGAN HARIAN</td>
               <td>:</td>
               <td><?php echo $nilai->nuh;?></td>
           </tr>
           <tr>
               <td colspan="3"><strong>NILAI TUGAS</strong></td>
           </tr>
           <tr>
               <td>TUGAS 1</td>
               <td>:</td>
               <td><?php echo $nilai->t1;?></td>
           </tr>
           <tr>
               <td>TUGAS 2</td>
               <td>:</td>
               <td><?php echo $nilai->t2;?></td>
           </tr>
           <tr>
               <td>TUGAS 3</td>
               <td>:</td>
               <td><?php echo $nilai->t3;?></td>
           </tr>
           <tr>
               <td>TUGAS 4</td>
               <td>:</td>
               <td><?php echo $nilai->t4;?></td>
           </tr>
           <tr>
               <td>NILAI TUGAS</td>
               <td>:</td>
               <td><?php echo $nilai->rata_tugas;?></td>
           </tr>
           <tr>
               <td><strong>HARIAN + TUGAS / 2</strong></td>
               <td>:</td>
               <td><?php echo $nilai->total_harian_dan_tugas;?></td>
           </tr>
           <tr>
               <td><strong>UTS</strong></td>
               <td>:</td>
               <td><?php echo $nilai->UTS;?></td>
           </tr>
           <tr>
               <td><strong>UAS</strong></td>
               <td>:</td>
               <td><?php echo $nilai->UAS;?></td>
           </tr>
           <tr>
               <td><strong>TOTAL</strong></td>
               <td>:</td>
               <td><?php echo $nilai->total_pengetahuan;?></td>
           </tr>
           <tr>
               <td><strong>SKALA 1-4</strong></td>
               <td>:</td>
               <td><?php echo $nilai->skala4_pengetahuan;?></td>
           </tr>
           
           
           <tr>
               <td><strong>PREDIKAT</strong></td>
               <td>:</td>
               <td><?php echo $nilai->predikat_pengetahuan;?></td>
           </tr>
           <tr>
               <td><strong>KETUNTASAN</strong></td>
               <td>:</td>
               <td><?php echo $nilai->ketuntasan_pengetahuan;?></td>
           </tr>
           <tr>
               <td><strong>KETERANGAN</strong></td>
               <td>:</td>
               <td><?php echo $nilai->keterangan_pengetahuan;?></td>
           </tr>
           
           
           
       </table>
       
       <?}?>
   </div>
   
     <!-- Nilai Pengetahuan-->
       
       <p class="judul">NILAI SIKAP <?php echo $nilai->nama_matpel;?></p>
       <p class="hrnya"></p>
       
   <!--
   NILAI Pengetahuan
   -->
   <div id="nilai_sikap">
       <?php if(empty($nilai)){
           
       }else{?>
       
       <table class="table table-condensed table-hover">
           <tr>
               <td colspan="3"><strong>OBSERVASI</strong></td>
           </tr>
           <tr>
               <td>OBSERVASI 1</td>
               <td>:</td>
               <td><?php echo $nilai->observasi1;?></td>
           </tr>
           <tr>
               <td>OBSERVASI 2</td>
               <td>:</td>
               <td><?php echo $nilai->observasi2;?></td>
           </tr>
           <tr>
               <td>RATA-RATA OBSERVASI</td>
               <td>:</td>
               <td><?php echo $nilai->rerata_observasi;?></td>
           </tr>
           
           <tr>
               <td colspan="3"><strong>PENILAIAN DIRI SENDIRI</strong></td>
           </tr>
           <tr>
               <td>PENILAIAN DIRI 1</td>
               <td>:</td>
               <td><?php echo $nilai->penilaian_diri1;?></td>
           </tr>
           <tr>
               <td>PENILAIAN DIRI 2</td>
               <td>:</td>
               <td><?php echo $nilai->penilaian_diri2;?></td>
           </tr>
           <tr>
               <td>PENILAIAN DIRI 3</td>
               <td>:</td>
               <td><?php echo $nilai->penilaian_diri3;?></td>
           </tr>
           <tr>
               <td>RERATA PENILAIAN DIRI</td>
               <td>:</td>
               <td><?php echo $nilai->rerata_penilaian_diri;?></td>
           </tr>
           <tr>
               <td colspan="3"><strong>PENILAIAN TEMAN</strong></td>
              
           </tr>
           <tr>
               <td>PENILAIAN TEMAN 1</td>
               <td>:</td>
               <td><?php echo $nilai->penilaian_teman1;?></td>
           </tr>
           <tr>
               <td>PENILAIAN TEMAN 2</td>
               <td>:</td>
               <td><?php echo $nilai->penilaian_teman2;?></td>
           </tr>
           <tr>
               <td>RERATA PENILAIAN TEMAN</td>
               <td>:</td>
               <td><?php echo $nilai->rerata_penilaian_teman;?></td>
           </tr>
           <tr>
               <td colspan="3"><strong>JURNAL</strong></td>
              
           </tr>
           <tr>
               <td>JURNAL1</td>
               <td>:</td>
               <td><?php echo $nilai->jurnal1;?></td>
           </tr>
           <tr>
               <td>JURNAL2</td>
               <td>:</td>
               <td><?php echo $nilai->jurnal2;?></td>
           </tr>
           <tr>
               <td>RERATA JURNAL</td>
               <td>:</td>
               <td><?php echo $nilai->rerata_jurnal;?></td>
           </tr>
           <tr>
               <td><strong>NILAI RAPORT</strong></td>
               <td>:</td>
               <td><?php echo $nilai->nilai_raport;?></td>
           </tr>
           <tr>
               <td><strong>PREDIKAT</strong></td>
               <td>:</td>
               <td><?php echo $nilai->predikat_sikap;?></td>
           </tr>
           <tr>
               <td><strong>Nilai 1-4</strong></td>
               <td>:</td>
               <td><?php echo $nilai->skala4_sikap;?></td>
           </tr>
           <tr>
               <td><strong>KETUNTASAN</strong></td>
               <td>:</td>
               <td><?php echo $nilai->ketuntasan_sikap;?></td>
           </tr>
           <tr>
               <td><strong>KEMAJUAN BELAJAR</strong></td>
               <td>:</td>
               <td><?php echo $nilai->desc_kemajuan_belajar;?></td>
           </tr>
                 
           
       </table>
       
       <?}?>
   </div>
   </div>
   </div>
                                    
   
  
  
  
  </div>

  <!-- footer -->
  <!-- jQuery -->
	<script src="<?php echo base_url();?>style/js/jquery-1.7.2.min.js"></script>
	<!-- jQuery UI -->
	<script src="<?php echo base_url();?>style/js/jquery-ui-1.8.21.custom.min.js"></script>
	<!-- transition / effect library -->
	<script src="<?php echo base_url();?>style/js/bootstrap-transition.js"></script>
	<!-- alert enhancer library -->
	<script src="<?php echo base_url();?>style/js/bootstrap-alert.js"></script>
	<!-- modal / dialog library -->
	<script src="<?php echo base_url();?>style/js/bootstrap-modal.js"></script>
	<!-- custom dropdown library -->
	<script src="<?php echo base_url();?>style/js/bootstrap-dropdown.js"></script>
	<!-- scrolspy library -->
	<script src="<?php echo base_url();?>style/js/bootstrap-scrollspy.js"></script>
	<!-- library for creating tabs -->
	<script src="<?php echo base_url();?>style/js/bootstrap-tab.js"></script>
	<!-- library for advanced tooltip -->
	<script src="<?php echo base_url();?>style/js/bootstrap-tooltip.js"></script>
	<!-- popover effect library -->
	<script src="<?php echo base_url();?>style/js/bootstrap-popover.js"></script>
	<!-- button enhancer library -->
	<script src="<?php echo base_url();?>style/js/bootstrap-button.js"></script>
	<!-- accordion library (optional, not used in demo) -->
	<script src="<?php echo base_url();?>style/js/bootstrap-collapse.js"></script>
	<!-- carousel slideshow library (optional, not used in demo) -->
	<script src="<?php echo base_url();?>style/js/bootstrap-carousel.js"></script>
	<!-- autocomplete library -->
	<script src="<?php echo base_url();?>style/js/bootstrap-typeahead.js"></script>
	<!-- tour library -->
	<script src="<?php echo base_url();?>style/js/bootstrap-tour.js"></script>
	<!-- library for cookie management -->
	<script src="<?php echo base_url();?>style/js/jquery.cookie.js"></script>
	<!-- calander plugin -->
	<script src='<?php echo base_url();?>style/js/fullcalendar.min.js'></script>
	<!-- data table plugin -->
	<script src='<?php echo base_url();?>style/js/jquery.dataTables.min.js'></script>

	<!-- chart libraries start -->
	<script src="<?php echo base_url();?>style/js/excanvas.js"></script>
	<script src="<?php echo base_url();?>style/js/jquery.flot.min.js"></script>
	<script src="<?php echo base_url();?>style/js/jquery.flot.pie.min.js"></script>
	<script src="<?php echo base_url();?>style/js/jquery.flot.stack.js"></script>
	<script src="<?php echo base_url();?>style/js/jquery.flot.resize.min.js"></script>
	<!-- chart libraries end -->

	<!-- select or dropdown enhancer -->
	<script src="<?php echo base_url();?>style/js/jquery.chosen.min.js"></script>
	<!-- checkbox, radio, and file input styler -->
	<script src="<?php echo base_url();?>style/js/jquery.uniform.min.js"></script>
	<!-- plugin for gallery image view -->
	<script src="<?php echo base_url();?>style/js/jquery.colorbox.min.js"></script>
	<!-- rich text editor library -->
	<script src="<?php echo base_url();?>style/js/jquery.cleditor.min.js"></script>
	<!-- notification plugin -->
	<script src="<?php echo base_url();?>style/js/jquery.noty.js"></script>
	<!-- file manager library -->
	<script src="<?php echo base_url();?>style/js/jquery.elfinder.min.js"></script>
	<!-- star rating plugin -->
	<script src="<?php echo base_url();?>style/js/jquery.raty.min.js"></script>
	<!-- for iOS style toggle switch -->
	<script src="<?php echo base_url();?>style/js/jquery.iphone.toggle.js"></script>
	<!-- autogrowing textarea plugin -->
	<script src="<?php echo base_url();?>style/js/jquery.autogrow-textarea.js"></script>
	<!-- multiple file upload plugin -->
	<script src="<?php echo base_url();?>style/js/jquery.uploadify-3.1.min.js"></script>
	<!-- history.js for cross-browser state change on ajax -->
	<script src="<?php echo base_url();?>style/js/jquery.history.js"></script>
	<!-- application script for Charisma demo -->
	<script src="<?php echo base_url();?>style/js/charisma.js"></script>
	
  <div id="footer">
   	<div class="footerstatus" align="right">© 2014 SISFO AKADEMIK SISWA - SMK NEGERI 1 KOTA BEKASI</div>
    </div>
</div>
</body>
</html>
