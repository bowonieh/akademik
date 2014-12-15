<style>
    h3{
        margin:2px;
    }
    h5{
        margin:2px;
    }
    #kanan {
        
        text-align:left;
        padding:50px 100px 100px 400px;
        
    }
    .kanan-tanggal{
        
        margin-top: 0px;
        
    }
    .kanan-walas{
        margin-top:50px;
    }
    /*table */
.nilai {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    width: 96%;
   	/*border-collapse: collapse;*/
    
    
}
table {
	border-spacing: 0px;
	
}


.nilai td{
    font-size: 0.5em;
    border: 1px dotted #000000;
    padding: 2px 4px 2px 4px;
    margin : 0px 0px 0px 0px;
    border-top: none;
    border-left: 0.1em dotted #000000;
    border-right: 0.1em dotted #000000;
    
}

.nilai th {
    font-size: 0.7em;
    text-align: center;
    padding-top: 5px;
    padding-bottom: 4px;
    background-color: #CCABCC;
    color: #ffffff;
}


.nilai tr.alt td {
    color: #000000;
    background-color: #EAF2D3;
}

.nilai th.deskripsi {
    width: 40%;
}
.nilai th.antarmapel {
    width: 5%;
}
.nilai th.listNo {
    width: 5%;
}
.nilai th.mapel {
    width: 30%;
}
</style>
<h3>Laporan Nilai Siswa Tahun Pelajaran <?php echo $dtl->tahun;?></h3>
<h3>SMK Negeri 1 Kota Bekasi</h3>
<h5>Jl. Bintara VIII No 2 Kelurahan Bintara, Kecamatan Bekasi Barat</h5>
<h5>Telp. (021) 88951151 Email: info@smkn1kotabekasi.sch.id</h5>
<hr>

    <table width="100%" border="0">
        <tr>
            
            <td>Nama Sekolah</td>
            <td>:</td>
            <td colspan="2">SMK Negeri 1 Kota Bekasi</td>
            <td>Kelas</td>
            <td>:</td>
            <td ><?php echo $dtl->kelas;?></td>
        </tr>
        <tr>
            <td>NIS</td>
            <td>:</td>
            <td colspan="2"><?php echo $dtl->nis;?></td>
            <td>Tahun Pelajaran / Semester</td>
            <td>:</td>
            <td><?php echo $dtl->tahun;?></td>
        </tr>
        <tr>
            
            <td>NAMA LENGKAP</td>
            <td>:</td>
            <td colspan="2"><?php echo $dtl->nama_siswa;?></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
</p>

