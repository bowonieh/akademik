<table border="1">
<thead>
<tr>
<th rowspan="2">NO</th>
<th rowspan="2">NIS</th>
<th rowspan="2">NAMA SISWA</th>
<?php 
foreach($nama_matpel as $d){
	?>
	<th colspan="3"><?php echo $d -> matpel;?></th>
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
$no = 1;
foreach ($nama as $d){
	?>
	<tr>
	
	<td><?php echo $no++;?></td>
	<td><?php echo $d->nis;?></td>
	<td><?php echo $d->nama_siswa;?></td>
	
	<?php
	$i=0; 
	
		for($i;$i<count($nama_matpel);$i++){
			?>
				<td><?php echo $i;?></td>
				<td></td>
				<td><?php echo $nama_matpel['skala4_sikap'];?></td>
				
				<?php 
		}
		
	?>
	
	
	</tr>
	
	<?php 
}
?>
</tbody>

</table>