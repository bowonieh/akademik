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