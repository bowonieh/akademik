<!DOCTYPE html>
<html lang="en">
<head>
	<!--
		Charisma v1.0.0

		Copyright 2012 Muhammad Usman
		Licensed under the Apache License v2.0
		http://www.apache.org/licenses/LICENSE-2.0

		http://usman.it
		http://twitter.com/halalit_usman
	-->
	<meta charset="utf-8">
	<title><?php echo $title;?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
	<meta name="author" content="Muhammad Usman">

	<!-- The styles -->
	<link href="<?php echo base_url();?>style/css/bootstrap-cerulean.css" rel="stylesheet">
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
        <script src="<?php echo base_url();?>style/js/jquery-1.7.2.min.js"></script>

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- The fav icon -->
	<link rel="shortcut icon" href="<?php echo base_url();?>style/img/favicon.ico">
        <script type="text/javascript">
        $(document).ready(function()
	{
	        
		$.ajax({

         

         type:"POST",

         url: "<?php echo base_url();?>index.php/absensi/getrkpabsen",

         cache:false,

         dataType:"json",

         data: "userid"   

         }).done(function(response){
              chjur = new cfx.Chart();
              chjur.setGallery(cfx.Gallery.Pie);
//PopulateBrowserUsage(chart1);
                var field1 = new cfx.FieldMap();

			field1.setName("alasan");
			field1.setUsage(cfx.FieldUsage.Label);
			var field2 = new cfx.FieldMap();
			field2.setName("jml");
			field2.setUsage(cfx.FieldUsage.Value);

			//var field3 = new cfx.FieldMap();
			//field3.setName("laki");
			//field3.setUsage(cfx.FieldUsage.Value);

			//var field4 = new cfx.FieldMap();
			//field4.setName("perempuan");
			//field4.setUsage(cfx.FieldUsage.Value);

	

			chjur.getDataSourceSettings().getFields().add(field1);
			var titles = chjur.getTitles();
			var title = new cfx.TitleDockable();

			title.setText("Rekapitulasi Absensi Harian");
			titles.add(title);
			chjur.getDataSourceSettings().getFields().add(field2);
                        //chart1.getDataSourceSettings().getFields().add(field3);
			//chart1.getDataSourceSettings().getFields().add(field4);
			//chart1.getData().setSeries(4);
            chjur.getAnimations().getLoad().setEnabled(true);
			
            
            var data = response;
            chjur.setDataSource(data);
            var divHolder = document.getElementById('rkpAbsen');

        chjur.create(divHolder);           

        });
        
               
        
        
});
</script>
		
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
				<a class="brand" href="index.html">  <span>Siakad</span></a>
				
				<!-- theme selector starts -->
				<div class="btn-group pull-right theme-container" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-tint"></i><span class="hidden-phone"> Change Theme / Skin</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu" id="themes">
						<li><a data-value="classic" href="#"><i class="icon-blank"></i> Classic</a></li>
						<li><a data-value="cerulean" href="#"><i class="icon-blank"></i> Cerulean</a></li>
						<li><a data-value="cyborg" href="#"><i class="icon-blank"></i> Cyborg</a></li>
						<li><a data-value="redy" href="#"><i class="icon-blank"></i> Redy</a></li>
						<li><a data-value="journal" href="#"><i class="icon-blank"></i> Journal</a></li>
						<li><a data-value="simplex" href="#"><i class="icon-blank"></i> Simplex</a></li>
						<li><a data-value="slate" href="#"><i class="icon-blank"></i> Slate</a></li>
						<li><a data-value="spacelab" href="#"><i class="icon-blank"></i> Spacelab</a></li>
						<li><a data-value="united" href="#"><i class="icon-blank"></i> United</a></li>
					</ul>
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
                                                <!-- <li class="nav-header hidden-tablet">MENU KEUANGAN</li>
                                                <li><a href="<?php echo base_url();?>index.php/tagihan"><i class="icon-edit"></i><span class="hidden-tablet"> Jenis Tagihan Biaya</span></a></li>
						<li><a href="<?php echo base_url();?>index.php/pembayaran"><i class="icon-eye-open"></i><span class="hidden-tablet"> Pembayaran</span></a></li>
						<li><a href="<?php echo base_url();?>index.php/laporan"><i class="icon-edit"></i><span class="hidden-tablet"> Laporan</span></a></li>
                                                -->
						<li class="nav-header hidden-tablet">ABSENSI</li>
                                                <li><a href="<?php echo base_url();?>index.php/absensi/tambah"><i class="icon-edit"></i><span class="hidden-tablet"> ABSENSI</span></a></li>
						<!--<li><a href="<?php echo base_url();?>index.php/kategorimapel"><i class="icon-edit"></i><span class="hidden-tablet"> KELOMPOK MAPEL</span></a></li>
                                                <li><a href="<?php echo base_url();?>index.php/mapel"><i class="icon-edit"></i><span class="hidden-tablet"> MATA PELAJARAN</span></a></li>
                                                <li><a href="<?php echo base_url();?>index.php/komdasar"><i class="icon-edit"></i><span class="hidden-tablet"> KOMPETENSI DASAR</span></a></li>-->
                                                
					</ul>
					
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
			
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-mail-alt"></i> Rekapitulasi Absensi Hari INI</h2>
						<div class="box-icon">
                                                        <a href="<?php echo base_url();?>index.php/absensi/tambah" class="btn btn-round"><i class="icon-plus"></i> </a>
                                                        
                                                        
						</div>
					</div>
					<div class="box-content">
                                            <div id="rkpAbsen" class="span12" style="width:90%; height:320px;"></div>
						
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

			
			
			<div class="">
				<div class="box span12">
				<div class="box-header well" data-original-title>
					<h2><i class="icon-mail-alt"></i> Detil berdasarkan tanggal</h2>
					
					
					
				</div>
				<div class="box-content">
	
						<form class="">
						<div class="form-group">
							<label class="control-label">Tanggal Awal</label>
							<div class="controls">  
                					<input type="text" style="display:inline;" name="tgl_awal" id="tgl_awal" class="datepicker" />
                    			 
                				</div>
						</div>
						
						<div class="form-group">
							<label class="control-label">Tanggal Akhir</label>
							<div class="controls">  
                							<input type="text" name="tgl_akhir" id="tgl_akhir" class="datepicker" />
                    			 
                				</div>
						</div>
						<div class="form-actions">  
                    			<button type="submit" id="btnAbsensi" class="btn btn-primary" href="<?php echo base_url();?>index.php/absensi/ambilabsen" data-loading-text="Sedang Menyimpan" >Lihat</button>  
                    			<button type="reset" class="btn">Batal</button>  
                			</div>
						</form>
						
							<div id="rangeAbsen" class="span12">
						
						
							</div>
					</div>
				</div>
			
			</div>
			
			
    
					<!-- content ends -->
			</div><!--/#content.span10-->
				</div><!--/fluid-row-->
				
		<hr>
                    
		
		<footer>
			<p class="pull-left">&copy; <a href="http://usman.it" target="_blank">Agus Wibowo</a> 2014</p>
			
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
	<!-- application script for Charisma demo -->
	<script src="<?php echo base_url();?>style/js/charisma.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jchart/jchartfx.system.js"></script>  
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jchart/jchartfx.coreBasic.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jchart/jchartfx.coreVector.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jchart/jchartfx.advanced.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jchart/jchartfx.animation.js"></script>
		
</body>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#btnAbsensi").click(function(e){
				e.preventDefault();
				var href 		= $(this).attr('href');
				var form_data 	= {
					tgl_awal 	: $('#tgl_awal').val(),
					tgl_akhir 	: $('#tgl_akhir').val(),
					ajax		: '1'
				}; 
				$.ajax({
					type	: 'POST',
					url		: href,
					async	: false,
					cache	: false,
					data	: form_data,
					success : function(data){
						
				            //$(btn).fadeOut(500);
				            //$('#formUN').slideUp(100);
				            //$('#hasilPencarian').slideDown();
				            $('#rangeAbsen').slideDown();
				            $('#rangeAbsen').html(data);
				            //$("#btnSubmit").fadeIn(500);
				             
				            
				            


						}


				});


			});
		});
	</script>	
</html>
