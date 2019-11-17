<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/animate.css">

    <title>HomePage</title>
  </head>
  <body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light" >
      <a class="navbar-brand" href="index.php">FashionAble</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ShopPage/index.php">Shop</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Categories
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo"HasilCategory/index.php?id='1'" ?>" >Watches</a>
              <a class="dropdown-item" href="<?php echo"HasilCategory/index.php?id='2'" ?>">Clothes</a>
              <a class="dropdown-item" href="<?php echo"HasilCategory/index.php?id='3'" ?>">Sunglasses</a>
              <a class="dropdown-item" href="<?php echo"HasilCategory/index.php?id='4'" ?>">Backpack</a>
              <!-- <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a> -->
            </div>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li> -->
        </ul>
        <button class="btn btn-outline-primary" data-target="#login" data-toggle="modal" type="submit">Login</button>
        <!-- <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> -->
      </div>
    </nav>

    <!-- Login -->
    <div id="login" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header" >
            <h5 class="modal-title">Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="login.php" method="POST">
            <div class="modal-body" style="align-content: center;">
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Username:</label>
                <input type="text" class="form-control" name="username">
              </div>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Password:</label>
                <input type="password" class="form-control" name="pass">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" name="submit">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Banner -->
    <div class="bd-example">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active" style="height: 460px;">
            <img src="img/c2.jpg" class="d-block w-100">
            <div class="carousel-caption d-none d-md-block">
              <h3 style="color: black">Sunglasses</h3>
              <p style="color: black">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
          </div>
          <div class="carousel-item" style="height: 460px">
            <img src="img/c3.jpg" class="d-block w-100">
            <div class="carousel-caption d-none d-md-block">
              <h3>Whatches</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
          <div class="carousel-item" style="height: 460px">
            <img src="img/c1.jpg" class="d-block w-100">
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

    <!-- Trending -->
    <div class="container" style="margin-top: 20px; margin-bottom: 20px">
      <div class="row">
        <div class="col-md-12" style="text-align: center; margin-bottom: 20px">
          <h2 class="animated zoomIn">Trending</h2>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-4 card" style="text-align: center; ">
            <div class="card-body wow fadeIn delay-0_5s">
              <h4 class="card-title wow fadeInDown delay-0_5s">Alexandre Christie</h4>
              <p class="card-text wow zoomIn delay-0_5s">AC2487LHBSSSL </p>
              <img class="wow zoomIn delay-0_5s" src="img/jam1.png" style="width: 200px;height: auto;">
              <p class="card-text wow zoomIn delay-0_5s">$199.00</p>
              <button class="btn btn-outline-primary wow fadeInUp delay-0_5s" style="border-radius: 20px">Add to Cart</button>
            </div>
          </div>
          <div class="col-md-4 card" style="text-align: center; ">
            <div class="card-body animated fadeIn">
              <h4 class="card-title wow fadeInDown delay-0_5s">Cardinal Clothes</h4>
              <p class="card-text wow zoomIn delay-0_5s">For Men</p>
              <img class="wow zoomIn delay-0_5s" src="img/kemeja1.png" style="width: 200px;height: auto;">
              <p class="card-text wow zoomIn delay-0_5s">$50.00</p>
              <button class="btn btn-outline-primary wow fadeInUp delay-0_5s" style="border-radius: 20px">Add to Cart</button>
            </div>
          </div>
          <div class="col-md-4 card" style="text-align: center; ">
            <div class="card-body wow delay-0_5s fadeIn">
              <h4 class="card-title wow fadeInDown delay-0_5s">Alexandre Christie</h4>
              <p class="card-text wow zoomIn delay-0_5s">AC2488LHBGPSL</p>
              <img class="wow zoomIn zoomIn delay-0_5s" src="img/jam2.png" style="width: 200px;height: auto;">
              <p class="card-text wow zoomIn zoomIn delay-0_5s">$199.00</p>
              <button class="btn btn-outline-primary wow delay-0_5s fadeInUp" style="border-radius: 20px">Add to Cart</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Categories -->
    <div class="container" style="margin-top: 20px;background-color: #f2f2f2;padding: 10px;padding-bottom: 20px">
      <div class="row" style="text-align: center;">
        <div class="col-md-12" style="text-align: center; margin-bottom: 20px">
          <h2 class="wow zoomIn delay-0_5s">Categories</h2>
        </div>
      </div>
      <div class="row" style="margin-bottom: 10px">
        <div class="col-md-6 wow zoomIn delay-0_5s" style="text-align: center; height: 200px;background-image: url('img/kategori1.jpg');">
          <h3 class="wow fadeInDown delay-0_5s" style="color: white; margin-top: 60px">Watches</h3>
          <a class="btn btn-primary wow fadeInUp delay-0_5s" href="ShopPage/index.php" style="border-radius: 20px;margin-top: 10px">Shop Now</a>
        </div>
        <div class="col-md-6 wow zoomIn delay-0_5s" style="text-align: center; height: 200px;background-image: url('img/aa.jpg');">
          <h3 class="wow fadeInDown delay-0_5s" style="color: white; margin-top: 60px">Clothes</h3>
          <a class="btn btn-primary wow fadeInUp delay-0_5s" href="ShopPage/index.php" style="border-radius: 20px;margin-top: 10px">Shop Now</a>
        </div>
      </div>
      <div class="row" style="margin-bottom: 20px">
        <div class="col-md-6 wow zoomIn delay-0_5s" style="text-align: center; height: 250px; background-image: url('img/kacamata1.jpg');">
          <h3 class="wow fadeInDown delay-0_5s" style="color: white; margin-top: 80px">Sunglasses</h3>
          <a class="btn btn-primary wow fadeInUp delay-0_5s" href="ShopPage/index.php" style="border-radius: 20px;margin-top: 10px">Shop Now</a>
        </div>
        <div class="col-md-6 wow zoomIn delay-0_5s" style="text-align: center; height: 250px;background-image: url('img/tas1.jpg'); ">
          <h3 class="wow fadeInDown delay-0_5s" style="color: white; margin-top: 80px">Backpack</h3>
          <a class="btn btn-primary wow fadeInUp delay-0_5s" href="ShopPage/index.php" style="border-radius: 20px;margin-top: 10px">Shop Now</a>
        </div>
      </div>

      <div class="container">
        <div class="col-md-12" style="text-align: center;">
          <button class="btn btn-outline-primary wow zoomIn delay-0_5s" style="border-radius: 20px">All Categories</button>
        </div>
      </div>
    </div>

    <!-- Footer -->

    <!-- FOOTER -->
    <div class="card" style="padding: 10px">
      <div class="container bottom">
        <div class="row">
          <div class="col-md-4" style="text-align: center;">
            <h5 >Social media</h5>
            <img src="img/sosmed.png" class="img-fluid" style="width: 200px;height: auto;">
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

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