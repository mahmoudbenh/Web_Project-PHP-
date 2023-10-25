<?php

include_once '../../Model/Panier.php';
include_once '../../Controller/PanierC.php';


 if(isset($_GET['cin'])){
   $panierC = new panierC();
   $listeC = $panierC->afficherPanierDetail($_GET['cin']);
 
 foreach($listeC as $panier){

$panierC = new panierC();
if (
    isset($_POST["idClient"]) && 
    isset($_POST["refProduit"]) &&
    isset($_POST["quantite"]) 
) {
    if (
        !empty($_POST["idClient"]) && 
        !empty($_POST["refProduit"]) &&
        !empty($_POST["quantite"]) 
    ) {
        $panier = new panier(
            $_POST['idClient'],
            $_POST['refProduit'],
            $_POST['quantite']
        );
        if( strlen($_POST['idClient'])!=2 || strlen($_POST['refProduit'])!=2 || $_POST['quantite']<1){
            echo "<script>alert('Verifiez vos données');</script>";}
            else{
        $panierC->ajouterPanier($panier);
        
        header('Location:Panier.php');}
    }
    else
        $error = "Missing information";
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="wcinth=device-wcinth, initial-scale=1.0" name="viewport">

  <title>Back panier</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/icon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="aya.css" />

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section cin="topbar" style="background : black" class="d-flex align-items-center fixed-top topbar-transparent">
    <div class="container-flucin container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
    <i class="bi bi-phone d-flex align-items-center"><span>+216 70 555 000</span></i>
        <i class="bi bi-clock ms-4 d-none d-lg-flex align-items-center"><span>Lun-Sam: 11h00 - 23h00 </span></i>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header cin="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-flucin container-xl d-flex align-items-center justify-content-between">

      <div class="logo me-auto">
        <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-flucin"></a>
      </div>

      <nav cin="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Accueil</a></li>
          <li><a class="nav-link scrollto" href="#about">A propos</a></li>
          <li><a class="nav-link scrollto" href="menu.php">Menu</a></li>
          <li><a  href="aya.php" class="scrollto " >Panir</a></li>
        </ul>
      </nav><!-- .navbar -->

      <a href="#book-a-table" class="book-a-table-btn scrollto">Reserver</a>
    </div>
  </header>
  <!-- End Header -->
 
  <main cin="main">
    <!-- ======= Hero Section ======= -->
    
    <section cin="panier" class="panier">
      

   
    <div class="container">
  <h2>Modifier Panier</h2>
  <form method="post">
    <div class="form-group">
      <label for="idClient">idClient:</label>
      <input type="number" class="form-control" cin="idClient" placeholder="idClient..." name="idClient" value=<?php echo $panier['idClient'];?>>
    </div>
    <div class="form-group">
      <label for="refProduit">RefProduit:</label>
      <input type="number" class="form-control" cin="refProduit" placeholder="refProduit..." name="refProduit" value=<?php echo $panier['refProduit'];?>>
    </div>
    <div class="form-group">
      <label for="quantite">Quantite:</label>
      <input type="number" class="form-control" cin="quantite" placeholder="Quantite..." name="quantite" value=<?php echo $panier['quantite'];}?>>
    </div>
    <br>
   <center>
   <input class="book-a-table-btn scrollto" type="submit" value="Modifier"></center>
  </form>
</div>
</section>
    </main>
   <!-- ======= Footer ======= -->
   <footer cin="footer">
    <div class="container">
      <h3>BOOK YOUR CAR</h3>
      <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/valcinate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
<?php } ?>