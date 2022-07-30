<?php 
//include('dbconnected.php');
include('koneksi.php');
?>
<?php
if(isset($_POST['tambah-pengajuan'])){
  
    $filename   = uniqid() . "-" . time();
    $extension  = pathinfo($_FILES["bukti_laporan"]["name"], PATHINFO_EXTENSION);
    $namaFile   = $filename . "." . $extension;
    
    
    $namaSementara = $_FILES["bukti_laporan"]["tmp_name"];
    $dirUpload  = "./bukti_laporan/{$namaFile}";
    
    // tentukan lokasi file akan dipindahkan
    $terupload = move_uploaded_file($namaSementara, $dirUpload);
    
    $simpan = $koneksi->query("INSERT INTO pengajuan (tgl, uraian_kegiatan, bukti_laporan) values ('$_POST[tgl]','$_POST[uraian_kegiatan]','$dirUpload')");
            header("Location:pengajuan.php");
  
        }
?>