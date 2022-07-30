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

  <title>Dashboard - Admin</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

<?php
require ('koneksi.php');
require ('sidebar.php');

$admin = mysqli_query($koneksi, "SELECT * FROM admin");
$admin = mysqli_num_rows($admin);
//beban toilet
$jumlahdebet = mysqli_query($koneksi, "SELECT debet FROM beban_toilet where tgl = CURDATE()");
$jumlahdebet = mysqli_fetch_array($jumlahdebet);
 
$jumlahkredit = mysqli_query($koneksi, "SELECT kredit FROM beban_toilet where tgl = CURDATE()");
$jumlahkredit = mysqli_fetch_array($jumlahkredit);

$beban_toilet=mysqli_query($koneksi,"SELECT * FROM beban_toilet");
while ($masuk=mysqli_fetch_array($beban_toilet)){
$arraydebet[] = $masuk['debet'];
}
$jumlahdebet = array_sum($arraydebet);

$beban_toilet=mysqli_query($koneksi,"SELECT * FROM beban_toilet");
while ($masuk=mysqli_fetch_array($beban_toilet)){
$arraykredit[] = $masuk['kredit'];
}
$jumlahkredit = array_sum($arraykredit);

//biaya revitalisasi
$jumlahdebet = mysqli_query($koneksi, "SELECT debet FROM biaya_revitalisasi where tgl = CURDATE()");
$jumlahdebet = mysqli_fetch_array($jumlahdebet);
 
$jumlahkredit = mysqli_query($koneksi, "SELECT kredit FROM biaya_revitalisasi where tgl = CURDATE()");
$jumlahkredit = mysqli_fetch_array($jumlahkredit);

$biaya_revitalisasi=mysqli_query($koneksi,"SELECT * FROM biaya_revitalisasi");
while ($masuk=mysqli_fetch_array($biaya_revitalisasi)){
$arraydebet[] = $masuk['debet'];
}
$jumlahdebet = array_sum($arraydebet);

$biaya_revitalisasi=mysqli_query($koneksi,"SELECT * FROM biaya_revitalisasi");
while ($masuk=mysqli_fetch_array($biaya_revitalisasi)){
$arraykredit[] = $masuk['kredit'];
}
$jumlahkredit = array_sum($arraykredit);

//penyusun dan pembahasan anggaran
$jumlahdebet = mysqli_query($koneksi, "SELECT debet FROM penyusunan_dan_pembahasan_anggaran where tgl = CURDATE()");
$jumlahdebet = mysqli_fetch_array($jumlahdebet);
 
$jumlahkredit = mysqli_query($koneksi, "SELECT kredit FROM penyusunan_dan_pembahasan_anggaran where tgl = CURDATE()");
$jumlahkredit = mysqli_fetch_array($jumlahkredit);

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

//pemeliharaan komputer
$jumlahdebet = mysqli_query($koneksi, "SELECT debet FROM pemeliharaan_komputer where tgl = CURDATE()");
$jumlahdebet = mysqli_fetch_array($jumlahdebet);
 
$jumlahkredit = mysqli_query($koneksi, "SELECT kredit FROM pemeliharaan_komputer where tgl = CURDATE()");
$jumlahkredit = mysqli_fetch_array($jumlahkredit);

$pemeliharaan_komputer=mysqli_query($koneksi,"SELECT * FROM pemeliharaan_komputer");
while ($masuk=mysqli_fetch_array($pemeliharaan_komputer)){
$arraydebet[] = $masuk['debet'];
}
$jumlahdebet = array_sum($arraydebet);

$pemeliharaan_komputer=mysqli_query($koneksi,"SELECT * FROM pemeliharaan_komputer");
while ($masuk=mysqli_fetch_array($pemeliharaan_komputer)){
$arraykredit[] = $masuk['kredit'];
}
$jumlahkredit = array_sum($arraykredit);

