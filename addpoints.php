<?php
include_once '../Model/points.php';
include_once '../Controller/pointsp.php';

$error = "";

// create user
$user = null;

// create an instance of the controller
$userC = new pointsp();
if (
    isset($_POST["id_user"]) &&
    isset($_POST["nb_points"]) &&
     isset($_POST["idexchange"]) 
) {
    if (
        !empty($_POST["id_user"]) &&
        !empty($_POST["nb_points"])&&
        !empty($_POST["idexchange"]) 
    ) {
        $user = new points(
            $_POST['id_user'],
            $_POST['nb_points'],
            $_POST["idexchange"]
        );
         $userC->add($user);
       
       header('Location:listpoints.php');
    } else
        $error = "Missing information";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>POSTS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/logo.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=https://fonts.googleapis.com/css?family=Inconsolata:400,500,600,700|Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: MyPortfolio - v4.9.1
  * Template URL: https://bootstrapmade.com/myportfolio-bootstrap-portfolio-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
 <!-- ======= Navbar1 ======= -->
  <nav class="navbar navbar-expand-lg bg-light">
    <img class="d-block mx-auto mb-4 center" src="..\assets\img\logo.png" alt="" width="100" height="65">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">ESTAB'DEAL</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link" href="index1.php">Home </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About us </a>
          </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="services.html">Services </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.html">Contact </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="listpoints.php">List Points </a>
        </li>
	
         <!-- ======= Navbar 2======= -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categories
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Clothes</a></li>
              <li><a class="dropdown-item" href="#">Accessories</a></li>
              <li><a class="dropdown-item" href="#">Decoration</a></li>
              <li><a class="dropdown-item" href="#">Small Business</a></li>
              <li><a class="dropdown-item" href="#">Hi Tech</a></li>
              <li><a class="dropdown-item" href="#">Branding</a></li>
            </ul>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li> -->
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <!-- ======= Navbar ======= -->
<!DOCTYPE html>
<html lang="en">
<link href="style.css" rel="stylesheet">
 <img class="d-block mx-auto mb-4 center" src="logo.png" alt="" width="100" height="65">

            <div class="container" > 
            <div class="testimonial-wrap">
                <div class="testimonial">
<blockquote>

<form action="" style="border:2px solid #ccc "method="POST">
    <div class="container">
        <p>User points management</p>
        <hr>

        ID USER:<br>
        <input type="int" name="id_user" id="id_user">
        <br>
        
        NUMBER OF POINTS:<br>
        <input type="int" name="nb_points" id="nb_points">
        <br>
        ID EXCHANGE:<br>
        <input type="int" name="idexchange" id="idexchange">
        <br>
        
        <input type="submit" class="action-button shadow animate green" name="submit" value="Submit"
            onclick="return verif();">
    </div>
</form>
</blockquote>
</div>
</div>
</div>
</body>

</html>