<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ShopPage</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">
  <link rel="stylesheet" href="css/animate.css">

</head>

<body style="background-color: #f2f2f2">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="border-bottom: 1px solid black">
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
            <a class="nav-link" href="index.php">Shop</a>
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

        <!-- Kategori Kategori -->

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

        <div class="bd-example">
          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active" style="height: 280px;">
                <img src="../img/c2.jpg" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                  <h3 style="color: black">Sunglasses</h3>
                  <p style="color: black">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
              </div>
              <div class="carousel-item" style="height: 280px">
                <img src="../img/c3.jpg" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                  <h3>Whatches</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
              <div class="carousel-item" style="height: 280px">
                <img src="../img/c1.jpg" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                  <h3>Clothes</h3>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>

        <form method="POST" class="form-inline" style="margin-top: 30px">
          <input name="keyword" class="form-control mr-sm-2" type="search" placeholder="Name of Product" value="" style="width: 89%">
          <input type="submit" name="submit" value="Search"class="btn btn-outline-success my-2 my-sm-0" style="width: 10%" >
          <!-- <a class="btn btn-outline-success my-2 my-sm-0" href="" style="width: 10%" > Search</a> -->
        </form>

        <div class="row" style="margin-top: 30px">

          <?php

          if (isset($_POST['submit'])) {
            $cari = $_POST['keyword']; 

            if ($cari == "") {
              $query = mysqli_query($host, "Select * from produk");
              while($data = mysqli_fetch_array($query)){
              ?>
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                  <a <?php echo "href=\"../Detail_Item/index.php?id='".$data["id"]."'\""; ?>><img class="card-img-top wow zoomIn delay-0_5s" src="../img/<?php echo $data["file_gambar"] ?>" alt=""></a>
                  <div class="card-body">
                    <h4 class="card-title wow fadeInUp delay-0_5s">
                      <a <?php echo "href=\"../Detail_Item/index.php?id='".$data["id"]."'\""; ?>><?php echo $data["nama"]; ?></a>
                    </h4>
                    <h5 class="wow delay-0_5s fadeInUp"><?php echo $data["harga"]; ?></h5>
                    <p class="card-tex wow fadeInUp delay-0_5s"><?php echo $data["deskripsi"]; ?></p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                  </div>
                </div>
              </div>
              <?php }

              # code...
            }
            else{
              $query = mysqli_query($host, "Select * from produk where nama like '%".$cari."%'");
              while($data = mysqli_fetch_array($query)){
              ?>
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                  <a <?php echo "href=\"../Detail_Item/index.php?id='".$data["id"]."'\""; ?>><img class="card-img-top wow zoomIn delay-0_5s" src="img/<?php echo $data["file_gambar"] ?>" alt=""></a>
                  <div class="card-body">
                    <h4 class="card-title wow fadeInUp delay-0_5s">
                      <a <?php echo "href=\"../Detail_Item/index.php?id='".$data["id"]."'\""; ?>><?php echo $data["nama"]; ?></a>
                    </h4>
                    <h5 class="wow delay-0_5s fadeInUp"><?php echo $data["harga"]; ?></h5>
                    <p class="card-tex wow fadeInUp delay-0_5s"><?php echo $data["deskripsi"]; ?></p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                  </div>
                </div>
              </div>
              <?php }
            }
            # code...
          }
          else{

            $query = mysqli_query($host, "Select * from produk");
            while($data = mysqli_fetch_array($query)){
            ?>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a <?php echo "href=\"../Detail_Item/index.php?id='".$data["id"]."'\""; ?>><img class="card-img-top wow zoomIn delay-0_5s" src="../img/<?php echo $data["file_gambar"] ?>" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title wow fadeInUp delay-0_5s">
                    <a <?php echo "href=\"../Detail_Item/index.php?id='".$data["id"]."'\""; ?>><?php echo $data["nama"]; ?></a>
                  </h4>
                  <h5 class="wow delay-0_5s fadeInUp"><?php echo $data["harga"]; ?></h5>
                  <p class="card-tex wow fadeInUp delay-0_5s"><?php echo $data["deskripsi"]; ?></p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>
            <?php }

          }

          ?>
        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- FOOTER -->
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
  <script src="js/wow.js"></script>
  <script >
    var wow = new WOW(
      {
        boxClass:     'wow',      // animated element css class (default is wow)
        animateClass: 'animated', // animation css class (default is animated)
        offset:       0,          // distance to the element when triggering the animation (default is 0)
        mobile:       true,       // trigger animations on mobile devices (default is true)
        live:         true,       // act on asynchronously loaded content (default is true)
        callback:     function(box) {
            // the callback is fired every time an animation is started
            // the argument that is passed in is the DOM node being animated
        },
        scrollContainer: null,    // optional scroll container selector, otherwise use window,
        resetAnimation: true,     // reset animation on end (default is true)
      }
    );
    wow.init();
  </script>

</body>

</html>
