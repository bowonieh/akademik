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
		$nis = $d->nis;
		$this->db->select(array('skala4_sikap','skala4_pengetahuan','nilai4_keterampilan'));
		$this->db->where(array('nis'=>$nis,'id_tahun'=>$tahun));
		$this->db->join('d_matpelguru','d_matpelguru.id_matpelguru=d_nilai.id_matpelguru','right');
		$this->db->order_by('d_matpelguru.id_matpel');
		$d = $this->mdb->gettable('d_nilai');
		foreach($d as $a){
			?>
			<td><?php 
			if(empty($a->skala4_pengetahuan)){
			echo "-";	
			}else{
			
			echo $a->skala4_pengetahuan;
			
			}?></td>
			<td><?php 
			if(empty($a->nilai4_keterampilan)){
				echo "-";
			}else{
					
			
			echo $a->nilai4_keterampilan;
			
			}?></td>
			<td><?php 
			if(empty($a->skala4_sikap)){
				echo "-";
			}else{
					
			
			echo $a->skala4_sikap;
			
			}?></td>
			<?php 	
		}
		
	?>
	
	
	</tr>
	
	<?php 
}
?>
</tbody>

</table>