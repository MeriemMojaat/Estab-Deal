<?php 
include '../Controller/billC.php';
$billc = new billc ();
$billc->deletebill($_GET['idbill']);
header('Location:listbill.php');
?>