//riset briket
$jumlahdebet = mysqli_query($koneksi, "SELECT debet FROM riset_briket where tgl = CURDATE()");
$jumlahdebet = mysqli_fetch_array($jumlahdebet);
 
$jumlahkredit = mysqli_query($koneksi, "SELECT kredit FROM riset_briket where tgl = CURDATE()");
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

$uang = $jumlahkredit - $jumlahdebet;

?>
      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
<h1> Selamat Datang, <?=$_SESSION['nama']?></h1>

<?php require 'user.php'; ?>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-5 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-3">kredit</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      Rp.<?php
                      echo number_format($jumlahkredit,2,',','.');?></div>
                    </div> 
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div> 
			</div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-5 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-3">debet</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        Rp.<?php
                        echo number_format($jumlahdebet,2,',','.');?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div> 
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-5 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
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
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>

                </div><div class="col">
                          <div class="progress progress-sm mr-2">
						  <?php
						  if ($uang < 1 ){
							  $warna = 'danger';
							  $value = 0;
						  }
						  else if ($uang >= 1 && $uang < 1000000){
						  $warna = 'warning';
						  $value = 1;
						  }
						  else{
							  $warna = 'info';
							  $value = $uang / 10000;
						  };
						  
						  ?>
						  
                            <div class="progress-bar bg-<?=$warna?>" role="progressbar" style="width: 100%" aria-valuenow="<?=$value?>" aria-valuemin="0" aria-valuemax="100"><span><?=$value?> % </span></div>
                          </div>
                        </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-5 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Karyawan</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$admin?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->

          <div class="row">
            <!-- Pie Chart -->
            <div class="col-xl-10 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">DIAGRAM</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-pie pt-4 pb-2">
                    <canvas id="myPieChart"></canvas>
                  </div>
                  <div class="mt-4 text-center small">
                    <span class="mr-2">
                      <i class="fas fa-circle text-primary"></i> kredit
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-danger"></i> debet
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-info"></i> Sisa
                    </span>
                  </div>
                </div>
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

<?php require 'logout-modal.php'; ?>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script type="text/javascript">
  // Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

function number_format(number, decimals, dec_point, thousands_sep) {
  // *     example: number_format(1234.56, 2, ',', ' ');
  // *     return: '1 234,56'
  number = (number + '').replace(',', '').replace(' ', '');
  var n = !isFinite(+number) ? 0 : +number,
    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
    sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
    dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
    s = '',
    toFixedFix = function(n, prec) {
      var k = Math.pow(10, prec);
      return '' + Math.round(n * k) / k;
    };
  // Fix for IE parseFloat(0.55).toFixed(0) = 0;
  s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
  if (s[0].length > 3) {
    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
  }
  if ((s[1] || '').length < prec) {
    s[1] = s[1] || '';
    s[1] += new Array(prec - s[1].length + 1).join('0');
  }
  return s.join(dec);
}

  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false,
          drawBorder: false
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        ticks: {
          maxTicksLimit: 5,
          padding: 10,
          // Include a dollar sign in the ticks
          callback: function(value, index, values) {
            return 'Rp.' + number_format(value);
          }
        },
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    },
    legend: {
      display: false
    },
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      intersect: false,
      mode: 'index',
      caretPadding: 10,
      callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
          return datasetLabel + ': Rp.' + number_format(tooltipItem.yLabel);
        }
      }
    }
  }
});

  
  </script>
  
  <script type="text/javascript">
  
  // Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';
// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["kredit", "debet", "Sisa"],
    datasets: [{
      data: [<?php echo $jumlahkredit/1000000 ?>, <?php echo $jumlahdebet/1000000 ?>, <?php echo $uang/1000000 ?>],
      backgroundColor: ['#4e73df', '#e74a3b', '#36b9cc'],
      hoverBackgroundColor: ['#2e59d9', '#e74a3b', '#2c9faf'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});

  
  </script>

</body>

</html>
