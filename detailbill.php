<?php 
include '../Controller/billC.php';
include '../Model/bill.php';
$billc = new billc();

$bill =$billc->showDetailsBill($_GET['idbill']);
echo 'id bill: ' . $bill['idbill'];
?>
<p> Id user : <?= $bill['iduser']; ?> </p> 
<p> First Name:  <?= $bill['firstname']; ?> </p> 
<p> Last name:  <?= $bill['lastname']; ?> </p> 
<p> Email:  <?= $bill['email']; ?> </p> 