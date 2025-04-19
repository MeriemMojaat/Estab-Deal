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
    <script src="index.js"></script>

</head>

<body>
    


 <div id="error">
        <?php echo $error; ?>
        </div>
    <div class="form-box">

        <h1>Login</h1>

        <table class="center">

            <tr>
                <th>
                    <label for="FName">First Name </label>
                </th>
                <td>
                    <input type="text" name="FName" id="FName" minlength="3" maxlength="20" size="10" required>
                </td>
            </tr>

            <tr>
                <th>
                    <label for="lName">Last Name </label>
                </th>
                <td>
                    <input type="text" name="LName" id="LName" minlength="3" maxlength="20" size="10" required>
                </td>
            </tr>

            <tr>
                <th>
                    <label>Email </label>
                </th>

                <td>
                    <input type="email" required>
                </td>
            </tr>

            <tr>
                <th>
                    <label>Password </label>
                </th>

                <td>
                    <input type="password" step="0.25" min="0" max="20" required>
                </td>
            </tr>

            <tr>
                <th>
                    <label for="Address"> Address</label>
                </th>
                <td>
                    <textarea name="Address" id="Address" cols="30" rows="5"></textarea>
                </td>

            </tr>

            <tr>
                <th>
                    <label>Phone Number </label>
                </th>
                <td>
                    <input type="number" step="0.25" min="0" max="20" required>
                </td>
            </tr>

            <tr>
                <th>
                    <label>Date of Birth </label>
                </th>
                <td>
                    <input type="date" step="0.25" min="0" max="20" required>
                </td>
            </tr>

        </table>
        <br>
        <table class="center">
            <th>
                <button type="submit" onclick="move()">Login</button>
            </th>

        </table>

    </div>

    <table class="center">
    <tr align="center"> 
    <th>
            <h2>Contact Us </h2>
        </th>
        <th>
            <a href="mailto:esprit@esprit.tn">email:esprit@esprit.tn</a>
        </th>
        </tr>  
    </table>

</body>

</html>