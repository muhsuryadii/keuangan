<?php
require 'cek-sesi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>PENGAJUAN</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

<?php 
require 'koneksi.php';
require ('sidebar.php'); ?>   
     <!-- Main Content -->
      <div id="content">

<?php require ('navbar.php'); ?> 

		        <!-- Begin Page Content -->
        <div class="container-fluid">

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">PENGAJUAN</h1>
      </div>
   <!-- Content Row -->
          <div class="row">
                
			           <!-- DataTales Example -->
					   <div class="col-xl-11 col-lg-7">
					   <button type="button" class="btn btn-success" style="margin:5px" data-toggle="modal" data-target="#myModalTambah" aria-expanded="true" arial-control="myModalTambah"><i class="fa fa-plus"> PENGAJUAN</i></button><br>

          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">PENGAJUAN</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
               <table class="table table-bordered" id="dataTable" width="140%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>no</th>
                      <th>Tanggal</th>
                      <th>keterangan</th>
                      <th>bukti laporan</th>
					            <th>edit</th>
                    </tr>

                      <?php 
                $query = mysqli_query($koneksi,"SELECT * FROM pengajuan");
                $no = 1;
                while ($data = mysqli_fetch_assoc($query)) 
                {
                ?>

                    <tr>
                      <td><?=$no++;?></td>
                      <td><?=$data['tgl']?></td>
                      <td><?=$data['uraian_kegiatan']?></td>
                      <td><?=$data['bukti_laporan']?></td>
                      <td>
                        <a href="#" type="button" class=" fa fa-edit btn btn-primary btn-md" data-toggle="modal" data-target="#myModal<?php echo $data['id_pengajuan']; ?>"></a>
                      </td>
                      </tr>
                  </thead> 

                    
                    <!-- Button untuk modal -->

<!-- Modal Edit -->
<div class="modal fade" id="myModal<?php echo $data['id_pengajuan']; ?>" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title">Ubah pengajuan</h4>
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body">
<form role="form" action="proses-edit-pengajuan.php" method="get">

<?php
$id= $data['id_pengajuan']; 
$query_edit = mysqli_query($koneksi,"SELECT * FROM pengajuan WHERE id_pengajuan='$id'");
//$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($query_edit)) {  
?>


<input type="hidden" name="id_pengajuan" value="<?php echo $row['id_pengajuan']; ?>">

<div class="form-group">

<div class="form-group">
<label>Tanggal</label>
<input type="date" name="tgl" class="form-control" value="<?php echo $row['tgl']; ?>">      
</div>

<div class="form-group">
<label>Keterangan</label>
<input type="text" name="uraian_kegiatan" class="form-control" value="<?php echo $row['uraian_kegiatan']; ?>">
</input>     
</div>

<div class="form-group">
<label>bukti Laporan</label>
<input type="file" name="bukti_laporan" class="form-control" value="<?php echo $row['bukti_laporan']; ?>">
</input>     
</div>


<div class="modal-footer">  
<button type="submit" class="btn btn-success">Ubah</button>
<a href="hapus-beban-toilet.php?id_beban_toilet=<?=$row['id_beban_toilet'];?>" Onclick="confirm('Anda Yakin Ingin Menghapus?')" class="btn btn-danger">Hapus</a>
<button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
</div>
<?php 
}
//mysql_close($host);
?>  
       
</form>
</div>
</div>

</div>
</div>



 <!-- Modaltambah -->
  <div id="myModalTambah" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- konten modal-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <h4 class="modal-title">Tambah pengajuan</h4>
		    <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- body modal -->
		<form action="tambah-pengajuan.php" method="post" enctype="multipart/form-data">
      <div class="modal-body">
    
    Tanggal : 
         <input type="date" class="form-control" name="tgl">
    keterangan : 
         <input type="text" class="form-control" name="uraian_kegiatan">
    bukti laporan : 
         <input type="file" name="bukti_laporan" class="form-control">
     </input>
        </div>
        <!-- footer modal -->
        <div class="modal-footer">
		<button type="submit" class="btn btn-success" name="tambah-pengajuan" id="tambah-pengajuan">Tambah</button>
		</form>
          <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
        </div>
      </div>

    </div>
  </div>

<?php               
} 
?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
		  </div>


       </div>
        <!-- /.container-fluid -->

      </div>
    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
<?php require 'logout-modal.php';?>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>