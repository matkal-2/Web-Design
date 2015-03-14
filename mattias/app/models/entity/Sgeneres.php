<?php
// app/models/entity/Mgeneres.php
/**
 * @Entity @Table(name="sgeneres")
 **/
class Sgenere
{   
    /**
     * @ManyToOne(targetEntity="Series")
     * @JoinColumn(name="series_id", referencedColumnName="id")
     **/
    private $series;
     /** 
     * @Id @Column(type="integer")
     * @var int
     */
    protected $series_id;
    /** 
    * @Id @Column(type="string")
    * @var string
    */
    protected $sgenere;
    
    


    public function setSeries(Series $series){
        $this->user = $series;
    }
    public function getSeriesid()
    {
        return $this->series_id;
    }

    public function getSeriesgenere()
    {
        return $this->sgenere;
    }

    public function setSeriesgenere($sgenere)
    {
        $this->sgenere = $sgenere;
    }
}