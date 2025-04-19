<?php 
class basket
{
    private ?int $idbasket = null;
    private ?int $iduser = null;
    private ?int $idproduct = null;
    private ?int $nbpoint = null;
 

    public function __construct(int $iduser ,int $idproduct,int $nbpoint)
    {
        $this->iduser = $iduser;
        $this->idproduct = $idproduct;
        $this->nbpoint = $nbpoint;
       
    }
    /**
     * Get the value of idbill
     */
    public function getidbasket()
    {
        return $this->idbasket;
    }


    /**
     * Get the value of iduser
     */
    public function getiduserbasket()
    {
        return $this->iduser;
    }

    /**
     * Set the value of iduser     *
     * @return  self
     */
    public function setiduserbill($iduser)
    {
        $this->iduser = $iduser;

        return $this;
    }

        /**
     * Get the value of idproduct
     */
    public function getidproductbasket()
    {
        return $this->idproduct;
    }

        /**
     * Set the value of idproduct
     *
     * @return  self
     */
    public function setidproductbill($idproduct)
    {
        $this->idproduct = $idproduct;

        return $this;
    }
   
    public function getnbpointbasket()
    {
        return $this->nbpoint;
    }

        /**
     * Set the value of idproduct
     *
     * @return  self
     */
    public function setnbpoint($nbpoint)
    {
        $this->nbpoint = $nbpoint;

        return $this;
    }
   
}