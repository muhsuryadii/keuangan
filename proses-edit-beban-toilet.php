<?php

session_start();

include('koneksi.php');

 define('LOG','log.txt');
function write_log($log){  
 $time = @date('[Y-d-m:H:i:s]');
 $op=$time.' '.$log."\n".PHP_EOL;
 $fp = @fopen(LOG, 'a');
 $write = @fwrite($fp, $op);
 @fclose($fp);
}
$id = $_GET['id_beban_toilet'];
$no_ppa =  $_GET['no_ppa'];
$tgl= $_GET['tgl'];
$debet = $_GET['debet'];
$kredit = $_GET['kredit'];
$uraian_kegiatan =  $_GET['uraian_kegiatan'];


//query update
$query = mysqli_query($koneksi,"UPDATE beban_toilet SET tgl='$tgl' , debet='$debet', kredit='$kredit', uraian_kegiatan='$uraian_kegiatan',no_ppa='$no_ppa' WHERE id_beban_toilet='$id' ");

$namaadmin = $_SESSION['nama'];
if ($query) {
write_log("Nama Admin : ".$namaadmin." => Edit id_beban_toilet => ".$id." => Sukses Edit");
 # credirect ke page index
 header("location:beban_toilet.php"); 
}
else{
write_log("Nama Admin : ".$namaadmin." => Edit id_beban_toilet => ".$id." => Gagal Edit");
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}

//mysql_close($host);
?>