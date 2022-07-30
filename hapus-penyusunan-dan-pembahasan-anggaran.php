<?php
//include('dbconnected.php');
include('koneksi.php');

$id = $_GET['id_penyusunan_dan_pembahasan_anggaran'];

//query update
$query = mysqli_query($koneksi,"DELETE FROM `penyusunan_dan_pembahasan_anggaran` WHERE id_penyusunan_dan_pembahasan_anggaran = '$id'");

if ($query) {
 # credirect ke page index
 header("location:penyusunan_dan_pembahasan_anggaran.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}

//mysql_close($host);
?>