<div >
    <br>
    <table class="nilai">
    <thead>
    <tr>
                <th rowspan="2" class="listNo">NO</th>
                <th rowspan="2" class="mapel">Mata Pelajaran</th>
                <th>Pengetahuan</th>
                <th>Keterampilan</th>
                <th colspan="2">Sikap Spiritual dan Sosial</th>
                
            </tr>
            <tr>
                
                <th>Predikat<br>(D-A)</th>
                
                <th>Predikat<br>(D-A)</th>
                
                <th>Dalam Mapel<br>(SB,B,C,K)</th>
                <th class="antarmapel">Antar Mapel</th>
            </tr>
        
    </thead>
    <tbody>
    	<?php
    	 
    	for($i=1;$i< 2; ++$i){
    		?>
    		<tr>
		
		<td colspan="5"></td>
		<td rowspan="<?php echo count($isi)+1;?>" class="antarmapel"><?php if (empty($am)){
			echo "Antar Mapel belum di isi";
		}else{
			$ss = $am->nilai;
			echo wordwrap($am->nilai, 25, "<br />\n", true);
			
		}
			?></td>
		</tr> 
    		<?php 
    	}
    	?>
    	<?php 
    	$no = 1;
    	foreach ($isi as $d){
    		?>
    		<tr>
    		<td><?php echo $no++;?></td>
    		<td><?php echo $d->matpel;?>
    		<p>
                    (<?php echo $d->nama_guru;?>)
    		
    		</td>
    		<td align="center">
    		
    		
    		<?php 
    		if(empty($d->predikat_pengetahuan)){
    		echo "&nbsp;";	
    		}else{
    		
    		echo $d->predikat_pengetahuan;
    		
    		}
    		?></td>
    		<td align="center"><?php  
    		if(empty($d->predikat_keterampilan)){
    			echo "&nbsp;";
    		}else{
    		
    		echo $d->predikat_keterampilan;
    		}
    		?></td>
    		<td align="center"><?php 
    		if(empty($d->nilai_raport)){
    			echo "&nbsp;";
    		}else{
    		
    		
    		echo kriteria($d->nilai_raport);
    		
    		}
    		?></td>
    		</tr>
    		
    		<?php 
    	}
    	?>
		   
		  
    </tbody>
    
    </table>
    <!-- 
    <table class="nilai">
        <thead>
        
            <tr>
                <th rowspan="2" class="listNo">NO</th>
                <th rowspan="2" class="mapel">Mata Pelajaran</th>
                <th colspan="2">Keterampilan</th>
                <th colspan="2">Pengetahuan</th>
                <th colspan="2">Sikap</th>
                <th rowspan="2">UTS</th>
                <th rowspan="2">UAS</th>
            </tr>
            <tr>
                <th>N</th>
                <th>Prd</th>
                <th>N</th>
                <th>Prd</th>
                <th>N</th>
                <th>Prd</th>
            </tr>
        
        </thead>
        <tbody>
            <?php 
            $no = 1;
            if(empty($isi)){

            }else{
            foreach ($isi as $d){
                
                ?>
            <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $d->matpel;?>
                    <p>
                    (<?php echo $d->nama_guru;?>)
                    </p>
                </td>
                <td><?php echo $d->nilai4_keterampilan;?></td>
                <td><?php echo $d->predikat_keterampilan;?></td>
                <td><?php echo $d->skala4_pengetahuan;?></td>
                <td><?php echo $d->predikat_pengetahuan;?></td>
                <td><?php echo $d->skala4_sikap;?></td>
                <td><?php echo $d->predikat_sikap;?></td>
                <td><?php echo $d->UTS;?></td>
                <td><?php echo $d->UAS;?></td>
            </tr>
            
            <?php
                }
            }?>
        </tbody>
    </table>
    -->
    <p></p>
    <p></p>
    
    <p></p>
    <p></p>
    <div>
        <h3>DESKRIPSI</h3>
        <table class="nilai">
        <thead>
        
            <tr>
                <th class="listNo"> NO</th>
                <th class="mapel">Mata Pelajaran</th>
                <th >Kompetensi</th>
                <th class="deskripsi">Catatan</th>
                
            </tr>
            
        </thead>
        <tbody>
            <?php 
            $no = 1;
            if(empty($isi)){

            }else{
            foreach ($isi as $d){
                
                ?>
            <tr>
                <td rowspan="3"><?php echo $no++;?></td>
                <td rowspan="3"><?php echo $d->matpel;?>
                    <p>( <?php echo $d->nama_guru ;?> )</p>
                
                
                </td>
                <td colspan="1">Pengetahuan</td>
                <td colspan="1"><?php echo $d->keterangan_pengetahuan;?></td>
                
                
            </tr>
            <tr>
                <td>Keterampilan</td>
                <td><?php echo $d->keterangan_keterampilan;?></td>
                
            </tr>
            <tr>
                <td>Sosial dan spiritual</td>
                <td><?php echo $d->desc_kemajuan_belajar;?></td>
                
            </tr>
            
            <?php
                }
            }?>
        </tbody>
    </table>
    
    </div>
    <p></p>
    <div id="kanan">
        <div class="kanan-tanggal">
            Bekasi , <?php echo date('d-M-Y');?>
            <br>
        Wali Kelas,
        </div>
        <div class="kanan-walas">
           <?php 
            if (empty($walas->nama_guru)){
                ?>
                (_____________________)

                <?php 
        }else{
            ?>
            <?php
             echo $walas->nama_guru;
        }
            ?>
        </div>
    </div>
    </div>
