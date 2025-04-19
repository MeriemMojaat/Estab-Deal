<?php
include '../config.php';
class exchangec { //record
public function list (){
    $sql = "SELECT * FROM exchange";
    $db  = config ::getConnexion();
    try {
     $list = $db->query($sql);
     return $list;
    }

catch (Exception $e){
    $e->getMessage();
}}
public function showDetails($id){
    $sql = "SELECT * FROM exchange WHERE idexchange = ". $id; 
    $db  = config ::getConnexion();
    try {
     $query = $db->prepare($sql);
     $query->execute();

     $exchange= $query->fetch();
     return $exchange;
    }catch (Exception $e){
        die('Error: ' . $e->getMessage());
}
}
function addp($exchange){
    $sql="INSERT INTO exchange (iduser,idproduct,productname,picture) 
    VALUES (:iduser,:idproduct,:productname,:picture)";
    $db = config::getConnexion();
    try{
        
        $query = $db->prepare($sql);
    
        $query->execute([
            'iduser' => $exchange->getiduser(),
            'idproduct' => $exchange->getidproduct(),
            'productname' =>$exchange->getproductname(),
            'picture' => $exchange->getpicture(),
        ]);         
    }
    catch (Exception $e){
        echo 'Erreur: '.$e->getMessage();
    }           
}         

public function deletep($id) {
    $sql ="DELETE FROM exchange WHERE idexchange = :id ";
    $db = config ::getConnexion();
    try {
        $query = $db->prepare($sql);
        $query->bindValue('id',$id);
        $query->execute();
    }
        catch(Exception $e){
            $e->getMessage();
        }
    }}

    function update($exchange, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE exchange SET 
                    iduser = :iduser, 
                    idproduct = :idproduct,
                    productname = :productname,
                    picture = :picture
                WHERE idexchange= :idexchange'
            );
            $query->execute([
                'idexchange' => $id,
                'iduser' => $exchange->getiduser(),
                'idproduct' => $exchange->getidproduct(),
                'productname' =>$exchange->getproductname(),
                 'picture' => $exchange->getpicture(),
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
