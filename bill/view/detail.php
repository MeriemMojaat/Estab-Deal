<?php 
include '../controller/billc.php';
include '../model/bill.php';
$billc = new billc();

$bill =$billc->showDetails($_GET['idbill']);
echo 'id: ' . $bill['idbill'];
?>
<p> id user :  <?= $bill['iduser']; ?> </p> 
<p> id product:  <?= $bill['idproduct']; ?> </p> 
