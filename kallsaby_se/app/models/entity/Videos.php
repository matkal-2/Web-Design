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
    protected $videoname;
    /** 
    * @Column(type="string") 
    * @var string
    */
    protected $videopath;
    


    public function getId()
    {
        return $this->id;
    }

    public function getVideoname()
    {
        return $this->videoname;
    }

    public function setVideoname($videoname)
    {
        $this->videoname = $videoname;
    }

    public function getVideopath()
    {
        return $this->videopath;
    }

    public function setVideopath($videopath)
    {
        $this->videopath = $videopath;
    }
}