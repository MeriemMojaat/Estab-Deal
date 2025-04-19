<?php
$list_of_fules_arr = get_included_files();
$string_to_look_for = 'config.php';
$found = false;
foreach ($list_of_fules_arr as $file_path) {
  if (false !== strpos($file_path, $string_to_look_for)) {
        $found = true;
  } 
}
if(!$found)
    include '../config.php';
class productp
{
    public function listproduct()
    {
        $sql = "SELECT * FROM product";
        $db = config::getConnection();
        try {
            $list = $db->query($sql);
            return $list;
        } catch (Exception $e) {
            $e->getMessage();
        }}
    public function showDetails($id)
    {
        $sql = "SELECT * FROM product WHERE id = " . $id;
        $db = config::getConnection();
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
        $sql = "INSERT INTO product VALUES (NULL, :name, :description, :image)";
        $db = config::getConnection(); //moujouda fel config
        try {

            $query = $db->prepare($sql);
            $query->execute([

                'name' => $product->getproductname(),
                'description' => $product->getdescription(),
                'image' => $product->getimage(),

            ]);
        } catch (Exception $e) {
            $e->getMessage();
        }
    }
    public function delete($id)
    {
        $sql = "DELETE FROM product WHERE id = :id";
        $db = config::getConnection();
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
            $db = config::getConnection();
            $query = $db->prepare(
                'UPDATE product SET
                    name    = :name   ,
                    description = :description,
                    image = :image,
                   
                WHERE id= :id'
            );
            $query->execute([
                'id' => $id,
                'name  ' => $product->getproductname(),
                'description' => $product->getdescription(),
                'image' => $product->getimage(),

            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

}
