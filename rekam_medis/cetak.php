<!DOCTYPE html>
<html>
<head>
	<title>CETAK PRINT</title>
</head>
<body>
 
	<center>
 
		<h2>DATA REKAM MEDIS</h2>
 
	</center>
 
	<?php 
	include 'koneksi.php';
	?>
 
	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">ID REKAM MEDIS</th>
			<th>TANGGAL</th>
			<th>KELUHAN</th>
            <th>PEMERIKSAAN</th>
			<th width="5%">OBAT</th>
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from rekam_medis");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['tgl']; ?></td>
			<td><?php echo $data['keluhan']; ?></td>
			<td><?php echo $data['pemeriksaan']; ?></td>
            <td><?php echo $data['obat']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
 
	<script>
		window.print();
	</script>
 
</body>
</html>