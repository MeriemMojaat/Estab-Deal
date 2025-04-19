<?php 
class bill
{
    private ?int $idbill = null;
    private ?int $idproduct = null;
    private ?int $iduser = null;
    private ?string $firstname = null;
    private ?string $lastname = null;
    private ?string $email = null;

    public function __construct(int $idproduct, int $iduser, string $firstname, string $lastname, string $email)
    {
        $this->idproduct = $idproduct;
        $this->iduser = $iduser;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
       
    }
    /**
     * Get the value of idbasket
     */
    public function getidbill()
    {
        return $this->idbill;
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
     * Get the value of email
     */
    public function getemail()
    {
        return $this->email;
    }

        /**
     * Set the value of email
     *
     * @return  self
     */
    public function setemail($email)
    {
        $this->email = $email;

        return $this;
    }

   
}