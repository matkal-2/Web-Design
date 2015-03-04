<?php
// app/models/entity/Seriess.php
/**
 * @Entity @Table(name="series", uniqueConstraints={@UniqueConstraint(name="search_idx", columns={"seriespath"})})
 **/
class Series
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
    protected $seriespath;
    /** 
    * @Column(type="string") 
    * @var string
    */
    protected $privacy;
    
    


    public function getId()
    {
        return $this->id;
    }

    public function getSeriesname()
    {
        return $this->name;
    }

    public function setSeriesname($name)
    {
        $this->name = $name;
    }

    public function getSeriespath()
    {
        return $this->seriespath;
    }

    public function setSeriespath($seriespath)
    {
        $this->seriespath = $seriespath;
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