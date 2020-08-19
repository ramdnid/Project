<!DOCTYPE html>
<html>
<head>
	<title>Looping Unit Unit</title>
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
		
		<div class="jumbotron header">
	<div class="loopingku">
		<h2>Looping</h2>
		<hr>
	 <?php 
		require '../koneksi.php';

		$db_unit = mysqli_query($koneksi, "SELECT * FROM unit_unit");

		while ($unit = mysqli_fetch_array($db_unit) ) {
			echo "<li>$unit[nama_unit]</li>";
		}
		?>
	</div>
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
