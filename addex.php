<?php
include_once '../Model/exchange.php';
include_once '../Controller/exchangec.php';

$error = "";

// create user
$user = null;

// create an instance of the controller
$userC = new exchangec();
if (
    isset($_POST["iduser"]) &&
    isset($_POST["idproduct"]) &&
    isset($_POST["productname"]) &&
    isset($_POST["picture"])
) {
    if (
        !empty($_POST["iduser"]) &&
        !empty($_POST["idproduct"]) &&
        !empty($_POST["productname"]) &&
        !empty($_POST["picture"])
    ) {
        $user = new exchange(
            $_POST['iduser'],
            $_POST['idproduct'],
            $_POST['productname'],
            $_POST['picture'],
        );
        $userC->addp($user);
        header('Location:listex.php');
    } else
        $error = "Missing information";
}
?>

<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXCHANGE</title>
    <!-- Favicons -->
    <link href="../assets/img/logo.png" rel="icon">
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
        <img class="d-block mx-auto mb-4 center" src="../assets/img/logo.png" alt="" width="100" height="65">
        <div class="container-fluid">
            <a class="navbar-brand" href="index1.php">ESTAB'DEAL</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
            <a class="nav-link" href="index1.php">Home </a>
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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdpwn" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categories
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                            <li><a class="dropdown-item" href="#">Clothes</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Accessories</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Decoration</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Small Business</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Hi Tech</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
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
            <input class="form-control mb-3 w-25" type="int" placeholder="enter the iduser" name="iduser" id="iduser">
            <input class="form-control mb-3 w-25" type="int" name="idproduct" placeholder="enter the id of the product" id="idproduct">
            <input class="form-control mb-3 w-25" type="text" name="productname" placeholder="enter the name of product" id="productname">
            <input class="form-control mb-3 w-25" type="file" id="image" placeholder="enter the image" name="picture" onchange="readURL(this);">
            
            <input class="btn btn-success" type="submit" value="Save">
            <input class="btn btn-danger" type="reset" value="Reset">
            </div>
        </form>
        <a class="btn btn-dark mt-4" href="listex.php">Go to list</a>
    </center>
</body>

</html>