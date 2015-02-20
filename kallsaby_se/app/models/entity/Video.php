<?php
// app/models/entity/Videos.php
/**
 * @Entity @Table(name="videos", uniqueConstraints={@UniqueConstraint(name="search_idx", columns={"videopath"})})
 **/
class Video
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
}