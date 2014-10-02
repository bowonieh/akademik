<div class="modal-header">
     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>  
 <h3 id="myModalLabel">Tambah Data Pendidik</h3>  
</div>
<div class="modal-body">
    <div id="tambaherror" style="display: none;"></div>
                                                 <form method="post" action="<?php echo base_url();?>index.php/guru/tambahguru" class="form-horizontal well well-small form-search" id="tambahguruform">
						  <fieldset>
							
							<div class="control-group">
							  <label class="control-label" for="typeahead">Nama Guru </label>
							  <div class="controls">
								<input type="text" class="span2 typeahead" name="nama_guru"  id="nama_guru">
								<p class="help-block">MASUKKAN NAMA GURU!</p>
							  </div>
							</div>
                                                        <div class="control-group">
							  <label class="control-label" for="typeahead">username </label>
							  <div class="controls">
								<input type="text" class="span2 typeahead" name="username"  id="username">
								<p class="help-block">Berikan Username!</p>
							  </div>
							</div>
                                                        
							<div class="form-actions">
							  <input type="submit" class="btn btn-primary search-query" value="Tambah!" id="registerModalsubmit">
                                                           <a href="#" class="btn" data-dismiss="modal">Cancel</a>
                                                           <a class="btn btn-danger tambahguru" href="<?php echo base_url();?>index.php/guru/addAksi" redirect="<?php echo base_url();?>index.php/guru">
										<i class="icon-trash icon-white"></i> 
										TAMBAH
									</a>
							</div>
						  </fieldset>
                                                </form>
                                            <div ><?php echo validation_errors();?></div>
                                            </div>