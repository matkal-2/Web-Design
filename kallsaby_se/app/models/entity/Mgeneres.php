<?php
// app/models/entity/Mgeneres.php
/**
 * @Entity @Table(name="mgeneres")
 **/
class Mgenere
{   
    /**
     * @OneToOne(targetEntity="Movie")
     * @JoinColumn(name="movie_id", referencedColumnName="id")
     **/
    private $movie;
     /** 
     * @Id @Column(type="integer") 
     * @GeneratedValue 
     * @var int
     */
    protected $movie_id;
    /** 
    * @Id @Column(type="string")
    * @var string
    */
    protected $mgenere;
    
    


    public function setMovie(Movie $movie){
        $this->user = $movie;
    }
    public function getMovieid()
    {
        return $this->movie_id;
    }

    public function getMoviegenere()
    {
        return $this->mgenere;
    }

    public function setMoviegenere($mgenere)
    {
        $this->mgenere = $mgenere;
    }
}