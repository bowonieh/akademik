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
      
   <div class="map">Guru > <a href="<?php echo base_url();?>index.php/mapelsaya/nilaisiswa/<?php echo $isi->id_matpelguru;?>">Nilai Keterampilan</a></div>
   
   
 
   <div class="span9" id="checkNk">  
       
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
                  <?php echo form_hidden('id_ns',$isi->id_ns,'id_ns');?> 
                  <?php echo form_hidden('id_d_nilai_pengetahuan',$isi->id_d_nilai_pengetahuan,'id_d_nilai_pengetahuan');?> 
               </td>
           </tr>
           
           
       </table>
       <p class="judul">MASUKKAN NILAI SISWA </p>
       <p class="hrnya"></p>
       <table class="table FORM_tabel form-horizontal table-bordered">
           <tr class="FORM_tabelrow">
               <td colspan="11">NILAI KETERAMPILAN</td>
               
           </tr>
           <tr class="FORM_tabelrow1">
               <td>tp1</td>
               <td>tp2</td>
               <td>tp3</td>
               <td>tp4</td>
               <td>p1</td>
               <td>p2</td>
               <td>p3</td>
               <td>p4</td>
               <td>pr1</td>
               <td>pr2</td>
               <td>pr3</td>
               
               
           </tr>
           <tr class="FORM_tabelrow">
               <td><?php echo form_input('tp1',$isi->tp1,'id=tp1 class=input-nilai');?></td>
               <td><?php echo form_input('tp2',$isi->tp2,'id=tp2 class=input-nilai');?></td>
               <td><?php echo form_input('tp3',$isi->tp3,'id=tp3 class=input-nilai');?></td>
               <td><?php echo form_input('tp4',$isi->tp4,'id=tp4 class=input-nilai');?></td>
               <td><?php echo form_input('p1',$isi->p1,'id=p1 class=input-nilai');?></td>
               <td><?php echo form_input('p2',$isi->p2,'id=p2 class=input-nilai');?></td>
               <td><?php echo form_input('p3',$isi->p3,'id=p3 class=input-nilai');?></td>
               <td><?php echo form_input('p4',$isi->p4,'id=p4 class=input-nilai');?></td>
               <td><?php echo form_input('pr1',$isi->pr1,'id=pr1 class=input-nilai');?></td>
               <td><?php echo form_input('pr2',$isi->pr1,'id=pr2 class=input-nilai');?></td>
               <td><?php echo form_input('pr3',$isi->pr1,'id=pr3 class=input-nilai');?></td>
               
               
           </tr>
       </table>
       <td>
           KETERANGAN 
       </td>
       <td><?php echo form_textarea('keterangan', $isi->keterangan, 'id="keterangan" class="cleditor clFloat"')?></td>
       <hr>
       
       <table class="table FORM_tabel form-horizontal table-bordered">
           <tr class="FORM_tabelrow">
               <td colspan="10">NILAI PENGETAHUAN</td>
               
           </tr>
           <tr class="FORM_tabelrow1">
               <td>UH1</td>
               <td>UH2</td>
               <td>UH3</td>
               <td>UH4</td>
               <td>T1</td>
               <td>T2</td>
               <td>T3</td>
               <td>T4</td>
               <td>UTS</td>
               <td>UAS</td>
               
               
           </tr>
           <tr class="FORM_tabelrow">
               <td><?php echo form_input('uh1',$isi->uh1,'id=uh1 class=input-nilai');?></td>
               <td><?php echo form_input('uh2',$isi->uh2,'id=uh2 class=input-nilai');?></td>
               <td><?php echo form_input('uh3',$isi->uh3,'id=uh3 class=input-nilai');?></td>
               <td><?php echo form_input('uh4',$isi->uh4,'id=uh4 class=input-nilai');?></td>
               <td><?php echo form_input('t1',$isi->t1,'id=t1 class=input-nilai');?></td>
               <td><?php echo form_input('t2',$isi->t2,'id=t2 class=input-nilai');?></td>
               <td><?php echo form_input('t3',$isi->t3,'id=t3 class=input-nilai');?></td>
               <td><?php echo form_input('t4',$isi->t4,'id=t4 class=input-nilai');?></td>
               <td><?php echo form_input('UTS',$isi->UTS,'id=UTS class=input-nilai');?></td>
               <td><?php echo form_input('UAS',$isi->UAS,'id=UAS class=input-nilai');?></td>
               
               
           </tr>
           <tr class="FORM_tabelrow1">
               <td></td>
               <td></td>
               <td colspan="8"><div class="alert"></div><button class="btn btn-primary" id="editNK" href="<?php echo base_url();?>index.php/mapelsaya/editnk">SIMPAN</button></td>
               
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
