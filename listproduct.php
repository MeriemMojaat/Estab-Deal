<?php
include '../Controller/productc.php';
$productc = new productc();
if (isset($_GET['name']) && !empty($_GET['name'])) {
    $list = $productc->listproduct_search($_GET['name']);
    $name=$_GET['name'];
    $searchfound=1;
} else {
  $name='';
$list = $productc->listproduct();
$searchfound=0;
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.104.2">
  <title>list of products</title>

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
      <a class="navbar-brand" href="#">ESTAB'DEAL</a>
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


<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

 <!--[Start] Search input -->
 <div class="container">
  <!-- For demo purpose -->
  <!-- End -->


   <div class="row mb-5">
    <div class="col-lg-8 mx-auto">


        <!-- Custom rounded search bars with input group -->
        <form action="" method="GET">
          <div class="p-1 bg-light rounded rounded-pill shadow-sm mb-4">
            <div class="input-group">
              <input  type="text" name="name" id="name" placeholder="search" value="<?php echo $name; ?>" aria-describedby="button-addon1" class="form-control border-0 bg-light">
              <div class="input-group-append">
                <button id="button-addon1" type="submit" class="btn btn-link text-primary"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div>
        </form>
        <!-- End -->
    </div>
  </div> 
    <!--[End] Search input -->





    <div class="container text-center">
        <h1 class="pt-4">List of products </h1>
        <table class="table">
            <tr>
                <th> Name of the product </th>
                <th> Description </th>
                <th> Image </th>
                <th> Points </th>
                <th> Category </th>
                <th> Wishlist </th>
            </tr>

            <?php
            foreach ($list as $c) {
            ?>
                <tr>
                    <td> <?= $c['name']; ?> </td>
                    <td> <?= $c['description']; ?> </td>
                    <td> <img src="../assets/img/<?= $c['image'] ?>"  width="200" height="200"> </td>
                    <td> <?= $c['points']; ?> </td>
                    <td> <?= $c['category']; ?> </td>



                    <td>

                        <form method="POST" action="updateproduct.php">
                            <input type="submit" name="update" value="update">
                            <input type="hidden" value=<?PHP echo $c['id']; ?> name="id">
                        </form>
                    </td>
                    <td> <a href="details.php ?id=<?= $c['id']; ?>">Details</a> </td>

                    <td> <a href="deleteproduct.php ?id=<?= $c['id']; ?>">Delete</a> </td>
                    <td> <a href="managewishlist.php?action=add&pid=<?= $c['id']; ?>">Add to wishlist</a> </td>
                </tr>
            <?php
            } ?>
        </table>
        <center> <a class="btn btn-primary mt-4" href="addproduct.php">Add product </a> </center>
        <center> <a class="btn btn-primary mt-4" href="managewishlist.php">Check Wishlist </a> </center>
        <center> <a class="btn btn-primary mt-4" href="logout.php">Log Out </a> </center>
        
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>