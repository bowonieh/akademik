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
                  <label class="control-label">Nilai Ekstrakurikuler</label>
                  <div class="controls">
                      <?php //echo //form_dropdown('id_ekskul',$ekskul,'','id="id_ekskul"');?>
                        
						<?php echo form_dropdown('keterangan',array('A'=>'A','B'=>'B','C'=>'C','D'=>'D'),$siswa->keterangan,'id="keterangan"');?>
                      <?php echo form_hidden('id_eks', $siswa->id_eks,'id_eks');?>
                  </div>
              </div>
              
          </div>
      </div>
       <div class="modal-footer">
           <div id="infoAlert"></div>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="KetEkskul" data-proc="<?php echo base_url();?>index.php/ekskul/nilaisimpan">Simpan</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->