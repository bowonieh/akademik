<?php
// We change the headers of the page so that the browser will know what sort of file is dealing with. Also, we will tell the browser it has to treat the file as an attachment which cannot be cached.
 
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=ledger.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>

<table border="1">
<thead>
<tr>
<th rowspan="2">NO</th>
<th rowspan="2">NIS</th>
<th rowspan="2">NAMA SISWA</th>
<?php 
foreach($nama_matpel as $d){
	?>
	<th colspan="3">
	<?php echo $d->id_matpelguru;?>
	<br>
	<?php echo $d -> matpel;?></th>
	<?php 
}
?>
</tr>
<tr>
<?php 
foreach($nama_matpel as $d){
	?>
	<th>Pengetahuan</th>
	<th>Keterampilan</th>
	<th>Sikap</th>
	<?php 
}
?>
</tr>
</thead>
<tbody>

<?php 
	$no=1;
	foreach($nama as $a ){
	?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $a->nis;?></td>
			<td><?php echo $a->nama_siswa;?></td>
	<?php 	
		
		
	for($i = 0 ; $i < count($nama_matpel);$i++){
		?>
		<td><?php 
		if($this->mdb->ambildata('d_nilai',array('nis'=>$a->nis,'id_matpelguru'=>$nama_matpel[$i]->id_matpelguru),'skala4_pengetahuan') === ""){
			
			echo "-";
			
			//echo $i;
			
		}else{
		
		echo $this->mdb->ambildata('d_nilai',array('nis'=>$a->nis,'id_matpelguru'=>$nama_matpel[$i]->id_matpelguru),'skala4_pengetahuan');
		//echo $i;
		}
		
		?></td>
		<td>
		
		
		<?php 
		if($this->mdb->ambildata('d_nilai',array('nis'=>$a->nis,'id_matpelguru'=>$nama_matpel[$i]->id_matpelguru),'nilai4_keterampilan') === ""){
			
			echo "-";
			
		}else{
		
		echo $this->mdb->ambildata('d_nilai',array('nis'=>$a->nis,'id_matpelguru'=>$nama_matpel[$i]->id_matpelguru),'nilai4_keterampilan');
		
		}
		
		?>
		
		
		</td>
		<td>
			<?php 
		if($this->mdb->ambildata('d_nilai',array('nis'=>$a->nis,'id_matpelguru'=>$nama_matpel[$i]->id_matpelguru),'skala4_sikap') === ""){
			
			echo "-";
			
		}else{
		
		echo $this->mdb->ambildata('d_nilai',array('nis'=>$a->nis,'id_matpelguru'=>$nama_matpel[$i]->id_matpelguru),'skala4_sikap');
		
		}
		
		?>
		</td>
		
		<?php 
		}
		?>
		</tr>
		<?php 
	}
?>

</tbody>

</table>