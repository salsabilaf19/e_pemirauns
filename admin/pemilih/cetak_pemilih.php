<!DOCTYPE html>
<html>
<head>
	<title>LAPORAN DATA PEMILIH</title>
</head>
<body>
 
	<center>
 
		<h2>DATA LAPORAN PEMILIH</h2>
		<h4>E-PEMIRA UNS</h4>
 
	</center>
 
	<?php 
	include 'inc/koneksi.php';
	?>
 
	<table border="1" style="width: 100%">
		<tr align="center">
			<th width="1%">No</th>
            <th>Nama User</th>
            <th>Username</th>
            <th>Status</th>
			
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from tb_pengguna");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td align="center"><?php echo $no++; ?></td>
			<td><?php echo $data['nama_pengguna']; ?></td>
            <td><?php echo $data['username']; ?></td>
            <td><?php echo $data['status']; ?></td>
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