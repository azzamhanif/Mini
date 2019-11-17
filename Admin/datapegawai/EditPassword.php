<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tabel Pegawai</title>

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
      <li class="nav-item">
        <a class="nav-link" href="../dataproduk/TabelProduk.php">
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
      <li class="nav-item active">
        <a class="nav-link" href="TabelPegawai.php">
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
          <h1 class="h3 mb-2 text-gray-800">Tabel Data Pegawai</h1>
          <p class="mb-4">Berisi detail pegawai yang disajikan dalam bentuk tabel.</p>

          <!-- Isi Content -->
          <div class="card shadow mb-4">
            <div class="card-body">

              <?php 
              include("koneksi.php"); // memanggil file koneksi.php untuk koneksi ke database
              ?>
                <div class="container">
                  <div class="content">
                    <h2>Data Pegawai &raquo; Ganti Password</h2>
                    <hr />
                    
                    <p>Ganti password pegawai dengan Id Pegawai <?php echo '<b>'.$_GET['id'].'</b>'; // mengambil nilai id dari data yang dipilih ?></p> 
                    
                    <?php
                    if(isset($_POST['ganti'])){ // jika tombol 'Simpan' dengan properti name="ganti" pada baris 64 ditekan
                      $id   = $_GET['id'];
                      $password   = ($_POST['password']); // assigment password dengan enkripsi md5
                      $password1  = $_POST['password1'];
                      $password2  = $_POST['password2'];
                      
                      $cek = mysqli_query($koneksi, "SELECT id FROM pegawai WHERE password='$password'"); // query memilih id dan password
                      if(mysqli_num_rows($cek) == 0){ // mengecek query $cek jika password yang dimasukkan tidak sesuai dengan id
                        echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Password salah masukan password yang benar</div>'; // maka tampilkan 'Password salah masukan password yang benar'
                      }else{
                        if($password1 == $password2){ // jika nilai password1 dan password2 bernilai sama
                          if(strlen($password1) >= 6){ // mengecek panjang password minimal 6 karakter
                            $pass = md5($password1); // enkripsi password dengan md5
                            $update = mysqli_query($koneksi, "UPDATE pegawai SET password='$password1' WHERE id='$id'"); // query update password dari id yang dipilih
                            if($update){ // jika query update berhasil dieksekusi
                              echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Password berhasil dirubah.</div>'; // maka tampilkan 'Password berhasil dirubah.'
                            }else{ // jika query update gagal dieksekusi
                              echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Password gagal dirubah.</div>'; // maka tampilkan 'Password gagal dirubah.'
                            }
                          }else{ // jika panjang password kurang dari 6 karakter 
                            echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Panjang karakter Password minimal 6 karakter.</div>'; // maka tampilkan 'Panjang karakter Password minimal 6 karakter.'
                          }
                        }else{ // jika password1 dan password2 bernilai berbeda
                          echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Pasword tidak sama</div>'; // maka tampilkan 'Pasword tidak sama'
                        }
                      }
                    }
                    ?>
                    <!-- bagian ini merupakan bagian form untuk mengupdate password baru yang akan dimasukkan ke database -->
                    <form class="form-horizontal" action="" method="post">
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Password Lama</label>
                        <div class="col-sm-4">
                          <input type="password" name="password" class="form-control" placeholder="Password Lama" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Password Baru</label>
                        <div class="col-sm-4">
                          <input type="password" name="password1" class="form-control" placeholder="Password Baru" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Ulangi Password Baru</label>
                        <div class="col-sm-4">
                          <input type="password" name="password2" class="form-control" placeholder="Ulangi Password baru" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">&nbsp;</label>
                        <div class="col-sm-6">
                          <input type="submit" name="ganti" class="btn btn-sm btn-info" value="Simpan" data-toggle="tooltip" title="Simpan Password Baru">
                          <a href="TabelPegawai.php" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Batal"><b>Batal</b></a>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <a href="TabelPegawai.php" class="btn bg-gradient-dark" style="color: white;margin-top: 10px">Kembali</a>
                      </div>
                    </form>
                  

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
