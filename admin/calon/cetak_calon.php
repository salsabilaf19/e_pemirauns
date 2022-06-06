<!DOCTYPE html>
<html>
<head>
	<title>LAPORAN DATA CALON</title>
</head>
<body>
 
	<center>
 
		<h2>DATA LAPORAN CALON</h2>
		<h4>E-PEMIRA UNS</h4>
 
	</center>
 
	<?php 
	include 'inc/koneksi.php';
	?>
 
	<table border="2" style="width: 100%">
		<tr align="center">
			<th width="1%">No Urut</th>
			<th>Nama Calon</th>
            <th>Foto Calon</th>
            <th>Keterangan</th>
			
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from tb_calon");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td align="center"><?php echo $no++; ?></td>
			<td><?php echo $data['nama_calon']; ?></td>
			<td><img src="foto/<?php echo $data['foto_calon']; ?>" width="150px" /></td>
			<td><?php echo $data['keterangan']; ?></td>
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