<?php

include_once '../../Model/Panier.php';
include_once '../../Controller/PanierC.php';
$panierC = new panierC();
$count=$panierC->CountPanier();

if (
    isset($_POST["ajouterPa"])
) 
    {
        $panier = new panier(
            15,
            15,
            $_POST['quantite']
        );
        $panierC->ajouterPanier($panier);
        
        header('Location:menu.php');
    }
    else
        $error = "Missing information";


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>formula4</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/icone.png" >
  <link href="assets/img/icone.png" >

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="nnn.css" />

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body style="background : darkgrey">

  <!-- ======= Top Bar ======= -->
  <section id="topbar" style="background : AntiqueWhite" class="d-flex align-items-center fixed-top topbar-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
    <i class="bi bi-phone d-flex align-items-center"><span>+216 70 555 000</span></i>
        <i class="bi bi-clock ms-4 d-none d-lg-flex align-items-center"><span>Lun-Sam: 11h00 - 23h00 </span></i>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent"style="background : AntiqueWhite">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between"style="background : AntiqueWhite">

      <div class="logo me-auto" style="background : AntiqueWhite">
        <a href="index.html"><img src="assets/img/logoo.png" alt=""></a>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0"style="background : AntiqueWhite">
        <ul>
          <li><a class="nav-link scrollto" href="#hero">Accueil</a></li>
          <li><a class="nav-link scrollto" href="#about">A propos</a></li>
          <li><a class="nav-link scrollto active" href="menu.php">Menu</a></li>
          <li><a  href="panier.php" class="nav-link scrollto" >Panier<span class="ay"><?php foreach($count as $c){ echo $c['nbr'];} ?></span></a></li>
        </ul>
      </nav><!-- .navbar -->

      <a href="#book-a-table" class="book-a-table-btn scrollto">Reserver</a>
    </div>
  </header>
  <!-- End Header -->


  <main id="main">
    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      
      <div class="container">

        <div class="section-title">
          <h2>Check our <span>CARS</span></h2>
        </div>
       
        <div class="row menu-container">
       
         <form method="post">
          <div class="col-lg-6 menu-item filter-starters">
            <div class="menu-content">
              <a href="#">Lamborguini</a><span>20 000TND</span>
            </div>
            <div >
              info
            </div>
            <br/>
   <br/>
   <br/>
            <center>
            <img width="30%" src="00.jpg" alt="">
            </center>
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="menu-flters">
                <input type="number" name="quantite" placeholder="Quantite">
                <input type="submit" name="ajouterPa" class = "id_product" value="ajouter au panier">
              </ul>
            </div>
          </div>
          </form>
          
</div>
      </div>
    </section><!-- End Menu Section -->
    <br/>
   <br/>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="">
      <h3 >BOOK NOW</h3>
      <p>this project is made by our group</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      
    </div>
  </footer><!-- End Footer -->

  

</body>

</html>