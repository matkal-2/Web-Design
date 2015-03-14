<?php
// app/models/entity/Post.php
/**
 * @Entity @Table(name="posts")
 **/
class Posts
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
    protected $title;
    /** 
    * @Column(type="string") 
    * @var string
    */
    protected $imgpath;
    /** 
    * @Column(type="string") 
    * @var string
    */
    protected $content;
    
    


    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getImgpath()
    {
        return $this->imgpath;
    }

    public function setImgpath($imgpath)
    {
        $this->imgpath = $imgpath;
    }
    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content){
        $this->content = $content;
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