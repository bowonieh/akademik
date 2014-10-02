<div class="span12">
    
    <h3>Detil Siswa</h3>
                 <table class="datatable table table-hover">
                     <tr>
                         <td><strong>NIS</strong></td>
                         <td><strong>Nama Siswa</strong></td>
                     </tr>
            <?php 
            foreach($isi AS $ss){
                ?>
                     <tr width="100%">
                         <td>
                              <?php echo $ss->nis;?>
                         </td>
                         <td>
                            
                             <p>
                             <?php echo $ss->nama_siswa;?>
                                 </p>
                                 
                         </td>
                     </tr>
       
                
            
            <?php
            }
            
            
            ?>
                     </table>
        
    
    
</div>