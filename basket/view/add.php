<?php
include '../controller/basketc.php';
include '../model/basket.php';
$basketc=new basketc();
if ((isset($_POST['idbasket'])&& !empty($_POST['idbasket']))&&(isset($_POST['idproduct'])&& !empty($_POST['idproduct']))&&(isset($_POST['iduser'])&& !empty($_POST['iduser']))&&(isset($_POST['firstname'])&& !empty($_POST['firstname']))&&(isset($_POST['lastname'])&& !empty($_POST['lastname']))&&(isset($_POST['idpoint'])&& !empty($_POST['idpoint']))){
    //if the user clicked on the save button
    echo('idbasket:' .$_POST['idbasket']); //see if the information came from the form
    echo('iduser:' .$_POST['iduser']);
    echo('firstname:' .$_POST['firstname']);
    echo ('lastname:' .$_POST['lastname']);
    echo ('idpoint:' .$_POST['idpoint']);
$basket=new basket(NULL,$_POST['iduser'],$_POST['idproduct'],$_POST['firstname'],$_POST['lastname'],$_POST['idpoint']);//new DateTime to covert date from string to date
$basketc->add($basket);

}
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <form action="" method="POST"> <!--save the information in an array named post-->
<input type="int" placeholder="enter the basket id" name="idbasket">
<br>
<input type="int" placeholder="enter the id user" name="iduser">
<br>
<input type="int" placeholder="enter the id product" name="idproduct">
<br>
<input type="text" placeholder="enter the first name" name="fistname">
<br>
<input type="text" placeholder="enter the last name" name="lastname">
<br>
<input type="int" placeholder="enter the id point" name="idpoint">
<br>
<input type="submit" value="Save">
<input type="reset" value="Reset">
</form>
    </body>
    </html>