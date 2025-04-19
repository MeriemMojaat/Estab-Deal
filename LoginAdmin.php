<?php

include "../Model/admin.php";
include "../Controller/AdminC.php";

session_start();

if(isset($_SESSION['login']))
{

    header("location: indexAdmin.php");
}

    if(isset($_POST['Connexion']))
   {
    $email=$_POST["email"];
    $adminC = new AdminC();

   $liste=$adminC->recupereremail($email);

   //var_dump($res);
    foreach($liste as $row){
      $mdp=$row['mdp'];
    }
    if (password_verify($_POST["mdp"],$mdp))
    {
    $adminC->ajouterAdminDernieracc($email);
    $liste=$adminC->recupereremail($email);
     foreach($liste as $row){
      $id=$row['id'];
      $nom=$row['nom'];
      $email=$row['email'];
      $tel=$row['tel'];
      $image=$row['image'];
      $dernier_acc=$row['dernier_acc'];
    }

         $_SESSION['id'] = $id;
         $_SESSION['login'] = $email;
         $_SESSION['nom'] = $nom;
         $_SESSION['tel'] = $tel;
         $_SESSION['image'] = $image;
         $_SESSION['dernier_acc'] = $dernier_acc;

         header("location: indexAdmin.php");

    }
   else
   {    
    echo "<script type='text/javascript'>";
    echo "alert('Email ou Mot de passe incorect');
    window.location.href='LoginAdmin.php';";
    echo "</script>";

   }

}
   
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="user.css">
    <title>Admin Login</title>
</head>

<body>
<img src="logo web copy1.png" alt="" width="90" height="45">
<br>
<br>
    <!-- <hr> -->

    <div class="form-box"> 
     <form action="" method="POST">
        <table border="1" align="center">
            <tr>
                <td>
                    <label for="email">Email:
                    </label>
                </td>
                <td>
                    <input type="text" name="email" id="email" pattern=".+@esprit.tn" >
                </td>
            </tr>

            <tr>
                <td>
                    <label for="password">Password:
                    </label>
                </td>
                <td>
                    <input type="password" name="mdp" id="mdp">
                </td>
            </tr>

            <tr align="center">
                <td>
                </td>
                <td>
                <input type="submit" value="Login" name="Connexion">
                </td>
            </tr>
        </table>
      </form>
    </div>
</body>

</html>