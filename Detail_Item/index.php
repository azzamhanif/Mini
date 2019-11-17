<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Detail Item</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-item.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="border-bottom: 1px solid black">
    <a class="navbar-brand" href="../ShopPage/index.php">FashionAble</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="../ShopPage/index.php">Shop</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Categories
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php 
              $host = mysqli_connect('localhost','root','','Fashion');
              $query = mysqli_query($host, "Select * from kategori");
              while($data = mysqli_fetch_array($query)){
              ?>
              <a class="dropdown-item" href="<?php echo"../HasilCategory/index.php?id='".$data['id']."'" ?>" ><?php echo $data['nama']; ?></a>
              <?php }
               ?>
              <!-- <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a> -->
          </div>
        </li>
          <!-- <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li> -->
      </ul>
        <!-- <button class="btn btn-outline-primary" data-target="#login" data-toggle="modal" type="submit">Login</button> -->
        <!-- <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> -->
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">
        <h2 class="my-4" style="text-align: center;">Categories</h2>
        
        <!-- kategori kategori -->
        <?php 
          $host = mysqli_connect('localhost','root','','Fashion');
          $query = mysqli_query($host, "Select * from kategori");
          while($data = mysqli_fetch_array($query)){
          ?>
          <a class="btn btn-light" data-toggle="collapse" href="#multiCollapseExample<?php echo $data['id'] ?>" role="button" aria-expanded="false" aria-controls="multiCollapseExample1" style="width: 100%;margin-top: 10px"><?php echo $data['nama']; ?></a>
          <div class="row">
            <div class="col">
              <div class="collapse multi-collapse" id="multiCollapseExample<?php echo $data['id'] ?>">
                <div>
                  <?php 
                  $query2 = mysqli_query($host, "Select * from sub_kategori where id like '".$data['id']."%'");
                  while($data2 = mysqli_fetch_array($query2)){
                    ?>
                    <a class="btn btn-light" href="<?php echo"../HasilSubCategory/index.php?id='".$data2['id']."'" ?>" style="width: 100%"><?php echo $data2['nama']; ?></a>
                   <?php }
                    ?>
                </div>
              </div>
            </div>
          </div>

          <?php }
         ?>
        
      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <?php
          $host = mysqli_connect('localhost','root','','Fashion');
          $id = $_GET["id"];
          $query = mysqli_query($host, "Select * from produk where id =".$id);
          while($data = mysqli_fetch_array($query)){
          ?>

        <div class="card mt-4">
          <img class="card-img-top img-fluid" src="../img/<?php echo $data["file_gambar"] ?>" >
          <div class="card-body">
            <h3 class="card-title"><?php echo $data["nama"]; ?></h3>
            <h4><?php echo $data["harga"]; ?></h4>
            <p class="card-text"><?php echo $data["deskripsi"]; ?></p>
            <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
            4.0 stars
          </div>
        </div>
      <?php } ?>
        <!-- /.card -->

        <div class="card card-outline-secondary my-4">
          <div class="card-header">
            Product Reviews
          </div>
          <div class="card-body" >
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted">Posted by Anonymous on 3/1/17</small>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted">Posted by Anonymous on 3/1/17</small>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted">Posted by Anonymous on 3/1/17</small>
            <hr>
            <a href="#" class="btn btn-success">Leave a Review</a>
          </div>
        </div>
        <!-- /.card -->

      </div>
      <!-- /.col-lg-9 -->

    </div>

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <div class="card" style="padding: 10px">
    <div class="container bottom">
      <div class="row">
        <div class="col-md-4" style="text-align: center;">
          <h5 >Social media</h5>
          <img src="../img/sosmed.png" class="img-fluid" style="width: 200px;height: auto;">
        </div>
        <div class="col-md-4" style="text-align: center;">
          <h5 style="margin-bottom: 40px; ">Recent post</h5>
          <p style="text-align: center;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an</p>
        </div>
        <div class="col-md-4" style="text-align: center;">
          <h5 style="margin-bottom: 40px">Contact us</h5>
          <p style="text-align: center;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
