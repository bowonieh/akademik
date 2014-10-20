<div class="modal-header">  
 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>  
 <h3 id="myModalLabel">ITEM NO #<?php echo $isi->id_suratmasuk;?></h3>  
 </div>                                 
<div class="modal-body"> 
           <?php if (empty($isi)){
                                                echo "kosong";
                                                ?>
                                            <?php
                                            }else{
                                                
                                            ?>
						    <table class="table">
							     
							  <tbody>
								<tr>
									<td><STRONG>PENGIRIM</STRONG></td>
									<td class="center"><?php echo $isi->pengirim;?></td>
									              
								</tr>
                                                                <tr>
									<td><STRONG>JUDUL SURAT</STRONG></td>
									<td class="center"><?php echo $isi->judul;?></td>
									              
								</tr>
                                                                <tr>
									<td><STRONG>NO SURAT</STRONG></td>
									<td class="center"><?php echo $isi->no_surat;?></td>
									              
								</tr>
                                                                <tr>
									<td><STRONG>TANGGAL</STRONG></td>
									<td class="center"><?php echo $isi->tanggal;?></td>
									              
								</tr>
                                                                <tr>
									<td><STRONG>ISI SURAT</STRONG></td>
									<td><?php echo $isi->isi;?></td>
									              
								</tr>
                                                                <tr>
									<td><STRONG>FILE</STRONG></td>
									<td>
                                                                            <?php if (empty($isi->filename)){
                                                                                ?>
                                                                            
                                                                                    <?php
                                                                            }else{ 
                                                                                ?>
                                                                        <a class="btn btn-success" href="<?php echo base_url();?>doc/suratmasuk/<?php echo $isi->filename;?>">
										<i class="icon-zoom-in icon-white"></i>  
										Download                                           
									</a>
                                                                            <?php } ?>
                                                                        </td>
									              
								</tr>
								                                   
							  </tbody>
						 </table>  
                                            <?php } ?>
</div>