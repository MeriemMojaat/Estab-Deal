<?php

include '../Controller/AdminC.php';
include '../Model/Admin.php';


session_start();

if(!isset($_SESSION['login']))
{

    header("location: LoginAdmin.php");
}

if (isset($_GET['id'])){

    $adminC = new AdminC();
    $result=$adminC->recupererAdmin($_GET['id']);
    foreach($result as $row){
        $id=$row['id'];
        $nom=$row['nom'];
        $email=$row['email'];
        $mdp=$row['mdp'];
        $tel=$row['tel'];
        $image=$row['image'];
                
        }
    }
$error = "";

// create user
$user = null;

if(isset($_POST['Modifier']))
{

$admin=new Admin($_POST['nomuser'],$_POST['email'],$_POST['mdp'],$_POST['tel']);
    if($_POST['mdp'] != "")
    {
        $adminC->modifierAdminPwd($admin,$_GET['id']);
    }
    else
    {
        $adminC->modifierAdmin($admin,$_GET['id']);

    }

    $filename = $_FILES["image"]["name"];
        $tempname = $_FILES["image"]["tmp_name"];

    $folder = "./images/admin/".$filename ;
        if($filename!="")
      {
      move_uploaded_file($tempname, $folder);
    $adminC->ajouterAdminimg($_POST['email'],$folder);

    }

header('Location: ListAdmins.php');
    
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
    <div id="error">
        <?php echo $error; ?>
    </div>

 <div class="form-box">
        <form method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="exampleInputEmail111">Nom</label>
                                            <input type="text" class="form-control" id="exampleInputEmail111" placeholder="Nom" name="nomuser" value="<?PHP echo $nom ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail12">Email</label>
                                            <input type="email" class="form-control" id="exampleInputEmail12" placeholder="Email" name="email" value="<?PHP echo $email ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword11">Mot de passe</label>
                                            <input type="password" class="form-control" id="exampleInputPassword11" placeholder="Password" name="mdp" value="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword12">Telephone</label>
                                            <input type="text" class="form-control" id="exampleInputPassword12" placeholder="Telephone" name="tel"  value="<?PHP echo $tel ?>">
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">Image</h4>
                                                    <label for="input-file-max-fs">Ajouter votre image</label>
                                                    <input type="file" id="input-file-max-fs" class="dropify" data-max-file-size="2M" name="image" value="<?PHP echo $image ?>" />
                                                </div>
                                            </div>
                                        </div>                            
                                        <input type="submit" class="btn btn-success mr-2" value="Modifier" name="Modifier" >
                                    </form>

    </div>

</body>

</html>