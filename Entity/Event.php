<?php
namespace RideSocial\Bundle\EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="event")
 * @ORM\Entity(repositoryClass="RideSocial\Bundle\EventBundle\Repository\ORM\EventRepository")
 */
class Event extends RideSocial\Component\Event\Model\Event
{
    use RideSocial\Bundle\CoreBundle\Traits\ORM\SluggableTrait;
    use RideSocial\Bundle\CoreBundle\Traits\ORM\BlameableTrait;
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
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @{inheritdoc}
     * @ORM\Column(name="name", type="string", length=150)
     * @Assert\NotBlank()
     */
    protected $name;

    /**
     * @{inheritdoc}
     */
    public function getName()
    {
        return parent::getName();
    }

    /**
     * @{inheritdoc}
     */
    public function setName($name)
    {
        return parent::setName($name);
    }

    /**
     * @{inheritdoc}
     * @ORM\ManyToOne(targetEntity="RideSocial\Bundle\LocationBundle\Entity\Venue", inversedBy="event")
     * @ORM\JoinColumn(name="venue_id", referencedColumnName="id")
     */
    protected $venue = '';

    /**
     * @{inheritdoc}
     */
    public function getVenue()
    {
        return parent::getVenue();
    }

    /**
     * @{inheritdoc}
     */
    public function setVenue($venue)
    {
        return parent::setVenue($venue);
    }

    /**
     * @{inheritdoc}
     * @ORM\Column(name="start", type="datetime")
     */
    protected $start;

    /**
     * @{inheritdoc}
     */
    public function getStart()
    {
        return parent::getStart();
    }

    /**
     * @{inheritdoc}
     */
    public function setStart(\DateTime $start)
    {
        return parent::setStart($start);
    }

    /**
     * @{inheritdoc}
     * @ORM\Column(name="end", type="datetime")
     */
    protected $end;

    /**
     * @{inheritdoc}
     */
    public function getEnd()
    {
        return parent::getEnd();
    }

    /**
     * @{inheritdoc}
     */
    public function setEnd(\DateTime $end)
    {
        return parent::setEnd($end);
    }

    /**
     * @{inheritdoc}
     * @ORM\Column(name="fee", type="decimal")
     */
    protected $fee="0.00";

    /**
     * @{inheritdoc}
     */
    public function getFee()
    {
        return parent::getFee();
    }

    /**
     * @{inheritdoc}
     */
    public function setFee($fee)
    {
        return parent::setFee($fee);
    }

    /**
     * @{inheritdoc}
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    protected $description;

    /**
     * @{inheritdoc}
     */
    public function getDescription()
    {
        return parent::getDescription();
    }

    /**
     * @{inheritdoc}
     */
    public function setDescription($description)
    {
        return parent::setDescription($description);
    }

    /**
     * @{inheritdoc}
     * @ORM\Column(name="flyer", type="text", nullable=true)
     */
    protected $flyer;

    /**
     * @{inheritdoc}
     */
    public function getFlyer()
    {
        return parent::getFlyer();
    }

    /**
     * @{inheritdoc}
     */
    public function setFlyer($flyer)
    {
        return parent::setFlyer($flyer);
    }
}
