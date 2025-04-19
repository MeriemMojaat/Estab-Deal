<?php 
class wishlist
{
    private  $idw = null;
    private $iduser = null;
    private $idproduct = null;
    private  $email = null;


    public function __construct($iduser,$idproduct,$email)
    {
        $this->iduser = $iduser;
        $this->idproduct = $idproduct;
        $this->email = $email;
        
       
    }
    /**
     * Get the value of id response
     */
    public function getidw()
    {
        return $this->idw;
    }


    /**
     * Get the value of iduser
     */
    public function getiduser()
    {
        return $this->iduser;
    }

    public function setiduser($iduser)
    {
        $this->iduser = $iduser;

      return $this;
    }

        /**
     * Get the value of idp
     */
    public function getidproduct()
    {
        return $this->idproduct;
    }

        /**
     * Set the value of idp
     *
     * @return  self
     */
    public function setidproduct($idproduct)
    {
        $this->idproduct = $idproduct;

        return $this;
    }
   
    /**
     * Get the value of cresponse
     */
    public function getemail()
    {
        return $this->email;
    }

    /**
     * Set the value of cresponse
     *
     * @return  self
     */
    public function setemail($email)
    {
        $this->email= $email;

        return $this;
    }
}