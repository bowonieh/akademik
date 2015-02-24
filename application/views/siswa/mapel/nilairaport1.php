<html>
<head>

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
        font-size: 0.7em;
        font-weight: strong;
    }
    .kanan-walas{
        margin-top:50px;
        font-size:0.7em;
    }
    /*table */
.nilai {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    width: 699px;
   	
    
    
}

.namaMapel{
	font-size:0.9em;
	
}
.detil {
	border:none;
	font-size: 0.7em;

}
.detil table{
	background:transparent;
	border:none;
}
.absensi td {
    font-size: 0.4em;
    
    border: 1px none #000000 !important;
    
    margin : 0px 0px 0px 0px;
    vertical-align: middle;
	padding-top: 3px;
	padding-left: 2px;
	padding-right:4px;
	padding-bottom: 4px;    
}


.absensi th {
    font-size: 0.8em;
    text-align: center;
    padding-top: 5px;
    padding-bottom: 4px;
    border: 1px none #000000;
    /*background-color: #CCABCC;*/
    color: #000000;
}



.ekskul {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    width: 400px;
   	
    
    
}

table {
	border-spacing: 0px;
	table-layout: fixed;
	border-collapse: collapse;
}


.nilai td {
    font-size: 0.4em;
    
    border: 1px solid #000000 !important;
    
    margin : 0px 0px 0px 0px;
    vertical-align: middle;
	padding-top: 3px;
	padding-left: 2px;
	padding-right:0px;
	padding-bottom: 0px;    
}


.ekskul td {
    font-size: 0.4em;
    
    border: 1px solid #000000 !important;
    
    margin : 0px 0px 0px 0px;
    vertical-align: middle;
	padding-top: 3px;
	padding-left: 2px;
	padding-right:2px;
	padding-bottom: 2px;    
}


.ekskul th {
    font-size: 0.7em;
    text-align: center;
    padding-top: 5px;
    padding-bottom: 4px;
    border: 0.1px solid #000000;
    /*background-color: #CCABCC;*/
    color: #000000;
}

.Keterangan{

	font-size:0.8em;
}

.nilai th {
    font-size: 0.7em;
    text-align: center;
    padding-top: 5px;
    padding-bottom: 4px;
    border: 1px solid #000000;
    /*background-color: #CCABCC;*/
    color: #000000;
}


.nilai tr.alt td {
    color: #000000;
    background-color: #EAF2D3;
}

