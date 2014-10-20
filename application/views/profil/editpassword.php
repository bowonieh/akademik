<div class="modal show" id="FormPassword">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Ganti Password <?php echo $profil->nama_guru;?></h4>
      </div>
      <div class="modal-body">
          <div class="form-horizontal">
              <div class="control-group">
                  <label class="control-label">PASSWORD LAMA</label>
                  <div class="controls">
                      
                      <?php echo form_password('pass_lama','','class="input-large" id="pass_lama"');?>
                  </div>
              </div>
              <div class="control-group">
                  <label class="control-label">PASSWORD BARU</label>
                  <div class="controls">
                      
                      <?php echo form_password('pass_baru','','class="input-large" id="pass_baru"');?> 
                      <div class="help-block">
                      
                      </div>
                  </div>
              </div>
              <div class="control-group">
                  <label class="control-label">KONFIRMASI</label>
                  <div class="controls">
                      <?php echo form_password('pass_baru_confirm','','class="input-large" id="pass_baru_confirm"');?>
                      <?php echo form_hidden('user_id', $profil->user_id,'user_id');?>
                  </div>
              </div>
              
          </div>
          
          </div>
      </div>
       <div class="modal-footer">
           <div id="infoAlert"></div>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="editPassword" data-proce="<?php echo base_url();?>index.php/profil/simpanpassword">Simpan</button>
        <p><div class="pesan"></div></p>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->