<?php
include '../config.php';
class pointsp { //record
public function listpoints (){
    $sql = "SELECT * FROM points" ;
    $db  = config ::getConnexion();
    try {
     $list = $db->query($sql);
     return $list;
    }

catch (Exception $e){
    $e->getMessage();
}}



public function showDetails($id){
    $sql = "SELECT * FROM points WHERE id_point= ". $id; 
    $db  = config ::getConnexion();
    try {
     $query = $db->prepare($sql);
     $query->execute();
     $points= $query->fetch();
     return $points;
    }

catch (Exception $e){
    $e->getMessage();
}
}


public function add($points){
    $sql = "INSERT INTO points (id_user, nb_points,idexchange) VALUES (:id_user,:nb_points ,:idexchange)";
    $db = config ::getConnexion();  
    try {

        $query = $db->prepare($sql);
        $query->execute([
            'id_user' => $points->getiduser(),
            'nb_points'=> $points->getnbpoints(),
            'idexchange'=> $points->getidexchange(),
        ]);
    }catch(Exception $e){
        $e->getMessage();
    }
}
public function deletepoints($id) {
    $sql ="DELETE FROM points WHERE id_point = :id";
    $db = config ::getConnexion();
    try {
        $query = $db->prepare($sql);
        $query->bindValue('id',$id);
        $query->execute();
    }
        catch(Exception $e){
            $e->getMessage();
        }
}
public function update($points, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE points SET 
                id_user = :id_user , 
                nb_points = :nb_points ,
                idexchange = :idexchange 
            WHERE id_point= :id_point'
            );
            $query->execute([
                'id_point' => $id,
                'id_user' => $points->getiduser(),
                'nb_points' => $points->getnbpoints(),
                'idexchange' => $points->getidexchange()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();

        }
    }

}

