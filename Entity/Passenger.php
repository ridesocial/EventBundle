<?php
namespace RideSocial\Bundle\EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="passenger")
 * @ORM\Entity(repositoryClass="RideSocial\Bundle\EventBundle\Repository\ORM\PassengerRepository")
 */
class Passenger extends RideSocial\Component\Event\Model\Passenger
{
    use RideSocial\Bundle\CoreBundle\Traits\ORM\SluggableTrait;
    use RideSocial\Bundle\CoreBundle\Traits\ORM\TimestampableTrait;
    
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
     * @ORM\ManyToOne(targetEntity="RideSocial\Bundle\UserBundle\Entity\User", inversedBy="passenger")
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

    /**
     * @{inheritdoc}
     * @ORM\ManyToOne(targetEntity="RideSocial\Bundle\EventBundle\Entity\Driver", inversedBy="passenger")
     * @ORM\JoinColumn(name="driver_id", referencedColumnName="id")  
    */
    protected $driver;

    /**
     * @{inheritdoc}
     */
    public function getDriver()
    {
        return parent::getDriver();
    }

    /**
     * @{inheritdoc}
     */
    public function setDriver(RideSocial\Bundle\EventBundle\Entity\Driver $driver)
    {
        return parent::setDriver($driver);
    }    

    /**
     * @{inheritdoc}
     */
    protected $confirmed;

    /**
     * @{inheritdoc}
     */
    public function isConfirmed($confirmed = null)
    {
        return parent::isConfirmed($confirmed);
    }

    /**
     * Set confirmed
     * @param boolean $confirmed
     */
    private function setConfirmed(boolean $confirmed)
    {
        /** 
         * @todo  make sure only admin || event->driver have access!
         */
        $this->confirmed = $confirmed;

        return $this;
    }
}
