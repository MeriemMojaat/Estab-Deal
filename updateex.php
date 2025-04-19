<?php
include '../Controller/exchangec.php';
include '../Model/exchange.php';
$error = "";

// create user
$user = null;

// create an instance of the controller
$userC = new exchangec();
if (
    isset($_POST["iduser"]) &&
    ($_POST["idproduct"]) &&
    ($_POST["productname"]) &&
    ($_POST["picture"]) 
) {
    if (
        !empty($_POST["iduser"]) &&
        !empty($_POST["idproduct"]) &&
        !empty($_POST["productname"]) &&
        !empty($_POST["picture"]) 
    ) {

        $user = new exchange($_POST['iduser'], $_POST['idproduct'], $_POST['productname'], $_POST['picture']);
        $userC->addp($user);
        header('Location:listex.php');
    } else
        $error = "missing information";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
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

            <?php
            if (isset($_POST['id'])) {
                $product = $userC->showDetails($_POST['id']);

            ?>

                <form action="" method="POST">
                    <table class="table" align="center">
                        <tr>
                            <td>
                                <label for="idexchange">Id product:
                                </label>
                            </td>
                            <td><input type="int" name="idexchange" id="idexchange" value="<?php echo $product['idexchange']; ?>" maxlength="20" readonly></td>
                        </tr>
                        <tr>
                            <td>
                                <label for="iduser">ID USER:
                                </label>
                            </td>
                            <td><input type="text" name="iduser" id="iduser" value="<?php echo $product['iduser']; ?>" maxlength="20"></td>
                        </tr>

                        <tr>
                            <td>
                                <label for="idproduct">ID PRODUCT:
                                </label>
                            </td>
                            <td>
                                <input type="text" name="idproduct" id="idproduct" cols="30" rows="5" value="<?php echo $product['idproduct']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="productname">Product Name:
                                </label>
                            </td>
                            <td><input type="text" name="productname" id="productname" value="<?php echo $product['productname']; ?>" ></td>
                        </tr>
                        <tr>
                            <td>
                                <label for="picture">Picture:
                                </label>
                            </td>
                            <td>
                                <input type="text" name="picture" id="picture" value="<?php echo $product['picture']; ?>">
                            </td>
                        </tr>

                       
                  
                      
                        <tr>
                            <td></td>
                            <td>
                                <input class="btn btn-success" type="submit" value="Update">
                            </td>
                            <td>
                                <input class="btn btn-danger" type="reset" value="Reset">
                            </td>
                        </tr>
                    </table>
                </form>
            <?php
            }
            ?>
            <center><a class="btn btn-primary mt-2" href="listproduct.php">Back to list</a></center>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>


    </body>

</html>