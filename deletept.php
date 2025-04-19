<?php
include '../Controller/pointsp.php';

$pointsp = new pointsp();
$pointsp->deletepoints($_GET["id_point"]);
header('Location: listpoints.php');

?>