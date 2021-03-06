<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tabel Produk</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-datepicker.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="../index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Tables
      </div>

      <!-- Nav Item - Tables -->
      <li class="nav-item active">
        <a class="nav-link" href="TabelProduk.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Table Produk</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../datakategori/TabelKategori.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Table Kategori</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../datasubkategori/TabelSubkategori.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Table Subkategori</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../datapegawai/TabelPegawai.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Table Pegawai</span></a>
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


            <div class="topbar-divider d-none d-sm-block"></div>

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
                <a class="dropdown-item" href="../../index.php">
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
          <h1 class="h3 mb-2 text-gray-800">Tabel Data Produk</h1>
          <p class="mb-4">Berisi detail produk yang disajikan dalam bentuk tabel.</p>

          <!-- Isi Content -->
          <div class="card shadow mb-4">
            <div class="card-body">

              <?php 
              include("koneksi.php"); // memanggil file koneksi.php untuk koneksi ke database
              ?>
                <div class="container">
                  <div class="content">
                    <h2>Data Produk</h2>
                    <hr />
                    
                    <?php
                    if(isset($_GET['aksi']) == 'delete'){ // mengkonfirmasi jika 'aksi' bernilai 'delete' merujuk pada baris 90 dibawah
                      $id = $_GET['id']; // ambil nilai id
                      $cek = mysqli_query($koneksi, "SELECT * FROM produk WHERE id='$id'"); // query untuk memilih entri dengan id yang dipilih
                      if(mysqli_num_rows($cek) == 0){ // mengecek jika tidak ada entri id yang dipilih
                        echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data tidak ditemukan.</div>'; // maka tampilkan 'Data tidak ditemukan.'
                      }else{ // mengecek jika terdapat entri id yang dipilih
                        $result = mysqli_query($koneksi, "DELETE FROM produk WHERE id=$id"); // query untuk menghapus
                        if($result){ // jika query delete berhasil dieksekusi
                          echo '<div class="alert alert-primary alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data berhasil dihapus.</div>'; // maka tampilkan 'Data berhasil dihapus.'
                        }else{ // jika query delete gagal dieksekusi
                          echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data gagal dihapus.</div>'; // maka tampilkan 'Data gagal dihapus.'
                        }
                      }
                    }
                    ?>

                    <div class="row"> 
                      <div class="col-md-11 row">
                      </div>
                      <div class="col-md-1" style="margin-bottom: 10px">
                        <a href="TambahProduk.php" class="btn bg-gradient-success" style="color: white;">Tambah Produk</a>
                      </div>
                    </div>

                    <br />
                    <!-- memulai tabel responsive -->
                    <div class="table-responsive">
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
                          <th>Tools</th>
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
                              <td>
                                
                                <a href="EditProduk.php?id='.$row['id'].'" title="Edit Data" data-toggle="tooltip" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                                <a href="TabelProduk.php?aksi=delete&id='.$row['id'].'" title="Hapus Data" data-toggle="tooltip" onclick="return confirm(\'Anda yakin akan menghapus data '.$row['nama'].'?\')" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                              </td>
                            </tr>
                            ';
                            $no++; // mewakili data kedua dan seterusnya
                          }
                        }
                        ?>
                      </table>
                    
                    
                    
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; 2019</span>
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
          <a class="btn btn-primary" href="login.html">Logout</a>
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
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
