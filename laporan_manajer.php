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

  <title>Laporan Keuangan</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

<?php 
require 'koneksi.php';
require 'sidebar-manajer.php'; ?>

      <!-- Main Content -->
      <div id="content">

<?php require 'navbar.php'; ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

                   <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">HASIL LAPORAN</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nama</th>
                      <th>Jumlah Transaksi </th>
					  <th>Download</th>
                    </tr>
                  </thead>
                  <tfoot>
                  </tfoot>
                  <tbody>
				  <?php 
$query1 = mysqli_query($koneksi,"SELECT id_beban_toilet FROM beban_toilet");
$query1 = mysqli_num_rows($query1);

$query2 = mysqli_query($koneksi,"SELECT id_biaya_revitalisasi FROM biaya_revitalisasi");
$query2 = mysqli_num_rows($query2);

$query3 = mysqli_query($koneksi,"SELECT id_beban_pengolahan_lemak FROM beban_pengolahan_lemak");
$query3 = mysqli_num_rows($query3);

$query4 = mysqli_query($koneksi,"SELECT id_studi_banding FROM studi_banding");
$query4 = mysqli_num_rows($query4);

$query5 = mysqli_query($koneksi,"SELECT id_pengelolaan_perpustakaan FROM pengelolaan_perpustakaan");
$query5 = mysqli_num_rows($query5);

$query6 = mysqli_query($koneksi,"SELECT id_public_campaign FROM public_campaign");
$query6 = mysqli_num_rows($query6);

$query7 = mysqli_query($koneksi,"SELECT id_csr FROM csr");
$query7 = mysqli_num_rows($query7);

$query8 = mysqli_query($koneksi,"SELECT id_dana_sosial FROM dana_sosial");
$query8 = mysqli_num_rows($query8);

$query9 = mysqli_query($koneksi,"SELECT id_temu_usaha FROM temu_usaha");
$query9 = mysqli_num_rows($query9);

$query10 = mysqli_query($koneksi,"SELECT id_pendampingan_kerjasama FROM pendampingan_kerjasama");
$query10 = mysqli_num_rows($query10);

$query11 = mysqli_query($koneksi,"SELECT id_penyusunan_dan_pembahasan_anggaran FROM penyusunan_dan_pembahasan_anggaran");
$query11 = mysqli_num_rows($query11);

$query12 = mysqli_query($koneksi,"SELECT id_pemeliharaan_komputer FROM pemeliharaan_komputer");
$query12 = mysqli_num_rows($query12);

$query13 = mysqli_query($koneksi,"SELECT id_toilet_vvip_dan_mobile FROM toilet_vvip_dan_mobile");
$query13 = mysqli_num_rows($query13);

$query14 = mysqli_query($koneksi,"SELECT id_riset_briket FROM riset_briket");
$query14 = mysqli_num_rows($query14);

$query15 = mysqli_query($koneksi,"SELECT id_riset_pengolahan_non_domestik FROM riset_pengolahan_non_domestik");
$query15 = mysqli_num_rows($query15);

$query16 = mysqli_query($koneksi,"SELECT id_riset_pengolahan_lumpur_pupuk FROM riset_pengolahan_lumpur_pupuk");
$query16 = mysqli_num_rows($query16);

$query17 = mysqli_query($koneksi,"SELECT id_riset_paket_ipal_biopal_wetland FROM riset_paket_ipal_biopal_wetland");
$query17 = mysqli_num_rows($query17);

$query18 = mysqli_query($koneksi,"SELECT id_pengadaan_komputer_aksesoris FROM pengadaan_komputer_aksesoris");
$query18 = mysqli_num_rows($query18);

$query19 = mysqli_query($koneksi,"SELECT id_aktiva_lain FROM aktiva_lain");
$query19 = mysqli_num_rows($query19);

$query20 = mysqli_query($koneksi,"SELECT id_limbah_b3_medis FROM limbah_b3_medis");
$query20 = mysqli_num_rows($query20);


$no = 1;
?>
                    <tr>
                      <td>beban toilet</td>
                      <td><?=$query1?></td>
           <td>
                    <!-- Button untuk modal -->
