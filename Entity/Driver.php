<?php
namespace RideSocial\Bundle\EventBundle\Entity;

use \RideSocial\Bundle\CoreBundle\Traits\ORM\TimestampableTrait;
use \RideSocial\Bundle\CoreBundle\Traits\ORM\BlameableTrait;
use \RideSocial\Bundle\CoreBundle\Traits\ORM\SluggableTrait;

class Driver
{
    use TimestampableTrait;
    use BlameableTrait;
    use SluggableTrait;
    
    /**
     * Id
     * @var integer
     */
    protected $id;
    
    /**
     * User
     * @var \RideSocial\Bundle\USerBundle\Entity\User
     */
    protected $user;
    
    /**
     * Event
     * @var \RideSocial\Bundle\EventBundle\Entity\Event
     */
    protected $event;
    
    /**
     * Vehicle
     * @var \RideSocial\Bundle\VehicleBundle\Entity\UserVehicle
     */
    protected $vehicle;
    
    /**
     * Reserved seats
     * @var integer
     */
    protected $reservedSeats;
    
    /**
     * Passengers
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    protected $passengers;

    /**
     * Construct
     */
    public function __construct()
    {
        $this->reservedSeats = 1;
        $this->passengers = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get id
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * Get name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * Set name
     * @param string $name
     * @return \RideSocial\Bundle\EventBundle\Entity\Driver
     */
    public function setName($name)
    {
        $this->name = $name;
        
        return $this;
    }
    
    /**
     * Get passengers
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getPassengers()
    {
        return $this->passengers;
    }
    
    /**
     * Get passenger
     * @param string $passenger
     * @return \RideSocial\Bundle\EventBundle\Entity\Passenger
     */
    public function getPassenger($passenger)
    {
        return $this->passengers->get($passenger);
    }
    
    /**
     * Hass passengers
     * @return boolean
     */
    public function hasPassengers()
    {
        return (0 > count($this->passengers));
    }
    
    /**
     * Has passenger
     * @param string $passenger
     * @return boolean
     */
    public function hasPassenger($passenger)
    {
        return $this->passengers->contains($passenger);
    }
    
    /**
     * Set passengers
     * @param array $passengers
     * @return \RideSocial\Bundle\EventBundle\Entity\Driver
     */
    public function setPassengers(array $passengers)
    {
        if (!$passengers instanceof \Doctrine\Common\Collections\ArrayCollection) {
            $passengers = new \Doctrine\Common\Collections\ArrayCollection($passengers);
        }
        
        $this->passengers = $passengers;
        
        return $this;
    }
    
    /**
     * Add passenger
     * @param \RideSocial\Bundle\EventBundle\Entity\Passenger $passenger
     * @return \RideSocial\Bundle\EventBundle\Entity\Driver
     */
    public function addPassenger(\RideSocial\Bundle\EventBundle\Entity\Passenger $passenger)
    {
        $this->passengers->add($passenger);
        
        return $this;
    }
}
