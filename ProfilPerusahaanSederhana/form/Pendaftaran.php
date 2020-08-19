<?php 
require '../koneksi.php';

if ( isset($_POST["submit"]) ) {
	
	if (submit($_POST) > 0) {
		echo "<script>

				alert('Pendaftaran Berhasil!');

		</script>";
	}
	else {
		echo mysqli_error($koneksi);
	}
}

function submit($daftar) {
	global $koneksi;

	$NIK = ($daftar["NIK"]);
	$nama_lengkap = ($daftar["Nama"]);
	$foto = ($daftar["Foto"]);
	$alamat = ($daftar["Alamat"]);
	$telepon = ($daftar["HP"]);
	$email = ($daftar["Email"]);
	$jenis_kelamin = ($daftar["JK"]);
	$tempat_lahir = ($daftar["t-lahir"]);
	$tanggal = ($daftar["tanggal"]);
	$bulan = ($daftar["bulan"]);
	$tahun = ($daftar["tahun"]);
	$pendidikan = ($daftar["Pendidikan"]);
	$negara = ($daftar["negara"]);
	$pengalaman = ($daftar["Pengalaman"]);


 
 mysqli_query($koneksi, "INSERT INTO pendaftaran VALUES('','$NIK','$nama_lengkap','$foto','$alamat','$telepon','$email','$jenis_kelamin','$tempat_lahir','$tanggal','$bulan','$tahun','$pendidikan','$negara','$pengalaman')");

 	return mysqli_affected_rows($koneksi);

}
 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran </title>
</head>
<style> 
	
	.bg {

		background-image: url(../img/small_steps.png);
		padding: 10px;
		padding-bottom: 500px;

	} 


	.main {

		background-color: #C768DB;
		margin-left: 30%;
		margin-right: 30%;
		background-color: ;
		width: 500px;


	}

	.main h1 {
		text-align: center;
		padding-top: 15px;
		
	}

	.form {
		background-color: #E495F5;
		


	}
</style>

<body>
<div class="bg">	
		<div class="main">
			<h1>Form Pendaftaran</h1>
		

			<div class="form">
				<h3 style="color: red; font-style: italic;">Masukkan data diri anda</h3>
				<form action="" method="post">
					<table>
						<tr>
							<td><label for="NIK">NIK</label></td>
							<td>:</td>
							<td><input type="text" name="NIK" id="NIK" size="28"></td>
						</tr>
						<tr>
							<td><label for="Nama">Nama Lengkap</label></td>
							<td>:</td>
							<td><input type="text" name="Nama" id="Nama" size="28"></td>
						</tr>
						<td><label for="Foto">Foto</label></td>
						<td>:</td>
						<td enctype="multipart/form-data">
							<input type="file" name="Foto" id="Foto">
						</td>
						<tr>
							<td><label for="Alamat">Alamat</label></td>
							<td>:</td>
							<td><textarea name="Alamat" rows="5" cols="30"></textarea></td>
						</tr>
						<tr>
							<td><label for="Telp">No Telp/HP</label></td>
							<td>:</td>
							<td>
								<input type="text" name="Telp" maxlength="4" size="5"> - 
								<input type="text" name="Telp" maxlength="8" size="13"> /
								<input type="text" name="HP" size="13">
							</td>
						</tr>
						<tr>
							<td><label for="Email">Email</label></td>
							<td>:</td>
							<td><input type="text" name="Email" id="Email" size="28"></td>
						</tr>
						<tr>
							<td><label for="JK"> Jenis Kelamin</label><br></td>
							<td>:</td>
							<td><input type="radio" name="JK" value="L" size="28">Laki-laki <br>
							<input type="radio" name="JK" value="P" size="28" checked>Perempuan </td>
						</tr>
						<tr>
							<td><label for="t-lahir">Tempat Lahir</label></td>
							<td>:</td>
							<td><input type="text" name="t-lahir" id="t-lahir" size="28"></td>
						</tr>

						<tr>
							<td><label for="tanggal">Tanggal Lahir</label></td>
							<td>:</td>
							<td><select name="tanggal" >	
									<option value="Pilih">Pilih</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
								<option value="25">25</option>
								<option value="26">26</option>
								<option value="27">27</option>
								<option value="28">28</option>
								<option value="29">29</option>
								<option value="30">30</option>
								<option value="31">31</option>

								</select> -

							<label for="bulan"></label> 
							
							<select name="bulan">
								<option value="Pilih">Pilih</option>
								<option value="Januari">Januari</option>
								<option value="Februari">Februari</option>
								<option value="Maret">Maret</option>
								<option value="April">April</option>
								<option value="Mei">Mei</option>
								<option value="Juni">Juni</option>
								<option value="Juli">Juli</option>
								<option value="Agustus">Agustus</option>
								<option value="September">September</option>
								<option value="Oktober">Oktober</option>
								<option value="November">November</option>
								<option value="Desember">Desember</option>

								</select> - 
							
								<label for="tahun"></label rows="5">  
							
								<input max="2018" maxlength="50" min="1970" name="tahun" style="width: 90px;" type="number">
							</td>
						</tr>
						<tr>
							<td><label for="Pendidikan">Pendidikan Terakhir</label></td>
							<td>:</td>
							<td>
								<select name="Pendidikan">
								<option value="Pilih">Pilih</option>
								<option value="Pendidikan">SD</option>
								<option value="Pendidikan">SMP</option>
								<option value="Pendidikan">SMA/SMK</option>
								<option value="Pendidikan">DIPLOMA</option>
								<option value="Pendidikan">S1</option>
								<option value="Pendidikan">S2</option>
								<option value="Pendidikan">S3</option>
								

								</select>
							<!-- <input type="radio" name="Pendidikan" value="SD">SD 
							<input type="radio" name="Pendidikan" value="SMP">SMP <br>
							<input type="radio" name="Pendidikan" value="SMA">SMA/SMK 
							<input type="radio" name="Pendidikan" value="DIPLOMA">DIPLOMA <br>
							<input type="radio" name="Pendidikan" value="S1">S1 
							<input type="radio" name="Pendidikan" value="S2">S2 
							<input type="radio" name="Pendidikan" value="S3">S3  -->
							</td>
						</tr>
						<tr>
							<td><label for="negara">Kewarganegaraan</label></td>
							<td>:</td>
							<td>
								<select name="negara">
								<option value="Pilih">Pilih</option>
								<option value="WNI">WNI</option>
								<option value="WNA">WNA</option>
								</select>

							</td>
						</tr>
						<tr>
							<td><label for="Pengalaman">Pengalaman Kerja</label></td>
							<td>:</td>
							<td> <textarea name="Pengalaman" id="Pengalaman" rows="5" cols="30"></textarea></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td>
								<button type="submit" name="submit">KIRIM!</button>
								<button type="reset" name="reset">ULANG!</button>
							</td>
						</tr>



					</table>
					</form>
					


			
		</div>
	</div>
</div>
</body>
</html>