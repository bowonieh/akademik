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
       	  <div class="status" align="right">ADMINISTRATOR</div>
          
        </div>
  </div>
    <!-- MENU -->
    <ul id="navigasi">
    	<li class="navigasibutton">
            <div class="navigasigambar" align="center"><a href="<?php echo base_url();?>index.php/home"><img src="<?php echo base_url();?>style/guru/images/g_beranda.png" class="gambarnyanavigasi"></a></div>
            <div class="navigasitulisan" align="center"><a href="<?php echo base_url();?>index.php/home">BERANDA</a></div>
        </li>
        <li class="navigasibutton">
          <div class="navigasigambar" align="center"><img src="<?php echo base_url();?>style/guru/images/g_profil.png" class="gambarnyanavigasi"></div>
            <div class="navigasitulisan" align="center">PROFIL</div>
        			<ul class="navigasisubbutton">
                    		<div class="titlesubbox">
                            	<div class="titlesubmenu">PROFIL PENDIDIK</div>
                                <div class="titlehr"></div>
                            </div>
                            <div class="isisubbox">
                            	<div class="isisubmenu"><a href="<?php echo base_url();?>index.php/profilguru">PROFIL SAYA</a></div>
							</div>
                            <div class="isisubbox">
                            	<div class="isisubmenu">DATA KELUARGA</div>
							</div>
                            <div class="isisubbox">
                            	<div class="isisubmenu">RIWAYAT PENDIDIKAN</div>
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
            <div class="navigasigambar" align="center"><a href="<?php echo base_url();?>index.php/home"><img src="<?php echo base_url();?>style/guru/images/g_jadwal.png" class="gambarnyanavigasi"></a></div>
            <div class="navigasitulisan" align="center">AKADEMIK</div>
        			<ul class="navigasisubbutton">
                                    <div class="titlesubbox">
                            	<div class="titlesubmenu">ADMINISTRASI SEKOLAH</div>
                                <div class="titlehr"></div>
                            </div>
                                    <div class="isisubbox">
                            	<div class="isisubmenu">KOMPETENSI KEAHLIAN</div>
							</div>
                                    <div class="isisubbox">
                            	<div class="isisubmenu">ADMINISTRASI KELAS</div>
							</div>
                                    
                    		<div class="titlesubbox">
                            	<div class="titlesubmenu">TENAGA PENDIDIK</div>
                                <div class="titlehr"></div>
                            </div>
                            <div class="isisubbox">
                            	<div class="isisubmenu"><a href="<?php echo base_url();?>index.php/guru">DATA GURU</a></div>
							</div>
                            <div class="isisubbox">
                            	<div class="isisubmenu">DATA TENAGA ADMINISTRASI</div>
							</div>
                                    
                                    
                                    
                                    <div class="titlesubbox">
                            	<div class="titlesubmenu">PESERTA DIDIK</div>
                                <div class="titlehr"></div>
                            </div>
                            <div class="isisubbox">
                            	<div class="isisubmenu">DATA SISWA</div>
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
                            	<div class="isisubmenu">MATA PELAJARAN SAYA</div>
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
                            	<div class="titlesubmenu">INFORMASI UMUM</div>
                                <div class="titlehr"></div>
                            </div>
                            <div class="isisubbox">
                            	<div class="isisubmenu"><a href="<?php echo base_url();?>index.php/pengumuman">BUAT PENGUMUMAN</a></div>
							</div>
                            <div class="isisubbox">
                            	<div class="isisubmenu"><a href="<?php echo base_url();?>index.php/pengumuman">PENGUMUMAN</a></div>
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
      
   <div class="map">HOME > DATA GURU</div>
   
   
 
   <div class="span6">  
       
      
     <div class="judul">TAMBAH DATA GURU</div>
   <div class="hrnya"></div>
   <form id="formInput">
   <table cellpadding="0"  cellspacing="0" class="FORM_tabel">
   
   <tr class="FORM_tabelrow">
     <td class="FORM_tabel_judul">NAMA LENGKAP</td>
     <TD class="FORM_tabel_batas">: </TD><TD class="FORM_tabel_isi"><input type="text" name="nama_guru" class="form_textbox" placeholder="Masukan Nama Lengkap Anda" id="nama_guru">
     </TD></tr>
   <tr class="FORM_tabelrow1">
     <td class="FORM_tabel_judul">TEMPAT LAHIR</td>
     <TD class="FORM_tabel_batas">: </TD><TD class="FORM_tabel_isi"><input type="text" name="tempat" class="form_textbox" id="tempat">
     </TD></tr>
    <tr class="FORM_tabelrow">
     <td class="FORM_tabel_judul">TANGGAL LAHIR</td>
     <TD class="FORM_tabel_batas">: </TD><TD class="FORM_tabel_isi datepicker"><input type="text" name="tgl_lahir" class="form_textbox datepicker" id="tgl_lahir">
     </TD></tr>
    <tr class="FORM_tabelrow1">
     <td class="FORM_tabel_judul">USERNAME</td>
     <TD class="FORM_tabel_batas">: </TD><TD class="FORM_tabel_isi"><input type="text" name="username" class="form_textbox" id="username">
     </TD></tr>
    <tr class="FORM_tabelrow">
     <td colspan="2">  </td>
     <td> <a href="<?php echo base_url();?>index.php/guru/tambah" class="btn btn-primary tambahguru" redirect="<?php echo base_url();?>index.php/guru">Tambah</a></td>
     </TD></tr>
   </table>
     
   </form>
                <div class="alert alert-info">
						
					</div>
					<!--<div class="box-content">
                                           
                                            <div class="errorMSG"><?php echo validation_errors();?></div>
                                             <?php echo form_open_multipart('','id="#formInput" class="form-horizontal" ');?>
                  <div class="form-group">
                      <div class="step">
                        <label class="control-label" for="input02">NAMA PTK</label>
                        <div class="controls">  
                        
                        <input type="text" name="nama_guru" class="input" id="nama_guru" />
                        
                        </p>
                        </div>
                        <label class="control-label" for="input02">TEMPAT LAHIR</label>
                        <div class="controls">  
                        
                        <input type="text" name="tempat" class="input" id="tempat" />
                        
                        </p>
                        </div>
                        <label class="control-label" for="input02">TANGGAL LAHIR</label>
                        <div class="controls">  
                        
                        <input type="text" name="tgl_lahir" class="input-small datepicker" id="tgl_lahir">
                        
                        </p>
                        </div>
                        <label class="control-label" for="input02">USERNAME</label>
                        <div class="controls">  
                        
                        <input type="text" name="username" id="username" class="input" />
                        
                        </p>
                        </div>
                        
                        <div class="form-actions">
                            
                            <a href="<?php echo base_url();?>index.php/guru/tambah" class="btn btn-primary tambahguru" redirect="<?php echo base_url();?>index.php/guru">Tambah</a>
                            <!--<input class="btn btn-primary" type="submit" value="Tambah" onclick="$('#myModal').show();" />-->
                            
                       <!-- </div>
                    </div>
                  </div>
                      
                <?php echo form_close();?>
                  
                                       <div class="alert alert-info">
						
					</div>     
					</div>-->
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
