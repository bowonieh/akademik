<html>
<head>

	
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
	<link href='<?php echo base_url();?>style/css/pnotify.custom.min.css' rel='stylesheet'>
	


</head>
<div class="modal show" id="FormTambah">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">EDIT PROFIL <?php echo $profil->nama_guru;?></h4>
      </div>
      <div class="modal-body">
          <div class="form-horizontal">
              <div class="control-group">
                  <label class="control-label">NAMA PTK</label>
                  <div class="controls">
                      
                      <?php echo form_input('nama_guru',$profil->nama_guru,'class="input-large" id="nama_guru"');?>
                  </div>
              </div>
              <div class="control-group">
                  <label class="control-label">TTL</label>
                  <div class="controls">
                      
                      <?php echo form_input('tempat',$profil->tempat,'class="input-small" id="tempat"');?> , <?php echo form_input('tgl_lahir',$profil->tgl_lahir,'class="input-small datepicker" id="tgl_lahir"');?>
                      <div class="help-block">
                      Tanggal di isi dengan format yyyy-mm-dd
                      </div>
                  </div>
              </div>
              <div class="control-group">
                  <label class="control-label">NIK</label>
                  <div class="controls">
                      <?php echo form_input('nik',$profil->nik,'class="input-xlarge" id="nik"');?>
                      <?php echo form_hidden('id_guru', $profil->id_guru,'id_guru');?>
                  </div>
              </div>
              <div class="control-group">
                  <label class="control-label">NUPTK</label>
                  <div class="controls">
                      <?php echo form_input('nuptk',$profil->nuptk,'class="input-xlarge" id="nuptk"');?>
                  </div>
              </div>
          <div class="control-group">
                  <label class="control-label">ALAMAT</label>
                  <div class="controls">
                      <?php echo form_textarea('alamat', $profil->alamat, 'class="cleditor" id="alamat"');?>
                      </div>
              </div>
              <div class="control-group">
                  <label class="control-label">NO HP</label>
                  <div class="controls">
                      <?php echo form_input('no_hp', $profil->no_hp, 'class="input-large" id="no_hp"');?>
                      </div>
              </div>
              <div class="control-group">
                  <label class="control-label">NO TELP</label>
                  <div class="controls">
                      <?php echo form_input('no_telp_rumah', $profil->no_telp_rumah, 'class="input-large" id="no_telp_rumah"');?>
                      </div>
              </div>
              
              <div class="control-group">
                  <label class="control-label">EMAIL</label>
                  <div class="controls">
                      <?php echo form_input('email', $profil->email, 'class="input-large" id="email"');?>
                      </div>
              </div>
              <div class="control-group">
                  <label class="control-label">JENIS PTK</label>
                  <div class="controls">
                      <?php //echo form_input('email', $profil->email, 'class="input-large" id="email"');?>
                      <?php echo form_dropdown('id_jenisptk', $jenisptk,$profil->id_jenisptk,'id="id_jenisptk"');?>
                  </div>
              </div>
              <div class="control-group">
                  <label class="control-label">STATUS KEPEGAWAIAN</label>
                  <div class="controls">
                      
                      <?php echo form_dropdown('id_stts_kepeg', $statusptk,$profil->id_stts_kepeg,'id="id_stts_kepeg"');?>
                      
                  </div>
              </div>
          </div>
          
          </div>
      </div>
       <div class="modal-footer">
           <div id="infoAlert"></div>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="editProfil" data-proc="<?php echo base_url();?>index.php/profil/simpan">Simpan</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

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
	<script src="<?php echo base_url();?>style/js/pnotify.custom.min.js"></script>

</html>