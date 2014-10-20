<div class="modal-header">  
 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>  
 <h3 id="myModalLabel">GURU ID #<?php echo $isi->id_guru;?></h3>  
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
									<td><STRONG>NAMA GURU</STRONG></td>
									<td class="center"><?php echo $isi->nama_guru;?></td>
									              
								</tr>
                                                                <tr>
									<td><STRONG>NIK</STRONG></td>
									<td class="center"><?php echo $isi->nik;?></td>
									              
								</tr>
                                                                <tr>
									<td><STRONG>NUPTK</STRONG></td>
									<td class="center"><?php echo $isi->nuptk;?> </td>
									              
								</tr>
                                                                <tr>
									<td><STRONG>TTL</STRONG></td>
									<td class="center"><?php echo $isi->tempat;?>, <?php echo $isi->tgl_lahir;?></td>
									              
								</tr>
                                                                <tr>
									<td><STRONG>ALAMAT</STRONG></td>
									<td class="center"><?php echo $isi->alamat;?> </td>
									              
								</tr>
                                                                <tr>
									<td><STRONG>KELURAHAN</STRONG></td>
									<td class="center"><?php echo $isi->kelurahan;?> </td>
									              
								</tr>
                                                                <tr>
									<td><STRONG>KECAMATAN</STRONG></td>
									<td class="center"><?php echo $isi->kecamatan;?> </td>
									              
								</tr>
                                                                
								                                   
							  </tbody>
						 </table>  
                                            <?php } ?>
</div>