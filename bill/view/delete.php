<?php 
include '../controller/billc.php';
$billc = new billc ();
$billc->delete($_GET['idbill']);
header('Location:list.php');
?>