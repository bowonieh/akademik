<div class="span10">
    
    <h3>Rekap Absensi</h3>
                 <table class="datatable table table-hover">
                     <tr>
                         <td><strong>NIS</strong></td>
                         <td><strong>Nama Siswa</strong></td>
                         <td><strong>Tanggal</strong></td>
                         <td><strong>Kelas</strong></td>
                         <td><strong>Alasan</strong></td>
                     </tr>
            <?php 
            if(empty($isi)){
            
            }else{
            foreach($isi AS $ss){
            	
                ?>
                     <tr width="70%">
                         <td>
                              <?php echo $ss->nis;?>
                         </td>
                         <td>
                            
                             <p>
                             <?php echo $ss->nama_siswa;?>
                                 </p>
                                 
                         </td>
                         <td>
                            
                             <p>
                             <?php echo $ss->tanggal;?>
                                 </p>
                                 
                         </td>
                         <td>
                            
                             <p>
                             <?php echo $ss->kelas;?>
                                 </p>
                                 
                         </td>
                         <td>
                            
                             <p>
                             <?php echo $ss->alasan;?>
                                 </p>
                                 
                         </td>
                     </tr>
       
                
            
            <?php
            	}
            }
            
            
            ?>
                     </table>
        
    
    
</div>