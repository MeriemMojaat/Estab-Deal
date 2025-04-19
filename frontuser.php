<?php

include '../Controller/UserC.php';

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
   isset($_POST["email"]) &&
    isset($_POST["password"]) 
) {
    if (
        !empty($_POST['firstName']) &&
        !empty($_POST["lastName"]) &&
        !empty($_POST["address"]) &&
        !empty($_POST["phonenumb"]) &&
/*         !empty($_POST["dob"]) &&
 */        !empty($_POST["email"]) &&
        !empty($_POST["password"]) 
    ) {
        $user = new User(
            $_POST['firstName'],
            $_POST['lastName'],
            $_POST['address'],
            $_POST['phonenumb'],
            $_POST['email'],
            $_POST['password']
        );
        $userC->addUser($user);
        header('Location:homeuser.php');
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
    <img src="logo web copy1.png" alt="" width="90" height="45">

<h1>login Form</h1>
    <div id="error">
        <?php echo $error; ?>
    </div>
    <!-- <div class="form-box">  -->
     <form action="" method="POST">
        <table border="1" align="center" style="background-color:#026670ff">

            <tr>
                <td>
                    <label for="firstName">First Name
                    </label>
                </td>
                <td><input type="text" name="firstName" id="firstName" maxlength="20"></td>
            </tr>
            <tr>
                <td>
                    <label for="lastName">Last Name
                    </label>
                </td>
                <td><input type="text" name="lastName" id="lastName" maxlength="20"></td>
            </tr>
            <tr>
                <td>
                    <label for="address">Address
                    </label>
                </td>
                <td>
                    <input type="text" name="address" id="address">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="phonenumb">Phone Number
                    </label>
                </td>
                <td>
                    <input type="number" name="phonenumb" id="phonenumb">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="email">Email
                    </label>
                </td>
                <td>
                    <input type="text" name="email" id="email" pattern=".+@esprit.tn" >
                </td>
            </tr>

            <tr>
                <td>
                    <label for="password">Password
                    </label>
                </td>
                <td>
                    <input type="password" name="password" id="password">
                </td>
            </tr>

            <tr align="center">
                <td>
                    <input type="submit" value="Sign Up">
                </td>
                <td>
                    <a href="verification.php">Forget password?</a>
                </td>
                
            </tr>
            <tr>
                <!-- <td>
                <a href="login.php">LOGIN</a>
                </td> -->
        <td>
        <a href="logout.php">LOGOUT</a>

        </td></tr>
        </table>
      </form>
    <!-- </div> -->
</body>

</html>