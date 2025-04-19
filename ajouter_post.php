<?php
    include_once '../Model/post.php';
    include_once '../Controller/postC.php';

    $error = "";

    // create user
    $user = null;

    // create an instance of the controller
    $userC = new postC();
    if (
        isset($_POST["id_user"]) && 
        isset($_POST["first_name"]) &&
        isset($_POST["date"]) && 
        isset($_POST["topic"]) && 
        isset($_POST["picture_post"]) &&
        isset($_POST["id_react"])
    ) {
        if (
            !empty($_POST["id_user"]) && 
            !empty($_POST["first_name"]) && 
            !empty($_POST["date"]) && 
            !empty($_POST["topic"]) && 
            !empty($_POST["picture_post"]) && 
            !empty($_POST["id_react"])
        ) {
            $user = new post(
                $_POST['id_user'],
                $_POST['first_name'], 
                $_POST['date'],
                $_POST['topic'],
                $_POST['picture_post'],
                $_POST['id_react']
            );
            $userC->ajouterpost($user);
            header('Location:afficher_post.php');
        }
        else
            $error = "Missing information";
    }  
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Add Post</title>
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
          <a class="nav-link" href="afficher_post.php">POSTS</a>
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
    
  <main id="main">
                        <body>
                            <div id="error">
                                <?php echo $error; ?>
                            </div>

                            <form action="" style="border:2px solid #ccc" method="POST">
                                <div class="container">
                                    <p>Please complete all fields:</p>
                                    <hr>
                                    
                                    
                                    <br>

                                    ID User:<br>
                                    <input type="text" name="id_user" id="id_user">
                                    <br>
                                    First Name:<br>
                                    <input type="text" name="first_name" id="first_name">
                                    <br>
                                    Date:<br>
                                    <input type="date" name="date" id="date">
                                    <br>
                                    Topic:<br>
                                    <input type="text" name="topic" id="topic">
                                    <br>
                                    Picture:<br>
                                    <input type="file" name="picture_post" id="picture_post" onchange="readURL(this);">
                                    <img id="blah" alt="your image" />
                                    <br>
                                    ID React:<br>
                                    <input type="text" name="id_react" id="id_react">
                                    <br>

                                    <input type="submit" class="action-button shadow animate green" name="submit" value="ADD" onclick="return verif();">
                                </div>
                            </form>



                        </body>

               
                        
                
    <!-- ======= Testimonials Section ======= -->
    <section class="section pt-0">
      <div class="container">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial">
                  <img src="../assets/img/person_1.jpg" alt="Image" class="img-fluid">
                  <blockquote>
                    <p>Hi ! I just want to say that I find your product to be amazing.Thanks so much for providing such great features here and keep it up.</p>
                  </blockquote>
                  <p>&mdash; Jean Hicks</p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial">
                  <img src="../assets/img/person_2.jpg" alt="Image" class="img-fluid">
                  <blockquote>
                    <p>Beautiful product with much attention to detail.You can see that there is a lot of passion behind this company.</p>
                  </blockquote>
                  <p>&mdash; Chris Stanworth</p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->


       
        <div class="col-sm-6 social text-md-end">
          <a href="#"><span class="bi bi-twitter"></span></a>
          <a href="#"><span class="bi bi-facebook"></span></a>
          <a href="#"><span class="bi bi-instagram"></span></a>
          <a href="#"><span class="bi bi-linkedin"></span></a>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>
