<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard Manajer</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <script type="text/javascript" src="chartjs/Chart.js"></script>

  <style>
    table{
      width: 80%
    }
      table tr td, table tr th{
          border: black 1px solid;
          padding: 5px;
          text-align: center;
      }
  </style>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Manager</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->

          <!-- Content Row -->
          <div class="row">

            <?php 
              include("koneksi.php"); // memanggil file koneksi.php untuk koneksi ke database
              ?>
                <div class="container">
                  <div class="content">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                      <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>
                    <hr />
                    

                    <br />
                    <!-- memulai tabel responsive -->
                    <div class="table-responsive">
                      <h4>Data Produk</h4>
                      <table class="table table-striped table-hover">
                        <tr>
                          <th>No</th>
                          <th>Id Produk</th>
                          <th>Nama Produk</th>
                          <th>Deskripsi</th>
                          <th>Id Kategori</th>
                          <th>Id Sub Kategori</th>
                          <th>File Gambar</th>
                          <th>Last Update</th>
                          <th>Id Pegawai</th>
                          <th>Harga</th>
                        </tr>
                        <?php
                        
                        $sql = mysqli_query($koneksi, "SELECT * FROM produk ORDER BY id ASC");
                        if(mysqli_num_rows($sql) == 0){ 
                          echo '<tr><td colspan="8">Data Tidak Ada.</td></tr>'; // jika tidak ada entri di database maka tampilkan 'Data Tidak Ada.'
                        }else{ // jika terdapat entri maka tampilkan datanya
                          $no = 1; // mewakili data dari nomor 1
                          while($row = mysqli_fetch_assoc($sql)){ // fetch query yang sesuai ke dalam array
                            echo '
                            <tr>
                              <td>'.$no.'</td>
                              <td>'.$row['id'].'</td>
                              <td>'.$row['nama'].'</td>
                              <td>'.$row['deskripsi'].'</td>
                              <td>'.$row['idkategori'].'</td>
                              <td>'.$row['idsub_kategori'].'</td>
                              <td>'.$row['file_gambar'].'</td>
                              <td>'.$row['last_update'].'</td>
                              <td>'.$row['idpegawai'].'</td>
                              <td>'.$row['harga'].'</td>';              
                            echo '
                            
                            </tr>
                            ';
                            $no++; // mewakili data kedua dan seterusnya
                          }
                        }
                        ?>
                      </table>
           
          </div>
          <div>
            <h4>Rekap Produk</h4>
            <br>

            <?php 

            $host = mysqli_connect('localhost','root','','Fashion');
            // $query = mysqli_query($host, '');
            $query = mysqli_query($host, "Select k.nama AS kt, sk.nama AS skt, p.nama AS nm from produk p, kategori k, sub_kategori sk where p.idkategori = k.id and p.idsub_kategori = sk.id ORDER BY k.id, sk.id");

            $arr = array();
            $kategori = array();
            $subkategori = array();
            $nama = array();

            // data saving
            while($data = mysqli_fetch_assoc($query)){
              array_push($kategori, $data['kt']);
              array_push($subkategori, $data['skt']);
              array_push($nama, $data['nm']);

              if (!isset($arr[$data['kt']])) {
                # code...
                $arr[$data['kt']]['rowspan'] = 0;
              }
              $arr[$data['kt']]['printed'] = 'no';
              $arr[$data['kt']]['rowspan'] += 1;
              if (!isset($arr[$data['skt']])) {
                # code...
                $arr[$data['skt']]['rowspan'] = 0;
              }
              $arr[$data['skt']]['printed'] = 'no';
              $arr[$data['skt']]['rowspan'] += 1;

            }

            // data printing
            echo "<table cellspacing = '0' cellpadding = '0'>
            <tr>
              <th>Kategori</th>
              <th>Subkategori</th>
              <th>Nama Produk</th>

            </tr>  
            ";

            for ($i=0; $i < sizeof($nama); $i++) { 
              $kategoriName = $kategori[$i];
              $subkategoriName = $subkategori[$i];
              echo "<tr>";

              if ($arr[$kategoriName]['printed'] == 'no') {
                echo "<td rowspan='".$arr[$kategoriName]['rowspan']."'>".$kategoriName."</td>";
                $arr[$kategoriName]['printed'] = 'yes';
                # code...
              }
              if ($arr[$subkategoriName]['printed'] == 'no') {
                echo "<td rowspan='".$arr[$subkategoriName]['rowspan']."'>".$subkategoriName."</td>";
                $arr[$subkategoriName]['printed'] = 'yes';
                # code...
              }
              echo "<td>".$nama[$i]."</td>";
              echo "</tr>";
              # code...
            }
            echo "</table>";

             ?>
            
          </div>

          <div>
            <br>
            <br>
            <center>
              <h2>GRAFIK DATABASE FASHION<br/></h2>
            </center>
           
           
            <?php 
            include 'koneksi.php';
            ?>
           
            <div style="width: 800px;margin: 0px auto;">
              <canvas id="myChart"></canvas>
            </div>
           
            <br/>
            <br/>
           
            <table border="1">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Produk</th>
                  <th>Id Kategori</th>
                  <th>Id Subkategori</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $no = 1;
                $data = mysqli_query($koneksi,"select * from produk");
                while($d=mysqli_fetch_array($data)){
                  ?>
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['idkategori']; ?></td>
                    <td><?php echo $d['idsub_kategori']; ?></td>
                  </tr>
                  <?php 
                }
                ?>
              </tbody>
            </table>
           
           
            <script>
              var ctx = document.getElementById("myChart").getContext('2d');
              var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                  labels: ["Baju", "Jam", "Sepatu",],
                  datasets: [{
                    label: '',
                    data: [
                    <?php 
                    $jumlah_baju = mysqli_query($koneksi,"select * from produk where idkategori='1'");
                    echo mysqli_num_rows($jumlah_baju);
                    ?>, 
                    <?php 
                    $jumlah_jam = mysqli_query($koneksi,"select * from produk where idkategori='2'");
                    echo mysqli_num_rows($jumlah_jam);
                    ?>, 
                    <?php 
                    $jumlah_sepatu = mysqli_query($koneksi,"select * from produk where idkategori='3'");
                    echo mysqli_num_rows($jumlah_sepatu);
                    ?>
                    ],
                    backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)'
                    ],
                    borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)'
                    ],
                    borderWidth: 1
                  }]
                },
                options: {
                  scales: {
                    yAxes: [{
                      ticks: {
                        beginAtZero:true
                      }
                    }]
                  }
                }
              });
            </script>
            
          </div>
          


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="../index.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

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
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
