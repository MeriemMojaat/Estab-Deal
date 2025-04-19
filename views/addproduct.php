
<?php
include '../controller/productc.php';
include '../model/product.php';
$productc = new productc();
if ((isset($_POST['name']) && !empty($_POST['name'])) &&
 (isset($_POST['description']) && !empty($_POST['description'])) &&
 isset($_POST['image'])&& !empty($_POST['image']) &&
 isset($_POST['points'])&& !empty($_POST['points'])&& 
 isset($_POST['category'])&& !empty($_POST['category'])
 ) {
  //if the user clicked on the save button
  //see if the information came from the form

  $product = new product($id= null,$_POST['name'], $_POST['description'], $_POST['image'], $_POST['points'], $_POST['category']); //new DateTime to covert date from string to date

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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <title>EStab'Deal</title>
</head>

<body>
<!-- ======= Navbar1 ======= -->
<nav class="navbar navbar-expand-lg bg-light">
        <img class="d-block mx-auto mb-4 center"
            src="C:\Users\tcp\Desktop\SQL_New\htdocs\trythis\logo.png" alt="" width="100"
            height="65">
        <div class="container-fluid"> 
            <a class="navbar-brand" href="#">ESTAB'DEAL</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="works.html">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">Services </a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.html">About us </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact </a>
                    </li>
                    <!-- ======= Navbar 2======= -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdpwn" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Categories
                        </a>
                        <ul class="dropdown-menu"  aria-labelledby="navbarDropdown">
                       
                           <li><a class="dropdown-item" href="#">Clothes</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Accessories</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Decoration</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Small Business</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Hi Tech</a></li>
                            <li><hr class="dropdown-divider"></li>
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






    <br>
    <br>
    <center>
        <form action="" method="POST">
            <!--save the information in an array named post-->
            <input class="form-control mb-3 w-25" type="string" placeholder="enter the name of product" name="name">
            <input class="form-control mb-3 w-25" type="string" placeholder="enter the description" name="description">
            <input class="form-control mb-3 w-25" type="string" placeholder="enter the image" name="image">
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