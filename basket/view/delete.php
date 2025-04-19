<?php 
include '../controller/basketc.php';
$basketc = new basketc ();
$basketc->delete($_GET['idbasket']);
header('Location:list.php');
?>