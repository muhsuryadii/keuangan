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

  <title>Riset Briket</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

<?php 
require 'koneksi.php';
require ('sidebar-manajer.php'); ?>   
     <!-- Main Content -->
      <div id="content">

<?php require ('navbar.php'); ?> 

		        <!-- Begin Page Content -->
        <div class="container-fluid">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">RISET BRIKET</h1>
      </div>
   <!-- Content Row -->
          <div class="row">
          
<?php 
$admin = mysqli_query($koneksi, "SELECT * FROM admin");
$admin = mysqli_num_rows($admin);

$jumlahdebet = mysqli_query($koneksi, "SELECT debet FROM riset_briket where tgl");
$jumlahdebet = mysqli_fetch_array($jumlahdebet);
 
$jumlahkredit = mysqli_query($koneksi, "SELECT kredit FROM riset_briket where tgl");
$jumlahkredit = mysqli_fetch_array($jumlahkredit);

$riset_briket=mysqli_query($koneksi,"SELECT * FROM riset_briket");
while ($masuk=mysqli_fetch_array($riset_briket)){
$arraydebet[] = $masuk['debet'];
}
$jumlahdebet = array_sum($arraydebet);

$riset_briket=mysqli_query($koneksi,"SELECT * FROM riset_briket");
while ($masuk=mysqli_fetch_array($riset_briket)){
$arraykredit[] = $masuk['kredit'];
}
$jumlahkredit = array_sum($arraykredit);

$uang=$jumlahkredit - $jumlahdebet;

 ?>
              <!-----debet ----->
              <div class="col-xl-5 col-md-1 mb-2">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">DEBET</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        Rp. <?=number_format($jumlahdebet,2,',','.');?></div>
                    </div>
                  </div>
                </div> 
              </div>
            </div>
             <!-- kredit -->
            <div class="col-xl-5 col-md-6 mb-2">
              <div class="card border-left-success shadow h-40 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-3">KREDIT</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      Rp.<?php echo number_format($jumlahkredit,2,',','.');?></div>
                    </div> 
                  </div>
                </div>  
             </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-5 col-md-6 mb-4">
              <div class="card border-left-info shadow h-40 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Sisa Uang</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">Rp.<?=number_format($uang,2,',','.');?></div>
                        </div>   
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>


			           <!-- DataTales Example -->
					   <div class="col-xl-11 col-lg-7">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Transaksi Masuk</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
               <table class="table table-bordered" id="dataTable" width="140%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>no</th>
                      <th>NO_PPA</th>
                      <th>Tanggal</th>
                      <th>Debet</th>
                      <th>Kredit</th>
                      <th>keterangan</th>
                    </tr> 
                   <tfoot>
                      <tr style="font-weight: bold;">
                          <th colspan="3">Total</th>
              <th>Rp. <?=number_format($jumlahdebet,2,',','.');?></th>
              <th>Rp. <?=number_format($jumlahkredit,2,',','.');?></th>
              <th>Rp. <?=number_format($jumlahkredit - $jumlahdebet);?></th>
                      </tr>

                    </tfoot>

                      <?php 
                $query = mysqli_query($koneksi,"SELECT * FROM riset_briket");
                $no = 1;
                while ($data = mysqli_fetch_assoc($query)) 
                {
                ?>

                    <tr>
                      <td><?=$no++;?></td>
                      <td><?=$data['no_ppa']?></td>
                      <td><?=$data['tgl']?></td>
                      <td>Rp. <?=number_format($data['debet'],2,',','.');?></td>
                      <td>Rp. <?=number_format($data['kredit'],2,',','.');?></td>
                      <td><?=$data['uraian_kegiatan']?></td>
                      </tr>
                  </thead> 

                    
                    <!-- Button untuk modal -->
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