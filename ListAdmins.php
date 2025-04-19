<?php
session_start();

include  "../Controller/AdminC.php";

if(!isset($_SESSION['login']))
{

    header("location: LoginAdmin.php");
}
$adminc= new AdminC();
    $liste=$adminc->afficherAdmins();

?>
<html>

<head>    
    <link rel="stylesheet" href="user.css">
</head>

<body>
<?php include 'navBarAdmin.php'; ?>
  <!-- ======= Navbar ======= -->
    <center>
        <h1>List of Admins</h1>
        <h2>
            <a href="addAdmin.php">Add Admin</a>
        </h2>
    </center>
    <div  >

    <table border="1" align="center" width="70%" style="background-color:#026670ff"  >
        <tr>
        <th>Nom</th>
        <th>Email</th>                   
        <th>Mot de passe</th>
        <th>Telephone</th>
        <th>Image</th>
        <th>Dernier acceess</th>
        <th>Update</th>
        <th>Delete</th>
        </tr>
        <?php
                                        foreach($liste as $row){
                                      ?>
                                        <tr>
                                            <td><?php echo $row['nom']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td><?php echo $row['mdp']; ?></td>
                                            <td><?php echo $row['tel']; ?></td>
                                            <td><img src="<?php echo $row['image']; ?>" heigth="200" width=150></td>
                                            <td><?php echo $row['dernier_acc']; ?></td>
                                            <td>
                                                <form method="POST" action="updateAdmin.php?id=<?PHP echo $row['id']; ?>">

                                                    <input type="submit" class="btn btn-success" value= "Modifier">
                                                </form>
                                            </td>
                                            <td>
                                               <form method="POST" action="deleteAdmin.php">
                                                    <input type="submit" class="btn btn-danger" value= "supprimer">
                                                    <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
                                                </form>
                                            </td>
                                        </tr>

                                                <?php
                                            }
                                        ?>    
    </table>
    </div>


</body>

</html>