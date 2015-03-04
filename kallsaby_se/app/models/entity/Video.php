<?php
// app/models/entity/Videos.php
/**
 * @Entity @Table(name="videos", uniqueConstraints={@UniqueConstraint(name="search_idx", columns={"videopath"})})
 **/
class Video
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
     * @Column(type="integer") 
     * @GeneratedValue 
     * @var int
     */
    protected $id;
    /** 
    * @Id @Column(type="string") 
    * @var string
    */
    protected $name;
    /** 
    * @Column(type="string") 
    * @var string
    */
    protected $videopath;
    /** 
    * @Column(type="string") 
    * @var string
    */
    protected $privacy;
    
    


    public function getId()
    {
        return $this->id;
    }

    public function getVideoname()
    {
        return $this->name;
    }

    public function setVideoname($name)
    {
        $this->name = $name;
    }

    public function getVideopath()
    {
        return $this->videopath;
    }

    public function setVideopath($videopath)
    {
        $this->videopath = $videopath;
    }
    public function getPrivacy()
    {
        return $this->privacy;
    }

    public function setPrivacy($privacy)
    {
        $this->privacy = $privacy;
    }
    public function setUser(User $user){
        $this->user = $user;
    }
    public function getUserid()
    {
        return $this->user_id;
    }
    public function setUserid($user_id)
    {
        $this->user_id = $user_id;
    }
}