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
      
   <div class="map">Guru > PROFIL</div>
   
   
 
   <div class="span6">  
       
       <p class="judul"><?php echo $title;?></p>
       <p class="hrnya"></p>
       <div class="span8">
           <div class="span2">
               <?php
               if (empty($profil->foto)){
                   echo "Tidak ada Foto";
               }else{
                   ?>
               <img width="200px" src="<?php echo base_url();?>img/upload/<?php echo $profil->foto;?>" />
               
               <?php
               }
               
               ?>
           </div>
           <div class="span5">
               <table class="table-hover table-condensed bootstrap-datatable table-striped">
                   <tr>
                       <td>NAMA</td>
                       <td>:</td>
                       <td><strong>
                               <?php echo $profil->nama_guru;?>
                           </strong></td>
                   </tr>
                   <tr>
                       <td>NIK</td>
                       <td>:</td>
                       <td><strong>
                               <?php echo $profil->nik;?>
                           </strong></td>
                   </tr>
                   <tr>
                       <td>NUPTK</td>
                       <td>:</td>
                       <td><strong>
                               <?php echo $profil->nuptk;?>
                           </strong></td>
                   </tr>
                   <tr>
                       <td>TTL</td>
                       <td>:</td>
                       <td><strong>
                               <?php echo $profil->tempat;?> , <?php echo $profil->tgl_lahir;?>
                           </strong></td>
                   </tr>
                   <tr>
                       <td>ALAMAT</td>
                       <td>:</td>
                       <td><strong>
                               <?php echo $profil->alamat;?> 
                           </strong></td>
                   </tr>
                   <tr>
                       <td>NO HP / TELP</td>
                       <td>:</td>
                       <td><strong>
                               <?php echo $profil->no_hp;?> / <?php echo $profil->no_telp_rumah;?>
                           </strong></td>
                   </tr>
                   <tr>
                       <td>EMAIL</td>
                       <td>:</td>
                       <td><strong>
                               <?php echo $profil->email;?>
                           </strong></td>
                   </tr>
                   <tr>
                       <td>JENIS PTK</td>
                       <td>:</td>
                       <td><strong>
                               <?php echo $profil->jenis_ptk;?>
                           </strong></td>
                   </tr>
                   <tr>
                       <td>STATUS KEPEGAWAIAN</td>
                       <td>:</td>
                       <td><strong>
                               <?php echo $profil->status_kepegawaian;?>
                           </strong></td>
                   </tr>
                   
                   
               </table>
           </div>
           
       </div>
       <p></p>
       <div class="span8">
           <div >
               <a data-toggle="modal" href="#" data-href="<?php echo base_url();?>index.php/profil/editfoto" class="btn-round btn"><i class="icon-pencil"></i></a>
               <a data-toggle="modal" href="#" data-href="<?php echo base_url();?>index.php/profil/edit" class="btn btn-warning">EDIT PROFIL</a>
               <a data-toggle="modal" href="#" data-href="<?php echo base_url();?>index.php/profil/editpassword" class="btn btn-primary">EDIT PASSWORD</a>
               <a data-toggle="modal" href="#" data-href="<?php echo base_url();?>index.php/profil/editusername" class="btn btn-success">GANTI USERNAME</a>
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
      <script type="text/javascript">
      $(document).ready(function(){
                
                $("#editPassword").live('click',function(a){
                a.preventDefault();    
                    $('.alert').hide();
                    var href = $(this).attr("data-proce");
                    var form_data = {
                        user_id : $('#user_id').val(),
                        pass_lama : $('#pass_lama').val(),
                        pass_baru : $('#pass_baru').val(),
                        pass_baru_confirm : $('#pass_baru_confirm').val(),
                        ajax : '1'
                    };
                                    $.ajax({
                                             type: "POST",
                                             url: href,
                                             async : false,
                                             cache: false,
                                             data: form_data,
                                             success: function(response) {
                                            $('.pesan').html(response);    
                                             //$(".modal").delay(10000).modal('hide');
                                             setTimeout(function() { $('.modal').modal('hide'); }, 10000);
                                            //location.reload(true);
                            
           
           
                                             }
                                    });
                            });
                            //ganti Username
                            $("#username").live('keyup',function(z){
                            z.preventDefault();
                            var href = 'checkusername';
                            var form_data2 = {
                                id_guru : $('#id_guru').val(),
                                username : $('#username').val()
                                }
                                $.ajax({
                                   type: "POST",
                                   url: href,
                                   async: false,
                                   cache: false, 
                                   data: form_data2,
                                   success: function(response){
                                       if(response === 'error'){
                                            //disable tombol simpan
                                       }else if(response === 'unik'){
                                           
                                       }
                                   }
                                });
                            });
                            
                    $("#editUsername").live('click',function(e){
                            e.preventDefault();
                            var href = $(this).attr("data-proce");
                            var form_data = {
                                id_guru : $('#id_guru').val(),
                                username : $('#username').val
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
                    
                            //edit profil
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
