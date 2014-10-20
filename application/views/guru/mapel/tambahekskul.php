<div class="modal show" id="FormTambah">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><?php echo $siswa->nama_siswa;?></h4>
      </div>
      <div class="modal-body">
          <div class="form-horizontal">
              <div class="control-group">
                  <label class="control-label">NIS</label>
                  <div class="controls">
                      <?php echo $siswa->nis;?>
                  </div>
              </div>
              <div class="control-group">
                  <label class="control-label">Ekstrakurikuler</label>
                  <div class="controls">
                      <?php echo form_dropdown('id_ekskul',$ekskul,'','id="id_ekskul"');?>
                      <?php echo form_hidden('nis', $siswa->nis,'nis');?>
                  </div>
              </div>
              <div class="control-group">
                  <label class="control-label">Tahun Ajaran</label>
                  <div class="controls">
                      <?php echo form_dropdown('id_tahun',$tahun,'','id="id_tahun"');?>
                  </div>
              </div>
          </div>
      </div>
       <div class="modal-footer">
           <div id="infoAlert"></div>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="SimpanEkskul" data-proc="<?php echo base_url();?>index.php/ekskul/simpan">Simpan</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->