<a href="export-beban-toilet.php" type="button" class="btn btn-primary btn-md"><i class="fa fa-download"></i></a>
</td>
</tr>

                    <tr>
                      <td>biaya revitalisasi</td>
                      <td><?=$query2?></td>
					  <td>
                    <!-- Button untuk modal -->
            <a href="export-biaya-revitalisasi.php" type="button" class="btn btn-primary btn-md"><i class="fa fa-download"></i></a>
            </td>
            </tr>

            <tr>
                      <td>beban pengolahan lemak</td>
                      <td><?=$query3?></td>
                      
            <td>
                    <!-- Button untuk modal -->
            <a href="export-beban-pengolahan-lemak.php" type="button" class="btn btn-primary btn-md"><i class="fa fa-download"></i></a>
            </td>
            </tr>
            
            <tr>
                      <td>studi banding</td>
                      <td><?=$query4?></td>
                      
            <td>
                    <!-- Button untuk modal -->
            <a href="export-studi-banding.php" type="button" class="btn btn-primary btn-md"><i class="fa fa-download"></i></a>
            </td>
            </tr>
            
            <tr>
                      <td>pengelolaan perpustakaan</td>
                      <td><?=$query5?></td>
                      
            <td>
                    <!-- Button untuk modal -->
            <a href="export-pengelolaan-perpustakaan.php" type="button" class="btn btn-primary btn-md"><i class="fa fa-download"></i></a>
            </td>
            </tr>

            <tr>
                      <td>public campaign</td>
                      <td><?=$query6?></td>
                      
            <td>
                    <!-- Button untuk modal -->
            <a href="export-public-campaign.php" type="button" class="btn btn-primary btn-md"><i class="fa fa-download"></i></a>
            </td>
            </tr>

              <tr>
                      <td>csr</td>
                      <td><?=$query7?></td>
                      
            <td>
                    <!-- Button untuk modal -->
            <a href="export-csr.php" type="button" class="btn btn-primary btn-md"><i class="fa fa-download"></i></a>
            </td>
            </tr>

            <tr>
                      <td>dana sosial</td>
                      <td><?=$query8?></td>
                      
            <td>
                    <!-- Button untuk modal -->
            <a href="export-dana-sosial.php" type="button" class="btn btn-primary btn-md"><i class="fa fa-download"></i></a>
            </td>
            </tr>


            <tr>
                      <td>temu usaha</td>
                      <td><?=$query9?></td>
                      
            <td>
                    <!-- Button untuk modal -->
            <a href="export-temu-usaha.php" type="button" class="btn btn-primary btn-md"><i class="fa fa-download"></i></a>
            </td>
            </tr>

            <tr>
                      <td>pendampingan kerjasama</td>
                      <td><?=$query10?></td>
                      
            <td>
                    <!-- Button untuk modal -->
            <a href="export-pendampingan-kerjasama.php" type="button" class="btn btn-primary btn-md"><i class="fa fa-download"></i></a>
            </td>
            </tr>

            <tr>
                      <td>penyusunan dan pembahasan anggaran</td>
                      <td><?=$query11?></td>
                      
            <td>
                    <!-- Button untuk modal -->
            <a href="export-penyusunan-dan-pembahasan-anggaran.php" type="button" class="btn btn-primary btn-md"><i class="fa fa-download"></i></a>
            </td>
            </tr>

            <tr>
                      <td>pemeliharaan komputer</td>
                      <td><?=$query12?></td>
                      
            <td>
                    <!-- Button untuk modal -->
            <a href="export-pemeliharaan-komputer.php" type="button" class="btn btn-primary btn-md"><i class="fa fa-download"></i></a>
            </td>
            </tr>

            <tr>
                      <td>toilet vvip dan mobile</td>
                      <td><?=$query13?></td>
                      
            <td>
                    <!-- Button untuk modal -->
            <a href="export-toilet-vvip-dan-mobile.php" type="button" class="btn btn-primary btn-md"><i class="fa fa-download"></i></a>
            </td>
            </tr>

             <!-- Button untuk modal -->
            <a href="export-pemeliharaan-komputer.php" type="button" class="btn btn-primary btn-md"><i class="fa fa-download"></i></a>
            </td>
            </tr>

            <tr>
                      <td>riset briket</td>
                      <td><?=$query14?></td>
                      
            <td>
                    <!-- Button untuk modal -->
            <a href="export-riset-briket.php" type="button" class="btn btn-primary btn-md"><i class="fa fa-download"></i></a>
            </td>
            </tr>

            <tr>
                      <td>riset pengolahan non domestik</td>
                      <td><?=$query15?></td>
                      
            <td>
                    <!-- Button untuk modal -->
            <a href="export-riset-pengolahan-non-domestik.php" type="button" class="btn btn-primary btn-md"><i class="fa fa-download"></i></a>
            </td>
            </tr>

            <tr>
                      <td>riset pengolahan lumpur/pupuk</td>
                      <td><?=$query16?></td>
                      
            <td>
                    <!-- Button untuk modal -->
            <a href="export-riset-pengolahan-lumpur-pupuk.php" type="button" class="btn btn-primary btn-md"><i class="fa fa-download"></i></a>
            </td>
            </tr>

            <tr>
                      <td>riset paket ipal/biopal/wetland</td>
                      <td><?=$query17?></td>
                      
            <td>
                    <!-- Button untuk modal -->
            <a href="export-riset-paket-ipal-biopal-wetland.php" type="button" class="btn btn-primary btn-md"><i class="fa fa-download"></i></a>
            </td>
            </tr>

            <tr>
                      <td>pengadaan komputer + aksesoris</td>
                      <td><?=$query18?></td>
                      
            <td>
                    <!-- Button untuk modal -->
            <a href="export-pengadaan-komputer-aksesoris.php" type="button" class="btn btn-primary btn-md"><i class="fa fa-download"></i></a>
            </td>
            </tr>

             <tr>
                      <td>aktiva lain</td>
                      <td><?=$query19?></td>
                      
            <td>
                    <!-- Button untuk modal -->
            <a href="export-aktiva-lain.php" type="button" class="btn btn-primary btn-md"><i class="fa fa-download"></i></a>
            </td>
            </tr>

            <tr>
                      <td>limbah b3 medis</td>
                      <td><?=$query20?></td>
                      
            <td>
                    <!-- Button untuk modal -->
            <a href="export-limbah-b3-medis.php" type="button" class="btn btn-primary btn-md"><i class="fa fa-download"></i></a>
            </td>
            </tr>


                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->


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
