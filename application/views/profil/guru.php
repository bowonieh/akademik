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
						<li><a class="ajax-link" href="<?php echo base_url();?>"><i class="icon-home"></i><span class="hidden-tablet"> Dashboard</span></a></li>
                                                <li class="nav-header hidden-tablet">REFERENSI</li>
						<li><a class="ajax-link" href="<?php echo base_url();?>index.php/surat_masuk"><i class="icon-eye-open"></i><span class="hidden-tablet"> KELAS</span></a></li>
						<li><a class="ajax-link" href="<?php echo base_url();?>index.php/surat_keluar"><i class="icon-edit"></i><span class="hidden-tablet"> SISWA</span></a></li>
                                                
						<li class="nav-header hidden-tablet">Kurikulum</li>
                                                <li><a class="ajax-link" href="<?php echo base_url();?>index.php/kelompokmapel"><i class="icon-edit"></i><span class="hidden-tablet"> TAHUN AKTIF</span></a></li>
						<li><a class="ajax-link" href="<?php echo base_url();?>index.php/kelompokmapel"><i class="icon-edit"></i><span class="hidden-tablet"> KELOMPOK MAPEL</span></a></li>
                                                <li><a class="ajax-link" href="<?php echo base_url();?>index.php/mapel"><i class="icon-edit"></i><span class="hidden-tablet"> MATA PELAJARAN</span></a></li>
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
			
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" >
						<h2><i class="icon-mail-alt"></i> Profil <?php echo $profil->nama_guru;?></h2>
						<div class="box-icon">
                                                    
                                                        <a href="<?php echo base_url();?>index.php/guru/tambah" class="btn btn-round"><i class="icon-plus"></i> </a>
                                                        
                                                        
						</div>
					</div>
					<div class="box-content" id="detilprofil">
						<table class="table table-striped">
                                                    <tbody>
                                                        <tr>
                                                            <th colspan="3" style="text-decoration:underline;"><strong>DATA PRIBADI</strong></th>
                                                        </tr>
                                                        <tr>
                                                            <td>NAMA PTK</td>
                                                            <td>:</td>
                                                            <td><?php echo $profil->nama_guru;?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>NIK</td>
                                                            <td>:</td>
                                                            <td><?php echo $profil->nik;?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>NUPTK</td>
                                                            <td>:</td>
                                                            <td><?php echo $profil->nuptk;?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>IBU KANDUNG</td>
                                                            <td>:</td>
                                                            <td><?php echo $profil->ibu_kandung;?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>TTL</td>
                                                            <td>:</td>
                                                            <td><?php echo $profil->tempat;?>,<?php echo $profil->tgl_lahir;?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>ALAMAT</td>
                                                            <td>:</td>
                                                            <td>
                                                                <?php echo $profil->alamat;?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th colspan="3" style="text-decoration:underline;"><strong>KEPEGAWAIAN</strong></th>
                                                        </tr>
                                                        <tr>
                                                            <td>JENIS PTK</td>
                                                            <td>:</td>
                                                            <td><?php echo $profil->jenis_ptk;?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>STATUS KEPEGAWAIAN</td>
                                                            <td>:</td>
                                                            <td><?php echo $profil->status_kepegawaian;?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>SK PENGANGKATAN</td>
                                                            <td>:</td>
                                                            <td><?php echo $profil->sk_pengangkatan;?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>TMT PENGANGKATAN</td>
                                                            <td>:</td>
                                                            <td><?php echo $profil->tmt_pengangkatan;?></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            <div class="form-action">
                                                <button id="editprofil" class="btn btn-primary">EDIT PROFIL</button>
                                            </div>
					</div>
                                    
                                    <!--edit FORM-->
                                    <!--
					<div class="box-content" id="editform">
                                            <form class="form-horizontal"> 
						<table class="table table-striped">
                                                    <tbody>
                                                        <tr>
                                                            <th colspan="3" style="text-decoration:underline;"><strong>DATA PRIBADI</strong></th>
                                                        </tr>
                                                        <tr>
                                                            <td>NAMA PTK</td>
                                                            <td>:</td>
                                                            <td><input type="hidden" name="id_guru" id="id_guru" value="<?php echo $isi->id_guru;?>"/>
                                                                <input type="text" class="input input-xlarge" name="nama_guru" id="nama_guru" value="<?php echo $isi->nama_guru;?>"/>
                                                                </td>
                                                        </tr>
                                                        <tr>
                                                            <td>NIK</td>
                                                            <td>:</td>
                                                            <td>
                                                                <input type="text" class="input input-xlarge" name="nix" id="nik" value="<?php echo $isi->nik;?>"/>
                                                                    </td>
                                                        </tr>
                                                        <tr>
                                                            <td>NUPTK</td>
                                                            <td>:</td>
                                                            <td><input type="text" class="input input-xxlarge" name="nuptk" id="nuptk" value="<?php echo $isi->nuptk;?>"/>
                                                                </td>
                                                        </tr>
                                                        <tr>
                                                            <td>IBU KANDUNG</td>
                                                            <td>:</td>
                                                            <td><input type="text" class="input input-medium" name="ibu_kandung" id="ibu_kandung" value="<?php echo $isi->ibu_kandung;?>"/>
                                                                </td>
                                                        </tr>
                                                        <tr>
                                                            <td>TTL</td>
                                                            <td>:</td>
                                                            <td><input type="text" class="input input-medium" name="tempat" id="tempat" value="<?php echo $isi->tempat;?>"/>,<input type="text" name="tgl_lahir" id="tgl_lahir" class="input input-medium" value="<?php echo $isi->tgl_lahir;?>" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td>JALAN</td>
                                                            <td>:</td>
                                                            <td>
                                                               <input type="text" name="alamat" class="input input-xxlarge" id="alamat" value="<?php echo $isi->alamat;?>"/>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>RT</td>
                                                            <td>:</td>
                                                            <td>
                                                               <input type="text" name="rt" class="input input-mini" id="rt" value="<?php echo $isi->rt;?>"/>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>RW</td>
                                                            <td>:</td>
                                                            <td>
                                                               <input type="text" name="rw" class="input input-mini" id="rw" value="<?php echo $isi->rw;?>"/>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>KELURAHAN</td>
                                                            <td>:</td>
                                                            <td>
                                                               <input type="text" name="kelurahan" class="input input-medium" id="kelurahan" value="<?php echo $isi->kelurahan;?>"/>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>KECAMATAN</td>
                                                            <td>:</td>
                                                            <td>
                                                               <input type="text" name="kecamatan" class="input input-medium" id="kecamatan" value="<?php echo $isi->kecamatan;?>"/>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th colspan="3" style="text-decoration:underline;"><strong>KEPEGAWAIAN</strong></th>
                                                        </tr>
                                                        <tr>
                                                            <td>JENIS PTK</td>
                                                            <td>:</td>
                                                            <td><?php echo $isi->jenis_ptk;?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>STATUS KEPEGAWAIAN</td>
                                                            <td>:</td>
                                                            <td>
                                                                <?php echo $isi->status_kepegawaian;?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>SK PENGANGKATAN</td>
                                                            <td>:</td>
                                                            <td><?php echo $isi->sk_pengangkatan;?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>TMT PENGANGKATAN</td>
                                                            <td>:</td>
                                                            <td><?php echo $isi->tmt_pengangkatan;?></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            <div class="form-action">
                                                <button id="saveprofil" class="btn btn-primary">SIMPAN</button>
                                                <button id="canceledit" class="btn btn-danger">CANCEL</button>
                                            </div>
                                            </form>
					</div>-->
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
	<!-- application script for Charisma demo -->
	<script src="<?php echo base_url();?>style/js/charisma.js"></script>
	
		
</body>
</html>
