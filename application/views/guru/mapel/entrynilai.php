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
      
   <div class="map">Guru > MAPEL SAYA > Olah Nilai > <?php echo $isi->nama_matpel ;?> </div>
   
   
 
   <div class="span8">  
       
       <p class="judul">Menu Pengolahan Nilai Mapel <?php echo $isi->nama_matpel ;?></p>
       <a href="<?php echo base_url();?>index.php/mapelsaya/detil/<?php echo $isi->id_matpelguru;?>"><button class="btn btn-primary">Beranda Mapel</button></a>
       <p class="hrnya"></p>
       <div id="status" class="alert"></div>
       <table class="table table-bordered table-mini table-condensed table-hover table-striped bootstrap-datatable datatable " id="EntryNilai">
        <thead>
          <tr>
            
            <th rowspan="3">NIS</th>
            <th rowspan="3">KELAS</th>
            <th rowspan="3">NAMA LENGKAP</th>
            <th colspan="11">KETERAMPILAN</th>
            <th colspan="10">PENGETAHUAN</th>
            <th colspan="9">SIKAP</th>
          </tr>
          <tr>
            <th colspan="4">Praktek</th>
            <th colspan="4">Project</th>
            <th colspan="3">Portofolio</th>
            <th colspan="4">Tugas</th>
            <th colspan="4">UH</th>
            <th >UTS</th>
            <th >UAS</th>
            
            <th colspan="2">Observasi</th>
            <th colspan="3">Pdiri</th>
            <th colspan="2">Pteman</th>
            <th colspan="2">Jur</th>
            
            
            
          </tr>
          <tr>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>1</th>
            <th>1</th>
            <th>1</th>
            <th>2</th>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>1</th>
            <th>2</th>
            <th>1</th>
            <th>2</th>
            
          </tr>
        </thead>
        <tbody>
         
          <?php 
          if (empty($list)){

          }else{
            foreach($list as $d){
              ?>
              <tr>
            <td id="nis:<?php echo $d->id_nilai;?>"><?php echo $d->nis;?></td>
            <td id="kelas:<?php echo $d->id_nilai;?>"><?php echo $d->kelas;?></td>
            <td id="nama_siswa:<?php echo $d->id_nilai;?>"><?php echo $d->nama_siswa; ?></td>
            <td id="tp1:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->tp1;?></td>
            <td id="tp2:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->tp2;?></td>
            <td id="tp3:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->tp3;?></td>
            <td id="tp4:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->tp4;?></td>
            <td id="p1:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->p1;?></td>
            <td id="p2:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->p2;?></td>
            <td id="p3:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->p3;?></td>
            <td id="p4:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->p4;?></td>
            <td id="pr1:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->pr1;?></td>
            <td id="pr2:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->pr2;?></td>
            <td id="pr3:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->pr3;?></td>
            
            <td id="t1:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->t1;?></td>
            <td id="t2:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->t2;?></td>
            <td id="t3:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->t3;?></td>
            <td id="t4:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->t4;?></td>
            <td id="uh1:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->uh1;?></td>
            <td id="uh2:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->uh2;?></td>
            <td id="uh3:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->uh3;?></td>
            <td id="uh4:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->uh4;?></td>
            <td id="UTS:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->UTS;?></td>
            <td id="UAS:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->UAS;?></td>
            <td id="observasi1:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->observasi1;?></td>
            <td id="observasi2:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->observasi2;?></td>
            <td id="penilaian_diri1:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->penilaian_diri1;?></td>
            <td id="penilaian_diri2:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->penilaian_diri2;?></td>
            <td id="penilaian_diri3:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->penilaian_diri3;?></td>
            <td id="penilaian_teman1:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->penilaian_teman1;?></td>
            <td id="penilaian_teman2:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->penilaian_teman2;?></td>
            <td id="jurnal1:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->jurnal1;?></td>
            <td id="jurnal2:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->jurnal2;?></td>
            
            

          </tr>

              <?php
            }
          }
          ?>
        </tbody>
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
<script type="text/javascript">
    
$(document).on('click','#EntryNilai',function(){
  //acknowledgement message
    var message_status = $("#status");
    $("td[contenteditable=true]").blur(function(){

        var field_userid = $(this).attr("id");
        var reg = new RegExp('/[^0-9]/g');
        var value = $(this).text();
       
            $.post('../ajaxpostnilai' , field_userid + "=" + value, function(data){
            if(data !== '')
                {
                    message_status.show();
                    message_status.text(data);
                    //hide the message
                    setTimeout(function(){message_status.hide()},3000);
                }
            });
        
    });
});
</script>
</html>
