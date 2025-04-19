<?php


include ("wishlistc.php");

$email=$_GET["email"];
$ID=$_GET["ID"];

$wishlist = new WishlistC();
$result=$wishlist-> SearchProductWish($email,$ID);	
 //foreach($result as $row){echo $row["Email"];};


	if( $result == null)
	{
		$wishlist->AddProductWish($email,$ID);
		echo "<script> 
		window.location.href='../../views/Front/wishlist.php';
		alert('Produit ajouter a votre wishlist');
		 </script>";

	}
	else{
			$wishlist->DeleteProductWish($email,$ID);
			echo "<script>
		 window.location.href='../../views/Front/Wishlist.php'
		 alert('Produit ete supprimer de votre wishlist');
		 </script>";
	}


  


?>