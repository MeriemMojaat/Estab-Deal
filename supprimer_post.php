<?PHP
	include "../Controller/postC.php";

	$postC=new postC();
	
	if (isset($_POST["id_post"])){
		$postC->supprimerpost($_POST["id_post"]);
		header('Location:afficher_post.php');
	}

?>