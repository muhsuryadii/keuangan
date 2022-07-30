    <?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data_Pemasukan.xls");
	?>
	<h2>Data Pemasukan</h2>    
	<table border="1" cellpadding="5" style="font-size: 12px;"> 
	<tr>     
	<th>no_ppa</th>
    <th>Tgl Pemasukan</th>
    <th>Jumlah</th>    
	<th> keterangan</th> 
	</tr> 
	<?php  
	// Load file koneksi.php  
	include "koneksi.php";    
	// Buat query untuk menampilkan semua data pendapatan
$query = mysqli_query($koneksi, "SELECT * FROM pemasukan");
	// Untuk penomoran tabel, di awal set dengan 1 
	while($data = mysqli_fetch_array($query)){ 
	// Ambil semua data dari hasil eksekusi $sql 
	echo "<tr>";    
	echo "<td>".$data['no_ppa']."</td>";   
	echo "<td>".$data['tgl_pemasukan']."</td>";    
	echo "<td>".$data['jumlah']."</td>";    
	echo "<td>".$data['keterangan']."</td>";
	echo "</tr>";        
	}  ?>	
				<?php  
                $pemasukan=mysqli_query($koneksi,"SELECT * FROM pemasukan");
                while ($masuk=mysqli_fetch_array($pemasukan)){
                $arraymasuk[] = $masuk['jumlah'];
                }
                $jumlahmasuk = array_sum($arraymasuk);
                ?>
	<tfoot>
    <tr style="font-weight: bold;">
    <th colspan="2">Total</th>
   	<th>Rp. <?=number_format($jumlahmasuk,2,',','.');?></th>
    </tr>
	</tfoot>

	</table>
