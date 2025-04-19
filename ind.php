<?php

include './Controller/userC.php';

$error = "";

// create user
$user = null;

// create an instance of the controller
$userC = new userC();
if (
    isset($_POST["firstName"]) &&
    isset($_POST["lastName"]) &&
    isset($_POST["address"]) &&
    isset($_POST["phonenumb"]) &&
    isset($_POST["dob"])
    
) {
    if (
        !empty($_POST['firstName']) &&
        !empty($_POST["lastName"]) &&
        !empty($_POST["address"]) &&
        !empty($_POST["phonenumb"]) &&
        !empty($_POST["dob"])
        
    ) {
        $user = new user(
            null,
            $_POST['firstName'],
            $_POST['lastName'],
            $_POST['address'],
            $_POST['phonenumb'],
            new DateTime($_POST['dob'])
            
        );
        $userC->adduser($user);
        header('Location:Listuser.php');
    } else
        $error = "Missing information";
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
<div id="error">
        <?php echo $error; ?>
    </div>
    <div class="form-box">
        <h1>Login</h1>

        <table class="center">

            <tr>
                <td>
                    <h4>
                        <label for="firstName">First Name</label>
                    </h4>
                </td>
                <td><input type="text" name="firstName" id="firstName" maxlength="20"></td>
            </tr>
            <tr>
                <td>
                    <h4> <label for="lastName">Last Name:
                        </label>
                    </h4>
                </td>
                <td><input type="text" nahtme="lastName" id="lastName" maxlength="20"></td>
            </tr>
            <tr>
                <td>
                    <h4>
                        <label for="address">Address:</label>
                    </h4>
                </td>
                <td>
                    <input type="text" name="address" id="address">
                </td>
            </tr>
            <tr>
                <td>
                    <h4>
                        <label for="phonenumb">Phone Number</label>
                    </h4>
                </td>
                <td>
                    <input type="number" name="phonenumb" id="phonenumb">
                </td>
            </tr>
            <tr>
                <td>

                    <h4>
                        <label for="dob">Date of Birth</label>
                    </h4>
                </td>
                <td>
                    <input type="date" name="dob" id="dob">
                </td>
            </tr>
            <table class="center">
                <tr align="center">

                    <td>
                        <input type="submit" value="SUBMIT">
                    </td>
                </tr>
            </table>
        </table>

    </div>
</body>

</html>