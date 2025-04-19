<?php 
class basket
{
    private ?int $idbasket = null;
    private ?int $iduser = null;
    private ?int $idproduct = null;
    private ?string $firstname = null;
    private ?string $lastname = null;
    private ?int $idpoint = null;

    public function __construct($id = null, $idproduct, $iduser, $firstname, $lastname,$idpoint)
    {
        $this->idproduct = $idproduct;
        $this->iduser = $iduser;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->idpoint = $idpoint;
       
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
     * Get the value of firstname
     */
    public function getfirstname()
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @return  self
     */
    public function setfirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }




        /**
     * Get the value of lastname
     */
    public function getlastname()
    {
        return $this->lastname;
    }

        /**
     * Set the value of lastname
     *
     * @return  self
     */
    public function setlastname($lastname)
    {
        $this->lastname = $lastname;

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

   
}