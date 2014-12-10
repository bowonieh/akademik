<table border='1'>
<tr>
	<td>NAMA SISWA</td>
	<?php 
	
	foreach($header as $h){
		?>
		<td><?php echo $h->nama_tagihan;?></td>
		<?php 
	}
	
	?>
</tr>
<?php foreach($nama as $n){
?>
	<tr>
	<td><?php echo $n->siswa?></td>
	<td>
	<?php 
	
	foreach($tgl as $t){
		?>
			<td><?php echo $t->tanggal_bayar;?></td>
		
		<?php 	
	}
	
	?>
	
	</td>
	</tr>

<?php
	
	
}?>
</table>