.nilai th.deskripsi {
    width: 40%;
}
.nilai th.antarmapel {
    width: 40%;
.nilai th.listNo {
    width: 2%;
}
.nilai th.mapel {
}
    width: 20%;
}
</style>
</head>
<body>
<h3>Laporan Nilai Siswa Tahun Pelajaran <?php echo $dtl->tahun;?></h3>
<h3>SMK Negeri 1 Kota Bekasi</h3>
<h5>Jl. Bintara VIII No 2 Kelurahan Bintara, Kecamatan Bekasi Barat</h5>
<h5>Telp. (021) 88951151 Email: info@smkn1kotabekasi.sch.id</h5>
<hr>

    <table width="90%" class="detil">
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
                <th rowspan="3" class="listNo">NO</th>
                <th rowspan="3" class="mapel">Mata Pelajaran</th>
                <th colspan="2">Pengetahuan</th>
                <th colspan="2">Keterampilan</th>
                <th colspan="2">Sikap Sosial dan Spiritual</th>
                
            </tr>
            <tr>
                <th>Angka</th>
                <th>Predikat</th>
                <th>Angka</th>
                <th>Predikat</th>
                
                <th>Dalam Mapel</th>
                <th class="antarmapel" rowspan="2">Antar Mapel</th>
            </tr>
            <tr>
            	<th>1-4</th>
            	<th>&nbsp;</th>
            	<th>1-4</th>
            	<th>&nbsp;</th>
            	<th>SB/B/C/K</th>
            </tr>
        
    </thead>
    <tbody>
    	<?php
    	 
    	for($i=1;$i< 2; ++$i){
    		?>
    		<tr>
		
		<td colspan="7">KELOMPOK A</td>
		<td rowspan="50"  ><?php if (empty($am)){
			echo "Antar Mapel belum di isi";
		}else{
			$ss = $am->nilai;
			echo wordwrap($am->nilai, 25, "<br/>\n", true);
			
		}
			?></td>
		</tr> 
    		<?php 
    	}
    	?>
    	<?php
    	if(empty($kel_a)){
    		
    	} else{
    	$no = 1;
    	foreach ($kel_a as $d){
    		?>
    		<tr>
    		<td align="center"> <?php echo $no++;?></td>
    		<td><span class="namaMapel"><?php echo $d->matpel;?></span>
    		<br>
                    (<?php echo $d->nama_guru;?>)
    		
    		</td>
    		<td><?php echo $d->skala4_pengetahuan;?></td>
    		<td align="center">
    		
    		
    		<?php 
    		if(empty($d->predikat_pengetahuan)){
    		echo "&nbsp;";	
    		}else{
    		
    		echo $d->predikat_pengetahuan;
    		
    		}
    		?></td>
    		<td>
    		<?php echo $d->nilai4_keterampilan;?>
    		</td>
    		<td align="center"><?php  
    		if(empty($d->predikat_keterampilan)){
    			echo "&nbsp;";
    		}else{
    		
    		echo $d->predikat_keterampilan;
    		}
    		?></td>
    		
    		<td align="center"><?php // 
    		if(empty($d->nilai_raport)){
    			echo "&nbsp;";
    		}else{
    		
    		
    		echo kriteria($d->nilai_raport);
    		
    		}
    		?></td>
    		
    		</tr>
    		
    		<?php 
    		}
    	}
    	?>
		   <tr>
		   <td colspan="7">KELOMPOK B</td>
		   </tr>
		<?php 
		if(empty($kel_b)){
			
		}else{
    	$no = 1;
    	foreach ($kel_b as $s){
    		?>
    		<tr>
    		<td align="center"> <?php echo $no++;?></td>
    		<td><span class="namaMapel"><?php echo $s->matpel;?></span>
    		<br>
                    (<?php echo $s->nama_guru;?>)
    		
    		</td>
    		<td><?php echo $s->skala4_pengetahuan;?></td>
    		<td align="center">
    		
    		
    		<?php 
    		if(empty($s->predikat_pengetahuan)){
    		echo "&nbsp;";	
    		}else{
    		
    		echo $s->predikat_pengetahuan;
    		
    		}
    		?></td>
    		<td>
    		<?php echo $s->nilai4_keterampilan;?>
    		</td>
    		<td align="center"><?php  
    		if(empty($s->predikat_keterampilan)){
    			echo "&nbsp;";
    		}else{
    		
    		echo $s->predikat_keterampilan;
    		}
    		?></td>
    		
    		<td align="center"><?php // 
    		if(empty($s->nilai_raport)){
    			echo "&nbsp;";
    		}else{
    		
    		
    		echo kriteria($s->nilai_raport);
    		
    		}
    		?></td>
    		
    		</tr>
    		
    		<?php
    		} 
    	}
    	?>   
		 <tr>
		   <td colspan="7">KELOMPOK C1</td>
		   </tr>
		<?php
		if(empty($kel_c1)){
			
		} else{
    	$no = 1;
    	foreach ($kel_c1 as $c1){
    		?>
    		<tr>
    		<td align="center"> <?php echo $no++;?></td>
    		<td><span class="namaMapel"><?php echo $c1->matpel;?></span>
    		<br>
                    (<?php echo $c1->nama_guru;?>)
    		
    		</td>
    		<td><?php echo $c1->skala4_pengetahuan;?></td>
    		<td align="center">
    		
    		
    		<?php 
    		if(empty($c1->predikat_pengetahuan)){
    		echo "&nbsp;";	
    		}else{
    		
    		echo $c1->predikat_pengetahuan;
    		
    		}
    		?></td>
    		<td>
    		<?php echo $c1->nilai4_keterampilan;?>
    		</td>
    		<td align="center"><?php  
    		if(empty($c1->predikat_keterampilan)){
    			echo "&nbsp;";
    		}else{
    		
    		echo $c1->predikat_keterampilan;
    		}
    		?></td>
    		
    		<td align="center"><?php // 
    		if(empty($c1->nilai_raport)){
    			echo "&nbsp;";
    		}else{
    		
    		
    		echo kriteria($c1->nilai_raport);
    		
    		}
    		?></td>
    		
    		</tr>
    		
    		<?php 
    		}
		}
    	?>   
		 <tr>
		   <td colspan="7">KELOMPOK C2</td>
		   </tr>
		   
		<?php 
    	$no = 1;
    	if(empty($kel_c2)){
    		
    	}else{
    	foreach ($kel_c2 as $c2){
    		?>
    		<tr>
    		<td align="center"> <?php echo $no++;?></td>
    		<td><?php echo $c2->matpel;?>
    		<br>
                    (<?php echo $c2->nama_guru;?>)
    		
    		</td>
    		<td><?php echo $c2->skala4_pengetahuan;?></td>
    		<td align="center">
    		
    		
    		<?php 
    		if(empty($c2->predikat_pengetahuan)){
    		echo "&nbsp;";	
    		}else{
    		
    		echo $c2->predikat_pengetahuan;
    		
    		}
    		?></td>
    		<td>
    		<?php echo $c2->nilai4_keterampilan;?>
    		</td>
    		<td align="center"><?php  
    		if(empty($c2->predikat_keterampilan)){
    			echo "&nbsp;";
    		}else{
    		
    		echo $c2->predikat_keterampilan;
    		}
    		?></td>
    		
    		<td align="center"><?php // 
    		if(empty($c2->nilai_raport)){
    			echo "&nbsp;";
    		}else{
    		
    		
    		echo kriteria($c2->nilai_raport);
    		
    		}
    		?></td>
    		
    		</tr>
    		
    		<?php 
    		}
    	}
    	?>   
		 
		 <tr>
		   <td colspan="7">KELOMPOK C3</td>
		   </tr>
		<?php 
    	$no = 1;
    	if (empty($kel_c3)){
    		
    	}else{
    	foreach ($kel_c3 as $c3){
    		
    		?>
    		<tr>
    		<td align="center"> <?php echo $no++;?></td>
    		<td><?php echo $c3->matpel;?>
    		<br>
                    (<?php echo $c3->nama_guru;?>)
    		
    		</td>
    		<td><?php echo $c3->skala4_pengetahuan;?></td>
    		<td align="center">
    		
    		
    		<?php 
    		if(empty($c3->predikat_pengetahuan)){
    		echo "&nbsp;";	
    		}else{
    		
    		echo $c3->predikat_pengetahuan;
    		
    		}
    		?></td>
    		<td>
    		<?php echo $c3->nilai4_keterampilan;?>
    		</td>
    		<td align="center"><?php  
    		if(empty($c3->predikat_keterampilan)){
    			echo "&nbsp;";
    		}else{
    		
    		echo $c3->predikat_keterampilan;
    		}
    		?></td>
    		
    		<td align="center"><?php // 
    		if(empty($c3->nilai_raport)){
    			echo "&nbsp;";
    		}else{
    		
    		
    		echo kriteria($c3->nilai_raport);
    		
    		}
    		?></td>
    		
    		</tr>
    		
    		<?php
    		} 
    	}
    	?>   
		 
		  
    </tbody>
    
    </table>

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
        	<tr>
        	<td colspan="4">KELOMPOK A</td>
        	</tr>
        	<?php 
            $no = 1;
            if(empty($kel_a)){

            }else{
            foreach ($kel_a as $a){
                
                ?>
            <tr>
                <td rowspan="3"><?php echo $no++;?></td>
                <td rowspan="3"><?php echo $a->matpel;?>
                    <br>( <?php echo $a->nama_guru ;?> )
                
                
                </td>
                <td colspan="1">Pengetahuan</td>
                <td colspan="1"><?php echo $a->keterangan_pengetahuan;?></td>
                
                
            </tr>
            <tr>
                <td>Keterampilan</td>
                <td><?php echo $a->keterangan_keterampilan;?></td>
                
            </tr>
            <tr>
                <td>Sosial dan spiritual</td>
                <td><?php echo $a->desc_kemajuan_belajar;?></td>
                
            </tr>
            
            <?php
                }
            }?>
        	
			<tr>
			<td colspan="4">KELOMPOK B</td>
			</tr>        
            <?php 
            $no = 1;
            if(empty($kel_b)){

            }else{
            foreach ($kel_b as $a){
                
                ?>
            <tr>
                <td rowspan="3"><?php echo $no++;?></td>
                <td rowspan="3"><?php echo $a->matpel;?>
                    <br>( <?php echo $a->nama_guru ;?> )
                
                
                </td>
                <td colspan="1">Pengetahuan</td>
                <td colspan="1"><?php echo $a->keterangan_pengetahuan;?></td>
                
                
            </tr>
            <tr>
                <td>Keterampilan</td>
                <td><?php echo $a->keterangan_keterampilan;?></td>
                
            </tr>
            <tr>
                <td>Sosial dan spiritual</td>
                <td><?php echo $a->desc_kemajuan_belajar;?></td>
                
            </tr>
            
            <?php
                }
            }?>
            <tr>
            <td colspan="4">KELOMPOK C1</td>
            </tr>
            <?php 
            $no = 1;
            if(empty($kel_c1)){

            }else{
            foreach ($kel_c1 as $a){
                
                ?>
            <tr>
                <td rowspan="3"><?php echo $no++;?></td>
                <td rowspan="3"><?php echo $a->matpel;?>
                    <br>( <?php echo $a->nama_guru ;?> )
                
                
                </td>
                <td colspan="1">Pengetahuan</td>
                <td colspan="1"><?php echo $a->keterangan_pengetahuan;?></td>
                
                
            </tr>
            <tr>
                <td>Keterampilan</td>
                <td><?php echo $a->keterangan_keterampilan;?></td>
                
            </tr>
            <tr>
                <td>Sosial dan spiritual</td>
                <td><?php echo $a->desc_kemajuan_belajar;?></td>
                
            </tr>
            
            <?php
                }
            }?>
   			<tr>
        	<td colspan="4">KELOMPOK C2</td>
        	</tr>
        	<?php 
            $no = 1;
            if(empty($kel_c2)){

            }else{
            foreach ($kel_c2 as $a){
                
                ?>
            <tr>
                <td rowspan="3"><?php echo $no++;?></td>
                <td rowspan="3"><?php echo $a->matpel;?>
                    <br>( <?php echo $a->nama_guru ;?> )
                
                
                </td>
                <td colspan="1">Pengetahuan</td>
                <td colspan="1"><?php echo $a->keterangan_pengetahuan;?></td>
                
                
            </tr>
            <tr>
                <td>Keterampilan</td>
                <td><?php echo $a->keterangan_keterampilan;?></td>
                
            </tr>
            <tr>
                <td>Sosial dan spiritual</td>
                <td><?php echo $a->desc_kemajuan_belajar;?></td>
                
            </tr>
            
            <?php
                }
            }?>
            
            <tr>
        	<td colspan="4">KELOMPOK C3</td>
        	</tr>
        	<?php 
            $no = 1;
            if(empty($kel_c3)){

            }else{
            foreach ($kel_c3 as $a){
                
                ?>
            <tr>
                <td rowspan="3"><?php echo $no++;?></td>
                <td rowspan="3"><?php echo $a->matpel;?>
                    <br>( <?php echo $a->nama_guru ;?> )
                
                
                </td>
                <td colspan="1">Pengetahuan</td>
                <td colspan="1"><?php echo $a->keterangan_pengetahuan;?></td>
                
                
            </tr>
            <tr>
                <td>Keterampilan</td>
                <td><?php echo $a->keterangan_keterampilan;?></td>
                
            </tr>
            <tr>
                <td>Sosial dan spiritual</td>
                <td><?php echo $a->desc_kemajuan_belajar;?></td>
                
            </tr>
            
            <?php
                }
            }?>
   
        </tbody>
    </table>
    
    </div>
    <p></p>
    <table class="ekskul">
    <thead>
    
    <tr>
    <td width="20px">NO</td>
    <td width="100px">Ekstra Kulikuler</td>
    <td width="80px">Nilai</td>
    <td width="300px">Deskripsi</td>
    </tr>
    </thead>
    <tbody>
    <?php 
    $no = 1;
    if(empty($ekskul)){
    	
    }else{
    	foreach ($ekskul as $d){
    		?>
    		<tr>
    		<td><?php echo $no++;?></td>
    		<td><?php echo $d->ekstrakulikuler;?></td>
    		<td><?php echo $d->keterangan;?></td>
    		<td><?php echo $d->deskripsi;?></td>
    		</tr>
    		<?php 
    	}
    }
    ?>
    </tbody>
    </table>
    
    <div></div>
    <table class="absensi">
    <thead>
    	<tr><th>Ketidakhadiran</th></tr>
    </thead>
    <tbody>
    <tr>
    <td>Sakit</td><td>:</td><td><?php 
    if(empty($absen->sakit)){
    	echo "&nbsp;";
    }else{
    
    echo $absen->sakit;
    }
    ?></td>
    </tr>
    <tr>
    <td>Ijin</td><td>:</td><td>
    
    
    <?php 
    if(empty($absen->ijin)){
    	echo "&nbsp;";
    }else{
    
    echo $absen->ijin;
    }
    ?></td>
    </tr>
    <tr>
    <td>Tanpa Keterangan</td><td>:</td><td><?php 
    if(empty($absen->tanpa_keterangan)){
    	echo "&nbsp;";
    }else{
    
    
    echo $absen->tanpa_keterangan;
    }
    ?></td>
    </tr>
    </tbody>
    </table>
        <div id="kanan">
        <div class="kanan-tanggal">
            Bekasi , ............................<?php echo date('Y');?>
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
    </body>
</html>