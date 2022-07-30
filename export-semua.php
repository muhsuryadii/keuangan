    <?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data_Pemasukan_Pengeluaran.xls");
	?>
	<h2>Data Pemasukan</h2>    
	<table border="1" cellpadding="5"> 
	<tr>    
	<th>no_ppa</th>
    <th>Tgl Pemasukan</th>
    <th>Jumlah</th>    
	<th> keterangan</th> 
	</tr>  
	<?php  
	// Load file koneksi.php  
	include "koneksi.php";    
	// Buat query untuk menampilkan semua data siswa 
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
	<br>
	<br>
		<h2>Data Pengeluaran</h2>    
	<table border="1" cellpadding="5"> 
	<tr>    
	<th>no_ppa</th>
    <th>Tgl Pengeluaran</th>
    <th>Jumlah</th>    
	<th> keterangan</th> 
	</tr>  
	<?php     
	// Buat query untuk menampilkan semua data siswa 
$query = mysqli_query($koneksi, "SELECT * FROM pengeluaran");
	// Untuk penomoran tabel, di awal set dengan 1 
	while($data = mysqli_fetch_array($query)){ 
	// Ambil semua data dari hasil eksekusi $sql 
	echo "<tr>";    
	echo "<td>".$data['no_ppa']."</td>";   
	echo "<td>".$data['tgl_pengeluaran']."</td>";    
	echo "<td>".$data['jumlah']."</td>";    
	echo "<td>".$data['keterangan_keluar']."</td>";      
	echo "</tr>";        
	}  ?>

		<?php  
$pengeluaran=mysqli_query($koneksi,"SELECT * FROM pengeluaran");
while ($keluar=mysqli_fetch_array($pengeluaran)){
$arraykeluar[] = $keluar['jumlah'];
}
$jumlahkeluar = array_sum($arraykeluar);

$query2 = mysqli_query($koneksi,"SELECT id_pengeluaran FROM pengeluaran");
$query2 = mysqli_num_rows($query2);
?>
	<tfoot>
    <tr style="font-weight: bold;">
    <th colspan="2">Total</th>
   	<th>Rp. <?=number_format($jumlahkeluar,2,',','.');?></th>
    </tr>
	</tfoot>

</table>