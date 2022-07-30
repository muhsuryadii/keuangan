<?php
//include('dbconnected.php');
include('koneksi.php');
$id = $_GET['id_pengeluaran'];
$no_ppa = $_GET['no_ppa'];
$tgl_pengeluaran = $_GET['tgl_pengeluaran'];
$jumlah = $_GET['jumlah'];
$keterangan_keluar = $_GET['keterangan_keluar'];

//query update
$query = mysqli_query($koneksi,"UPDATE pengeluaran SET tgl_pengeluaran='$tgl_pengeluaran' , jumlah='$jumlah', keterangan_keluar='$keterangan_keluar' ,no_ppa='$no_ppa' WHERE id_pengeluaran='$id' ");

if ($query) {
 # credirect ke page index
 header("location:pengeluaran.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}

//mysql_close($host);
?>