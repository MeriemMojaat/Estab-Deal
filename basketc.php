<?php
include '../config.php';

class basketc
{ //record
    public function listbasket()
    {
        $sql = "SELECT * FROM basket";
        $db = config::getConnection();
        try {
            $list = $db->query($sql);
            return $list;
        } catch (Exception $e) {
            $e->getMessage();
        }
    }
    public function showDetailsBasket($idbasket)
    {
        $sql = "SELECT * FROM basket WHERE idbasket = idbasket ";
        $db = config::getConnection();
        try {
            $query = $db->prepare($sql);
            $query->execute();
            $basket = $query->fetch();
            return $basket;
        } catch (Exception $e) {
            $e->getMessage();
        }
    }

    function addbasket($basket)
    {
        $sql = "INSERT INTO basket (iduser,idproduct,nbpoint) 
VALUES (:iduser,:idproduct,:nbpoint)";
        $db = config::getConnection();
        try {
            $query = $db->prepare($sql);

            $query->execute([
                'iduser' => $basket->getiduserbasket(),
                'idproduct' => $basket->getidproductbasket(),
                'nbpoint' => $basket->getnbpointbasket(),
            ]);
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }
    public function deletebasket($id)
    {
        $sql = "DELETE FROM basket WHERE idbasket = :id ";
        $db = config::getConnection();
        try {
            $query = $db->prepare($sql);
            $query->bindValue('id', $id);
            $query->execute();
        } catch (Exception $e) {
            $e->getMessage();
        }
    }
    function updatebasket($basket, $idbasket)
    {
        try {
            $db = config::getConnection();
            $query = $db->prepare(
                'UPDATE basket SET 
                iduser = :iduser, 
                idproduct = :idproduct,
                nbpoint = :nbpoint 

            WHERE idbasket= :idbasket'
            );
            $query->execute([
                'iduser' => $basket->getiduserbasket(),
                'idproduct' => $basket->getidproductbasket(),
                'nbpoint' => $basket->getnbpointbasket() 
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
}