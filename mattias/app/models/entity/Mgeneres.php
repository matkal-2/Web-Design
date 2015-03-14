<?php
// app/models/entity/Mgeneres.php
/**
 * @Entity @Table(name="mgeneres")
 **/
class Mgenere
{   
    /**
     * @ManyToOne(targetEntity="Movie")
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
     * @ManyToOne(targetEntity="Genere")
     * @JoinColumn(name="genere_id", referencedColumnName="id")
     **/
    private $genere;
     /** 
     * @Column(type="integer")     
     * @GeneratedValue 
     * @var int
     */
    protected $genere_id;
    
    


    public function setMovie(Movie $movie){
        $this->user = $movie;
    }
    public function getMovieid()
    {
        return $this->movie_id;
    }
    public function setGenere(Genere $genere){
        $this->genere = $genere;
    }
    public function getGenereid()
    {
        return $this->genere_id;
    }
}