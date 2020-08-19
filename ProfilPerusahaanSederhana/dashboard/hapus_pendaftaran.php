<?php 
require '../koneksi.php';

function hapus($no_pendaftaran) {
	global $koneksi;

	mysqli_query( $koneksi, "DELETE FROM pendaftaran WHERE no_pendaftaran=$no_pendaftaran" );
	return mysqli_affected_rows($koneksi);
}

$no_pendaftaran = $_GET["no_pendaftaran"];
if (hapus ($no_pendaftaran) > 0 ) {
	echo "
		<script> 
		alert('data berhasil di hapus');
		document.location.href='CRUD.php';
		</script>
	";

}else{
	echo "
		<script>
		alert('data gagal di hapus');
		document.location.href='CRUD.php';
		</script>
	";

}
 ?>