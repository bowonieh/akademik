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
                                            <?php if($this->session->userdata('level')=== '1'){
                                                ?>
                                            <ul class="nav nav-tabs nav-stacked main-menu">
						<li class="nav-header hidden-tablet">Main</li>
						<li><a href="<?php echo base_url();?>"><i class="icon-home"></i><span class="hidden-tablet"> Dashboard</span></a></li>
                                                <li class="nav-header hidden-tablet">REFERENSI</li>
                                                <li><a href="<?php echo base_url();?>index.php/guru"><i class="icon-edit"></i><span class="hidden-tablet"> GURU</span></a></li>
						<li><a href="<?php echo base_url();?>index.php/surat_masuk"><i class="icon-eye-open"></i><span class="hidden-tablet"> KELAS</span></a></li>
						<li><a href="<?php echo base_url();?>index.php/surat_keluar"><i class="icon-edit"></i><span class="hidden-tablet"> SISWA</span></a></li>
                                                
						<li class="nav-header hidden-tablet">Kurikulum</li>
                                                <li><a href="<?php echo base_url();?>index.php/kelompokmapel"><i class="icon-edit"></i><span class="hidden-tablet"> TAHUN AKTIF</span></a></li>
						<li><a href="<?php echo base_url();?>index.php/kategorimapel"><i class="icon-edit"></i><span class="hidden-tablet"> KELOMPOK MAPEL</span></a></li>
                                                <li><a href="<?php echo base_url();?>index.php/mapel"><i class="icon-edit"></i><span class="hidden-tablet"> MATA PELAJARAN</span></a></li>
					</ul>   <li><a href="<?php echo base_url();?>index.php/komdasar"><i class="icon-edit"></i><span class="hidden-tablet"> KOMPETENSI DASAR</span></a></li>
                                            <?php
                                            }else{
                                               ?>
                                                <li class="nav-header hidden-tablet">Main</li>
						<li><a  href="<?php echo base_url();?>"><i class="icon-home"></i><span class="hidden-tablet"> Dashboard</span></a></li>
                                                <!-- <li class="nav-header hidden-tablet">MENU KEUANGAN</li>
                                                <li><a href="<?php echo base_url();?>index.php/tagihan"><i class="icon-edit"></i><span class="hidden-tablet"> Jenis Tagihan Biaya</span></a></li>
						<li><a href="<?php echo base_url();?>index.php/pembayaran"><i class="icon-eye-open"></i><span class="hidden-tablet"> Pembayaran</span></a></li>
						<li><a href="<?php echo base_url();?>index.php/laporan"><i class="icon-edit"></i><span class="hidden-tablet"> Laporan</span></a></li>
                                                -->
						<li class="nav-header hidden-tablet">Kurikulum</li>
                                                <li><a href="<?php echo base_url();?>index.php/tahun"><i class="icon-edit"></i><span class="hidden-tablet"> TAHUN AKTIF</span></a></li>
						<li><a href="<?php echo base_url();?>index.php/kategorimapel"><i class="icon-edit"></i><span class="hidden-tablet"> KELOMPOK MAPEL</span></a></li>
                                                <li><a href="<?php echo base_url();?>index.php/mapel"><i class="icon-edit"></i><span class="hidden-tablet"> MATA PELAJARAN</span></a></li>
                                                <li><a href="<?php echo base_url();?>index.php/kominti"><i class="icon-edit"></i><span class="hidden-tablet"> KOMPETENSI INTI</span></a></li>
                                                <li><a href="<?php echo base_url();?>index.php/komdasar"><i class="icon-edit"></i><span class="hidden-tablet"> KOMPETENSI DASAR</span></a></li>
                                                
                                            <?php
                                            }?>
						
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
						
						<div class="box-icon">
                                                
							<a href="<?php echo base_url();?>index.php/pembayaran/tambah" class="btn btn-round"><i class="icon-plus"></i></a>
							
                                                        
                                                        
						</div>
					</div>
					<div class="box-content">
                                            <div id="komintiContainer">
                                            </div>
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

			
			
			
			
			
    
					<!-- content ends -->
			</div><!--/#content.span10-->
				</div><!--/fluid-row-->
				
		<hr>
                    
		<div class="modal hide fade" id="myModal">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h3>Settings</h3>
			</div>
			<div class="modal-body">
				<p>Here settings can be configured...</p>
			</div>
			<div class="modal-footer">
				<a href="#" class="btn" data-dismiss="modal">Close</a>
				<a href="#" class="btn btn-primary">Save changes</a>
			</div>
		</div>

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
    $(document).ready(function () {
        
        var no = 1;
        $('#komintiContainer').jtable({
            title: 'KOMPETENSI INTI',
            
            actions: {
                listAction: '<?php echo base_url();?>index.php/kominti/ambil',
                createAction: '<?php echo base_url();?>index.php/kominti/create',
                updateAction: '<?php echo base_url();?>index.php/kominti/update',
                deleteAction: '<?php echo base_url();?>index.php/kominti/delete'
            },
            fields: {
                id_kompetensi_inti: {
                    key: true,
                    list: false
                },
                matpel:{
                title:'MATA PELAJARAN',
                width:'10%',
                create:false,
                edit:false,
                delete:false
                },
                id_matpel:{
                title:'MATA PELAJARAN',
                width:'10%',
                options: '<?php echo base_url();?>index.php/kominti/getmatpel',
                list:false
                
                },
                kode_kominti:{
                title:'KODE KOMPETENSI INTI',
                width: '5%'
                },
                kompetensi_inti:{
                title:'KOMPETENSI INTI',
                width:'20%',
                type:'textarea'
                }
                
            }
        });
        $('#komintiContainer').jtable('load');
    });
</script>
</html>
