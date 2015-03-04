<?php
// app/models/entity/Userdetails.php
/**
 * @Entity @Table(name="userdetails", uniqueConstraints={@UniqueConstraint(name="search_idx", columns={"email"})})
 **/
class Userdetails
{
     /**
     * @OneToOne(targetEntity="User")
     * @JoinColumn(name="user_id", referencedColumnName="id")
     **/
    private $user;
     /** 
     * @Id @Column(type="integer") 
     * @GeneratedValue 
     * @var int
     */
    protected $user_id;
    /** 
    * @Column(type="string") 
    * @var string
    */
    protected $email;
    /** 
    * @Column(type="integer") 
    * @var int
    */
    protected $role;
    /** 
    * @Column(type="string") 
    * @var string
    */
    protected $color_theme;

    public function setUser(User $user){
        $this->user = $user;
    }
    public function getUserid()
    {
        return $this->user_id;
    }
    
    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role)
    {
        $this->role = $role;
    }

    public function getColortheme()
    {
        return $this->color_theme;
    }

    public function setColortheme($color_theme)
    {
        $this->color_theme = $color_theme;
    }
}