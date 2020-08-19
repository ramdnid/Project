<?php 
require '../koneksi.php';

function hapus($id_tamu) {
	global $koneksi;

	mysqli_query( $koneksi, "DELETE FROM bukutamu WHERE id_tamu=$id_tamu" );
	return mysqli_affected_rows($koneksi);
}

$id_tamu = $_GET["id_tamu"];
if (hapus ($id_tamu) > 0 ) {
	echo "
		<script> 
		alert('data berhasil di hapus');
		document.location.href='daftar_tamu.php';
		</script>
	";

}else{

	echo "
		<script>
		alert('data gagal di hapus');
		document.location.href='daftar_tamu.php';
		</script>
	";

}
 ?>