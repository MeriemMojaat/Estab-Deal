<?php
include '../Controller/UserC.php';
$userC = new UserC();
$userC->deleteUser($_GET["iduser"]);
header('Location:ListUsers.php');