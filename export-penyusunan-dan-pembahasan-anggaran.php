    <?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data_penyusunan_dan_pembahasan_anggaran.xls");
	?>
	<h2>DATA PENYUSUNAN DAN PEMBAHASAN ANGGARAN</h2>    
	<table border="1" cellpadding="5" style="font-size: 12px;"> 
	<tr>     
	<th>NO_PPA</th>
    <th>TANGGAL</th>
    <th>DEBET</th>
    <th>KREDIT</th>    
	<th>KETERANGAN</th> 
	</tr> 
	<?php  
	// Load file koneksi.php  
	include "koneksi.php";    
	// Buat query untuk menampilkan semua data pendapatan
$query = mysqli_query($koneksi, "SELECT * FROM penyusunan_dan_pembahasan_anggaran");
	// Untuk penomoran tabel, di awal set dengan 1 
	while($data = mysqli_fetch_array($query)){ 
	// Ambil semua data dari hasil eksekusi $sql 
	echo "<tr>";    
	echo "<td>".$data['no_ppa']."</td>";   
	echo "<td>".$data['tgl']."</td>";    
	echo "<td>".$data['debet']."</td>";
	echo "<td>".$data['kredit']."</td>";    
	echo "<td>".$data['uraian_kegiatan']."</td>";
	echo "</tr>";        
	}  ?>	
				<?php  
                $penyusunan_dan_pembahasan_anggaran=mysqli_query($koneksi,"SELECT * FROM penyusunan_dan_pembahasan_anggaran");
                while ($masuk=mysqli_fetch_array($penyusunan_dan_pembahasan_anggaran)){
                $arraydebet[] = $masuk['debet'];
                }
                $jumlahdebet = array_sum($arraydebet);

                $penyusunan_dan_pembahasan_anggaran=mysqli_query($koneksi,"SELECT * FROM penyusunan_dan_pembahasan_anggaran");
                while ($masuk=mysqli_fetch_array($penyusunan_dan_pembahasan_anggaran)){
                $arraykredit[] = $masuk['kredit'];
                }
                $jumlahkredit = array_sum($arraykredit);
                ?>
	<tfoot>
    <tr style="font-weight: bold;">
    <th colspan="2">Total</th>
   	<th>Rp. <?=number_format($jumlahdebet,2,',','.');?></th>
   	<th>Rp. <?=number_format($jumlahkredit,2,',','.');?></th>
   	<th>Rp. <?=number_format($jumlahkredit - $jumlahdebet);?></th>
    </tr>
	</tfoot>

	</table>
