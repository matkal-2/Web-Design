<?php
// app/models/entity/Movies.php
/**
 * @Entity @Table(name="movies", uniqueConstraints={@UniqueConstraint(name="search_idx", columns={"moviepath"})})
 **/
class Movie
{
    /**
     * @ManyToOne(targetEntity="User")
     * @JoinColumn(name="user_id", referencedColumnName="id")
     **/
    private $user;
    /** 
     * @Column(type="integer") 
     * @GeneratedValue 
     * @var int
     */
    protected $user_id;
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
    protected $name;
    /** 
    * @Column(type="string") 
    * @var string
    */
    protected $moviepath;
    /** 
    * @Column(type="string") 
    * @var string
    */
    protected $privacy;
    
    


    public function getId()
    {
        return $this->id;
    }

    public function getMoviename()
    {
        return $this->name;
    }

    public function setMoviename($name)
    {
        $this->name = $name;
    }

    public function getMoviepath()
    {
        return $this->moviepath;
    }

    public function setMoviepath($moviepath)
    {
        $this->moviepath = $moviepath;
    }
    public function getPrivacy()
    {
        return $this->privacy;
    }

    public function setPrivacy($privacy){
        $this->privacy = $privacy;
    }
    public function getUserid()
    {
        return $this->user_id;
    }
    public function setUserid($user_id)
    {
        $this->user_id = $user_id;
    }
    public function setUser(User $user){
        $this->user = $user;
    }
}