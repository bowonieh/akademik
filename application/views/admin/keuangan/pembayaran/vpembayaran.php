<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<title><?php echo $title;?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
	<meta name="author" content="Muhammad Usman">

	<!-- The styles -->
	<link href="<?php echo base_url();?>style/css/bootstrap-cerulean.css" rel="stylesheet">
        <link href="<?php echo base_url();?>style/css/jtable/metro/lightgray/jtable.min.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	</style>
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

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- The fav icon -->
	<link rel="shortcut icon" href="<?php echo base_url();?>style/img/favicon.ico">
		
</head>

<body>
		<!-- topbar starts -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.html"> <img alt="Charisma Logo" src="<?php echo base_url();?>style/img/logo20.png" /> <span>Charisma</span></a>
				
				<!-- theme selector starts -->
				<div class="btn-group pull-right theme-container" >
					
				</div>
				<!-- theme selector ends -->
				
				<!-- user dropdown starts -->
				<div class="btn-group pull-right" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-user"></i><span class="hidden-phone"> admin</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#">Profile</a></li>
						<li class="divider"></li>
						<li><a href="<?php echo base_url();?>index.php/keluar">Keluar</a></li>
					</ul>
				</div>
				<!-- user dropdown ends -->
				
				<div class="top-nav nav-collapse">
					<ul class="nav">
						<li><a href="#">Visit Site</a></li>
						<li>
							<form class="navbar-search pull-left">
								<input placeholder="Search" class="search-query span2" name="query" type="text">
							</form>
						</li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>
	</div>
	<!-- topbar ends -->
		<div class="container-fluid">
		<div class="row-fluid">
				
			<!-- left menu starts -->
			<div class="span2 main-menu-span">
				<div class="well nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li class="nav-header hidden-tablet">Main</li>
						<li><a  href="<?php echo base_url();?>"><i class="icon-home"></i><span class="hidden-tablet"> Dashboard</span></a></li>
                                                <li class="nav-header hidden-tablet">MENU KEUANGAN</li>
                                                <li><a href="<?php echo base_url();?>index.php/tagihan"><i class="icon-edit"></i><span class="hidden-tablet"> Jenis Tagihan Biaya</span></a></li>
						<li><a href="<?php echo base_url();?>index.php/pembayaran"><i class="icon-eye-open"></i><span class="hidden-tablet"> Pembayaran</span></a></li>
						<li><a href="<?php echo base_url();?>index.php/laporan"><i class="icon-edit"></i><span class="hidden-tablet"> Laporan</span></a></li>
                                                <!--
						<li class="nav-header hidden-tablet">Kurikulum</li>
                                                <li><a class="ajax-link" href="<?php echo base_url();?>index.php/kelompokmapel"><i class="icon-edit"></i><span class="hidden-tablet"> TAHUN AKTIF</span></a></li>
						<li><a class="ajax-link" href="<?php echo base_url();?>index.php/kelompokmapel"><i class="icon-edit"></i><span class="hidden-tablet"> KELOMPOK MAPEL</span></a></li>
                                                <li><a class="ajax-link" href="<?php echo base_url();?>index.php/mapel"><i class="icon-edit"></i><span class="hidden-tablet"> MATA PELAJARAN</span></a></li>
                                                -->
					</ul>
					<label id="for-is-ajax" class="hidden-tablet" for="is-ajax"><input id="is-ajax" type="checkbox"> Ajax on menu</label>
				</div><!--/.well -->
			</div><!--/span-->
			<!-- left menu ends -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<div id="content" class="span10">
			<!-- content starts -->
			

			<div>
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo base_url();?>">Home</a> <span class="divider">/</span>
					</li>
					
				</ul>
			</div>
                       
                        
                        <!-- BATAS---->
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2>Data Catatan Keuangan Setoran Siswa</h2>
						<div class="box-icon">
                                                
							<a href="<?php echo base_url();?>index.php/pembayaran/tambah" class="btn btn-round"><i class="icon-plus"></i></a>
							
                                                        
                                                        
						</div>
					</div>
					<div class="box-content">
                                           
                                            <div id="bayarHariIni">
                                                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                                                    <?php if(empty($isi)){
                                                   ?>
                                                    <p class="box-alert">Data Kosong</p>
                                                    <?php 
                                                  }else{
                                                  
                                                      ?>
                                                    <thead>
                                                        <tr>
                                                            <th>NO</th>
								  <th>NIS</th>
                                                                  <th>NAMA SISWA</th>
                                                                  <th>KELAS</th>
                                                                  <th>ITEM YANG DIBAYAR</th>
                                                                  <th>TANGGAL BAYAR</th>
								  <th>JUMLAH YANG DITERIMA</th>
                                                                  <th>AKSI</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                      <?php 
                                                      $no = 1;
                                                      foreach ($isi as $d){
                                                          if ($d=='0'){
                                                              
                                                          }else{
                                                          ?>
                                                      
                                                      <tr>
                                                          <td><?php echo $no++;?></td>
                                                          <td class="center"><?php echo $d->nis;?></td>
                                                          <td class="center"><?php echo $d->nama_siswa;?></td>
                                                          <td class="center"><?php echo $d->kelas;?> </td>
                                                          <td class="center"><?php echo $d->nama_tagihan;?> </td>
                                                          <td class="center"><?php echo $d->tanggal_bayar;?> </td>
                                                          <td class="center">Rp. <?php echo number_format($d->jumlah_bayar);?>  </td>
                                                          <td><button class="btn btn-danger hpsBaris" data-del="<?php echo base_url();?>index.php/pembayaran/hapus/<?php echo $d->id_pembayaran;?>"><i class="icon-trash icon-white"></i>  Hapus</button>
                                                              <a href="<?php echo base_url();?>index.php/pembayaran/update/<?php echo $d->id_pembayaran;?>">
                                                                  <button class="btn btn-primary">
                                                                      <i class="icon-white icon-edit"></i>
                                                                      Edit
                                                                  </button></a>
                                                              
                                                          </td>
                                                      </tr>
                                                      <?
                                                      }
                                                      }
                                                  }
                                                      ?>
                                                      
						  </tbody>
                                                  <tfoot>
                                                      <tr>
                                                          <td> JUMLAH</td>
                                                          <td></td>
                                                          <td></td>
                                                          <td></td>
                                                          <td></td>
                                                          <td></td>
                                                          <td>Rp. <?php echo number_format($jumlah->jumlah_bayar);?> </td>
                                                          <td></td>
                                                      </tr>
                                                  </tfoot>
                                                    
                                                  
                                                </table>
                                            </div>
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

			
			
			
			
			
    
					<!-- content ends -->
			</div><!--/#content.span10-->
				</div><!--/fluid-row-->
				
		<hr>
                 

		<footer>
			<p class="pull-left">&copy; <a href="http://usman.it" target="_blank">Muhammad Usman</a> 2012</p>
			<p class="pull-right">Powered by: <a href="http://usman.it/free-responsive-admin-template">Charisma</a></p>
		</footer>
		
	</div><!--/.fluid-container-->

	<!-- external javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->

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
        <!--jtable jquery -->
        <script src="<?php echo base_url();?>style/js/jquery.jtable.min.js"></script>
	<!-- application script for Charisma demo -->
	<script src="<?php echo base_url();?>style/js/charisma.js"></script>
        <script src="<?php echo base_url();?>style/js/jquery.jtable.min.js"></script>
	
		
</body>
<script type="text/javascript">
    $(document).ready(function()
{
    $('.hpsBaris').click(function()
    {
        if (confirm("Hapus Data?"))
        {
            var btn = this;
            var id = $(this).parent().parent().attr('id');
            var data = 'id=' + id ;
            var parent = $(this).parent().parent();
            var url = $(this).attr('data-del');
            $.ajax(
            {
                   type: "POST",
                   url: url,
                   data: data,
                   cache: false,
 
                   success: function()
                   {
                    parent.fadeOut('slow', function() {$(this).remove();});
                   }
             });
        }
    });
 
    // style the table with alternate colors
    // sets specified color for every odd row
    $('table#delTable tr:odd').css('background',' #FFFFFF');
});
    </script>
</html>
