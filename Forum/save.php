<?php
include 'config.php';
// tcollecti e data li amaltelha submit fel form 
$id = $_POST['id'];
$name = $_POST['name'];
$msg = $_POST['msg'];
// taamlelha check ken empty walle ! ken moch empty chttaamel e save 
if($name != "" && $msg != ""){
    $conn = config::getConnexion();
	$sql = $conn->query("INSERT INTO discussion (parent_comment,name,content)
			VALUES ('$id', '$name', '$msg')");
	echo json_encode(array("statusCode"=>200)); // code json ken e save successful 
}
else{
	echo json_encode(array("statusCode"=>201)); // code json ken e save li taamlet mahich successful
}
$conn = null;

?>