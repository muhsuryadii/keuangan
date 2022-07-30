<?php
//include('dbconnected.php');
include('koneksi.php');

$tgl_pengeluaran = $_GET['tgl_pengeluaran'];
$jumlah = $_GET['jumlah'];
$keterangan_keluar = $_GET['keterangan_keluar'];
$no_ppa = $_GET['no_ppa'];

//query update
$query = mysqli_query($koneksi,"INSERT INTO `pengeluaran` (`tgl_pengeluaran`, `jumlah`, `keterangan_keluar`,`no_ppa`) VALUES ('$tgl_pengeluaran', '$jumlah', '$keterangan_keluar','$no_ppa')");

if ($query) {
 # credirect ke page index
 header("location:pengeluaran.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}

//mysql_close($host);
?>