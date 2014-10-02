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
	        <script src="<?php echo base_url();?>style/js/jquery-1.7.2.min.js"></script>
                <script type="text/javascript">
                    
                    </script>
                    
                    <script type="text/javascript">
$(document).ready(function() {
$('.alert').hide();
$("#editNK").click(function(event){
     //alert("Hapus?");
     
     var href = $(this).attr("href");
     var btn = this;
     var red = $(this).attr("redirect");
     var form_data = {
     id_nk : $('#id_nk').val(),       
     tp1 : $('#tp1').val(),  
     tp2 : $('#tp2').val(),  
     tp3 : $('#tp3').val(),  
     tp4 : $('#tp4').val(),  
     p1 : $('#p1').val(),  
     p2 : $('#p2').val(),  
     p3 : $('#p3').val(),  
     p4 : $('#p4').val(),  
     pr1 : $('#pr1').val(),  
     pr2 : $('#pr2').val(),  
     pr3 : $('#pr3').val(),  
     
     ajax : '1'
};
      $.ajax({
        type: "POST",
        url: href,
        async : false,
        data: form_data,
        success: function(response) {
            if (response === "Success")
          {
            $(btn).fadeOut('500');
            $('#tabelPendidikan').fadeOut('500');
            $('.alert').html("Berhasil Memperbarui nilai");
            $('.alert').show();
            
            $('.alert').delay(4500).fadeOut('slow');
            $('#tabelPendidikan').delay(5000).fadeIn();
            $(btn).delay(5000).fadeIn('slow');
                //$(btn).fadeOut().parent().append('<div id="loading" class="center">Loading...<div class="center"></div></div>');
            //window.location.replace(red);
            //alert("berhasil");
          }else if(response==="ErrorNumeric"){
            $(btn).fadeOut('500');
            $('.alert').html("PASTIKAN NILAI BERUPA ANGKA");
            
            $('.alert').show();
            $('.alert').delay(4500).fadeOut('slow');
            $(btn).delay(5000).fadeIn('slow');
            
          }
          else if(response==="DoubleJenjang"){
            $(btn).fadeOut('500');
            
            $('.alert').html("Ditemukan Data Ganda Jenjang Pendidikan");
            $('#tabelPendidikan').fadeOut('500');
            $('.alert').show();
            $('.alert').delay(4500).fadeOut('slow');
            $(btn).delay(5000).fadeIn('slow');
            $('#tabelPendidikan').delay(5000).fadeIn();
          }
          
        else if(response==="ErrorForm"){
              $(btn).fadeOut('500');
            
            $('.alert').html("Form Isian tidak boleh kosong");
            $('#tabelPendidikan').fadeOut('500');
            $('.alert').show();
            $('.alert').delay(4500).fadeOut('slow');
            $(btn).delay(5000).fadeIn('slow');
            $('#tabelPendidikan').delay(5000).fadeIn();
          }
          else
          {
            //alert("Username atau password salah");
            //$('.alert').show('100000');
           $(btn).fadeOut('100000');
            
            $('.alert').html("Gagal Menambahkan Data");
            $('.alert').show();
            $('.alert').delay(4500).fadeOut('slow');
            $(btn).delay(5000).fadeIn('slow');


            //$('#myModal').modal('show');
          }
          

        }
      });
     event.preventDefault();
  });
});

    </script>
	
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
    	<li class="navigasibutton">
            <div class="navigasigambar" align="center"><img src="<?php echo base_url();?>style/guru/images/g_beranda.png" class="gambarnyanavigasi"></div>
            <div class="navigasitulisan" align="center">BERANDA</div>
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
                            	<div class="isisubmenu"><a href="<?php echo base_url();?>index.php/profil">PROFIL SAYA</a></div>
							</div>
                            <div class="isisubbox">
                            	<div class="isisubmenu">DATA KELUARGA</div>
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
      
   <div class="map">Guru > <a href="<?php echo base_url();?>index.php/mapelsaya/nilaisiswa/<?php echo $isi->id_matpelguru;?>">Nilai Keterampilan</a></div>
   
   
 
   <div class="span8" id="checkNk">  
       
       <p class="judul">Informasi <?php echo $isi->nama_siswa ;?> untuk mapel <?php echo $isi->nama_matpel;?></p>
       <p class="hrnya"></p>
       
       <table class="table FORM_tabel" id="tabelNk">
           <tr class="FORM_tabelrow">
               <td>NIS</td>
               <td>:</td>
               <td>
                  <?php echo $isi->nis;?>
                   
               </td>
           </tr>
           <tr class="FORM_tabelrow1">
               <td>NAMA SISWA</td>
               <td>:</td>
               <td>
                  <?php echo $isi->nama_siswa;?>
                  <?php echo form_hidden('id_nk', $isi->id_nk, 'id_nk');?>
                   
               </td>
           </tr>
           <tr class="FORM_tabelrow">
               <td>KELAS</td>
               <td>:</td>
               <td>
                  <?php echo $isi->kelas;?>
                   
               </td>
           </tr>
           
       </table>
       <p class="judul">Nilai Praktek </p>
       <p class="hrnya"></p>
       <table class="table FORM_tabel form-horizontal table-bordered">
           <tr class="FORM_tabelrow">
               <td colspan="4">NILAI PRAKTEK</td>
           </tr>
           <tr class="FORM_tabelrow1 ">
               <td>
                  TP 1 
               </td>
               <td>
                   TP 2
               </td>
               <td>
                   TP 3
               </td>
               <td>
                   TP 4
               </td>
           </tr>
           <tr class="FORM_tabelrow1 ">
               <td>
                   <?php echo form_input('tp1',$isi->tp1,'class="input-kecil" id="tp1"');?>
               </td>
               <td>
                    <?php echo form_input('tp2',$isi->tp2,'class="input-kecil" id="tp2"');?>
               </td>
               <td>
                    <?php echo form_input('tp3',$isi->tp3,'class="input-kecil" id="tp3"');?>
               </td>
               <td>
                   <?php echo form_input('tp4',$isi->tp4,'class="input-kecil" id="tp4"');?>
                
               </td>
           </tr>
       </table>
       
       <p class="judul">Nilai PROJECT </p>
       <p class="hrnya"></p>
       <table class="table FORM_tabel form-horizontal table-bordered">
           <tr class="FORM_tabelrow">
               <td colspan="4">NILAI PROJECT</td>
           </tr>
           <tr class="FORM_tabelrow1 ">
               <td>
                  P 1 
               </td>
               <td>
                   P 2
               </td>
               <td>
                   P 3
               </td>
               <td>
                   P 4
               </td>
           </tr>
           <tr class="FORM_tabelrow1 ">
               <td>
                   <?php echo form_input('p1',$isi->p1,'class="input-kecil" id="p1"');?>
               </td>
               <td>
                    <?php echo form_input('p2',$isi->p2,'class="input-kecil" id="p2"');?>
               </td>
               <td>
                    <?php echo form_input('p3',$isi->p3,'class="input-kecil" id="p3"');?>
               </td>
               <td>
                   <?php echo form_input('p4',$isi->p4,'class="input-kecil" id="p4"');?>
                
               </td>
           </tr>
       </table>
       
       <p class="judul">Nilai Portofolio </p>
       <p class="hrnya"></p>
       <table class="table FORM_tabel form-horizontal table-bordered">
           <tr class="FORM_tabelrow">
               <td colspan="3">NILAI Portofolio</td>
           </tr>
           <tr class="FORM_tabelrow1 ">
               <td>
                  Porto 1 
               </td>
               <td>
                   Porto 2
               </td>
               <td>
                   Porto 3
               </td>
               
           </tr>
           <tr class="FORM_tabelrow1 ">
               <td>
                   <?php echo form_input('pr1',$isi->pr1,'class="input-kecil" id="pr1"');?>
               </td>
               <td>
                    <?php echo form_input('pr2',$isi->pr2,'class="input-kecil" id="pr2"');?>
               </td>
               <td>
                    <?php echo form_input('pr3',$isi->pr3,'class="input-kecil" id="pr3"');?>
               </td>
               
           </tr>
           <tr class="FORM_tabelrow">
               <td></td>
               <td></td>
               <td><div class="alert"></div><button class="btn btn-primary" id="editNK" href="<?php echo base_url();?>index.php/mapelsaya/editnk">SIMPAN</button></td>
               
           </tr>
       </table>
       
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
