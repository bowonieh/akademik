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

 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
 <script src="<?php echo base_url();?>style/js/jquery-1.7.2.min.js"></script>
 <script type="text/javascript">// <![CDATA[
 $(document).ready(function(){
 $('#kat_mapel').change(function(){ //any select change on the dropdown with id country trigger this code
 $("#mapelkuri > option").remove(); //first of all clear select items
 var id_katmapel = $('#kat_mapel').val(); // here we are taking country id of the selected one.
 var url = "<?php echo base_url();?>";
 $.ajax({
 
 type: "POST",
 url: url+"index.php/mapelsaya/get_matpel/"+id_katmapel, //here we are calling our user controller and get_cities method with the country_id
 
 success: function(id_matpel) //we're calling the response json array 'cities'
 {
 $.each(id_matpel,function(id_matpel,matpel) //here we're doing a foeach loop round each city with id as the key and city as the value
 {
 var opt = $('<option />'); // here we're creating a new select option with for each city
 opt.val(id_matpel);
 opt.text(matpel);
 $('#mapelkuri').append(opt); //here we will append these new select options to a dropdown with the id 'cities'
 });
 }
 
 });
 
 });
 });
 // ]]>
</script>
<script type="text/javascript">
$(document).ready(function() {
$('.alert').hide();
$("#tambahMapel").click(function(event){
     //alert("Hapus?");
     
     var href = $(this).attr("href");
     var btn = this;
     var red = $(this).attr("redirect");
     var form_data = {
     id_katmapel : $('#kat_mapel').val(),   
     id_matpel : $('#mapelkuri').val(),
     id_tahun : $('#id_tahun').val(),
     nama_matpel : $('#nama_matpel').val(),
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
            
            $('.alert').html("Berhasil Menambahkan Data");
            $('.alert').show();
            $('.alert').delay(4500).fadeOut('slow');
            $(btn).delay(5000).fadeIn('slow');
                //$(btn).fadeOut().parent().append('<div id="loading" class="center">Loading...<div class="center"></div></div>');
            //window.location.replace(red);
            //alert("berhasil");
          }else if(response==="ErrorForm"){
              $(btn).fadeOut('500');
            
            $('.alert').html("Form Isian tidak boleh kosong");
            $('.alert').show();
            $('.alert').delay(4500).fadeOut('slow');
            $(btn).delay(5000).fadeIn('slow');
          }else if(response==="dataDouble"){
                $(btn).fadeOut('500');
            
            $('.alert').html("Tidak diijinkan membuat mata pelajaran yang sama dalam 1 semester");
            $('.alert').show();
            $('.alert').delay(4500).fadeOut('slow');
            $(btn).delay(5000).fadeIn('slow');
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
      
   <div class="map">Guru > <a href="<?php echo base_url();?>index.php/mapelsaya">MAPEL SAYA</a></div>
   
   
 
   <div class="span6">  
       
       <p class="judul">4.2 TAMBAH MATA PELAJARAN</p>
       <p class="hrnya"></p>
       <table class="table FORM_tabel">
           <tr class="FORM_tabelrow">
               <td>KELOMPOK MATA PELAJARAN</td>
               <td>:</td>
               <td>
                   <?php $kat_mapel['#'] = 'Please Select'; ?>
                   <?php echo form_dropdown('id_katmapel', $kat_mapel, '#', 'id="kat_mapel"'); ?>
               </td>
           </tr>
           
           <tr class="FORM_tabelrow1">
               <td>KURIKULUM MATPEL</td>
               <td>:</td>
               <td>
                   <?php $mapelkuri['#'] = 'Please Select'; ?>
                       <?php echo form_dropdown('id_matpel', $mapelkuri, '#', 'id="mapelkuri"'); ?></td>
           </tr>
           
           
           
           <tr class="FORM_tabelrow">
               <td>TAHUN PELAJARAN</td>
               <td>:</td>
               <td><?php echo form_dropdown('id_tahun', $tahun, '#', 'id="id_tahun"'); ?></td>
           </tr>
           <tr class="FORM_tabelrow1">
               <td>NAMA MATA PELAJARAN</td>
               <td>:</td>
               <td><?php echo form_input('nama_matpel','','class="input input-large" id="nama_matpel"');?></td>
           </tr>
           <tr class="FORM_tabelrow">
               <td></td>
               <td></td>
               <td><button class="btn btn-primary" id="tambahMapel" href="<?php echo base_url();?>index.php/mapelsaya/aksitambah">SIMPAN</button></td>
               
           </tr>
           
           <tr class="alert"></tr>
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
