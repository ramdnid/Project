<?php
include("../koneksi.php");
session_start();

if(isset($_POST['username'])){
$username = $_POST['username'];
$password = $_POST['password'];
}
$q = "SELECT * FROM admin WHERE username= '$username' and password= '$password'";
$login = mysqli_query($koneksi, $q);
$cek = mysqli_num_rows($login);
//Print_r($_POST);
//exit;
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
    $_SESSION['author'] = "admin";
	header("location:CRUD.php");
}else{
  echo "
  	<script>
  	alert('Username / Password Salah!');
  	document.location.href='index.php';
  	</script>
  ";
  }

?>