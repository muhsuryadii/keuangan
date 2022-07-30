<?php 
//include('dbconnected.php');
include('koneksi.php');
?>
<?php
if(isset($_POST['tambahpendapatan'])){

            $simpan = $koneksi->query("INSERT INTO pemasukan (no_ppa, tgl_pemasukan, jumlah, keterangan) values ('$_POST[no_ppa]','$_POST[tgl_pemasukan]','$_POST[jumlah]', '$_POST[keterangan]')");
            header("Location:pendapatan.php");
        }
?>
    