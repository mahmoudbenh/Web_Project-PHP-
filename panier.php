<?php

include_once '../../Model/Panier.php';
include_once '../../Controller/PanierC.php';
$panierC = new panierC();

$listeC = $panierC->afficherPanier();
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
  <link href="assets/img/icone.png" rel="icon">
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

<body style="background : Darkgrey">

  <!-- ======= Top Bar ======= -->
  <section id="topbar" style="background : Darkgrey" class="d-flex align-items-center fixed-top topbar-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
    <i class="bi bi-phone d-flex align-items-center"><span>+216 70 555 000</span></i>
        <i class="bi bi-clock ms-4 d-none d-lg-flex align-items-center"><span>Lun-Sam: 11h00 - 23h00 </span></i>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent"style="background : white">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <div class="logo me-auto"style="background : white">
        <a href="index.html"><img src="assets/img/logoo.png" alt="" class="img-fluid"style="background : white"></a>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0"style="background : white">
        <ul>
          <li><a class="nav-link scrollto" href="#hero">Accueil</a></li>
          <li><a class="nav-link scrollto" href="#about">A propos</a></li>
          <li><a class="nav-link scrollto" href="menu.php">Menu</a></li>
          <li><a  href="panier.php" class="nav-link scrollto active" >Panier</a></li>
        </ul>
      </nav><!-- .navbar -->

      <a href="#book-a-table" class="book-a-table-btn scrollto">Reserver</a>
    </div>
  </header>
  <!-- End Header -->


  <main id="main">
   <br/>
   <br/>
   <br/>
   <br/>
   <br/>
   <br/>
  <section id="panier" class="panier">
      <table align="center" border="1">
      <tr>
            <td>id</td>
            <td>idClient</td>
            <td>RefProduit</td>
            <td>Quantite</td>
          </tr>
        <?php foreach($listeC as $pa){ ?>
       
        <tr>
          <td border="1"><?php echo $pa['id']; ?></td>
         
          <td><?php echo $pa['idClient']; ?></td>
         
          <td><?php echo $pa['refProduit']; ?></td>
          
          <td><?php echo $pa['quantite']; ?></td>

          <td><a href="deletePanier.php?id=<?php echo $pa['id']; ?>"><img src="../Back/delete.png" height="50"></a></td>

        </tr>
        
<?php } ?>
      </table>
      <center><a href="http://localhost/CRUD/Front/Views/addpaiement.php">
   <input class="book-a-table-btn scrollto" type="submit" value="Passer commande"></center>
    </section>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
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
      
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>