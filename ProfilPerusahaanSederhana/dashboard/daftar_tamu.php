<?php 
require '../koneksi.php';
$data_tamu = mysqli_query($koneksi, "SELECT * FROM bukutamu");

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Tamu</title>
</head>
<body>

<table >
	<?php $i=1; ?>
	<tr>
		<th>No</th>
		<th>Nama Tamu</th>
		<th>Email</th>
		<th>Komentar</th>
		<th>Hapus</th>
	</tr>
	<?php while ( $db_tamu = mysqli_fetch_assoc($data_tamu)) : ?>
	<tr>
		<td><?php echo $i; ?></td>
 		<td> <?php echo $db_tamu["nama"]; ?> </td>
 		<td> <?php echo $db_tamu["email"]; ?> </td>
 		<td> <?php echo $db_tamu["komentar"]; ?> </td>
 		<td>
 		<a href="hapus_tamu.php?id_tamu=<?=$db_tamu["id_tamu"]; ?>"> hapus </a> 
 		</td>
	</tr>
	<?php $i++; ?>
	<?php endwhile; ?>
</table>


</body>
</html>