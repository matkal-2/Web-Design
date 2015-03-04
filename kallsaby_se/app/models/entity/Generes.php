<?php
// app/models/entity/Generes.php
/**
 * @Entity @Table(name="generes")
 **/
class Genere
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
    protected $genere;
    
    


    
    public function getId()
    {
        return $this->id;
    }

    public function getGenere()
    {
        return $this->genere;
    }

    public function setGenere($genere)
    {
        $this->genere = $genere;
    }
}