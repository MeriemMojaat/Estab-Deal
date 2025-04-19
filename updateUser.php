<?php

include '../Controller/UserC.php';
include '../Model/User.php';



session_start();

if(!isset($_SESSION['login']))
{

    header("location: LoginAdmin.php");
}

if (isset($_GET['id'])){

    $userC = new UserC();
    $result=$userC->getbyid($_GET['id']);
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
    }
$error = "";

// create user
$user = null;

// create an instance of the controller
$userC = new UserC();
if (
    isset($_POST["firstName"]) &&
    isset($_POST["lastName"]) &&
    isset($_POST["address"]) &&
    isset($_POST["phonenumb"]) &&
    isset($_POST["email"]) 
    ) {
    if (
        !empty($_POST['firstName']) &&
        !empty($_POST["lastName"]) &&
        !empty($_POST["address"]) &&
        !empty($_POST["phonenumb"]) &&
        !empty($_POST["email"]) 
    ) {
        $user = new User(
            $_POST['firstName'],
            $_POST['lastName'],
            $_POST['address'],
            $_POST['phonenumb'],
            $_POST['email'],
            ""
        );
        $userC->updateUser($user, $_GET["id"]);
        header('Location:ListUsers.php');
    } else
        $error = "Missing information";
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="user.css">
<title>User Display</title>
</head>

<body>
<?php include 'navBarAdmin.php'; ?>
  <!-- ======= Navbar ======= -->
      <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['iduser'])) {
        $user = $userC->showUser($_POST['iduser']);

    ?>
 <div class="form-box">
        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="firstName">First Name:
                        </label>
                    </td>
                    <td><input type="text" name="firstName" id="firstName" value="<?php echo $nom; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="lastName">Last Name:
                        </label>
                    </td>
                    <td><input type="text" name="lastName" id="lastName" value="<?php echo $prenom; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="address">Address:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="address" value="<?php echo $adresse; ?>" id="address">
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="phonenumb">Phone Number:
                        </label>
                    </td>
                    <td>
                        <input type="number" name="phonenumb" value="<?php echo $tel; ?>" id="phonenumb">
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="email">Email:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="email" value="<?php echo $email; ?>" id="email">
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Update">
                    </td>
                    
                </tr>
            </table>
        </form>
    </div>
    <?php
    }
    ?>
</body>

</html>