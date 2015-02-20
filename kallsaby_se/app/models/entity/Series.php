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
}