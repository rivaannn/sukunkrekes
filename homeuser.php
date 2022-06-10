<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>KERIPIK SUKUN</title>

  <!-- Font Awesome Icons -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="asset2/css/main.css">
  <!-- Theme CSS - Includes Bootstrap -->
  <link href="css/creative.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <?php 
require 'koneksi.php';
$sql = 'SELECT * FROM product';
$result = mysqli_query($connect, $sql);
 ?>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="homeuser.php">SUKUN KREKES</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">List Rasa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="fa fa-shopping-cart" href="cart.php"></a>
          </li>
         <li class="nav-item">
            <a class="fa fa-power-off" href="logout.php"></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold">Temukan Keripik Sukun Bervarian Rasa Yang Kalian Cari Disini!</h1>
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5">Menyediakan berbagai varian rasa keripik sukun dengan harga terjangkau, gaskeunlah dude #BROBROGORE.</p>
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Klik lebih lanjut dude</a>
        </div>
      </div>
    </div>
  </header>

  <!-- About Section -->
  <section class="page-section bg-primary"id="about">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="text-white mt-0">Sukun</h2>
          <center><hr class="divider light my-4"></center>
          <br /><br />
          <p class="text-white-50 mb-4">Sukun adalah nama sejenis pohon yang berbuah. buah sukun tidak berbiji dan memiliki bagian yang empuk, yang mirip roti setelah dimasak/digoreng. Karena itu orang-orang eropa mengenalnya sebagai buah roti.</p>
          <a class="btn btn-light btn-xl js-scroll-trigger" href="form_pembayaran.php">Ayo Pesan!</a>
        </div>
      </div>
    </div>
    <br /><br /><br /><br />
  </section>
  <!-- Portfolio Section -->
  <section id="portfolio">
    <br>
      <div class="container">
      <h2 class="text-center mt-0">List Rasa</h2>
      <center><hr class="divider my-4"></center>
      <div class="row">
      </div>
    </div>
    <div class="container-fluid p-0">
      <div class="row no-gutters">
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/1.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails/1.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Rasa
              </div>
              <div class="project-name">
                Original
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/2.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails/2.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Rasa
              </div>
              <div class="project-name">
                Balado
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/3.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails/3.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Rasa
              </div>
              <div class="project-name">
                Keju
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/4.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails/4.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Rasa
              </div>
              <div class="project-name">
                Extra Pedas
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/5.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails/5.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Rasa
              </div>
              <div class="project-name">
                Rumput Laut
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/6.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails/6.jpg" alt="">
            <div class="portfolio-box-caption p-3">
              <div class="project-category text-white-50">
                Rasa
              </div>
              <div class="project-name">
                Jagung Bakar
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  <br /><br />
  </section>

  <!-- Call to Action Section -->
  <section class="page-section bg-dark text-white">
    <div class="container text-center">
       <h2 class="mb-4">Pilih Rasa Kripik Sukun yang akan di Pesan:</h2>
       <br /><br /><br />
      <center>
<div class="limiter">
    <div class="container-table100">
      <div class="wrap-table100">
        <div class="table100">
          <table id="t01">
            <thead>
             <tr class="table100-head">
              <th class="column1"><center>Id</center></th>
              <th class="column2"><center>Rasa</center></th>
              <th class="column3"><center>Harga</center></th>
              <th class="column4"><center>Quantity</center></th>
              <th class="column5"><center>Masukkan Keranjang</center></th>
             </tr>
            </thead>
<tbody>
  <?php while($product = mysqli_fetch_object($result)) { ?> 
  <tr>
    <td> <center><?php echo $product->id; ?> </center></td>
    <td> <center><?php echo $product->name; ?> </center></td>
    <td> <center>Rp.<?php echo $product->price; ?> </center></td>
    <td> <center><?php echo $product->quantity; ?> </center></td>
    <td> <center><a href="cart.php?id= <?php echo $product->id; ?> &action=add"><i class="fa fa-shopping-cart"></a></i></center></td>
  </tr>
</tbody>
  <?php } ?>
 </table>
</center>
    </div>
    <br /><br /><br /><br /><br />
  </section>

  <!-- Contact Section -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mt-0">Contact Us</h2>
          <hr class="divider my-4">
          <p class="text-muted mb-5">Jika ingin menanyakan lebih lanjut dipersonal chat kami/lewat gmail yang ada dibawah sini dude.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
          <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
          <div>WA : 087724762167</div>
        </div>
        <div class="col-lg-4 mr-auto text-center">
          <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
          <!-- Make sure to change the email address in anchor text AND the link below! -->
          <a class="d-block" href="xipan87@gmail.com">xipan87@gmail.com</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-light py-5">
    <div class="container">
      <div class="small text-center text-muted">Copyright &copy; 2019 - FIK , DRE , VAN , ROF .</div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/creative.min.js"></script>

</body>

</html>
