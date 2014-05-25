<?php
namespace RideSocial\Bundle\EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="driver")
 * @ORM\Entity(repositoryClass="RideSocial\Bundle\EventBundle\Repository\ORM\DriverRepository")
 */
class Driver extends RideSocial\Component\Event\Model\Driver
{
    use RideSocial\Bundle\CoreBundle\Traits\ORM\SluggableTrait;
    use RideSocial\Bundle\CoreBundle\Traits\ORM\TimestampableTrait;
    use RideSocial\Bundle\EventBundle\Traits\ORM\HasPassengersTrait;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
    */
    protected $id;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @{inheritdoc}
     * @ORM\ManyToOne(targetEntity="RideSocial\VehicleBundle\Entity\Vehicle", inversedBy="driver")
     * @ORM\JoinColumn(name="vehicle_id", referencedColumnName="id") 
     */
    protected $vehicle;

    /**
     * @{inheritdoc}
     */
    public function getVehicle()
    {
        return parent::getVehicle();
    }

    /**
     * @{inheritdoc}
     */
    public function setVehicle(RideSocial\Bundle\VehicleBundle\Entity\Vehicle $vehicle)
    {
        return parent::setVehicle($vehicle);
    }

    /**
     * @{inheritdoc}
     * @ORM\ManyToOne(targetEntity="RideSocial\EventBundle\Entity\Event", inversedBy="driver")
     * @ORM\JoinColumn(name="event_id", referencedColumnName="id") 
     */
    protected $event;

    /**
     * @{inheritdoc}
     */
    public function getEvent()
    {
        return parent::getEvent();
    }

    /**
     * @{inheritdoc}
     */
    public function setEvent(RideSocial\Bundle\EventBundle\Entity\Event $event)
    {
        return parent::setEvent($event);
    }

    /**
     * @{inheritdoc}
     * @ORM\OneToMany(targetEntity="RideSocial\Bundle\EventBundle\Entity\Passenger", mappedBy="passenger")
     */
    protected $passengers;

    /**
    * @{inheritdoc}
    * @ORM\Column(name="reserved_seats", type="integer", nullable=true) 
    */
    protected $reserved_seats = 1; //driver

    /**
     * @{inheritdoc}
     */
    public function setReservedSeats($seats = 1)
    {
        return parent::setReservedSeats($seats);
    }

    /**
     * @{inheritdoc}
     */
    public function getReservedSeats()
    {
        return parent::getReservedSeats();
    }

    /**
    * @{inheritdoc}
    * @ORM\ManyToOne(targetEntity="RideSocial\UserBundle\Entity\User", inversedBy="users")
    * @ORM\JoinColumn(name="user_id", referencedColumnName="id")  
    */
    protected $user;

    /**
     * @{inheritdoc}
     */
    public function getUser()
    {
        return parent::getUser();
    }

    /**
     * @{inheritdoc}
     */
    public function setUser(RideSocial\Bundle\UserBundle\Entity\User $user)
    {
        return parent::setUser($user);
    }
}
