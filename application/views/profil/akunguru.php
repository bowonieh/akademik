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
       	  <div class="status" align="right">GURU</div>
          <div class="namauser" align="right"><?php echo strtoupper($namaguru->nama_guru);?></div>
        </div>
  </div>
    <!-- MENU -->
    <ul id="navigasi">
    	<li class="navigasibutton"><a href="<?php echo base_url();?>">
            <div class="navigasigambar" align="center"><img src="<?php echo base_url();?>style/guru/images/g_beranda.png" class="gambarnyanavigasi"></div>
            <div class="navigasitulisan" align="center">BERANDA</div></a>
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
                            	<div class="isisubmenu"><a href="<?php echo base_url();?>index.php/keluarga">DATA KELUARGA</a></div>
							</div>
                            <div class="isisubbox">
                            	<div class="isisubmenu"><a href="<?php echo base_url();?>index.php/pendidikan">RIWAYAT PENDIDIKAN</a></div>
							</div>
                    		<div class="titlesubbox">
                            	<div class="titlesubmenu">INFORMASI PENGGUNA</div>
                                <div class="titlehr"></div>
                            </div>
                            <div class="isisubbox">
                            	
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
                            	<div class="isisubmenu"><a href="<?php echo base_url();?>index.php/walas">KELAS BIMBINGAN</a></div>
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
      
   <div class="map">Guru > Akun</div>
   
   
 
   <div class="span6">  
       
       <p class="judul"><?php echo $title;?></p>
       <p class="hrnya"></p>
       
       <p></p>
       <div class="span7">
                      <?php echo validation_errors();?>
                      <?php echo form_open_multipart('','class="form-horizontal"');?>
                            <div class="control-group">
                        <label class="control-label">Username Lama</label>
                        <div class="controls">
                       
                       <strong><?php echo $akun->username;?></strong>
                        </div>
                        </div>
           <div id="FormEditUsername">
                            <div class="controls">
                                <div class="alert alert-info">Setelah berhasil melakukan pergantian username, anda akan diminta untuk login kembali dengan username anda yang baru.</div>
                            </div>
                            <label class="control-label" for="input01">Username Baru</label>
                            <div class="controls">      
                            
                            <input type='text' name='username' id="username" />
                            <span class="span3" id="pesan_username" style="display:none;">Silahkan mengisi username</span>
                               
                            </div>
                            </p>
                            
                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary" id="fsubmit">Simpan</button> 
                                <a href="<?php echo base_url();?>index.php/profil/"><button class="btn" type="button">Batal</button>  </a>
                            </div>
           </div>
                            <?php echo form_close();?>
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
      <script type="text/javascript">
      $(document).ready(function(){
          $('#FormEditUsername').hide();
         $('#username').live('keyUp',function(z){
            z.preventDefault();
            
         }); 
          
      });
      </script>
      <script type="text/javascript">
      $(document).ready(function(){
                
                $("#editProfil").live('click',function(a){
                a.preventDefault();    
                var href = $(this).attr("data-proc");
                var form_data = {
                    id_guru : $('#id_guru').val(),
                    nama_guru: $('#nama_guru').val(),
                    nik: $('#nik').val(),
                    tempat: $('#tempat').val(),
                    tgl_lahir :$('#tgl_lahir').val(),
                    nuptk : $('#nuptk').val(),
                    alamat: $('#alamat').val(),
                    no_hp: $('#no_hp').val(),
                    no_telp_rumah :  $('#no_telp_rumah').val(),
                    email: $('#email').val(),
                    id_jenisptk: $('#id_jenisptk').val(),
                    id_stts_kepeg: $('#id_stts_kepeg').val(),
                    ajax : '1'
                };
                $.ajax({
        type: "POST",
        url: href,
        async : false,
        cache: false,
        data: form_data,
        success: function(response) {
           $('.modal').html(response);    
           //$(".modal").delay(10000).modal('hide');
           setTimeout(function() { $('.modal').modal('hide'); }, 10000);
           location.reload(true);
           
           
        }
                });
                });
            });
            </script>
   	<div class="footerstatus" align="right">© 2014 SISFO AKADEMIK SISWA - SMK NEGERI 1 KOTA BEKASI</div>
    </div>
</div>
</body>
</html>
