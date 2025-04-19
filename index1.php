<?php
include 'C:\Users\tcp\Desktop\SQL_New\htdocs\product\config.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESTAB'DEAL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        
</head>

<body>
    <!-- ======= Navbar1 ======= -->
    <nav class="navbar navbar-expand-lg bg-light">
        <img class="d-block mx-auto mb-4 center"
            src="../assets/img/logo.png" alt="" width="100"
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
            <a class="nav-link" href="index1.php">Home </a>
          </li>
                    <li class="nav-item">
                        <a class="nav-link" href="add.php">Basket </a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="forum/">Forum </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="afficher_post.php">Posts </a>
                    </li>
                  
                    <li class="nav-item">
                        <a class="nav-link" href="addproduct.php">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="addpoints.php">Points</a>
                    </li>
                    <!-- ======= Navbar 2======= -->
                    </li>  
                <?php 
            if(!isset($_SESSION['client']))
            { 
            ?>
            <li class="nav-item">
            <a class="nav-link" href="Login.php">Sign In</a>
            </li>  
            <li class="nav-item">
            <a class="nav-link" href="signup.php">Sign Up</a>
            </li>  
            <?php
            }
            else
            {
            ?>
            <li class="nav-item">
            <a class="nav-link" href="MyProfil.php">My Profile </a>
            </li>  
            <li class="nav-item">
            <a class="nav-link" href="Disconnect.php">Logout </a>
            </li>  
            <?php
            }
            ?>
      
        </ul>
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
    <div class="container">
  <main>
      <div>      
      <?php 
      if(!isset($_SESSION['client']))
      { 
      ?>
      <h4>you are NOT connected</h4>
      <?php
      }
      else
      {
        ?>
      <h4>you are connected</h4>
        <?php
      }
      ?>
      </div>
</main>
   <center> <h2>TOP EXCHANGED PRODUCTS</h2></center>
    <!-- ======= Navbar ======= -->
<div class="row col-12 mt-4">
    <div class="col-3">
        <div class="card" style="width: 18rem;">
            <img src="assets/img/img_4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">NIKE TRAINER</h5>
              <p class="card-text">Black, Stylish, GET YOURS BEFORE WE RUN OUT OF STOCK.</p>
              <a href="addex.php" class="btn btn-primary">Exchange</a>
            </div>
          </div>

    </div>
    <div class="col-3">
        <div class="card" style="width: 18rem;">
            <img src="assets/img/img_3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Cocooil - Body oil</h5>
              <p class="card-text">Body oil with a coconut scent wrapped in an aesthetically pleasing packaging.</p>
              <a href="addex.php" class="btn btn-primary">Exchange</a>
            </div>
          </div>
    </div>
    <div class="col-3">
        <div class="card" style="width: 18rem;">
            <img src="../assets/img/img_6.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">BT SPEAKER</h5>
              <p class="card-text">Enjoy ur happy moments with some music with High Quality.</p>
              <a href="addex.php" class="btn btn-primary">Exchange</a>
            </div>
          </div>
        
    </div>
    <div class="col-3">
        <div class="card" style="width: 18rem;">
            <img src="../assets/img/12.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">DISH BLOCK</h5>
              <p class="card-text">For cleaner dishes and more minimalistic kitchen vibe.</p>
              <a href="addex.php" class="btn btn-primary">Exchange</a>
            </div>
          </div>
        
    </div>
    <div class="col-3">
        <div class="card" style="width: 18rem;">
            <img src="../assets/img/14.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">PRADA BAG</h5>
              <p class="card-text">The famous must-have bag by PRADA. Bring your look back to life.</p>
              <a href="addex.php" class="btn btn-primary">Exchange</a>
            </div>
          </div>
        
    </div>
    <div class="col-3">
        <div class="card" style="width: 18rem;">
            <img src="../assets/img/15.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">WD WATCH</h5>
              <p class="card-text">Achieve the elegance with your look putting on this WD watch .</p>
              <a href="addex.php" class="btn btn-primary">Exchange</a>
            </div>
          </div>
        
    </div>
    
</div>
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