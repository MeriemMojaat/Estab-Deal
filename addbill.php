<?php
include_once '../Model/bill.php';
include_once '../Controller/billC.php';

$error = "";

// create user
$user = null;

// create an instance of the controller
$userC = new billc();
if (
    isset($_POST["iduser"]) &&
    isset($_POST["idproduct"]) &&
    isset($_POST["firstname"]) &&
    isset($_POST["lastname"]) &&
    isset($_POST["email"]) 
) {
    if (
        !empty($_POST["iduser"]) &&
        !empty($_POST["idproduct"]) &&
        !empty($_POST["firstname"]) &&
        !empty($_POST["lastname"]) &&
        !empty($_POST["email"])
    ) {
        $user = new bill(
            $_POST['iduser'],
            $_POST['idproduct'],
            $_POST['firstname'],
            $_POST['lastname'],
            $_POST['email']
        );
        $userC->addbill($user);
        header('Location:listbill.php');
    } else
        $error = "Missing information";
}
?>

<!DOCTYPE html>
<html lang="en">

<form action="" style="border:2px solid #ccc" method="POST">
    <div class="container">
        <p>Please fill all the form:</p>
        <hr>

        ID USER:<br>
        <input type="number" name="iduser" id="iduser">
        <br>
        ID PRODUCT:<br>
        <input type="number" name="idproduct" id="idproduct">
        <br>
        FIRST NAME:<br>
        <input type="text" name="firstname" id="firstname">
        <br>
        LAST NAME:<br>
        <input type="text" name="lastname" id="lastname">
        <br>
        EMAIL:<br>
        <input type="text" name="email" id="email">
        <br>
        <input type="submit" class="action-button shadow animate green" name="submit" value="Submit"
            onclick="return verif();">
    </div>
</form>

</body>

</html>