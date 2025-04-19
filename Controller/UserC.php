<?php
require_once '../config.php';

class UserC
{
    public function listUsers()
    {
        $sql = "SELECT * FROM user";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deleteUser($id)
    {
        $sql = "DELETE FROM user WHERE iduser = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function rechercherTicket($str){
        $sql="select * from user where email like '".$str."%' or firstName like '".$str."%' or lastName like '".$str."%' or address like '".$str."%'";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            return $e->getMessage();
        }
    }

   
    function addUser($user)
    {
        $sql = "INSERT INTO user  (firstName , lastName , address , phonenumb , email , password )
        VALUES (:firstName, :lastName, :address, :phonenumb, :email, :password)";
        $db = config::getConnexion();
        try {
            
            $query = $db->prepare($sql);
            $query->execute([
                'firstName' => $user->getFirstName(),
                'lastName' => $user->getLastName(),
                'address' => $user->getAddress(),
                'phonenumb' => $user->getPhonenumb(),
                'email' => $user->getEmail(),
                'password' => password_hash($user->getPassword(), PASSWORD_DEFAULT),
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
            die();
        }
    }

    function getthemail($email){
        $sql="SELECT * from user where email=:email";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
        $req->bindValue(':email',$email);
        $req->execute();
        $res=$req->fetchAll();
        return $res;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function getbyid($id){
        $sql="SELECT * from user where iduser=:id";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
        $req->bindValue(':id',$id);
        $req->execute();
        $res=$req->fetchAll();
        return $res;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function AddUserToken($email,$token){
        $sql="UPDATE user SET password=:token WHERE email=:email";
        $db = config::getConnexion();
        try{
        
        $req=$db->prepare($sql);
    
        $req->bindValue(':email',$email);
        $req->bindValue(':token',password_hash($token, PASSWORD_DEFAULT));

        
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
        
    }


                //chya3mel update lil immage ama fil asel yajouti fil path
                function AddUserimg($email,$image){
                    $sql="UPDATE user SET image=:image WHERE email=:email";
                    $db = config::getConnexion();
                    try{
                    
                    $req=$db->prepare($sql);
                
                    $req->bindValue(':email',$email);
                    $req->bindValue(':image',$image);
            
                    
                        $req->execute();
                       
                    }
                    catch (Exception $e){
                        echo 'Erreur: '.$e->getMessage();
                    }
                    
                }
            
            

    function updateUser($user, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE user SET 
                    lastName = :lastName, 
                    firstName = :firstName, 
                    address = :address, 
                    phonenumb = :phonenumb, 
                    email = :email

                WHERE iduser= :iduser'
            );
            $query->execute([
                'iduser' => $id,    
                'lastName' => $user->getLastName(),
                'firstName' => $user->getFirstName(),
                'address' => $user->getAddress(),
                'phonenumb' => $user->getPhonenumb(),
                'email' => $user->getEmail()

            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function showUser($id)
    {
        $sql = "SELECT * from user where iduser = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $user = $query->fetch();
            return $user;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    
    public function checkWishlist($productid, $userid){
        $db = config::getConnexion();
        if ($productid != null){
            $sql = $db->prepare("SELECT * FROM wishlist WHERE userid = :uid and productid = :pid");
            $sql->bindParam(':uid',$userid);
            $sql->bindParam(':pid',$productid);
        }
        else{
            $sql = $db->prepare("SELECT * FROM wishlist WHERE userid = :uid");
            $sql->bindParam('uid',$userid);
        }
        try {
            if(!$sql->execute()) {
                $db = null;
                exit();
            }
            if($sql->rowCount() > 0){
                return $sql->fetchAll();
            }
            return false;
        } catch (Exception $e) {
            $e->getMessage();
        }
    }
    public function addToWishlist($userid, $productid )
    {
        if($this->checkWishlist($productid, $userid) != false){
            echo 'Already exists <br>';
            exit();
        }
        $db = config::getConnexion();
        
        $querystr = "INSERT into wishlist values (:pid, :uid)";
        try {
        $query = $db->prepare($querystr);
        $query->execute([
            'pid' => $productid,
            'uid' => $userid,
        ]);
        }catch(Exception $e){
            $e->getMessage();
        }   
    }
    public function deleteFromWishlist($productid, $userid){
        if($this->checkWishlist($productid, $userid) == false){
            echo "Doesn't exist <br>";
            exit();
        }
        $sql = "DELETE FROM wishlist WHERE productid = :pid and userid = :uid";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->bindValue('uid', $userid);
            $query->bindValue('pid', $productid);
            $query->execute();
            echo 'Deleted successfully <br>';
        } catch (Exception $e) {
            $e->getMessage();
        }
    }

    public function getWishlist($userid){
        $tmp = $this->checkWishlist(null, $userid);
        if($tmp == false){
            return false;
        }
        return $tmp;
    }

}