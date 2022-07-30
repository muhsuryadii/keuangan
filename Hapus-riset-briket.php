<?php
//include('dbconnected.php');
include('koneksi.php');

$id = $_GET['id_riset_briket'];

//query update
$query = mysqli_query($koneksi,"DELETE FROM `riset_briket` WHERE id_riset_briket = '$id'");

if ($query) {
 # credirect ke page index
 header("location:riset_briket.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}

//mysql_close($host);
?>