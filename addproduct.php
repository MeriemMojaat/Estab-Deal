<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.104.2">
  <title>Basket</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/checkout/">


  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=https://fonts.googleapis.com/css?family=Inconsolata:400,500,600,700|Raleway:400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">




  <link href="/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  <!-- Favicons -->
  <link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
  <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
  <meta name="theme-color" content="#712cf9">


  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }
  </style>

</head>

<body>

  <nav class="navbar navbar-expand-lg bg-light">
  <img class="d-block mx-auto mb-4 center" src="logo.png" alt="" width="100" height="65">
    <div class="container-fluid">
      <a class="navbar-brand" href="index1.php">ESTAB'DEAL</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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


        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
</html>
<?php
include '../Controller/productc.php';
include '../Model/product.php';
$productc = new productc();
if ((isset($_POST['name']) && !empty($_POST['name'])) &&
 (isset($_POST['description']) && !empty($_POST['description'])) &&
 isset($_POST['image'])&& !empty($_POST['image']) &&
 isset($_POST['points'])&& !empty($_POST['points'])&& 
 isset($_POST['category'])&& !empty($_POST['category'])
 ) {
  //if the user clicked on the save button
  //see if the information came from the form

  $product = new product($id= null,$_POST['name'], $_POST['description'], $_POST['image'], $_POST['points'],  $_POST['category']); //new DateTime to covert date from string to date

  $productc->add($product);
}
/*include '../controller/productc.php';
include '../model/product.php';
$error = "";
$product = null;
+
$productc= new productc();
if (
    isset($_POST["name"]) &&
    ($_POST["description"]) &&
    ($_POST["image"])&&
    ($_POST["points"]) &&
    ($_POST["category"]) 
) {
    if (
        !empty($_POST["name"]) &&
        !empty($_POST["description"]) &&
        !empty($_POST["image"]) &&
        !empty($_POST["points"]) &&
        !empty($_POST["category"]) 
     ) 
     {
        $product = new product(
     $_POST['name'],
    $_POST['description'],  $_POST['image'],
    $_POST['points'],
    $_POST['category'],
        );
        $productc->add($product);
        header('Location:listproduct.php');
    }
        else
        $error="missing information";
    
}*/


?>






    <br>
    <br>
    <center>
        <form action="" method="POST">
            <!--save the information in an array named post-->
            <input class="form-control mb-3 w-25" type="string" placeholder="enter the name of product" name="name">
            <input class="form-control mb-3 w-25" type="text" placeholder="enter the description" name="description">
            <input class="form-control mb-3 w-25" type="file" id="image" placeholder="enter the image" name="image" onchange="readURL(this);">
            <input class="form-control mb-3 w-25" type="int" placeholder="enter the points" name="points">
            <input class="form-control mb-3 w-25" type="int" placeholder="enter the category" name="category">
            



            <input class="btn btn-success" type="submit" value="Save">
            <input class="btn btn-danger" type="reset" value="Reset">
        </form>
        <a class="btn btn-dark mt-4" href="listproduct.php">Go to list</a>
    </center>


<!-- ======= Footer ======= -->
<footer class="footer" role="contentinfo">
   
        
   <div class="col-sm-6 social text-md-end">
     <a href="#"><span class="bi bi-twitter"></span></a>
     <a href="#"><span class="bi bi-facebook"></span></a>
     <a href="#"><span class="bi bi-instagram"></span></a>
     <a href="#"><span class="bi bi-linkedin"></span></a>
   </div>
 </div>
</div>
</footer>

    

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>

</html>