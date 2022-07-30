<?php
//include('dbconnected.php');
include('koneksi.php');

$id = $_GET['id_biaya_revitalisasi'];

//query update
$query = mysqli_query($koneksi,"DELETE FROM `biaya_revitalisasi` WHERE id_biaya_revitalisasi = '$id'");

if ($query) {
 # credirect ke page index
 header("location:biaya_revitalisasi.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}

//mysql_close($host);
?>