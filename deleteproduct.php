<?php 
include '../Controller/productc.php';
$productc = new productc ();
$productc->delete($_GET['id']);
header('Location:listproduct.php');
?>