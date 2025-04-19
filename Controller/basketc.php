<?php
include '../config.php';

class basketc
{ //record
    public function listbasket()
    {
        $sql = "SELECT * FROM basket";
        $db = config::getConnexion();
        try {
            $list = $db->query($sql);
            return $list;
        } catch (Exception $e) {
            $e->getMessage();
        }
    }
    function showDetails($id)
    {
        $sql = "SELECT * from basket where idbasket = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $basket = $query->fetch();
            return $basket;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    function add($basket)
    {
        $sql = "INSERT INTO basket (iduser, idproduct, idpoint,totp) 
    VALUES (:iduser,:idproduct,:idpoint,:totp)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);

            $query->execute([
                'iduser' => $basket->getiduser(),
                'idproduct' => $basket->getidproduct(),
                'idpoint' => $basket->getidpoint(),
                'totp' => $basket->gettotp(),
            ]);
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }

    function delete($id)
    {
        $sql = "DELETE FROM basket WHERE idbasket = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);
        try {
            $req->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function update($basket, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE basket SET 
                iduser = :iduser , 
                idproduct = :idproduct ,
                idpoint = :idpoint , 
                totp = :totp 
            WHERE idbasket = :idbasket'
            );
            $query->execute([
                'idbasket' => $id,
                'iduser' => $basket->getiduser(),
                'idproduct' => $basket->getidproduct(),
                'idpoint' => $basket->getidpoint(),
                'totp' => $basket->gettotp()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();

        }
    }
}
?>