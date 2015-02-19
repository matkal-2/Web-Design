<?php
// app/models/entity/Movies.php
/**
 * @Entity @Table(name="movies", uniqueConstraints={@UniqueConstraint(name="search_idx", columns={"moviepath"})})
 **/
class Movie
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
    protected $moviename;
    /** 
    * @Column(type="string") 
    * @var string
    */
    protected $moviepath;
    


    public function getId()
    {
        return $this->id;
    }

    public function getMoviename()
    {
        return $this->moviename;
    }

    public function setMoviename($moviename)
    {
        $this->moviename = $moviename;
    }

    public function getMoviepath()
    {
        return $this->moviepath;
    }

    public function setMoviepath($moviepath)
    {
        $this->moviepath = $moviepath;
    }
}