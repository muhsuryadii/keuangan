<?php
//include('dbconnected.php');
include('koneksi.php');

$id = $_GET['id_pemeliharaan_komputer'];

//query update
$query = mysqli_query($koneksi,"DELETE FROM `pemeliharaan_komputer` WHERE id_pemeliharaan_komputer = '$id'");

if ($query) {
 # credirect ke page index
 header("location:pemeliharaan_komputer.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}

//mysql_close($host);
?>