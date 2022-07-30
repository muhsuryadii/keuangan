<?php
//include('dbconnected.php');
include('koneksi.php');

$nama = $_GET['nama'];
$user_name = $_GET['user_name'];
$pass = $_GET['pass'];
$level = $_GET['level'];


//query update
$query = mysqli_query($koneksi,"INSERT INTO `admin` (`nama`, `user_name`, `pass`, `level`) VALUES ('$nama', '$user_name', '$pass', '$level')");

if ($query) {
 # credirect ke page index
 header("location:karyawan.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}

//mysql_close($host);
?>