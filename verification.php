<?php

include '../Controller/UserC.php';

$error = "";

// create user
$user = null;

// create an instance of the controller
$userC = new UserC();
if (
   
    isset($_POST["password"]) 
) {
    if (
       
        !empty($_POST["password"]) 
    ) {
        $user = new User(
           
            $_POST['password']
        );
        $userC->addUser($user);
        header('Location:homeuser.php');
    }     $error = "Missing information";
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="user.css">

    <script>  
        function verifyPassword() {  
            var npw = document.getElementById("newPassword").value;  
            var cnpw = document.getElementById("confirmNewPassword").value;  
        
        
            
            
            //check empty password field  
            if(npw == "") {  
                document.getElementById("message").innerHTML = "**Fill the password please!";  
                return false;  
            }  
        
            //minimum password length validation  
            if(npw.length < 8) {  
                document.getElementById("message").innerHTML = "**Password length must be atleast 8 characters";  
                return false;  
            }  
            
            // check if both passwords are matching
            var matching = npw.localeCompare(cnpw);
            if(matching){  
            document.getElementById("message").innerHTML = "**Password does not match";  
            return false;  
            }
        }  
    </script>

    <title>Document</title>
</head>
<body>
<img src="logo web copy1.png" alt="" width="90" height="45">

     <form onsubmit="return verifyPassword()">
        <table border="1" align="center" style="background-color:#026670ff">

        <tr>
                <td>
                    <label for="newPassword">Password
                    </label>
                </td>
                <td>
                    <input type="password" name="newPassword" id="newPassword">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="confirmNewPassword"> Confirm password
                    </label>
                </td>
                <td>
                    <input type="password" name="confirmNewPassword" id="confirmNewPassword">
                </td>
            </tr>

            <tr align="center">
            <td>
                    <input type="submit" value="Change Password" title="Change password">
                </td>
                <td>
                <span id = "message" style="color:red"> </span> <br><br>  
                </td>
                
                
            </tr>
        </table>
      </form>
    <!-- </div> -->
</body>
</html>
 

