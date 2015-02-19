<?php
// app/models/entity/Seriess.php
/**
 * @Entity @Table(name="series", uniqueConstraints={@UniqueConstraint(name="search_idx", columns={"seriespath"})})
 **/
class Series
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
    protected $seriesname;
    /** 
    * @Column(type="string") 
    * @var string
    */
    protected $seriespath;
    


    public function getId()
    {
        return $this->id;
    }

    public function getSeriesname()
    {
        return $this->seriesname;
    }

    public function setSeriesname($seriesname)
    {
        $this->seriesname = $seriesname;
    }

    public function getSeriespath()
    {
        return $this->seriespath;
    }

    public function setSeriespath($seriespath)
    {
        $this->seriespath = $seriespath;
    }
}