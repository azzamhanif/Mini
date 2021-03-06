<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tambah Pegawai</title>

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
          <h1 class="h3 mb-2 text-gray-800">Tambah Pegawai</h1>
          <p class="mb-4">Menambah Pegawai baru</p>

          <!-- Isi Content -->
          <div class="card shadow mb-4">
            <div class="card-body">
              <?php 
              include("koneksi.php"); // memanggil file koneksi.php untuk koneksi ke database
              ?>
                <div class="container">
                  <div class="content">
                    <h2>Data Pegawai &raquo; Tambah Data</h2>
                    <hr />
                    
                    <?php
                    if(isset($_POST['add'])){ // jika tombol 'Simpan' dengan properti name="add" pada baris 137 ditekan
                      $id          = $_POST['id'];
                      $nama_lengkap  = $_POST['nama_lengkap'];
                      $username    = $_POST['username'];
                      $jenis_kelamin   = $_POST['jenis_kelamin'];
                      $tempat_lahir  = $_POST['tempat_lahir'];
                      $tanggal_lahir   = $_POST['tanggal_lahir'];
                      $alamat        = $_POST['alamat'];
                      $no_telepon    = $_POST['no_telepon'];
                      $jabatan     = $_POST['jabatan'];
                      $status      = $_POST['status'];
                      $email       = $_POST['email'];
                      $password    = $_POST['password1'];
                      $password1           = $_POST['password1'];
                      $password2           = $_POST['password2'];
                      
                      $cek = mysqli_query($koneksi, "SELECT * FROM pegawai WHERE id='$id'"); // query untuk memilih entri dengan id terpilih
                      if(mysqli_num_rows($cek) == 0){ // mengecek apakah id yang akan ditambahkan tidak ada dalam database
                        if($password1 == $password2){ // mengecek apakah nilai pada pass1 dan pass2 bernilai sama
                          $pass = md5($password1); // assigment variabel pass dengan nilai pass1 yang sudah dienkripsi dengan md5
                          $insert = mysqli_query($koneksi, "INSERT INTO `pegawai` (`id`, `nama_lengkap`, `username`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `no_telepon`, `jabatan`, `status`, `email`, `password`) VALUES('$id', '$nama_lengkap','$username', '$jenis_kelamin', '$tempat_lahir', '$tanggal_lahir', '$alamat', '$no_telepon', '$jabatan', '$status', '$email', '$password');") or die(mysqli_error()); // query untuk menambahkan data ke dalam database
                          if($insert){ // jika query insert berhasil dieksekusi
                            echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Pegawai Berhasil Di Simpan.</div>'; // maka tampilkan 'Data Pegawai Berhasil Di Simpan.'
                          }else{ // jika query insert gagal dieksekusi
                            echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Ups, Data Pegawai Gagal Di simpan!</div>'; // maka tampilkan 'Ups, Data Pegawai Gagal Di simpan!'
                          }
                        } else{ // mengecek jika password yang diinput tidak sama
                          echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Password Tidak sama!</div>'; // maka tampilkan 'Password Tidak sama!'
                        }
                      }else{ // mengecek jika id yang akan ditambahkan sudah ada dalam database
                        echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>ID Sudah Ada..!</div>'; // maka tampilkan 'ID Sudah Ada..!'
                      }
                    }
                    ?>
                    <!-- bagian ini merupakan bagian form untuk menginput data yang akan dimasukkan ke database -->
                    <form class="form-horizontal" action="" method="post">
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Id Pegawai</label>
                        <div class="col-sm-2">
                          <input type="text" name="id" class="form-control" placeholder="Id Pegawai" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Nama Lengkap</label>
                        <div class="col-sm-4">
                          <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Username</label>
                        <div class="col-sm-4">
                          <input type="text" name="username" class="form-control" placeholder="Username" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Jenis Kelamin</label>
                        <div class="col-sm-2">
                          <select name="jenis_kelamin" class="form-control" required>
                            <option value=""> ----- </option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Tempat Lahir</label>
                        <div class="col-sm-4">
                          <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Tanggal Lahir</label>
                        <div class="col-sm-3">
                          <input type="text" name="tanggal_lahir" class="input-group datepicker form-control" date="" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Alamat</label>
                        <div class="col-sm-3">
                          <textarea name="alamat" class="form-control" placeholder="Alamat"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">No Telepon</label>
                        <div class="col-sm-3">
                          <input type="text" name="no_telepon" class="form-control" placeholder="No Telepon" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Jabatan</label>
                        <div class="col-sm-2">
                          <select name="jabatan" class="form-control" required>
                            <option value=""> ----- </option>
                            <option value="Admin">Admin</option>
                            <option value="Manager">Manager</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Status</label>
                        <div class="col-sm-2">
                          <select name="status" class="form-control">
                            <option value=""> ----- </option>
                                          <option value="Outsourcing">Outsourcing</option>
                            <option value="Kontrak">Kontrak</option>
                            <option value="Tetap">Tetap</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-2">
                          <input type="text" name="email" class="form-control" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Password</label>
                        <div class="col-sm-2">
                          <input type="password" name="password1" class="form-control" placeholder="Password">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Ulangi Password</label>
                        <div class="col-sm-2">
                          <input type="password" name="password2" class="form-control" placeholder="Ulangi Password">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">&nbsp;</label>
                        <div class="col-sm-6">
                          <input type="submit" name="add" class="btn bg-gradient-primary" value="Simpan" data-toggle="tooltip" title="Simpan Data Pegawai" style="color: white">
                          <a href="TabelPegawai.php" class="btn bg-gradient-danger" data-toggle="tooltip" title="Batal" style="color: white">Batal</a>
                        </div>
                        <div class="col-sm-6">
                          <a href="TabelPegawai.php" class="btn bg-gradient-dark" style="color: white;margin-top: 10px">Kembali</a>
                        </div>
                      </div>
                    </form> <!-- /form -->
                  </div> <!-- /.content -->

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
