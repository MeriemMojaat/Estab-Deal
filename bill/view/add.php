<?php
include '../controller/billc.php';
include '../model/bill.php';
$billc=new billc();
if ((isset($_POST['idbill'])&& !empty($_POST['idbill']))&&(isset($_POST['iduser'])&& !empty($_POST['iduser']))&&(isset($_POST['idpost'])&& !empty($_POST['idpost']))){
    //if the user clicked on the save button
    echo('idbill:' .$_POST['idbill']); //see if the information came from the form
    echo('iduser:' .$_POST['iduser']);
    echo('idproduct:' .$_POST['idproduct']);

$bill=new bill(NULL,$_POST['iduser'],$_POST['idproduct']);//new DateTime to covert date from string to date
$billc->add($bill);

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
<input type="int" placeholder="enter the id bill" name="idbill">
<br>
<input type="int" placeholder="enter the id user" name="iduser">
<br>
<input type="int" placeholder="enter the id product" name="idproduct">
<br>
<input type="submit" value="Save">
<input type="reset" value="Reset">
</form>
    </body>
    </html>