<?php
include '../config.php';

class WishlistC
{

    public function AddProductWish($email, $idproduct)
    {
        $pdo = config::getConnection();


        try {
            $query = $pdo->prepare(
                'INSERT INTO wishlist (email ,idproduct)
                                 VALUES(:email ,:idproduct) '
            );
            $query->bindValue(':email', $email);
            $query->bindValue(':idproduct', $idproduct);
            $query->execute();
        } catch (Exception $e) {
            $e->getMessage();
        }
    }

    public function listwish()
    { {
            $sql = "SELECT * FROM wishlist ";
            $db = config::getConnection();
            try {
                $list = $db->query($sql);
                return $list;
            } catch (PDOException $e) {
                $e->getMessage();
            }

        }
    }
    public function showDetails($iduser)
    {
        $pdo = config::getConnection();
        try {
            $query = $pdo->prepare('SELECT * FROM user A JOIN wishlist W  ON W.iduser=A.id where W.iduser=:iduser');
            $query->bindValue(':iduser', $iduser);

            $query->execute();

            $result = $query->fetchALL();

        } catch (PDOException $e) {
            $e->getMessage();
        }
        return $result;

    }
    public function showDetailsproduct($idproduct)
    {
        $pdo = config::getConnection();
        try {
            $query = $pdo->prepare('SELECT * FROM product A JOIN wishlist W  ON W.idproduct=A.id where W.idproduct=:idproduct');
            $query->bindValue(':idproduct', $idproduct);

            $query->execute();

            $result = $query->fetchALL();

        } catch (PDOException $e) {
            $e->getMessage();
        }
        return $result;

    }


    public function DeleteProductWish($email, $idproduct)
    {
        $pdo = config::getConnection();

        echo $email;
        echo $idproduct;
        try {
            $query = $pdo->prepare('DELETE FROM wishlist WHERE email = :email AND idproduct=:idproduct ');
            $query->bindValue(':email', $email);
            $query->bindValue(':idproduct', $idproduct);

            $query->execute();
        } catch (PDOException $e) {
            $e->getMessage();

        }
    }
    public function SearchProductWish($email, $idproduct)
    {
                $pdo = config::getConnection();

        try{
                $query = $pdo->prepare('SELECT * FROM wishlist WHERE email = :email AND idproduct=:idproduct ');
                $query->bindValue(':email',$email);
                $query->bindValue(':idproduct',$idproduct);
                
                $query->execute(); 
                 $result = $query->fetchALL();
               
            }
            catch (PDOException $e){ 
                $e->getMessage();
                
            }

            return $result ;
    }
        

}


?>