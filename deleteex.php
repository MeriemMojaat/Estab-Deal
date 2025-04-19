<?php 
include_once '../Controller/exchangec.php';
$exchangec = new exchangec();
$exchangec->deletep($_GET['idexchange']);
header('Location:listex.php');
?>