<?php
namespace RideSocial\Bundle\EventBundle\Entity;

use \RideSocial\Bundle\CoreBundle\Traits\ORM\TimestampableTrait;
use \RideSocial\Bundle\CoreBundle\Traits\ORM\SluggableTrait;

class Passenger
{
    use TimestampableTrait;
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
     * Driver
     * @var \RideSocial\Bundle\EventBundle\Entity\Driver
     */
    protected $driver;
    
    /**
     * Confirmed
     * @var boolean
     */
    protected $confirmed;

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
     * @return \RideSocial\Bundle\EventBundle\Entity\Passenger
     */
    public function setName($name)
    {
        $this->name = $name;
        
        return $this;
    }
    
    /**
     * Is confirmed
     * @param boolean|null $confirmed
     * @return \RideSocial\Bundle\EventBundle\Entity\Passenger|boolean
     */
    public function isConfirmed($confirmed = null)
    {
        if (null !== $confirmed && is_bool($confirmed)) {
            $this->confirmed = $confirmed;
            
            return $this;
        }
        
        return (bool) $this->confirmed;
    }
    
    /**
     * Get user
     * @return type\RideSocial\Bundle\USerBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
    
    /**
     * Set user
     * @param \RideSocial\Bundle\UserBundle\Entity\User $user
     * @return \RideSocial\Bundle\EventBundle\Entity\Passenger
     */
    public function setUser(\RideSocial\Bundle\UserBundle\Entity\User $user)
    {
        $this->user = $user;
        
        return $this;
    }
    
    /**
     * Get driver
     * @return \RideSocial\Bundle\EventBundle\Entity\Driver
     */
    public function getDriver()
    {
        return $this->driver;
    }
    
    /**
     * Set driver
     * @param \RideSocial\Bundle\EventBundle\Entity\Driver $driver
     * @return \RideSocial\Bundle\EventBundle\Entity\Passenger
     */
    public function setDriver(\RideSocial\Bundle\EventBundle\Entity\Driver $driver)
    {
        $this->driver = $driver;
        
        return $this;
    }
}
