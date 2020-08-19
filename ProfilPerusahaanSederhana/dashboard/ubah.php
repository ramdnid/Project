<?php require '../koneksi.php'; ?>
<?php 

$no_pendaftaran = $_GET["no_pendaftaran"];

$data_pendaftar = mysqli_query($koneksi, "SELECT * FROM pendaftaran WHERE no_pendaftaran=$no_pendaftaran");

function ubah($ubah) {
	global $koneksi;

	$no_pendaftaran = ($ubah["no_pendaftaran"]);
	$NIK = ($ubah["NIK"]);
	$nama_lengkap = ($ubah["nama_lengkap"]);
	$foto = ($ubah["foto"]);
	$alamat = ($ubah["alamat"]);
	$telepon = ($ubah["telepon"]);
	$email = ($ubah["email"]);
	$JK = ($ubah["JK"]);
	$tempat_lahir = ($ubah["tempat_lahir"]);
	$tanggal_lahir = ($ubah["tanggal_lahir"]);
	$bulan_lahir = ($ubah["bulan_lahir"]);
	$tahun_lahir = ($ubah["tahun_lahir"]);
	$pendidikan = ($ubah["pendidikan"]);
	$kewarganegaraan = ($ubah["kewarganegaraan"]);
	$pengalaman = ($ubah["pengalaman"]);

 mysqli_query($koneksi, "UPDATE pendaftaran SET 
 					NIK='$NIK',
 					nama_lengkap='$nama_lengkap',
 					foto='$foto',
 					alamat='$alamat',
 					telepon='$telepon',
 					email='$email',
 					JK='$JK',
 					tempat_lahir='$tempat_lahir',
 					tanggal_lahir='$tanggal_lahir',
 					bulan_lahir='$bulan_lahir',
 					tahun_lahir='$tahun_lahir',
 					pendidikan='$pendidikan',
 					kewarganegaraan='$kewarganegaraan',
 					pengalaman='$pengalaman'
 					WHERE no_pendaftaran=$no_pendaftaran
 					");

 	return mysqli_affected_rows($koneksi);
}

if (isset($_POST["simpan"])) {
	if (ubah($_POST) > 0) {
		echo "
		<script>
		alert('data berhasil di ubah');
		document.location.href='CRUD.php';
		</script>
		";
	}else{
		echo "
		<script>
		alert('data gagal di ubah');
		document.location.href='CRUD.php';
		</script>
		";
	}
}

?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Ubah Data Pendaftaran</title>
 </head>
 <body>


<?php while ( $tabel = mysqli_fetch_assoc($data_pendaftar)) : ?>
<form method="post" action="">

	<input type="hidden" name="no_pendaftaran" value="<?= $tabel["no_pendaftaran"]; ?>">
	
	<table>
		<tr>
			<td><label for="NIK">NIK</label></td>
			<td>:</td>
			<td><input type="text" name="NIK" id="NIK" value="<?= $tabel["NIK"]; ?>"></td>
		</tr>
		<tr>
			<td><label for="nama_lengkap">nama</label></td>
			<td>:</td>
			<td><input type="text" name="nama_lengkap" id="nama_lengkap" value="<?= $tabel["nama_lengkap"]; ?>"></td>
		</tr>
		<tr>
			<td><label for="foto">foto</label></td>
			<td>:</td>
			<td><input type="text" name="foto" id="foto" value="<?= $tabel["foto"]; ?>"></td>
		</tr>
		<tr>
			<td><label for="alamat">alamat</label></td>
			<td>:</td>
			<td><input type="text" name="alamat" id="alamat" value="<?= $tabel["alamat"]; ?>"></td>
		</tr>	
		<tr>
			<td><label for="telepon">telepon</label></td>
			<td>:</td>
			<td><input type="text" name="telepon" id="telepon" value="<?= $tabel["telepon"]; ?>"></td>
		</tr>
		<tr>
			<td><label for="email">email</label></td>
			<td>:</td>
			<td><input type="text" name="email" id="email" value="<?= $tabel["email"]; ?>"></td>
		</tr>
		<tr>
			<td><label for="JK">Jenis Kelamin</label></td>
			<td>:</td>
			<td><input type="text" name="JK" id="JK" value="<?= $tabel["JK"]; ?>"></td>
		</tr>
		<tr>
			<td><label for="tempat_lahir">Tempat Lahir</label></td>
			<td>:</td>
			<td><input type="text" name="tempat_lahir" id="tempat_lahir" value="<?= $tabel["tempat_lahir"]; ?>"></td>
		</tr>
		<tr>
			<td><label for="tanggal_lahir">Tanggal Lahir</label></td>
			<td>:</td>
			<td><input type="text" name="tanggal_lahir" id="tanggal_lahir" value="<?= $tabel["tanggal_lahir"]; ?>"></td>
		</tr>
		<tr>
			<td><label for="bulan_lahir">Bulan Lahir</label></td>
			<td>:</td>
			<td><input type="text" name="bulan_lahir" id="bulan_lahir" value="<?= $tabel["bulan_lahir"]; ?>"></td>
		</tr>
		<tr>
			<td><label for="tahun_lahir">Tahun Lahir</label></td>
			<td>:</td>
			<td><input type="text" name="tahun_lahir" id="tahun_lahir" value="<?= $tabel["tahun_lahir"]; ?>"></td>
		</tr>
		<tr>
			<td><label for="pendidikan">pendidikan</label></td>
			<td>:</td>
			<td><input type="text" name="pendidikan" id="pendidikan" value="<?= $tabel["pendidikan"]; ?>"></td>
		</tr>
		<tr>
			<td><label for="kewarganegaraan">kewarganegaraan</label></td>
			<td>:</td>
			<td><input type="text" name="kewarganegaraan" id="kewarganegaraan" value="<?= $tabel["kewarganegaraan"]; ?>"></td>
		</tr>
		<tr>
			<td><label for="pengalaman">pengalaman</label></td>
			<td>:</td>
			<td><input type="text" name="pengalaman" id="pengalaman" value="<?= $tabel["pengalaman"]; ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><button type="submit" name="simpan">Simpan</button>
				<button type="reset" name="reset">Reset</button>
			</td>
		</tr>
	</table>

</form>
<?php endwhile; ?>
 </body>
 </html>