<?php
//include('dbconnected.php');
include('koneksi.php');

$id = $_GET['id_admin'];
$nama = $_GET['nama'];
$user_name = $_GET['user_name'];
$pass = $_GET['pass'];

//query update
$query = mysqli_query($koneksi,"UPDATE admin SET nama='$nama' , user_name='$user_name', pass='$pass' WHERE id_admin='$id' ");

if ($query) {
 # credirect ke page index
 header("location:profile_manajer.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($Koneksi);
}

//mysql_close($host);
?>