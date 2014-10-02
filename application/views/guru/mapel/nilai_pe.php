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
$("#editPE").click(function(event){
     //alert("Hapus?");
     
     var href = $(this).attr("href");
     var btn = this;
     var red = $(this).attr("redirect");
     var form_data = {
     id_d_nilai_pengetahuan : $('#id_d_nilai_pengetahuan').val(),       
     uh1 : $('#uh1').val(),  
     uh2 : $('#uh2').val(),  
     uh3 : $('#uh3').val(),  
     uh4 : $('#uh4').val(),  
     t1 : $('#t1').val(),  
     t2 : $('#t2').val(),  
     t3 : $('#t3').val(),  
     t4 : $('#t4').val(),  
     UTS : $('#uts').val(),  
     UAS : $('#uas').val(),  
     keterangan : $('#keterangan').val(),  
     
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
      
   <div class="map">Guru > <a href="<?php echo base_url();?>index.php/mapelsaya/nilaisiswa/<?php echo $isi->id_matpelguru;?>">Nilai Pengetahuan</a></div>
   
   
 
   <div class="span8" id="checkNp">  
       
       <p class="judul">Informasi <?php echo $isi->nama_siswa ;?> untuk mapel <?php echo $isi->nama_matpel;?></p>
       <p class="hrnya"></p>
       
       <table class="table FORM_tabel" id="tabelNp">
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
                  <?php echo form_hidden('id_d_nilai_pengetahuan', $isi->id_d_nilai_pengetahuan, 'id_d_nilai_pengetahuan');?>
                   
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
       <p class="judul">Nilai Pengetahuan </p>
       <p class="hrnya"></p>
       <table class="table FORM_tabel form-horizontal table-bordered">
           <tr class="FORM_tabelrow">
               <td colspan="4">NILAI ULANGAN HARIAN</td>
           </tr>
           <tr class="FORM_tabelrow1 ">
               <td>
                  UH 1 
               </td>
               <td>
                  UH 2
               </td>
               <td>
                   UH 3
               </td>
               <td>
                   UH 4
               </td>
           </tr>
           <tr class="FORM_tabelrow1 ">
               <td>
                   <?php echo form_input('uh1',$isi->uh1,'class="input-kecil" id="uh1"');?>
               </td>
               <td>
                    <?php echo form_input('uh2',$isi->uh2,'class="input-kecil" id="uh2"');?>
               </td>
               <td>
                    <?php echo form_input('uh3',$isi->uh3,'class="input-kecil" id="uh3"');?>
               </td>
               <td>
                   <?php echo form_input('uh4',$isi->uh4,'class="input-kecil" id="uh4"');?>
                
               </td>
           </tr>
       </table>
       
       <p class="judul">Nilai Tugas </p>
       <p class="hrnya"></p>
       <table class="table FORM_tabel form-horizontal table-bordered">
           <tr class="FORM_tabelrow">
               <td colspan="4">NILAI Tugas</td>
           </tr>
           <tr class="FORM_tabelrow1 ">
               <td>
                  Tugas 1 
               </td>
               <td>
                   Tugas 2
               </td>
               <td>
                   Tugas 3
               </td>
               <td>
                   Tugas 4
               </td>
           </tr>
           <tr class="FORM_tabelrow1 ">
               <td>
                   <?php echo form_input('t1',$isi->t1,'class="input-kecil" id="t1"');?>
               </td>
               <td>
                    <?php echo form_input('t2',$isi->t2,'class="input-kecil" id="t2"');?>
               </td>
               <td>
                    <?php echo form_input('t3',$isi->t3,'class="input-kecil" id="t3"');?>
               </td>
               <td>
                   <?php echo form_input('t4',$isi->t4,'class="input-kecil" id="t4"');?>
                
               </td>
           </tr>
       </table>
       
       <p class="judul">Nilai UTS DAN UAS</p>
       <p class="hrnya"></p>
       <table class="table FORM_tabel form-horizontal table-bordered">
           <tr class="FORM_tabelrow">
               <td colspan="3">NILAI UTS DAN UAS</td>
           </tr>
           <tr class="FORM_tabelrow1 ">
               <td>
                  UTS
               </td>
               <td colspan="2">
                   UAS
               </td>
               
               
           </tr>
           <tr class="FORM_tabelrow1 ">
               <td>
                   <?php echo form_input('UTS',$isi->UTS,'class="input-kecil" id="uts"');?>
               </td>
               <td colspan="2">
                    <?php echo form_input('UAS',$isi->UAS,'class="input-kecil" id="uas"');?>
               </td>
               
               
           </tr>
           <tr>
            <td colspan="3" class="FORM_tabelrow">CATATAN</td>   
           </tr>
           <tr class="FORM_tabelrow1 ">
               <td colspan="3">
                   <?php // echo form_input('UTS',$isi->UTS,'class="input-kecil" id="uts"');?>
                   <?php echo form_textarea('keterangan', $isi->keterangan, 'id="keterangan" class="cleditor"');?>
               </td>
               
               
           </tr>
           <tr class="FORM_tabelrow">
               <td></td>
               <td></td>
               <td><div class="alert"></div><button class="btn btn-primary" id="editPE" href="<?php echo base_url();?>index.php/mapelsaya/editnp">SIMPAN</button></td>
               
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
