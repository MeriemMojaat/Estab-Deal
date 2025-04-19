<?php 
class basket
{
    private ?int $idbasket = null;
    private ?int $iduser = null;
    private ?int $idproduct = null;
    private ?int $idpoint = null;
    private ?int $totp = null;

    public function __construct(int $idproduct, int $iduser, int $idpoint,int $totp)
    {
        $this->idproduct = $idproduct;
        $this->iduser = $iduser;
        $this->idpoint = $idpoint;
        $this->totp = $totp;
    }
    /**
     * Get the value of idbasket
     */
    public function getidbasket()
    {
        return $this->idbasket;
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
   
   
    /**
     * Get the value of idpoint
     */
    public function getidpoint()
    {
        return $this->idpoint;
    }

        /**
     * Set the value of idpoint
     *
     * @return  self
     */
    public function setidpoint($idpoint)
    {
        $this->idpoint = $idpoint;

        return $this;
    }

    public function gettotp()
    {
        return $this->totp;
    }

        /**
     * Set the value of idpoint
     *
     * @return  self
     */
    public function settotp($totp)
    {
        $this->totp = $totp;

        return $this;
    }
}