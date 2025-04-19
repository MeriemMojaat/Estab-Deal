<?php
include '../config.php';
class basketc { //record
public function listbasket (){
    $sql = "SELECT * FROM basket";
    $db  = config ::getConnection();
    try {
     $list = $db->query($sql);
     return $list;
    }

catch (Exception $e){
    $e->getMessage();
}}
public function showDetails($id){
    $sql = "SELECT * FROM basket WHERE idbasket = ". $id; 
    $db  = config ::getConnection();
    try {
     $query = $db->prepare($sql);
     $query->execute();
     $basket= $query->fetch();
     return $basket;
    }

catch (Exception $e){
    $e->getMessage();
}
}
public function add($basket){
    $sql = "INSERT INTO basket VALUES (NULL,:iduser ,:idproduct, :firstname, :lastname,:idpoint)";
    $db = config ::getConnection(); //moujouda fel config 
    try {

        $query = $db->prepare($sql);
        $query->execute([
            'iduser'=> $basket->getiduser(),
            'idproduct'=> $basket->getidproduct(),
            'firstname'=> $basket->getfirstname(),
            'lastname'=> $basket->getlastname(),
            'idpoint'=> $basket->getidpoint()
        ]);
    }catch(Exception $e){
        $e->getMessage();
    }
}
public function delete($id) {
    $sql ="DELETE FROM basket WHERE idbasket = :id";
    $db = config ::getConnection();
    try {
        $query = $db->prepare($sql);
        $query->bindValue('id',$id);
        $query->execute();
    }
        catch(Exception $e){
            $e->getMessage();
        }
}
function update($basket, $idbasket)
{
    try {
        $db = config::getConnection();
        $query = $db->prepare(
            'UPDATE basket SET 
                iduser = :iduser, 
                idproduct = :idproduct,
                firstname = :firstname,
                lastname = :lastname,
                idpoint = :idpoint

            WHERE idbill= :idbill'
        );
        $query->execute([
            'idbasket' => $idbasket,
            'iduser' => $basket->getiduser(),
            'idproduct' => $basket->getidproduct(),
            'firstname' => $basket->getfirstname(),
            'lastname' => $basket->getlastname(),
            'idpoint' => $basket->getidpoint()
        ]);
        echo $query->rowCount() . " records UPDATED successfully <br>";
    } catch (PDOException $e) {
        $e->getMessage();
    }
}
}