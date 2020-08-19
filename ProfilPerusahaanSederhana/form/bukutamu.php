<?php 

require '../koneksi.php';

if ( isset($_POST["Kirim"]) ) {
	
	if (Kirim($_POST) > 0) {
		echo "<script>

				alert('Pendaftaran Berhasil!');

		</script>";
	}
	else { echo mysqli_error($koneksi); }

	}
function Kirim($Kirim) {

	GLOBAL $koneksi;

	$nama = ($Kirim["nama"]);
	$email = ($Kirim["email"]);
	$komentar = ($Kirim["komentar"]);


 mysqli_query($koneksi, "INSERT INTO bukutamu VALUES('','$nama','$email','$komentar')");

 	return mysqli_affected_rows($koneksi);

}
	

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Buku Tamu </title>

	<!-- /* ---- CSS Bootstrap ---- */ -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

    <!-- /* ---- CSS Baru ---- */ -->
	<link rel="stylesheet" type="text/css" href="../css2.css">

</head>
<body>

<form method="post" action="">
<div class="container">
	<div class="bukutamu">
  <div class="form-row">
  	<h2>Buku Tamu</h2>

    <div class="form-group col-md-12">
      <label for="nama">Nama Lengkap</label>
      <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Anda" maxlength="50" name="nama">
    </div>

    <div class="form-group col-md-12">
      <label for="email">Email</label>
      <input type="text" class="form-control" id="email" placeholder="Masukkan Email Anda" maxlength="50" name="email">
    </div>

    <div class="form-group col-md-12">
      <label for="komentar">Komentar</label><br>
      <textarea name="komentar" cols="100" rows="10" id="komentar" placeholder="Masukkan Komentar Anda" maxlength="500"></textarea>
    </div>

    <div class="input-tamu">
    <input type="submit" name="Kirim" value="Kirim" class="btn btn-success" >
	<input type="reset" name="Ulangi" value="Ulangi" class="btn btn-success">
    </div>
</div>
</div>
</div>
</form>








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



<!-- <html>
<head>
<title>Buku Tamu</title>

<style>
	.bg {
		width: 500px;
		background-color: salmon;
		margin: auto;
		padding: 20px;
		padding-bottom: 10%;
	}
	.isi {
		background-color: white;
		padding-bottom: 20%;
		padding-top: 20px;
		padding-left: 20px;
	}
	.footer p	{
		width: 540px;
		height: 50px;
		margin: auto;
		background-color: black;
		color: white;
		text-align: center;
		line-height: 50px;
	}
</style>
</head>
<body>
<div class="bg">
<h1>Buku Tamu</h1>
<hr color="black">
<p>komentar dan saran anda sangat kami butuhkan untuk meningkatkan kualitas kami</p>
<br>
	<div class="isi">
	<form action="" method="post">
	<pre>
	Nama Anda : <input type="text" name="nama" size="25" maxlength="50"><br>
	Email Anda : <input type="text" name="email" size="25" maxlength="50"><br>
	<br>
	Komentar :
	<textarea name="komentar" cols="40" rows="5"></textarea>
	<input type="submit" name="Kirim" value="Kirim">
	<input type="reset" name="Ulangi" value="Ulangi">
	</pre>
	</form>
	</div>
</div>
<div class="footer">
	<p>&Copy Right By : Kapal Api 2018</p>
</div>
</body>
</html> -->