<?php 
class bill
{
    private ?int $idbill = null;
    private ?int $iduser = null;
    private ?int $idproduct = null;
 

    public function __construct($id = null, $iduser ,$idproduct)
    {
        $this->iduser = $iduser;
        $this->idproduct = $idproduct;
       
    }
    /**
     * Get the value of idbill
     */
    public function getidbill()
    {
        return $this->idbill;
    }


    /**
     * Get the value of iduser
     */
    public function getiduser()
    {
        return $this->iduser;
    }

    /**
     * Set the value of iduser     *
     * @return  self
     */
    public function setiduser($iduser)
    {
        $this->iduser = $iduser;

        return $this;
    }

        /**
     * Get the value of idproduct
     */
    public function getidproduct()
    {
        return $this->idproduct;
    }

        /**
     * Set the value of idproduct
     *
     * @return  self
     */
    public function setidproduct($idproduct)
    {
        $this->idproduct = $idproduct;

        return $this;
    }
   
   
}