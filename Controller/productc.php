<?php
include 'C:\Users\tcp\Desktop\SQL_New\htdocs\trythis\config.php';
;
class productc
{
    public function listproduct()
    {
        $sql = "SELECT * FROM product";
        $db = config::getConnexion();
        try {
            $list = $db->query($sql);
            return $list;
        } catch (Exception $e) {
            $e->getMessage();
        }}
    public function showDetails($id)
    {
        $sql = "SELECT * FROM product WHERE id = " . $id;
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
            $product = $query->fetch();
            return $product;
        } catch (Exception $e) {
            $e->getMessage();
        }
    }
    public function add($product)
    {
        $sql = "INSERT INTO product VALUES (NULL, :name, :description, :image, :points, :category)";
        $db = config::getConnexion(); //moujouda fel config
        try {

            $query = $db->prepare($sql);
            $query->execute([

                'name' => $product->getproductname(),
                'description' => $product->getdescription(),
                'image' => $product->getimage(),
                'points' => $product->getpoints(),
                'category' => $product->getcategory(),
              

            ]);
        } catch (Exception $e) {
            $e->getMessage();
        }
    }
    public function delete($id)
    {
        $sql = "DELETE FROM product WHERE id = :id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->bindValue('id', $id);
            $query->execute();
        } catch (Exception $e) {
            $e->getMessage();
        }
    }
    public function updateproduct($product, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE product SET
                    name    = :name   ,
                    description = :description,
                    image = :image,
                    points = :points,
                    category= :category,
                    client= :client,
                   
                WHERE id= :id'
            );
            $query->execute([
                'id' => $id,
                'name' => $product->getproductname(),
                'description' => $product->getdescription(),
                'image' => $product->getimage(),
                'points' => $product->getpoints(),
                'category' => $product->getcategory(),
                'client' => $product->getclient(),

            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
}
