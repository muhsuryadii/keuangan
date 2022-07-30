<?php
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$user_name =mysqli_real_escape_string($koneksi,$_POST['user_name']);
$pass =mysqli_real_escape_string($koneksi, $_POST['pass']);
 $level =mysqli_real_escape_string($koneksi,$_POST['level']);
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from admin where user_name='$user_name' and pass='$pass'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){

	$sesi = mysqli_fetch_assoc($data);
	$_SESSION['id'] = $sesi['id_admin'];
	$_SESSION['nama'] = $sesi['nama'];
	$_SESSION['level'] = $sesi['level'];
	$_SESSION['status'] = "login";

	if ($_SESSION['level'] =='manajer') {
	header("location:index-manajer.php");
		} else {
	
	header("location:index.php");

	}
	
	}else{
	header("location:login.php?");
	echo "<script> alert('login gagal');history.go(-1);</script>";
}
?>