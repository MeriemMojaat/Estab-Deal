<?php
session_start();

if(!isset($_SESSION['login']))
{

    header("location: LoginAdmin.php");
}

include "../Model/Admin.php";
include "../Controller/AdminC.php";
if(isset($_POST['Ajouter']))
{
if( isset($_POST['nomuser']) and isset($_POST['email']) and isset($_POST['mdp']) and isset($_POST['tel'])){
$admin=new Admin($_POST['nomuser'],$_POST['email'],$_POST['mdp'],$_POST['tel']);

    $filename = $_FILES["image"]["name"];
        $tempname = $_FILES["image"]["tmp_name"];

    $folder = "./images/admin/".$filename ;
    move_uploaded_file($tempname, $folder);

//Partie3
$adminC = new AdminC();
$adminC->ajouterAdmin($admin);
$adminC->ajouterAdminimg($_POST['email'],$folder);

header('Location: ListAdmins.php');
    
}else{
    echo "vérifieer les champs";
    die();
}
//*/
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
<br>
<br>
    <!-- <hr> -->
    <div class="form-box"> 
    <form method="POST" enctype="multipart/form-data" id="form_admin">
        <table border="1" align="center"  >

            <tr>
                <td>
                    <label for="firstName">First Name:
                    </label>
                </td>
                <td>
                <input type="text" class="form-control" id="exampleInputEmail111" placeholder="Nom" name="nomuser">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">Email:
                    </label>
                </td>
                <td>
                <input type="email" class="form-control" id="exampleInputEmail12" placeholder="Email" name="email">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="password">Password:
                    </label>
                </td>
                <td>
                <input type="password" class="form-control" id="exampleInputPassword11" placeholder="Password" name="mdp">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="phonenumb">Phone Number:
                    </label>
                </td>
                <td>
                <input type="text" class="form-control" id="exampleInputPassword12" placeholder="Telephone" name="tel">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="phonenumb">Image :
                    </label>
                </td>
                <td>
                <input type="file" id="input-file-max-fs" class="dropify" data-max-file-size="2M" name="image" />
                </td>
            </tr>

            <tr align="center">
                <td>
                <input type="submit" class="btn btn-success mr-2" value="Add" name="Ajouter" >
                </td>
                <td>
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
      </form>

    </div>
</body>

</html>