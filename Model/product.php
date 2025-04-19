<?php 
class product
{
    private ?int $id = null;
    private ?string $name = null;
    private ?string $description = null;
    private ?string $image = null;
    private ?int $points = null;
    private ?int $category = null;
  

    public function __construct($id = null, $name, $description, $image,$points,$category)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->image= $image;
        $this->points= $points;
        $this->category= $category;
      

            }
             /**
             * Get the value of id
             */
            public function getidproduct()
            {
                return $this->id;
            }
             /**
             * Get the value of name
             */
            public function getproductname()
            {
                return $this->name;
            }
        
                /**
             * Set the value of name
             *
             * @return  self
             */
            public function setproductname($name)
            {
                $this->name = $name;
        
                return $this;
            }
         
             /**
             * Get the value of description
             */
            public function getdescription()
            {
                return $this->description;
            }
        
                /**
             * Set the value of description
             *
             * @return  self
             */
            public function setdescription($description)
            {
                $this->description = $description;
        
                return $this;
            }
           
        
            /**
             * Get the value of image
             */
            public function getimage()
            {
                return $this->image;
            }
        
            /**
             * Set the value of image
             *
             * @return  self
             */
            public function setimage($image)
            {
                $this->image = $image;
        
                return $this;
            }
            /**
             * Get the value of points
             */
            public function getpoints()
            {
                return $this->points;
            }
        
            /**
             * Set the value of points
             *
             * @return  self
             */
            public function setpoints($points)
            {
                $this->points = $points;
        
                return $this;
            }
            /**
             * Get the value of category
             */
            public function getcategory()
            {
                return $this->category;
            }
        
            /**
             * Set the value of category
             *
             * @return  self 
             */
            public function setcategory($category)
            {
                $this->category = $category;
        
                return $this;
            }
            
        
        
        
        
        }
        