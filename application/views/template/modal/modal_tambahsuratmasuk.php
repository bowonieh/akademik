<div class="modal-header">
     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>  
 <h3 id="myModalLabel">Tambah Surat Masuk</h3>  
</div>
<div class="modal-body">
                                        <?php echo form_open_multipart('','id="#formgue" class="form-horizontal" ');?>
						  <fieldset>
							
							<div class="control-group">
							  <label class="control-label" for="typeahead">Judul </label>
							  <div class="controls">
								<input type="text" class="span2 typeahead" name="judul"  >
								<p class="help-block">Masukkan judul surat!</p>
							  </div>
							</div>
                                                        <div class="control-group">
							  <label class="control-label" for="typeahead">NO SURAT </label>
							  <div class="controls">
								<input type="text" class="span2 typeahead" name="no_surat"  >
								<p class="help-block">Masukkan NO Surat!</p>
							  </div>
							</div>
                                                        <div class="control-group">
							  <label class="control-label" for="Inputpengirim">Pengirim</label>
							  <div class="controls">
								<input type="text" name="pengirim" class="input-xlarge" id="Inputpengirim" >
                                                                <p class="help-block">Masukkan pengirim surat!</p>
							  </div>
                                                        </div>
                                                        
                                                        
							<div class="control-group">
							  <label class="control-label" for="date01">Tanggal</label>
							  <div class="controls">
								<input type="text" name="tanggal" class="input-xlarge datepicker" id="date01">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="fileInput">Filename</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" name="userfile" type="file">
							  </div>
							</div>          
							<div class="control-group">
							  <label class="control-label" for="textarea2">ISI SURAT</label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" rows="3" name="isi"></textarea>
							  </div>
							</div>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Save changes</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						<?php echo form_close();?>
                                            <div ><?php echo validation_errors();?></div>
                                            </div>