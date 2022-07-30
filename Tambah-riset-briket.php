<?php 
//include('dbconnected.php');
include('koneksi.php');
?>
<?php
if(isset($_POST['tambah-riset-briket'])){

    $filename   = uniqid() . "-" . time();
    $extension  = pathinfo($_FILES["tanda_bukti"]["name"], PATHINFO_EXTENSION);
    $namaFile   = $filename . "." . $extension;
    
    
    $namaSementara = $_FILES["tanda_bukti"]["tmp_name"];
    $dirUpload  = "./tanda_bukti/{$namaFile}";
    
    // tentukan lokasi file akan dipindahkan
    $terupload = move_uploaded_file($namaSementara, $dirUpload);
    
    $simpan = $koneksi->query("INSERT INTO riset_briket (no_ppa, tgl, debet, kredit, uraian_kegiatan, tanda_bukti) values ('$_POST[no_ppa]','$_POST[tgl]','$_POST[debet]','$_POST[kredit]','$_POST[uraian_kegiatan]','$dirUpload')");
            header("Location:riset_briket.php"); 
  
        }
?>