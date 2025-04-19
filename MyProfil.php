<?php 
session_start();


if(!isset($_SESSION['idclient']))
{

    header("location: Login.php");
}

include "../Controller/UserC.php";

    $userC = new UserC();
    $result=$userC->getthemail($_SESSION['clientemail']);
    foreach($result as $row){
        $id=$row['iduser'];
        $nom=$row['firstName'];
        $prenom=$row['lastName'];
        $email=$row['email'];
        $mdp=$row['password'];
        $tel=$row['phonenumb'];
        $adresse=$row['address'];
        $image=$row['image'];
        
        }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>About ESTAB'DEAL</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=https://fonts.googleapis.com/css?family=Inconsolata:400,500,600,700|Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: MyPortfolio - v4.9.1
  * Template URL: https://bootstrapmade.com/myportfolio-bootstrap-portfolio-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

<?php include 'navBar.php'; ?>
<!-- ======= Navbar ======= -->

  <main id="main">

    <section class="section pb-5">
      <div class="container">
        <div class="row mb-5 align-items-end">
          <div class="col-md-6" data-aos="fade-up">

            <h2>Your Profile</h2>
            <p class="mb-0">Hello <?php echo $nom ; ?>,</p>
          </div>

        </div>

          <div class="col-md-7 mb-5 mb-md-0" data-aos="fade-up">
            <p><img src="<?php echo $image ; ?>" alt="Image" class="img-fluid"></p>
            <p>Name & Last Name : <?php echo $nom ; ?> <?php echo $prenom ; ?></p>
            <p>Adresse : <?php echo $adresse ; ?></p>
            <p>Phone : <?php echo $tel ; ?></p>

          </div>

        </div>

      </div>

    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer class="footer" role="contentinfo">
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>