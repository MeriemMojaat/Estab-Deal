<?php
include '../config.php';
class billc { //record
public function listbill (){
    $sql = "SELECT * FROM bill";
    $db  = config ::getConnection();
    try {
     $list = $db->query($sql);
     return $list;
    }

catch (Exception $e){
    $e->getMessage();
}}
public function showDetails($id){
    $sql = "SELECT * FROM bill WHERE idbill = ". $id; 
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
public function add($bill){
    $sql = "INSERT INTO basket VALUES (NULL,:iduser ,:idproduct)";
    $db = config ::getConnection(); //moujouda fel config 
    try {

        $query = $db->prepare($sql);
        $query->execute([
            'iduser'=> $bill->getiduser(),
            'idproduct'=> $bill->getidproduct()
        ]);
    }catch(Exception $e){
        $e->getMessage();
    }
}
public function delete($id) {
    $sql ="DELETE FROM bill WHERE idbill = :id";
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
function update($bill, $idbill)
{
    try {
        $db = config::getConnection();
        $query = $db->prepare(
            'UPDATE bill SET 
                iduser = :iduser, 
                idproduct = :idproduct 

            WHERE idbill= :idbill'
        );
        $query->execute([
            'idbill' => $idbill,
            'iduser' => $bill->getiduser(),
            'idproduct' => $bill->getidproduct()
        ]);
        echo $query->rowCount() . " records UPDATED successfully <br>";
    } catch (PDOException $e) {
        $e->getMessage();
    }
}
}