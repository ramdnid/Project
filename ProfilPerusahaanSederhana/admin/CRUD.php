<?php 
require '../koneksi.php';

$data_pendaftar = mysqli_query($koneksi, "SELECT * FROM pendaftaran");

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title> Belajar CRUD </title>
 	<!-- /* ---- CSS Bootstrap ---- */ -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

    <!-- /* ---- CSS Baru ---- */ -->
	<link rel="stylesheet" type="text/css" href="../css2.css">

	<!--  /* ---- CSS Lama ---- */ -->
	<!-- <link rel="stylesheet" type="text/css" href="../style.css"> -->
 </head>
 <body>
<div class="container">
	<div class="crud">
	<a href="Pendaftaran.php">Tambahkan Anggota</a>


	 <?php $i=1; ?>	

	<table border="1"  > 
	 <tr>
	 	<th>No</th>
	 	<th>Edit</th>
	 	<th>NIK</th>
	 	<th>Nama Lengkap</th>
	 	<th>Foto</th>
	 	<th>Alamat</th>
	 	<th>Telepon</th>
	 	<th>Email</th>
	 	<th>Jenis Kelamin</th>
	 	<th>Tempat Lahir</th>
	 	<th>Tanggal Lahir</th>
	 	<th>bulan Lahir</th>
	 	<th>tahun Lahir</th>
	 	<th>Pendidikan Terakhir</th>
	 	<th>Kewarganegaraan</th>
	 	<th>Pengalaman Kerja</th>
	 </tr>

	<?php while ( $tabel = mysqli_fetch_assoc($data_pendaftar)) : ?>
	 <tr>

	 	<td> <?php echo $i; ?> </td>
	 	<td>
	 		<a href="ubah.php?no_pendaftaran=<?=$tabel["no_pendaftaran"]; ?>">ubah</a> | 
	 		<a href="hapus_pendaftaran.php?no_pendaftaran=<?=$tabel["no_pendaftaran"]; ?>"> hapus </a> 
	 	</td>

	 	<td> <?php echo $tabel["NIK"]; ?> </td>
	 	<td> <?php echo $tabel["nama_lengkap"]; ?> </td>
	 	<td> <img src="../img/<?= $tabel["foto"]; ?> " width="100px;" height="100px;"> </td>
	 	<td> <?php echo $tabel["alamat"]; ?> </td>
	 	<td> <?php echo $tabel["telepon"]; ?> </td>
	 	<td> <?php echo $tabel["email"]; ?> </td>
	 	<td> <?php echo $tabel["JK"]; ?> </td>
	 	<td> <?php echo $tabel["tempat_lahir"]; ?> </td>
	 	<td> <?php echo $tabel["tanggal_lahir"]; ?> </td>
	 	<td> <?php echo $tabel["bulan_lahir"]; ?> </td>
	 	<td> <?php echo $tabel["tahun_lahir"]; ?> </td>
	 	<td> <?php echo $tabel["pendidikan"]; ?> </td>
	 	<td> <?php echo $tabel["kewarganegaraan"]; ?> </td>
	 	<td> <?php echo $tabel["pengalaman"]; ?> </td>
	</tr>

	<?php $i++; ?>
	<?php endwhile; ?>
	</table>
	</div>
</div>

<footer>
  <div class="container text-center">
    <div class="footer">
      <div class="col-sm-12">
        
        <p> &copy;Copyright 2019 | built by. <a href="http://instagram.com/ramdn_b"> Ramadhan Boedi </a> </p>

      </div>
    </div>
  </div>
</footer>

		<!-- 			Java Script Boostrap 								-->
		<!-- 			Optional JavaScript 								-->
   		<!--			jQuery first, then Popper.js, then Bootstrap JS		-->

		<script src="../bootstrap/jquery/jquery-3.3.1.slim.min.js"></script>
	    <script src="../bootstrap/jquery/popper.min.js"></script>
	    <script src="../bootstrap/jquery/bootstrap.min.js"></script>



 </body>
 </html>