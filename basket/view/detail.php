<?php 
include '../controller/basketc.php';
include '../model/basket.php';
$basketc = new basketc();

$basket =$basketc->showDetails($_GET['idbasket']);
echo 'id: ' . $basket['idbasket'];
?>
<p> id user :  <?= $basket['iduser']; ?> </p> 
<p> id product:  <?= $basket['idproduct']; ?> </p> 
<p> first name :  <?= $basket['firstname']; ?> </p> 
<p> last name:  <?= $basket['lastname']; ?> </p> 
<p> id point:  <?= $basket['idpoint']; ?> </p> 
