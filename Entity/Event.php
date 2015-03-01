<?php
namespace RideSocial\Bundle\EventBundle\Entity;

use \RideSocial\Bundle\CoreBundle\Traits\ORM\TimestampableTrait;
use \RideSocial\Bundle\CoreBundle\Traits\ORM\BlameableTrait;
use \RideSocial\Bundle\CoreBundle\Traits\ORM\SluggableTrait;

class Event
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
     * Name
     * @var string
     */
    protected $name;
    
    /**
     * Description
     * @var string
     */
    protected $description;
    
    /**
     * Start
     * @var \DateTime
     */
    protected $start;
    
    /**
     * End
     * @var \DateTime
     */
    protected $end;
    
    /**
     * Fee
     * @var float
     */
    protected $fee;
    
    /**
     * Flyer
     * @var string
     */
    protected $flyer;
    
    /**
     * Venue
     * @var \RideSocial\Bundle\LocationBundle\Entity\Venue
     */
    protected $venue;
    
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
     * @return \RideSocial\Bundle\EventBundle\Entity\Event
     */
    public function setName($name)
    {
        $this->name = $name;
        
        return $this;
    }
    
    /**
     * Get description
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * Set description
     * @param string $description
     * @return \RideSocial\Bundle\EventBundle\Entity\Event
     */
    public function setDescription($description)
    {
        $this->description = $description;
        
        return $this;
    }
    
    /**
     * Get start
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->start;
    }
    
    /**
     * Set start
     * @param \DateTime $start
     * @return \RideSocial\Bundle\EventBundle\Entity\Event
     */
    public function setStart(\DateTime $start)
    {
        $this->start = $start;
        
        return $this;
    }
    
    /**
     * Get end
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->end;
    }
    
    /**
     * Set end
     * @param \DateTime $end
     * @return \RideSocial\Bundle\EventBundle\Entity\Event
     */
    public function setEnd(\DateTime $end)
    {
        $this->end = $end;
        
        return $this;
    }
    
    /**
     * Get fee
     * @return float
     */
    public function getFee()
    {
        return $this->fee;
    }
    
    /**
     * Set fee
     * @param float $fee
     * @return \RideSocial\Bundle\EventBundle\Entity\Event
     */
    public function setFee($fee)
    {
        $this->fee = $fee;
        
        return $this;
    }
    
    /**
     * Get flyer
     * @return string
     */
    public function getFlyer()
    {
        return $this->flyer;
    }
    
    /**
     * Set flyer
     * @param string $flyer
     * @return \RideSocial\Bundle\EventBundle\Entity\Event
     */
    public function setFlyer($flyer)
    {
        $this->flyer = $flyer;
        
        return $this;
    }
    
    /**
     * Get venue
     * @return \RideSocial\Bundle\LocationBundle\Entity\Venue
     */
    public function getVenue()
    {
        return $this->venue;
    }
    
    /**
     * Set venue
     * @param \RideSocial\Bundle\LocationBundle\Entity\Venue $venue
     * @return \RideSocial\Bundle\EventBundle\Entity\Event
     */
    public function setVenue(\RideSocial\Bundle\LocationBundle\Entity\Venue $venue)
    {
        $this->venue = $venue;
        
        return $this;
    }
}
