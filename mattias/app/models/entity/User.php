<?php
// app/models/entity/User.php
/**
 * @Entity @Table(name="users", uniqueConstraints={@UniqueConstraint(name="search_idx", columns={"username"})})
 **/
class User
{
     /** 
     * @Id @Column(type="integer") 
     * @GeneratedValue 
     * @var int
     */
    protected $id;
    /** 
    * @Column(type="string") 
    * @var string
    */
    protected $username;
    /** 
    * @Column(type="string") 
    * @var string
    */
    protected $password;
    /** 
    * @Column(type="string") 
    * @var string
    */
    protected $salt;


    public function getId()
    {
        return $this->id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function getSalt()
    {
        return $this->salt;
    }

    public function setSalt($salt)
    {
        $this->salt = $salt;
    }
}