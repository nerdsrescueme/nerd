<?php

namespace CMS\Entity;

/**
 * City entity
 * 
 * @Entity(readOnly=true)
 * @Table(name="nerd_cities")
 * 
 * @package NerdCMS
 * @subpackage Entities
 */
class City
{
    /**
	 * @Id
	 * @Column(type="integer", scale=5, nullable=false)
     *
     * @var integer
	 */
	protected $zip;

    /**
     * @Column(type="string", length=50, nullable=false)
     * 
     * @var string
     */
    protected $city;

    /**
     * @ManyToOne(targetEntity="State", inversedBy="cities")
     * @JoinColumn(name="state", referencedColumnName="code")
     * 
     * @var State
     */
    protected $state;

    /**
     * @Column(type="string", length=50, nullable=false)
     * 
     * @var string
     */
    protected $county;

    /**
     * @Column(type="float", nullable=false)
     * 
     * @var float
     */
    protected $latitude;

    /**
     * @Column(type="float", nullable=false)
     * 
     * @var float
     */
    protected $longitude;

    /**
     * Returns entity zip code
     * 
     * Will return a string value if zip begins with "0". It does this so PHP
     * does not interpret it as an octal number.
     * 
     * @return integer|string
     */
    public function getZip()
    {
        $zip = (string) $this->zip;

        return isset($zip{5}) ? $this->zip : str_pad($this->zip, 5, '0', STR_PAD_LEFT);
    }

    /**
     * Set entity zip code
     * 
     * When set/getting a zip code with a leading 0, please quote the string.
     * This must be done in order to prevent PHP from interpreting the integer 
     * as an octal number (ie. 08093 should be "08093")
     * 
     * @param integer|string $zip Zip code
     * @return void
     */
    public function setZip($zip)
    {
        $this->zip = (int) $zip;
    }

    /**
     * Returns entity city name
     * 
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set entity city name
     * 
     * @param string $city City
     * @return void
     */
    public function setCity($city)
    {
        $this->city = (string) $city;
    }

    /**
     * Returns entity state association
     * 
     * @return State
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set entity state association
     * 
     * @param State $state Related state entity
     * @return void
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * Returns entity county
     * 
     * @return string
     */
    public function getCounty()
    {
        return $this->county;
    }

    /**
     * Set entity county
     * 
     * @param string $county Entity county
     * @return void
     */
    public function setCounty($county)
    {
        $this->county = (string) $county;
    }

    /**
     * Returns entity latitude coordinate
     * 
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Returns entity latitude coordinate in radians
     * 
     * @return float
     */
    public function getRadianLatitude()
    {
        return deg2rad($this->latitude);
    }

    /**
     * Set entity latitude coordinate
     * 
     * @param float $latitude Entity latitude
     * @return void
     */
    public function setLatitude($latitude)
    {
        $this->latitude = (float) $latitude;
    }

    /**
     * Returns entity longitude coordinate
     * 
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Returns entity longitude coordinate in radians
     * 
     * @return float
     */
    public function getRadianLongitude()
    {
        return deg2rad($this->longitude);
    }

    /**
     * Set entity longitude coordinate
     * 
     * @param float $longitude Entity longitude
     * @return void
     */
    public function setLongitude($longitude)
    {
        $this->longitude = (float) $longitude;
    }

    /**
     * Returns entity coordinates as an array
     * 
     * <code>
     *     [46.321104, -75.2234411] // Non-assoc
     *     [latitude => 46.321104, longitude => -75.2234411] // Assoc
     * </code>
     * 
     * @param boolean $assoc Return an associative array if true
     * @return array
     */
    public function getCoordinates($assoc = true)
    {
        return $assoc
            ? ['latitude' => $this->getLatitude(), 'longitude' => $this->getLongitude()]
            : [$this->getLatitude(), $this->getLongitude()];
    }
}