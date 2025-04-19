<?php
include '../config.php';

class billc
{ //record
    public function listbill()
    {
        $sql = "SELECT * FROM bill";
        $db = config::getConnection();
        try {
            $list = $db->query($sql);
            return $list;
        } catch (Exception $e) {
            $e->getMessage();
        }
    }
    public function showDetailsBill($idbill)
    {
        $sql = "SELECT * FROM bill WHERE idbill = idbill ";
        $db = config::getConnection();
        try {
            $query = $db->prepare($sql);
            $query->execute();
            $bill = $query->fetch();
            return $bill;
        } catch (Exception $e) {
            $e->getMessage();
        }
    }

    function addbill($bill)
    {
        $sql = "INSERT INTO bill (iduser,idproduct,firstname,lastname,email) 
VALUES (:iduser,:idproduct,:firstname,:lastname,:email)";
        $db = config::getConnection();
        try {
            $query = $db->prepare($sql);

            $query->execute([
                'iduser' => $bill->getiduser(),
                'idproduct' => $bill->getidproduct(),
                'firstname' => $bill->getfirstname(),
                'lastname' => $bill->getlastname(),
                'email' => $bill->getemail(),
            ]);
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }
    public function deletebill($id)
    {
        $sql = "DELETE FROM bill WHERE idbill = :id ";
        $db = config::getConnection();
        try {
            $query = $db->prepare($sql);
            $query->bindValue('id', $id);
            $query->execute();
        } catch (Exception $e) {
            $e->getMessage();
        }
    }
    function updatebill($bill, $idbill)
    {
        try {
            $db = config::getConnection();
            $query = $db->prepare(
                'UPDATE bill SET 
                idproduct = :idproduct,
                iduser = :iduser, 
                firstname = :firstname,
                lastname = :lastname,
                email = :email

            WHERE idbill= :idbill'
            );
            $query->execute([
                'idproduct' => $bill->getidproductbill(),
                'iduser' => $bill->getiduserbill(),
                'firstname' => $bill->getfirstname(),
                'lastname' => $bill->getlastname(),
                'email' => $bill->getemail(),
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
}


